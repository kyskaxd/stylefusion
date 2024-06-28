<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function addCategory(Request $request)
    {
        $data = $request->all();
        DB::table('categories')->insert([
            'name_category' => $data['name_category']
        ]);


        return redirect(url()->previous())->with(['msgForCategory' => 'Категория добавлена']);
    }
    public function admin()
    {
        
            $categories = DB::table('categories')->get();
            $products = DB::table('products')->get();
            return view("admin", ['categories' => $categories, 'products' => $products]);
        
    }
    public function addProduct(Request $request)
    {

        $img = $request->file('image'); // получили картинку
        $typeImg = $img->extension(); // взяли расширение


        $uniqName = Str::random(); // уникальное название для нашего файла в файловой системе
        $nameImg = $uniqName . '.' . $typeImg; // соединили название и расширение
        $pathFolder = 'assets/img/products/'; // указали куда будем сохранять файлы в public

        $img->move(public_path($pathFolder), $nameImg);// сохраняем картинку в public/assets/img/products

        DB::table('products')->insert([
            'id_category' => $request->id_category,
            'name_product' => $request->name_product,
            'model_product' => $request->model_product,
            'count_product' => $request->count_product,
            'path_product' => $pathFolder . $nameImg
        ]);

        return redirect(url()->previous())->with(['msgForProduct' => 'Товар успешно добавлен']);
    }
    public function AllProduct()
    {
        $products = DB::table('products')
            ->where('count_product', '>', 0)
            ->orderByDesc('id')
            ->get();
        return view("search", [
            'products' => $products,
        ]);
    }
    public function delProduct(Request $request)
    {
        $id = $request->id;
        $checkProduct = DB::table('products')
            ->where('id', $id)
            ->first();


        DB::table('products')->where('id', $id)->delete();

        return redirect(url()->previous())->with(['msgForProduct' => 'Продукт удален']);
    }
    public function product($id)
    {


        $products = DB::select("SELECT * FROM products WHERE id = ?;", [$id]);


        return view("product", [
            'product' => $products[0],
        ]);
    }
}
