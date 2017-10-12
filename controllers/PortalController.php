<?php

/**
 * @link https://www.humhub.org/
 * @copyright Copyright (c) 2017 HumHub GmbH & Co. KG
 * @license https://www.humhub.com/licences
 */

namespace humhub\modules\learn4dev\controllers;


use humhub\components\Controller;
use humhub\modules\learn4dev\models\Portal;

/**
 * HomeController redirects to the home page
 *
 * @author luke
 * @since 1.2
 */
class PortalController extends Controller
{

    /**
     * Redirects to the learn index
     *
     * @return \yii\web\Response
     */
    public function actionIndex()
    {
        
        $model = new Portal();

        return $this->render('@humhub/modules/learn4dev/views/portal/index', [
                    
                    'model'=>$model,
        ]);
    }

}
