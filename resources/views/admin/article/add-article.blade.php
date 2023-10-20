@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Article /</span> Add article </h4>
                <form action="{{ route('store_article') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('POST')
                 <div class="card">
                    <h5 class="card-header">Add article</h5>
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
                        <label for="defaultFormControlInput" class="form-label">Description ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_desciption"
                          placeholder="enter arabic Description "
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('ar_desciption'))
                                           <span class="text-danger"> {{$errors->first('ar_desciption')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Description en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_desciption"
                          placeholder="enter english Description"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('en_desciption'))
                                           <span class="text-danger"> {{$errors->first('en_desciption')}}</span>
                                     @endif
                      </div>

                      <div>
                        <label for="defaultFormControlInput" class="form-label">Writer en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_writer"
                          placeholder="enter english writer "
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('en_writer'))
                                           <span class="text-danger"> {{$errors->first('en_writer')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Writer ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_writer"
                          placeholder="enter arabic writer"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('ar_writer'))
                                           <span class="text-danger"> {{$errors->first('ar_writer')}}</span>
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

                      <div>
                        <label for="" class="form-label">Pictures (multiple article pictures can be selected)</label>
                            <input class="form-control" name="images[]" multiple type="file"/>
                          
                        </div>
                     
                      <br>
                      <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
