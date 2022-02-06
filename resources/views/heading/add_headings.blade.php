@extends('master')
@section('content')

<div class="container">
<div class="row">
        <div class="col-md-6 offset-md-3">
                     @if(Session::has('note_added'))
                            <h6 class="alert alert-success"> {{ Session::get('note_added') }}</h6>
                        @endif
                        <div class="card-header"> 
                        <h4> Add heading and description </h4>
                            <a href="{{ url('/all-note')}}" class="btn btn-danger float-end"> Back</a>
                        </div>
                        
                        <form action="/add-heading" method="POST" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                            <label for="Main-heading">Main heading</label>
                            <input type="text" class="form-control" name="Main-heading"  placeholder="Enter heading of your website">
                            </div>
                            <div class="form-group">
                            <label for="Sub-heading">Sub-heading</label>
                            <input type="text" class="form-control" name="Sub-heading"  placeholder="Enter sub heading">
                            </div>
                            <div class="form-group">
                            <label for="textarea">Subject Description</label>
                            <textarea  id="editor" name="description">

                            </textarea>
                            </div>
                        
                            <button type="submit" class="btn btn-primary">Submit</button>

                        </form>

             <script src="{{ asset('ckeditor/ckeditor.js')}}">  </script>      
             <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
            </script>     


        </div>


    </div>
   
    
</div>

@endsection
