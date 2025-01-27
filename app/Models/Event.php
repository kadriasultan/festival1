<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
use HasFactory;

protected $fillable = [
'name',
'slug',
'date',
'location',
'genre',
'description',
];

public static function boot()
{
parent::boot();

static::creating(function ($event) {
$event->slug = Str::slug($event->name);
});
}
}
