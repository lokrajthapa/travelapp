@extends('master')

@section('content')
<section  class="container">     
       <div class="row ">
                <div class="col-lg-9 margin-tb">
                    <div class="pull-left">
                        <h2>all blogs </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="/add-blogs"> Create New blogPost</a>
                    </div>
                </div>
            </div>
            @if(Session::has('blog_deleted'))
                            <h6 class="alert alert-success"> {{ Session::get('blog_deleted') }}</h6>
                        @endif
            
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>title</th>
                    
                    <th>text</th>
                    <th>images</th>

                    
                    <th width="280px">Action</th>
                </tr>
                @foreach (  $blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                   
                    <td> {{ $blog->link }} </td>
                    <td> {{ $blog->text }} </td>

                    <td><img src="uploads/blog/{$blog->image }}" width="100px"></td>
                    <td> 
                        <a href="/edit-blogs/{{$blog->id}}" class="btn btn-info ">Edit </a>
                        <a href="/delete-blog/{{$blog->id}}" class="btn btn-danger ">Delete </a>


                    </td>
                    
                   
                 
                </tr>
                @endforeach
            </table>
</div>
</section>
@endsection