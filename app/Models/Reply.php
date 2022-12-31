<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = ['forum_id', 'user_id', 'reply_detail'];

    public function forum()
    {
        return $this->belongsTo(Forum::class);
    }
}
