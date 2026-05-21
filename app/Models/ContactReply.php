<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactReply extends Model
{
    protected $guarded = [];

    public function contactMessage()
    {
        return $this->belongsTo(ContactMessage::class);
    }
}
