<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class SLNotification extends Model
{
    protected $table = 'SELL_LET';
    protected $fillable = ['ID', 'FORM_NO', 'PROPERTY_ID', 'FIRST_NAME', 'LAST_NAME', 'ADDRESS', 'EMAIL', 'TELEPHONE', 'MESSAGE', 'SELL', 'LET'];
}