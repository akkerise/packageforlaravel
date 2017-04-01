<?php
/**
 * Created by PhpStorm.
 * User: akke
 * Date: 28/03/2017
 * Time: 16:43
 */

namespace App\Repositories\Contracts;


interface ProductRepositoryInterface
{
    public function all();
    public function find($id);
}