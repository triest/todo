<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }

    public function items(){
        return $this->hasMany(ToDoItem::class);
    }
}
