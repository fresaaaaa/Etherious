<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    use HasFactory, Notifiable;
    public $timestamps = false;
    protected $guarded = ['id'];
}
