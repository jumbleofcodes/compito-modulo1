<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'post_id';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
