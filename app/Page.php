<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['id', 'caption', 'title_ua', 'title_en', 'intro_ua', 'intro_en',
        'content_ua', 'content_en', 'parent_id',
        'order_num', 'order_type', 'container_type'];

    public static $language = 'ua';

    public function orderType()
    {
        return $this->belongsTo(OrderType::class, "order_type");
    }

    public function parent()
    {

        return $this->belongsTo(self::class);
    }

    public function children()
    {

        switch ($this->orderType->name) {
            case 'number_inc':
                return $this->hasMany(self::class, 'parent_id')->orderBy('order_num');
                break;
            case 'number_dec':
                return $this->hasMany(self::class, 'parent_id')->orderByDesc('order_num');
                break;
            case 'time_creation_dec':
                return $this->hasMany(self::class, 'parent_id')->orderByDesc('created_at');
                break;
            case 'time_update_dec':
                return $this->hasMany(self::class, 'parent_id')->orderByDesc('updated_at');
                break;
            case 'time_creation_inc':
                return $this->hasMany(self::class, 'parent_id')->orderBy('created_at');
                break;
            case 'time_update_inc':
                return $this->hasMany(self::class, 'parent_id')->orderBy('updated_at');
                break;
        }

    }

    public function getAttribute($key)
    {
        if (!$key) {
            return;
        }

        // If the attribute exists in the attribute array or has a "get" mutator we will
        // get the attribute's value. Otherwise, we will proceed as if the developers
        // are asking for a relationship's value. This covers both types of values.
        if (array_key_exists($key, $this->attributes) ||
            $this->hasGetMutator($key)) {

            return $this->getAttributeValue($key);
        }

        if (array_key_exists($key . '_' . Page::$language, $this->attributes) ||
            $this->hasGetMutator($key . '_' . Page::$language)) {
            return $this->getAttributeValue($key . '_' . Page::$language);
        }


        // Here we will determine if the model base class itself contains this given key
        // since we don't want to treat any of those methods as relationships because
        // they are all intended as helper methods and none of these are relations.
        if (method_exists(Model::class, $key)) {
            return;
        }

        return $this->getRelationValue($key);
    }

    public function render()
    {
        if ($this->container_type != null)
            return view('testsite.container', ['page' => $this]);
        else
            return view('testsite.some_content_page', ['page' => $this]);
    }

}
