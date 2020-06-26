<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function publisher()
    {
        return $this->belongsTo(Publisher::class);
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class);
    }
}
