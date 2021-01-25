<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Contact;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'state',
        'city',
        'street',
        'number',
        'additional_info'
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
