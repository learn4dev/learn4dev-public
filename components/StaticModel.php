<?php

namespace humhub\modules\learn4dev\components;

use yii\helpers\Inflector;

class StaticModel extends \yii\base\Model
{

    public $defaultImagePath = '@theme/img/';
    public $content = [];
    protected $_caller;
    protected $_path;
    protected $_reserved = ['id', 'container'];

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
            $proc = 'process' . ucfirst($content['container']);
            unset($content['container']);
            unset($content['id']);
            $this->$proc($content);
        }
    }

    protected function processGallery(&$content)
    {

        $path = $this->defaultImagePath . $this->_caller . '/';
        foreach ($content as $key => &$data) {
            if (!isset($data['image'])) {
                $data['image'] = $path . $data['id'] . '.png';
            }
        }
    }

}
