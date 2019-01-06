@extends('layouts.main')

@section('title', 'Front page')
@section('description', 'Front page description')

@section('body')
<div class="container">
    <?
    /*$products = App\Models\Product::all();
    foreach ($products as $product) {
        echo '<div>';
        echo $product->title;
        $product->discount = 15;
        $product->save();
        echo '</div>';
    }*/

    //$prod->title = 'testtest';
    //$prod->save();

    //$newprod = new App\Models\Product;

    //$newprod->title = 'New Product';
    //$newprod->save();
    //$products = Product::all();
    //print_r($products);

    /*use App\Includes\Product as Product;
    $productList = Product::getList();
    foreach($productList as $productData) {
        $product = new Product($productData);
        echo '<div>';
        echo '<h4>Товар</h4>';
        //print_r($product);
        echo 'ID: ' . $product->ID . ', title: ' . $product->title;
        echo '</div>';
    }*/
    ?>
</div>
@endsection
