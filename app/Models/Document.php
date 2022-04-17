<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'date_document',
        'institution',
        'table_index',
        'bibliography',
        'content',
        'user_id'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
