<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bibliography extends Model
{
    use HasFactory;

    protected $fillable = [
        'author',
        'title',
        'year',
        'city',
        'editorial',
        'document_id'
    ];

    public function documents(){
        return $this->belongsToMany(Document::class, 'document', 'document_id', 'bibliography_id');
    }
}
