<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
class RbacController extends Controller
{

    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        // Create Permission
        $createProduct = $auth->createPermission('create-product');
        $createProduct->description = 'Create a product';
        $auth->add($createProduct);

        $indexProduct = $auth->createPermission('index-product');
        $indexProduct->description = 'View products';
        $auth->add($indexProduct);

        $updateProduct = $auth->createPermission('update-product');
        $updateProduct->description = 'Update product';
        $auth->add($updateProduct);

        $viewProduct = $auth->createPermission('view-product');
        $viewProduct->description = 'View product details';
        $auth->add($viewProduct);

        $deleteProduct = $auth->createPermission('delete-product');
        $deleteProduct->description = 'Delete products';
        $auth->add($deleteProduct);

        // Create Role
        $productManager = $auth->createRole('manager-product');
        $auth->add($productManager);

        // Add Child
        $auth->addChild($productManager, $indexProduct);
        $auth->addChild($productManager, $createProduct);
        $auth->addChild($productManager, $updateProduct);
        $auth->addChild($productManager, $viewProduct);
        $auth->addChild($productManager, $deleteProduct);

        // Assign
        $auth->assign($productManager, 1);
    }
} 

?>