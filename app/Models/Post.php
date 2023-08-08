<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    use CrudTrait;
    use HasFactory;

    protected $connection = 'mongodb';
    protected $collection = 'posts';
    protected $fillable = ['user_id', 'title', 'body', 'slug'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
