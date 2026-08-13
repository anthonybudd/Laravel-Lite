<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExampleModel extends Model
{
    protected $table = 'example';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
    ];
}