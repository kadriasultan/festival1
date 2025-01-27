<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FestivalTrip extends Model
{
use HasFactory;

protected $fillable = [
'festival_name',
'location',
'date',
'user_id', // Zorg ervoor dat dit overeenkomt met de foreign key
];

public function user()
{
return $this->belongsTo(User::class);
}

public function contactForms()
{
return $this->hasMany(ContactForm::class);
}
}
