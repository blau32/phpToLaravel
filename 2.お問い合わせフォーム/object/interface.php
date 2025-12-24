<?php

//interface
// メソッドの内容しか記載できない
interface ProductInterface
{
    // public function echoProduct(){
    //     echo '親クラスです';
    // }

    //抽象メソッド 必ず記載しなければならない
    public function getProduct();
}

interface NewsInterface
{
    public function getNews();
}

//具象クラス
class BaseProduct
{
    public function echoProduct()
    {
        echo '親クラスです';
    }

    //オーバーライド(上書き)
    //親クラスのメソッドを子クラスで上書きする
    public function getProduct()
    {
        echo '親の関数です';
    }
}

//子クラス
class Product implements ProductInterface, NewsInterface
{

    private $product = [];

    //初回に起動する関数
    //__construct(コンストラクタ)とはクラスがインスタンス化された時に自動で実行される関数
    function __construct($product)
    {
        $this->product = $product;
    }

    //抽象メソッドを必ず記載しなければならない
    public function getProduct()
    {
        echo $this->product;
    }

    public function addProduct($item)
    {
        $this->product .= $item;
    }


    public function getNews()
    {
        echo 'ニュースです';
    }

    //静的(static) クラス名::関数名
    public static function getStaticProduct($str)
    {
        echo $str;
    }
}

//インスタンス化
$instance = new Product('test:');
echo '<br>';

$instance->getProduct();
echo '<br>';


$instance->addProduct('product1');
echo '<br>';

$instance->getProduct();
echo '<br>';

$instance->getNews();
echo '<br>';


//静的(static) クラス名::関数名
//静的(static) はインスタンス化せずにクラス名::関数名で呼び出せる
Product::getStaticProduct('これは静的メソッド');
echo '<br>';

//final オーバーライドできない
//
final class FinalProduct extends Product
{
    public function getProduct()
    {
        echo '子クラスです';
    }
}
