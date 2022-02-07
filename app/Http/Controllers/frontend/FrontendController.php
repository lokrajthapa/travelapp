<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\SubPage;


class FrontendController extends Controller
{
    public function displayheading()
    { 
       $pages = Page::all();





      return view('frontend.index',compact('pages') );

      //dd($pages);
    }


    // public function selectPageDetailsFromTable($id)
    // {
    //   $pages= Page::all();

    //    $subpage=SubPage::find($id);
    //   return view('page',compact('subpage','pages'));
    // }

    public function selectPageDetailsFromTable($id)
    {
    
        $pageDetails=SubPage::select('id','pagesubheading','text','thumbnailimg','page_id')
                    ->with(['page'=> function($q){
                      $q->select(['id', 'pageheading']);
                    }])
                    ->where('id',$id)
                    ->get();
    
                  //  return $pageDetails;

                    return view('frontend.page',compact('pageDetails') );
    }
    



}
