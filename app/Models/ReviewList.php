<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewList extends Model
{
    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

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
