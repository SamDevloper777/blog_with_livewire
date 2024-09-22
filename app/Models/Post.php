<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public function topic(){
        return $this->hasOne(Topic::class,"id","topic_id");//topic model  ka relation banao apna table ka id sa Post ka forign key ma
    }
}
