<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubPage;


class SubpageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  
       SubPage::create(['page_id' => 1,'pagesubheading'=>'Pokhara To Chitwan']);
       SubPage::create(['page_id' => 1,'pagesubheading'=>'Pokhara To Kathmandu']);
       SubPage::create(['page_id' => 1,'pagesubheading'=>'Pokhara To Birantnagar']);
       SubPage::create(['page_id' => 2,'pagesubheading'=>'Pokhara tour']);
       SubPage::create(['page_id' => 2,'pagesubheading'=>'Muktinath tour']); 
       SubPage::create(['page_id' => 2,'pagesubheading'=>'Mustang tour']); 
       SubPage::create(['page_id' => 2,'pagesubheading'=>'Chitwan tour']); 
       SubPage::create(['page_id' => 3,'pagesubheading'=>'Mount Everest']); 
       SubPage::create(['page_id' => 3,'pagesubheading'=>'The Annapurna circuit']); 
       SubPage::create(['page_id' => 3,'pagesubheading'=>'The Upper Mustang']); 
       SubPage::create(['page_id' => 3,'pagesubheading'=>'The Jomsom']);
       SubPage::create(['page_id' => 4,'pagesubheading'=>'The Ghandruk Trekking']); 
       SubPage::create(['page_id' => 4,'pagesubheading'=>'The Langtang']); 
       SubPage::create(['page_id' => 4,'pagesubheading'=>'Poon hill Trekking']); 
       SubPage::create(['page_id' => 4,'pagesubheading'=>'The Dhampus Trekking']); 
       SubPage::create(['page_id' => 6,'pagesubheading'=>'Paragliding']); 
       SubPage::create(['page_id' => 6,'pagesubheading'=>'Rafting']); 
       SubPage::create(['page_id' => 6,'pagesubheading'=>'Canyon Swing']); 
       SubPage::create(['page_id' => 6,'pagesubheading'=>'Bungee Jump']); 


       





       
        
    }
}
