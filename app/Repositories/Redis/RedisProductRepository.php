<?php

/**
 * Created by PhpStorm.
 * User: akke
 * Date: 28/03/2017
 * Time: 16:38
 */
namespace App\Repositories\Redis;
use App\Repositories\Contracts\ProductRepositoryInterface;

class RedisProductRepository implements ProductRepositoryInterface
{
    public function all(){
        return 'Get all product from Redis';
    }

    public function find($id){
        return 'Get single product by id : ' . $id;
    }
}