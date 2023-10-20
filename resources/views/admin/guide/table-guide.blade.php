@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">WEb3 guide  /</span> table WEb3 guide  </h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($guide->count()>0)
              <div class="card">
                <h5 class="card-header">Table WEb3 guide </h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                      <th>Name ar</th>
                        <th>Name en</th>
                        <th>Glance ar</th>
                        <th>Glance en</th>
                        <th>Registration mechanism ar</th>
                        <th>Registration mechanism en</th>
                        <th>Registration play ar</th>
                        <th>Registration play en</th>
                        <th>Telegram 1</th>
                        <th>Telegram 2</th>
                        <th>Telegram 3</th>
                        <th>Telegram 4</th>
                        <th>X</th>
                        <th>Link Official</th>
                        <th>Discord</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      @foreach ($guide as $guide)        
                  <tr>                   
                    <td>
                      @if( $guide->ar_name == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->ar_name}}</strong>
                    @endif
                    </td>
                    <td>
                      @if( $guide->en_name == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->en_name}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->ar_glance == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->ar_glance}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->en_glance == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->en_glance}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->ar_registration_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->ar_registration_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->en_registration_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->en_registration_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->ar_play_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->ar_play_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->en_play_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->en_play_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->tele1 == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->tele1}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->tele2 == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->tele2}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->tele3 == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->tele3}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->tele4 == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->tele4}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->twitter == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->twitter}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->link == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->link}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $guide->discord == NULL)
                      ----- 
                      @else
                    <strong>{{$guide->discord}}</strong>
                    @endif
                    </td>
                    <td>
                      <img src="{{url('uploads/images/guide/'.$guide->image_major)}}" alt="" width="60px" height="60px">
                    </td>
                   
                    <td>
                        <form action="{{route('edit_guide', ['id' => $guide->id])}}" method="GET">														
                          @csrf
                          
                          <button type="submit" class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
                    <td>
                   
                      <form action="{{route('delete_guide', ['id' => $guide->id])}}" method="POST">														
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
                <h4 class="text-center">No WEb3 guide yet</h4>
              @endif
            </div>

@endsection
