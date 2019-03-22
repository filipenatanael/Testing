<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Article extends Model
{
    Use softDeletes;

    protected $fillable = ['title', 'description', 'content', 'date'];

    protected $data = ['deleted_at'];
}
