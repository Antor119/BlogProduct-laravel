<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $user=User::with('productReview')->get();

        return $user;
    }

    public function index1(){
        $categore=Categorie::with('product')->get();

        return $categore;
    }

    public function index2(){
        $product=Product::with('productReview')->get();

        return $product;
    }

    public function index3(){
        $user=User::with('product')->get();

        return $user;
    }
}
