<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\SubPage;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Image;

class SubPageController extends Controller
{
    public function addsubPage()
    { 
      $pages= Page::all();
       return view('/subpage/add-sub-page',compact('pages'));
    }
    public function subPageStore(Request $request)
      {  
      
        
         
         $pagesubheading = $request->pagesubheading;
         $pagedescription =$request->text;
         $subpage=new SubPage();
         if($request->has('thumbnailimag'))
         {

        
         $image =$request->file('thumbnailimg');

         $imageName=time().'.'.$image->extension();
         $image->move(public_path('/uploads/thumbnailimg'), $imageName);
         $subpage->thumbnailimg=$imageName;
         
        }
   
        

        
         if($request->filled('page_id')){
            $subpage->page_id=$request->page_id;
          }

        
         $subpage->pagesubheading=$pagesubheading;
         $subpage->text=$pagedescription;
        

     
         $subpage->save();
         return redirect()->back()->with('subpage_added',' page and subpage   Stored successfully');

      }
      public function subpages()
      {
         $subpages = SubPage::with('page')->get();
         return view('subpage.all-subpages',compact('subpages') );

     
      }
      public function upload(Request $request)
      {

         //echo json_encode(['result'=>$request->all()]);

         

         //dd($request->all());
         if($request->hasFile('upload'))
         {  

            //getfilename with extension
            $filenamewithextension=$request->file('upload')->getClientOriginalName();
            
            //getfilename with out extension
            $filename=pathinfo($filenamewithextension, PATHINFO_FILENAME);
            
            //get file_extension
            $extension =$request->file('upload')->getClientOriginalExtension();
            //file name to store
            $filenametostore =$filename.'_'.time().'.'.$extension;
            //file upload
            $request->file('upload')->storeAs('public/uploads',$filenametostore);
            //$request->file('upload')->storeAs('public/uploads/thumbnail',$filenametostore);

            //Resize the image here
            /*$thumbnailpath = public_path('storage/uploads/thumbnail'.$filenametostore);
            $image= Image::make($thumbnailpath)->resize(500,150, function($constraint)
            {
               $constraint->aspectRatio();
            });
            $img->save($thumbnailpath);
*/

            echo json_encode(['fileName'=> $filenametostore]);
            /*echo json_encode([
               'default'=>asset('storage/uploads/'.$filenametostore),
               '500'=>asset('storage/uploads/thumbnail'.$filenametostore),
            ]); 
            */

         }

      }
      
     public function editSubPages($id)
      {
         $subpage=SubPage::findOrFail($id);

      
         $pages= Page::all();
     
         
         return view('subpage.edit-sub-page',compact('subpage','pages'));
       
      }

      public function updateSubPage(Request $request)
       {
      

;

          $subpage =Subpage::find($request->id);
          if($request->filled('page_id')){
            $subpage->page_id=$request->page_id;
          }
          $subpage->pagesubheading= $request->pagesubheading;
          $subpage->text=$request->text;
 
        if($request->hasfile('thumbnailimg'))
        {
            $destination ='uploads/thumbnailimg/'.$subpage->thumbnailimg;
            if(File::exists($destination))
            { 
                File::delete($destination);

            }
            $file = $request->file('thumbnailimg');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/thumbnailimg/',$filename); 
            $subpage->thumbnailimg=$filename;

        } 

        $subpage->update();
      return redirect()->back()->with('subpage_updated',' page and subpage   updated successfully');
          

      }
      public function deletesubPage($id)
      {  
          $subpage = Subpage::find($id);
        
         unlink(public_path('/uploads/thumbnailimg').'/'.$subpage->thumbnailimg);
         $subpage->delete();

     
         
        
         
         return back()->with('subpage_deleted',' Heading and  Subheading is delete successfully');
      }
}
