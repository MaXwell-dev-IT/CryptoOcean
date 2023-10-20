@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Learn to Earn  /</span> Edit Learn to Earn  </h4>
              

                 <div class="card">

                    <h5 class="card-header">Edit Learn to Earn </h5>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success text-center">
                            <p>{{session('status')}}</p>
                        </div>
                    @endif

                <form action="{{ route('update_learn', ['id' => $learn->id]) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
          
                    <div class="card-body">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Name ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_name"
                          value = "{{$learn->ar_name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                    
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_name"
                          value = "{{$learn->en_name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                     
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Youtube</label>
                        <input
                          type="text"
                          class="form-control"
                          name="youtube"
                          value="{{$learn->youtube}}"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <br>

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
                      <img src="{{url('uploads/images/learn/'.$learn->image_major)}}" alt="" width="60px" height="60px">


                      <br>
                      <br>
                      <button type="submit" class="btn btn-primary">update</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
