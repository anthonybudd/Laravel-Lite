<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $table = 'flights';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name', // Name of the flight
    ];
}