<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'description', 'content', 'date'];

    protected $data = ['deleted_at'];
}
