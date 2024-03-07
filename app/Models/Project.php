<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "slug",
        'content',
        'type_id'
    ];


    /*
        Relationships
    */
    public function category()
    {
        return $this->belongsTo(Type::class);
    }
}
