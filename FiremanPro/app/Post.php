<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    
        public function comments()
    {
        return $this->hasMany('App\Address');
    }
    
    
    public function Post() {
        
    }
    
    
    public static function getPost(int $id){
        return Post::find($id);  
    }
    
    
    
}
