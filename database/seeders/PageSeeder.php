<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Page;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create(['pageheading' => 'Travel']); 
        Page::create(['pageheading' => 'Tours']);
        Page::create(['pageheading' => 'Hiking']); 
        Page::create(['pageheading' => 'Trekking']); 
        Page::create(['pageheading' => 'About']); 
        Page::create(['pageheading' => 'Adventure Sports']); 

        



    }
}
