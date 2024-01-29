<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug'];

    public function seTitleAttribute($_title) {

        $this->attributes['title'] = $_title;
        $this->attributes['slug'] = Str::slug($_title);
        }
}
