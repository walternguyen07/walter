<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    protected $table = 'table_blog';
    protected $fillable = [
        'title', 'meta_title', 'meta_keyword','description'
    ];
}
