<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function addPage()
    {
       return view('/page/add-page');
    }
    public function PageStore(Request $request)
      {
         $pageheading = $request->pageheading;
         $text = $request->text;
        

         $page=new Page();
         $page->pageheading=$pageheading;

         $page->text= $text;

     
         $page->save();
         return redirect()->back()->with('page_added',' page   Stored successfully');

      }
      public function pages()
      {
         $pages= Page::all();
         return view('page.all-pages',compact('pages'));
      }
      
       public function editpages($id)
       {
         $page=Page::find($id);
         return view('page.edit-pages', compact('page'));
       }

        public function updatepage(Request $request)
       { 
        
        
          $pageheading = $request->pageheading;
          $text  = $request->text;
          
          $page=Page::find($request->id);
         
          $page->pageheading = $pageheading;
        
          $page->text =  $text;
      
          $page->update();
          return back()->with('page_updated','page is successfully updated');

        }
      public function deletePage($id)
      {
         $page = Page::find($id);
        
         $page->delete();
         return back()->with('page_deleted','page is delete successfully');
      }
}
