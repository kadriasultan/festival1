<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;

class Busreis extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'event',
        'phone',
        'email',
        'departure_location',
        'passengers',
    ];
}
