<?php

namespace humhub\modules\learn4dev\components;

use yii\helpers\Inflector;

class StaticModel extends \yii\base\Model
{

    public $content = [];
    protected $_path;

    public function init()
    {
        parent::init();
        $this->populateDefaultContent();
        
    }

    protected function populateDefaultContent()
    {
        $reflect = new \ReflectionClass($this);
        $importDirPath = str_replace('components', 'static', __DIR__) . '/' . strtolower($reflect->getShortName());
        //echo $importDirPath;
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

}
