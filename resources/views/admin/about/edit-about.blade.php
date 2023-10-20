@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">About /</span> Edit about </h4>
                <form action="{{ route('update_about', ['id' => $about->id]) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                 <div class="card">
                    <h5 class="card-header">Edit about</h5>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success text-center">
                            <p>{{session('status')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Description ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="title_ar"
                          value="{{$about->title_ar}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Description en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="title_en"
                          value="{{$about->title_en}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        <input
                          type="file"
                          class="form-control"
                          name="image"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <br>
                        <img src="{{url('uploads/images/about/'.$about->image)}}" alt="" width="60px" height="60px">

                     
                      </div>
                     
                      <br>
                      <button type="submit" class="btn btn-primary">update</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
