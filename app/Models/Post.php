<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['category'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function sluggable() : array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
