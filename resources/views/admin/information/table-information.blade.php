@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Crypto information /</span> table information </h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($info->count()>0)
              <div class="card">
                <h5 class="card-header">Table information</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>About ar</th>
                        <th>About en</th>
          
                        <th>Name ar</th>
                        <th>Name en</th>
                        <th>youtube</th>
                        <th>Email 1</th>
                        <th>Email 2</th>
                        <th>Telegram 1</th>
                        <th>Telegram 2</th>
                        <th>Telegram 3</th>
                        <th>Phone 1</th>
                        <th>Phone 2</th>
                        <th>X 1</th>
                        <th>X 2</th>
                        <th>logo</th>
                        <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      @foreach ($info as $info)        
                  <tr>                   
                    <td>
                      @if( $info->ar_about == NULL)
                        ----- 
                      @else
                        {{$info->ar_about}}
                      @endif
                    </td>   
                    <td>
                      @if( $info->en_about == NULL)
                        ----- 
                      @else
                        {{$info->en_about}}
                      @endif
                    </td>   
                  
                    
                    <td>
                      @if( $info->ar_name == NULL)
                        ----- 
                      @else
                        {{$info->ar_name}}
                      @endif
                    </td> 
                    <td>
                      @if( $info->en_name == NULL)
                        ----- 
                      @else
                        {{$info->en_name}}
                      @endif
                    </td> 
                    <td>
                      @if( $info->youtube == NULL)
                        ----- 
                      @else
                        {{$info->youtube}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->phone1 == NULL)
                        ----- 
                      @else
                        {{$info->phone1}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->phone2 == NULL)
                        ----- 
                      @else
                        {{$info->phone2}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->email1 == NULL)
                        ----- 
                      @else
                        {{$info->email1}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->email2 == NULL)
                        ----- 
                      @else
                        {{$info->email2}}
                      @endif
                    </td> 
                    <td>
                      @if( $info->telegram1 == NULL)
                        ----- 
                      @else
                        {{$info->telegram1}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->telegram2 == NULL)
                        ----- 
                      @else
                        {{$info->telegram2}}
                      @endif
                    </td>   
                    <td>
                      @if( $info->telegram3 == NULL)
                        ----- 
                      @else
                        {{$info->telegram3}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->twitter1 == NULL)
                        ----- 
                      @else
                        {{$info->twitter1}}
                      @endif
                    </td>  
                    <td>
                      @if( $info->twitter2 == NULL)
                        ----- 
                      @else
                        {{$info->twitter2}}
                      @endif
                    </td>  
                    <td>
                    @if($info->logo == NULL )
                        No image yet
                        @else
                        <img src="{{url('uploads/images/information/'.$info->logo)}}" alt="" width="60px" height="60px">
                        @endif                    </td>
                   
                    <td>
                        <form action="{{route('edit_info', ['id' => $info->id])}}" method="GET">														
                          @csrf
                          
                          <button type="submit" class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
              
              
                  </tr>
                  @endforeach         
                  

                    </tbody>
                  </table>
                </div>
               
              </div>
              @else
                <h4 class="text-center">No information yet</h4>
              @endif
            </div>

@endsection
