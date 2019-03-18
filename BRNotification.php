<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class BRNotification extends Model
{
    protected $table = 'SELL_RENT';
    protected $fillable = ['ID', 'FORM_ID', 'PROPERTY_ID', 'FIRST_NAME', 'LAST_NAME', 'ADDRESS', 'EMAIL', 'TELEPHONE', 'MESSAGE', 'DATETIME'];
}