<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductCategory;

class CatalogController extends Controller
{
    /**
     * Отображение страниц из таблицы page
     *
     * @param  int  $id
     * @return Response
     */
    public function route($category_slug, $product_slug = null)
    {
        $data = [];
        if ($category_slug)
            $category = ProductCategory::where('slug', $category_slug)->first();

        if ($category) {
            if ($product_slug) {
                $product = Product::where('category', $category->ID)
                    ->where('slug', $product_slug)
                    ->first();
                if ($product) {
                    $this->product_save($product);
                    return $this->product_view(['product' => $product]);
                }
            }
            return $this->category_view(['category' => $category]);
        }
        return abort(404);
    }
    public function category_view($data)
    {
        if (View::exists('category')) return view('category', $data);
    }
    public function product_view($data)
    {
        if (View::exists('product')) return view('product', $data);
    }
    public function product_save($product)
    {
        $prod = Product::find($product->ID);
        $prod->title = 'NewTitle';
        $update = $prod->update(['title' => 'UpdatedTitle']);
        $save = $prod->save();
        print_r([
            '$update' => $update,
            '$save' => $save,
            '$prod' => $prod
        ]);
    }
}