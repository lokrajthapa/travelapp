@extends('master')

@section('content')
<section  class="container">     
       <div class="row">
                <div class="col-lg-9 margin-tb">
                    <div class="pull-left">
                        <h2>all heading and description </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href=" {{ url('/add-pages') }}"> Add New page</a>
                    </div>
                </div>
            </div>
            @if(Session::has('note_deleted'))
                            <h6 class="alert alert-success"> {{ Session::get('note_deleted') }}</h6>
                        @endif
            
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Heading </th>
                    <th> description </th>
                  

                    
                    <th width="280px">Action</th>
                </tr>
                @foreach (  $pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td> {{ $page->pageheading }} </td>
                    <td> {{ $page->text }} </td>

                  
                    <td> 
                       <a href="/edit-page/{{ $page->id }}" class="btn btn-info ">Edit </a> 
                        
                        <a href="/delete-page/{{$page->id}}" class="btn btn-danger ">Delete </a>

                    
                    </td>
                    
                   
                 
                </tr>
                @endforeach
            </table>
</div>
</section>
@endsection