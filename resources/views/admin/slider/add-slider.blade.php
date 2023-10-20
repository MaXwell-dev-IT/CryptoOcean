@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Slider /</span> Add slider </h4>
                <form action="{{ route('store_slider') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('POST')
                 <div class="card">
                    <h5 class="card-header">Add slider</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success text-center">
                            <p>{{session('success')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="title_ar"
                          placeholder="enter arabic name "
                          aria-describedby="defaultFormControlHelp"
                        />
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="title_en"
                          placeholder="enter english name"
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
                        @if($errors->any('image'))
                                           <span class="text-danger"> {{$errors->first('image')}}</span>
                                     @endif
                      </div>
                     
                      <br>
                      <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
