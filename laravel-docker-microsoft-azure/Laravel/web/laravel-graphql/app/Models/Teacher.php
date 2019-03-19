<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\Interfaces\Personable;
use App\Models\Traits\Personable as PersonableTrait;

class Teacher extends Model implements Personable
{
    use PersonableTrait;

    protected $primaryKey = 'user_id';
    public $timestamps = false;

    // public function user(): BelongsTo
    // {
    //   return $this->belongsTo(User:class, 'user_id')
    // }
}
