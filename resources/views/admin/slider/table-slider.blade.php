@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Slider /</span> table slider </h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($slider->count()>0)
              <div class="card">
                <h5 class="card-header">Table Sliders</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name ar</th>
                        <th>Name en</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      @foreach ($slider as $slider)        
                  <tr>                   
                    <td>
                      @if( $slider->title_ar == NULL)
                      ----- 
                      @else
                    <strong>{{$slider->title_ar}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $slider->title_en == NULL)
                      ----- 
                      @else
                    <strong>{{$slider->title_en}}</strong>
                    @endif
                    </td>
                    <td>
                      <img src="{{url('uploads/images/slider/'.$slider->image)}}" alt="" width="60px" height="60px">
                    </td>
                   
                    <td>
                        <form action="{{route('edit_slider', ['id' => $slider->id])}}" method="GET">														
                          @csrf
                          
                          <button class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
                    <td>
                   
                      <form action="{{route('delete_slider', ['id' => $slider->id])}}" method="POST">														
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
                <h4 class="text-center">No information for Slider</h4>
              @endif
            </div>

@endsection
