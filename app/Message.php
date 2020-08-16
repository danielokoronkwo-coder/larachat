<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'from', 'message',
    ];

    // Table name 
    protected $table = 'messages';
    // Primary Key
    public $primaryKey = 'id';
    // Timestamp
    public $timestamp = true;
    // Date format
    protected $dateFormat = 'U';

}
