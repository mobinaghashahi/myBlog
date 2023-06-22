<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $primaryKey='id';
    protected $fillable=['text','datePublished','description','imageName','title','viewCount','user_id'];
    protected $table='post';
}
