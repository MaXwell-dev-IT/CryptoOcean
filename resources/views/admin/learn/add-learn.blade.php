@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Learn to Earn /</span> Add Learn to Earn</h4>
                <form action="{{ route('store_learn') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('POST')
                 <div class="card">
                    <h5 class="card-header">Learn to Earn</h5>
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
                          name="ar_name"
                          placeholder="enter arabic name "
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('ar_name'))
                                           <span class="text-danger"> {{$errors->first('ar_name')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_name"
                          placeholder="enter english name"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('en_name'))
                                           <span class="text-danger"> {{$errors->first('en_name')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Youtube </label>
                        <input
                          type="text"
                          class="form-control"
                          name="youtube"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('youtube'))
                                           <span class="text-danger"> {{$errors->first('youtube')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Image major</label>
                        <input
                          type="file"
                          class="form-control"
                          name="image_major"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('image_major'))
                                           <span class="text-danger"> {{$errors->first('image_major')}}</span>
                                     @endif
                      </div>

                    
                      <br>
                      <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
