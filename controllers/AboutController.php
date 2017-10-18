<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\learn4dev\controllers;

use humhub\components\Controller;
use humhub\modules\learn4dev\models\About;

/**
 * HomeController redirects to the home page
 *
 * @author luke
 * @since 1.2
 */
class AboutController extends Controller
{

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        $model = new About();
        return $this->render('@humhub/modules/learn4dev/views/about/index', [
                    'model' => $model
        ]);
    }

    /**
     * Redirects to the terms and conditions page
     *
     * @return \yii\web\Response
     */
    public function actionTermsAndConditions()
    {

        return $this->render('@humhub/modules/learn4dev/views/about/terms-and-conditions', [
        ]);
    }

    /**
     * Redirects to the cookies page
     *
     * @return \yii\web\Response
     */
    public function actionCookies()
    {

        return $this->render('@humhub/modules/learn4dev/views/about/cookies', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionCoreGroup()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/core-group', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionExpertGroups()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/expert-groups', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionFocalPoints()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/focal-points', [
        ]);
    }

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionAnnualMeeting()
    {
        return $this->render('@humhub/modules/learn4dev/views/about/annual-meeting', [
        ]);
    }

}
