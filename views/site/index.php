<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">

            <?php
            $products = \app\models\Product::find()->where(['price' => 10])->all();
//            print_r($products);
//            echo $products->name;
            foreach ($products as $product){
                echo  '
                <div class="col">
                <h2>'.$product->name.'</h2>

                <p>'.$product->description.'</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">'.$product->price.'</a></p>
            </div>
                ';
            }
            ?>


        </div>

    </div>
</div>
