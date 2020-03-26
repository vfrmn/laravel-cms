<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public static $language;


    public function __get($key)
    {

        if (isset($this->attributes[$key])) {
            return $this->attributes[$key];
        } else {
            return $this->attributes[$key . '_' . Page::$language];
        }
    }

    public function render()
    {


         echo view($this->caption, ['page' => $this]);
    }

}
