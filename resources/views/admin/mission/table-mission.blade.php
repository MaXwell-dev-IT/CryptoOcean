@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> Projects and Mission  /</span> table Projects and Mission   </h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($mission->count()>0)
              <div class="card">
                <h5 class="card-header">Table Projects and Mission </h5>
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
                        <th>Registration win ar</th>
                        <th>Registration win en</th>
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
                      @foreach ($mission as $mission)        
                  <tr>                   
                    <td>
                      @if( $mission->ar_name == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->ar_name}}</strong>
                    @endif
                    </td>
                    <td>
                      @if( $mission->en_name == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->en_name}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->ar_glance == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->ar_glance}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->en_glance == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->en_glance}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->ar_registration_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->ar_registration_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->en_registration_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->en_registration_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->ar_win_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->ar_win_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->en_win_mechanism == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->en_win_mechanism}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->tele1 == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->tele1}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->tele2 == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->tele2}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->tele3 == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->tele3}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->tele4 == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->tele4}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->twitter == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->twitter}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->link == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->link}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $mission->discord == NULL)
                      ----- 
                      @else
                    <strong>{{$mission->discord}}</strong>
                    @endif
                    </td>
                    <td>
                      <img src="{{url('uploads/images/mission/'.$mission->image_major)}}" alt="" width="60px" height="60px">
                    </td>
                   
                    <td>
                        <form action="{{route('edit_mission', ['id' => $mission->id])}}" method="GET">														
                          @csrf
                          
                          <button type="submit" class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
                    <td>
                   
                      <form  action="{{route('delete_mission', ['id' => $mission->id])}}" method="POST">														
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
                <h4 class="text-center">No  mission yet</h4>
              @endif
            </div>

@endsection
