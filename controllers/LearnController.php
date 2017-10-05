<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\learn4dev\controllers;

use yii\helpers\Url;
use humhub\components\Controller;

/**
 * HomeController redirects to the home page
 *
 * @author luke
 * @since 1.2
 */
class LearnController extends Controller
{

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        return $this->render('@humhub/modules/learn4dev/views/learn/index', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionCourses()
    {
        return $this->render('@humhub/modules/learn4dev/views/learn/courses', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionPublications()
    {
        return $this->render('@humhub/modules/learn4dev/views/learn/publications', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionToolbox()
    {
        return $this->render('@humhub/modules/learn4dev/views/learn/toolbox', [
        ]);
    }

}
