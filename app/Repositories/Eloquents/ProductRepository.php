<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 28/03/2017
 * Time: 15:47
 */
namespace App\Repositories\Eloquents;
use App\Repositories\Contracts\ProductRepositoryInterface;
use App\Product;

class ProductRepository implements ProductRepositoryInterface{

    public function all(){
        return Product::all();
    }

    public function find($id){
        return Product::find($id);
    }

}