<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $posts=[
        ['id'=>1,'title'=>'laravel','description'=>'test','posted by'=>'amira','created at'=>'01-01-203 02:00:00']
        ,

        ['id'=>2,'title'=>'javascript','decription'=>'test123','posted by'=>'moataz','created at'=>'01-01-2023 01:00:00']
    ];
return view('posts.index',[
    'posts'=>$posts
]);


    }
    //
public function show(){
$post=
        ['id'=>1,'title'=>'laravel','description'=>'with supporting text blow as a natural lead-in to addational content','posted by'=>'amira','created at'=>'01-01-203 02:00:00'];

return view('posts.show',['post'=>$post]);
    }
}
