<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class house extends Model
{
    //
    use HasFactory, Notifiable;
    protected $table = 'houses';
    protected $guarded = [];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
