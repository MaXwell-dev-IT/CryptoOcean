@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Projects and Mission   /</span> EditProjects and Mission   </h4>
              

                 <div class="card">

                    <h5 class="card-header">Edit Projects and Mission  </h5>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success text-center">
                            <p>{{session('status')}}</p>
                        </div>
                    @endif

                <form action="{{ route('update_mission', ['id' => $mission->id]) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
          
                    <div class="card-body">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Name ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_name"
                          value = "{{$mission->ar_name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                    
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_name"
                          value = "{{$mission->en_name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                     
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Glance en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_glance"
                          value = "{{$mission->en_glance}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Glance ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_glance"
                          value = "{{$mission->ar_glance}}"
                          aria-describedby="defaultFormControlHelp"
                        />
   
                      </div>

                      <div>
                        <label for="defaultFormControlInput" class="form-label">Registration mechanism en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_registration_mechanism"
                          value = "{{$mission->en_registration_mechanism}}" 
                           aria-describedby="defaultFormControlHelp"
                        />
          
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Registration mechanism ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_registration_mechanism"
                          value = "{{$mission->ar_registration_mechanism}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
                
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Win mechanism en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_win_mechanism"
                          value = "{{$mission->en_win_mechanism}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
          
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Win mechanism ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_win_mechanism"
                          value = "{{$mission->ar_win_mechanism}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
                      
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele1"
                          value = "{{$mission->tele1}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
              
                      </div>

                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele2"
                          value = "{{$mission->tele2}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
   
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 3</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele3"
                          value = "{{$mission->tele3}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
            
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 4</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele4"
                          value = "{{$mission->tele4}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
      
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">X</label>
                        <input
                          type="text"
                          class="form-control"
                          name="twitter"
                          value = "{{$mission->twitter}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
             
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Official link </label>
                        <input
                          type="text"
                          class="form-control"
                          name="link"
                          value = "{{$mission->link}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
           
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Discord</label>
                        <input
                          type="text"
                          class="form-control"
                          name="discord"
                          value = "{{$mission->discord}}" 
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Image major</label>
                        <input
                          type="file"
                          class="form-control"
                          name="image_major"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <br>
                      <img src="{{url('uploads/images/mission/'.$mission->image_major)}}" alt="" width="60px" height="60px">


                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary">update</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
