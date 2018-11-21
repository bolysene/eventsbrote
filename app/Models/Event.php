<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
	    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */

     protected $fillable = ['title', 'description','slug'];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
   public function getRouteKeyName(){
   	return 'slug';
   }
}
