<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class ContactsTableSeeder extends Seeder
{
    public function run()
    {
        Contact::factory()->count(35)->create();
    }
}
