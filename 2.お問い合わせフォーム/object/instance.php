<?php

//クラス宣言
class Product{
    /*アクセス修飾子
    private(外からアクセスできない),
    protected(自分・継承したクラス),
    public(公開)
    */
    private $product = [];

    //初回に起動する関数
    //__construct(コンストラクタ)とはクラスがインスタンス化された時に自動で実行される関数
    function __construct($product){
        $this->product = $product;
    }

    public function getProduct(){
        echo $this->product;
    }

    public function addProduct($item){
        $this->product .= $item;
    }

    //静的(static) クラス名::関数名
    public static function getStaticProduct($str){
        echo $str;
    }

}

//インスタンス化
$instance = new Product('test');
echo '<br>';

$instance->getProduct();
echo '<br>';

$instance->addProduct('product1');
echo '<br>';

$instance->getProduct();
echo '<br>';

//静的(static) クラス名::関数名
//静的(static) はインスタンス化せずにクラス名::関数名で呼び出せる
Product::getStaticProduct('これは静的メソッド');
echo '<br>';


?>