<?php

use App\Models\Topic;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view("/","home")->name('homepage');

Route::get("/view/{post_id}", function($post_id){
    
    return view("singlePost",['post_id'=>$post_id]);
})->name('post.show');

Route::get("/filter/{topic_id}", function($topic_id){
    $topic=Topic::find($topic_id);
    return view("filter",['topic_id'=>$topic_id,'topic'=>$topic]);
})->name('filter');


Route::prefix("admin")->group(function(){
    Route::get("/",function(){
        return view("admin.dashboard");
    })->name("admin.dashboard");

    Route::get("/topics", function(){
        return view("admin.topic");
    })->name("admin.topics");

    Route::get('/post',function(){
        return view('admin.manage-post');
    })->name('admin.posts');
    Route::get('/posts/create',function(){
        return view('admin.insert-post');
    })->name('admin.posts.create');

});