<?php

namespace App\Http\Controllers;

use App\Page;
use Cron\FieldInterface;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index($page_name, $lan = null){
        if ($lan) Page::$language = $lan ;
        $page = Page::where('caption', $page_name)->first();
        return $page->render();
    }
}
