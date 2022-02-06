<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Page;
use App\Models\SubPage;

class SelectClass extends Model
{
   // use HasFactory;


         public function selectSubHeading($heading)
         {

            $subheading=SubPage::select('id','pageheading','pagesubheading')
                        ->where('pageheading',$heading)
                        ->get();

                  return $subheading;
         }
        
         public function selectMainHeading($mainheading)
        {
            $mainheading =Page::select('id','pageheading','text')
            ->where('pageheading',$mainheading)
            ->get();

            return $mainheading;
        }




}
