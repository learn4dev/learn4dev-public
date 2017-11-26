<?php

namespace humhub\modules\learn4dev\components;

use yii\helpers\Inflector;
use humhub\modules\gallery\models\BaseGallery as Gallery;
use humhub\modules\gallery\models\Media;

class StaticModel extends \yii\base\Model
{

    public $content = [];
    public $defaultImagePath = '@theme/img/';
    protected $_caller;
    protected $_path;
    protected $_reserved = ['id', 'container'];
    private $_attributesEnabled = [];
    private $_defaultImagePath = '';

    public function init()
    {
        parent::init();
        $reflect = new \ReflectionClass($this);
        $this->_caller = strtolower($reflect->getShortName());
        $this->populateFileContent();
        $this->processContent();
    }

    protected function populateFileContent()
    {
        $importDirPath = str_replace('components', 'static', __DIR__) . '/' . $this->_caller;
        if (is_dir($importDirPath)) {
            if ($dh = opendir($importDirPath)) {
                while (($file = readdir($dh)) !== false) {
                    if (substr($file, 0, 1) != '.') {
                        $path = $importDirPath . '/' . $file;
                        $data = include_once $path;
                        $this->content[lcfirst(Inflector::camelize(str_replace('.php', '', $file)))] = $data;
                    }
                }
                closedir($dh);
            }
        }
    }

    protected function processContent()
    {
        foreach ($this->content as &$content) {
            $proc = '_process' . ucfirst($content['container']);
            $id = $content['id'];
            unset($content['container']);
            unset($content['id']);
            $this->$proc($id, $content);
        }
    }

    private function _processGallery($id, &$content)
    {
        $this->_attributesEnabled = array_keys(array_values($content)[0]);
        $this->_defaultImagePath = $this->defaultImagePath . $this->_caller . '/';
        $media = $this->_processGalleryContent($id);
        $this->processGallery($content, $media);
    }

    private function _processGalleryContent($id)
    {
        $out = [];
        //Get a hidden gallery
        $gallery = Gallery::findOne(['title' => '_' . $id]);
        $media = null;
        if (isset($gallery)) {
            $media = Media::findAll(['gallery_id' => $gallery->id]);
        }
        if (isset($media)) {
            foreach ($media as $mediaItem) {
                $id = substr($mediaItem->title, 0, strpos($mediaItem->title, '.'));
                $out[$id] = $mediaItem;
            }
        }
        return $out;
    }

    protected function processGallery(&$content, &$media)
    {

        $touched = [];

        foreach ($media as $key => $mediaItem) {
            //Thumbnail removed through interface override
            if (substr($key, 0, 1) == '!') {
                if (isset($content[substr($key, 1)])) {
                    unset($content[substr($key, 1)]);
                }
                continue;
            }
            //Thumbnail added through interface override
            if (!isset($content[$key])) {
                $content[$key] = $this->constructGalleryItem($key, $content, $mediaItem);
                $touched[] = $key;
            }
        }

        $untouched = array_diff(array_keys($content), $touched);

        foreach ($untouched as $key) {
            $content[$key] = $this->constructGalleryItem($key, $content);
        }

        $sort = function ($a, $b) {
            $posA = isset($a['position']) ? $a['position'] : 99999;
            $posB = isset($b['position']) ? $b['position'] : 99999;

            if ($posA == $posB) {
                return 0;
            }
            return ($posA < $posB) ? -1 : 1;
        };

        // Sort the multidimensional array
        usort($content, $sort);
    }

    protected function constructGalleryItem($key, $content, $mediaItem = null)
    {


        $out = isset($content[$key]) ? $content[$key] : [];

        //Thumbnail updated through interface override
        if (isset($mediaItem)) {
            $description = $mediaItem->description;
            $out = array_merge($out, $this->processEmbeddedAttributes($description));
            $out['description'] = $description;
        }

        if (!isset($out['image'])) {
            $out['image'] = isset($mediaItem) ? $mediaItem->getFileUrl() : $this->_defaultImagePath . $key . '.png';
        }

        return $out;
    }

    protected function ProcessGalleryItems($key, &$data, $media)
    {

        //Thumbnail updated through interface override
        if (isset($media) && isset($media[$key])) {

            $description = $media[$key]->description;
            $data[$key] = array_merge(isset($data[$key]) ? $data[$key] : [], $this->processEmbeddedAttributes($description));
            $data[$key]['description'] = $description;
        }

        if (!isset($data['image'])) {
            $data['image'] = isset($media) && isset($media[$key]) ? $media[$key]->getFileUrl() : $this->_defaultImagePath . $key . '.png';
        }
        return true;
    }

    protected function processGalleryDescription(&$data, $description, $var, $startPosition)
    {

        $terminator = '</' . $var . '>';
        $stopPosition = strpos($description, $terminator);
        $length = $stopPosition - $startPosition - strlen('<' . $var . '>');
        $data[$var] = substr($description, $startPosition + strlen($var) + 2, $length);
        return [$startPosition, $stopPosition];
    }

    protected function processEmbeddedAttributes(&$embeddedString)
    {
        $attributes = [];
        foreach ($this->_attributesEnabled as $attribute) {
            $embeddedTagOpen = '<' . $attribute . '>';
            $attributeStart = strpos($embeddedString, '<' . $attribute . '>');
            if ($attributeStart) {
                $embeddedTagClose = '</' . $attribute . '>';
                $attributeStop = strpos($embeddedString, $embeddedTagClose);
                $length = $attributeStop - $attributeStart - strlen('<' . $attribute . '>');
                $attributes[$attribute] = substr($embeddedString, $attributeStart + strlen($attribute) + 2, $length);
                $embeddedString = str_replace($embeddedTagOpen . $attributes[$attribute] . $embeddedTagClose, '', $embeddedString);
            }
        }
        var_dump($attributes);
        return $attributes;
    }

}
