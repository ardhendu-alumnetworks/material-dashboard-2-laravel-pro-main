<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description','picture', 'date', 'options','homepage','status', 'category_id'];

    protected $casts = [
      'options' => 'array',
  ];

    public function category(){

       return $this->belongsTo(Category::class);
    }

    public function tag(){

       return $this->belongsToMany(Tag::class);
    }
}
