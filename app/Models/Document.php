<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'researcher',
        'date_document',
        'institution',
        'table_index',
        'content',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function bibliographies(){
        return $this->HasMany(Bibliography::class);
    }

    // public function document(){
    //     return $this->hasMany(Document::class);
    // }
}
