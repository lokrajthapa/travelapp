@extends('master')
@section('content')
<section  class="container">     
       <div class="row">
                <div class="col-lg-9 margin-tb">
                    <div class="pull-left">
                        <h2>all main pages and subpages  </h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-success" href="/add-sub-pages"> Add headings and subheading of pages</a>
                    </div>
                </div>
            </div>
            @if(Session::has('subpage_deleted'))
                            <h6 class="alert alert-success"> {{ Session::get('subpage_deleted') }}</h6>
                        @endif
            
            <table class="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Heading </th>
                    <th> Sub-heading </th>
                    <th> Thumbnailimg </th>
                    <th> Description </th>

                  

                    
                    <th width="280px">Action</th>
                </tr>
                @foreach ( $subpages  as $subpage)
                <tr>
                    <td>{{ $subpage->id }}</td>
                    <td> {{ $subpage->pageheading }} </td>
                    <td> {{ $subpage->pagesubheading }} </td>
                   
                    <td> <img src="uploads/thumbnailimg/{{ $subpage->thumbnailimg }}" width="100px"> 
                    <td> {{ $subpage->text }} </td>



                  
                    <td> 
                     
                       <a href="/edit-subpages/{{$subpage->id}}" class="btn btn-info ">Edit </a> 
                        <a href="/delete-sub-page/{{$subpage->id}}" class="btn btn-danger ">Delete </a>


                    </td>
                    
                   
                 
                </tr>
                @endforeach
            </table>
</div>
</section>
@endsection