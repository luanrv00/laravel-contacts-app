<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Address;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $address = Address::factory()->create();
        $contact = Contact::factory()->for($address)->create();
    }
}
