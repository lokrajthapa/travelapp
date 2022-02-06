@extends('master')

@section('content')
<section  class="container">     
       <div class="row ">
                <div class="col-lg-9 margin-tb">
                    <div class="pull-left">
                        <h2>all blogs </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="/add-images"> Create New images</a>
                    </div>
                </div>
            </div>
            @if(Session::has('image_deleted'))
                            <h6 class="alert alert-success"> {{ Session::get('image_deleted') }}</h6>
                        @endif
            
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>title</th>
                    
                    <th>text</th>
                    <th>images</th>

                    
                    <th width="280px">Action</th>
                </tr>
                @foreach (  $images as $image)
                <tr>
                    <td>{{ $image->id }}</td>
                   
                    <td> {{ $image->link }} </td>
                    <td> {{ $image->text }} </td>

                    <td><img src="uploads/image/{{ $image->image }}" width="100px"></td>
                    <td> 
                        <a href="/edit-blogs/{{$image->id}}" class="btn btn-info ">Edit </a>
                        <a href="/delete-blog/{{$image->id}}" class="btn btn-danger ">Delete </a>


                    </td>
                    
                   
                 
                </tr>
                @endforeach
            </table>
</div>
</section>
@endsection