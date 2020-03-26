<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublisherModel extends Model
{
    protected $table = 'publishers';
    public function books()
    {
        return $this->hasMany(Book::class, 'publisher_id');
    }
}
