@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About /</span> table about </h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($about->count()>0)
              <div class="card">
                <h5 class="card-header">Table about</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Description ar</th>
                        <th>Description en</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      @foreach ($about as $about)        
                  <tr>                   
                    <td>
                      @if( $about->title_ar == NULL)
                      ----- 
                      @else
                    <strong>{{$about->title_ar}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $about->title_en == NULL)
                      ----- 
                      @else
                    <strong>{{$about->title_en}}</strong>
                    @endif
                    </td>
                    <td>
                      <img src="{{url('uploads/images/about/'.$about->image)}}" alt="" width="60px" height="60px">
                    </td>
                   
                    <td>
                        <form action="{{route('edit_about', ['id' => $about->id])}}" method="GET">														
                          @csrf
                          
                          <button type="submit" class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
                    <td>
                   
                      <form action="{{route('delete_about', ['id' => $about->id])}}" method="POST">														
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-danger">Delete</button>
                      </form>
                    
                    </td>
              
                  </tr>
                  @endforeach         
                  

                    </tbody>
                  </table>
                </div>
               
              </div>
              @else
                <h4 class="text-center">No information for about</h4>
              @endif
            </div>

@endsection
