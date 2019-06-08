<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Tag;
use App\Category;
use Session;
use Purifier;
use Image;
class ProductControllers extends Controller
{


    public function getIndex()
    {
        return view('product.index');
    }
    public function productSingle()
    {
    return view('product.single');
    }
}
?>