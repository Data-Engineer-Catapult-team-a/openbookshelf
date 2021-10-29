<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviweList extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
      ];
      protected $fillable = [
        'isbn',
        'title',
        'publisherName',
        'mediumImageUrl',
        'itemUrl',
        'evaluation',
        'comment',
        'user_id'
    ];
}
