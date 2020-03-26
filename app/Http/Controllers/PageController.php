<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index($page_name, $lan = 'ua'){
        Page::$language = $lan ;
        $page = Page::where('caption', $page_name)->first();
        $page->render();

    }
}
