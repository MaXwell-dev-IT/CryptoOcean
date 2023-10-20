@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Learn to Earn /</span> table Learn to Earn</h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($learn->count()>0)
              <div class="card">
                <h5 class="card-header">Table Learn to Earn</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                      <th>Name ar</th>
                        <th>Name en</th>
                        <th>Youtube</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      @foreach ($learn as $learn)        
                  <tr>                   
                    <td>
                      @if( $learn->ar_name == NULL)
                      ----- 
                      @else
                    <strong>{{$learn->ar_name}}</strong>
                    @endif
                    </td>
                    <td>
                      @if( $learn->en_name == NULL)
                      ----- 
                      @else
                    <strong>{{$learn->en_name}}</strong>
                    @endif
                    </td>
                    <td>
                      @if( $learn->youtube == NULL)
                      ----- 
                      @else
                    <strong>{{$learn->youtube}}</strong>
                    @endif
                    </td>
                    <td>
                      <img src="{{url('uploads/images/learn/'.$learn->image_major)}}" alt="" width="60px" height="60px">
                    </td>
                   
                    <td>
                        <form action="{{route('edit_learn', ['id' => $learn->id])}}" method="GET">														
                          @csrf
                          
                          <button type="submit" class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
                    <td>
                   
                      <form action="{{route('delete_learn', ['id' => $learn->id])}}" method="POST">														
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    
                    </td>
              
                  </tr>
                  @endforeach         
                  

                    </tbody>
                  </table>
                </div>
               
              </div>
              @else
                <h4 class="text-center">No learn courses yet</h4>
              @endif
            </div>

@endsection
