<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
use HasFactory;

protected $fillable = [
'name',
'email',
'message',
'phone_number',
'trip_id', // Zorg ervoor dat dit overeenkomt met de foreign key
];

public function festivalTrip()
{
return $this->belongsTo(FestivalTrip::class);
}
}
