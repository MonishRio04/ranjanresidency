<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['filename', 'type', 'title'];
    protected $appends = ['url'];

    public function getUrlAttribute()
    {
        return asset('uploads/' . $this->filename);
    }
}
