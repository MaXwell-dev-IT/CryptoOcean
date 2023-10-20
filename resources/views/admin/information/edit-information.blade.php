@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Crypto information /</span> Edit information </h4>
                <form action="{{ route('update_info', ['id' => $info->id]) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                 <div class="card">
                    <h5 class="card-header">Edit information</h5>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success text-center">
                            <p>{{session('status')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">About ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_about"
                          @if ( $info->ar_about == NULL )
                          placeholder="add arabic about"
                          @else
                          value="{{  $info->ar_about }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
                 
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">About en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_about"
                          @if ( $info->en_about == NULL )
                          placeholder="add english about"
                          @else
                          value="{{  $info->en_about }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_name"
                          @if ( $info->ar_name == NULL )
                          placeholder="add arabic name"
                          @else
                          value="{{  $info->ar_name }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
                 
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_name"
                          @if ( $info->en_name == NULL )
                          placeholder="add english name"
                          @else
                          value="{{  $info->en_name }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Phone 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="phone1"
                          @if ( $info->phone1 == NULL )
                          placeholder="add  phone number"
                          @else
                          value="{{  $info->phone1 }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
                 
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Phone 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="phone2"
                          @if ( $info->phone2 == NULL )
                          placeholder="add another phone number"
                          @else
                          value="{{  $info->phone2 }}"
                          @endif        
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Email 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="email1"
                          @if ( $info->email1 == NULL )
                          placeholder="add  email"
                          @else
                          value="{{  $info->email1 }}"
                          @endif     
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Email 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="email2"
                          @if ($info->email2 == NULL )
                          placeholder="add another email"
                          @else
                          value="{{ $info->email2 }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">X 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="twitter1"
                          @if ( $info->twitter1 == NULL )
                          placeholder="add X"
                          @else
                          value="{{  $info->twitter1 }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">X 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="twitter2"
                          @if ( $info->twitter2 == NULL )
                          placeholder="add another X"
                          @else
                          value="{{  $info->twitter2 }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Youtube</label>
                        <input
                          type="text"
                          class="form-control"
                          name="youtube"
                          @if ( $info->youtube == NULL )
                          placeholder="add youtube"
                          @else
                          value="{{  $info->youtube }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="telegram1"
                          @if ( $info->telegram1 == NULL )
                          placeholder="add telegram"
                          @else
                          value="{{  $info->telegram1 }}"
                          @endif
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="telegram2"
                          @if ( $info->telegram2 == NULL )
                          placeholder="add another telegram"
                          @else
                          value="{{  $info->telegram2 }}"
                          @endif
                               aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 3</label>
                        <input
                          type="text"
                          class="form-control"
                          name="telegram3"
                          @if ( $info->telegram3 == NULL )
                          placeholder="add another telegram"
                          @else
                          value="{{  $info->telegram3 }}"
                          @endif   
                                                 aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      
                      <div>
                      
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        @if($info->logo == NULL )
                        <br>
                        <p class="text-danger">No image yet</p>
                        
                        @else
                        <img src="{{url('uploads/images/information/'.$info->logo)}}" alt="" width="60px" height="60px">
                        @endif
                        <input
                          type="file"
                          class="form-control"
                          name="logo"
                          aria-describedby="defaultFormControlHelp"
                        />
              
                      </div>
                     
                      <br>
                      <button type="submit" class="btn btn-primary">update</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
