<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;
    public function getAllPosts()
    {
        $posts = DB::table('posts')->get();
        return $posts;
    }
    public function getOnePost($id)
    {
        $posts = DB::table('posts')
        ->where('id',$id)
        ->get();
        return $posts;
    }
}