<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\learn4dev\controllers;

use humhub\components\Controller;

/**
 * HomeController redirects to the home page
 *
 * @author luke
 * @since 1.2
 */
class LegalController extends Controller
{

    /**
     * Redirects to the terms and conditions page
     *
     * @return \yii\web\Response
     */
    public function actionTermsAndConditions()
    {

        return $this->render('@humhub/modules/learn4dev/views/legal/terms-and-conditions', [
        ]);
    }

    /**
     * Redirects to the cookies page
     *
     * @return \yii\web\Response
     */
    public function actionCookies()
    {

        return $this->render('@humhub/modules/learn4dev/views/legal/cookies', [
        ]);
    }

}
