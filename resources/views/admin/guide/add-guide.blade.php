@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">WEb3 guide /</span> Add WEb3 guide  </h4>
                <form action="{{ route('store_guide') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('POST')
                 <div class="card">
                    <h5 class="card-header">Add WEb3 guide </h5>
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
                        <label for="defaultFormControlInput" class="form-label">Glance en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_glance"
                          placeholder="enter english Glance "
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('en_glance'))
                                           <span class="text-danger"> {{$errors->first('en_glance')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Glance ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_glance"
                          placeholder="enter english Description"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('ar_glance'))
                                           <span class="text-danger"> {{$errors->first('ar_glance')}}</span>
                                     @endif
                      </div>

                      <div>
                        <label for="defaultFormControlInput" class="form-label">Registration mechanism en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_registration_mechanism"
                          placeholder="enter english Registration mechanism "
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('en_registration_mechanism'))
                                           <span class="text-danger"> {{$errors->first('en_registration_mechanism')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Registration mechanism ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_registration_mechanism"
                          placeholder="enter english Registration mechanism"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('ar_registration_mechanism'))
                                           <span class="text-danger"> {{$errors->first('ar_registration_mechanism')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Play mechanism en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_play_mechanism"
                          placeholder="enter english Play mechanism"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('en_play_mechanism'))
                                           <span class="text-danger"> {{$errors->first('en_play_mechanism')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Play mechanism ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_play_mechanism"
                          placeholder="enter english Play mechanism"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('ar_play_mechanism'))
                                           <span class="text-danger"> {{$errors->first('ar_play_mechanism')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele1"
                          placeholder="enter telegram 1"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('tele1'))
                                           <span class="text-danger"> {{$errors->first('tele1')}}</span>
                                     @endif
                      </div>

                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele2"
                          placeholder="enter telegram 2"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('tele2'))
                                           <span class="text-danger"> {{$errors->first('tele2')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 3</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele3"
                          placeholder="enter telegram 3"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('tele3'))
                                           <span class="text-danger"> {{$errors->first('tele3')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 4</label>
                        <input
                          type="text"
                          class="form-control"
                          name="tele4"
                          placeholder="enter telegram 4"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('tele4'))
                                           <span class="text-danger"> {{$errors->first('tele4')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">X</label>
                        <input
                          type="text"
                          class="form-control"
                          name="twitter"
                          placeholder="enter X"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('twitter'))
                                           <span class="text-danger"> {{$errors->first('twitter')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Official link </label>
                        <input
                          type="text"
                          class="form-control"
                          name="link"
                          placeholder="enter Official link"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('link'))
                                           <span class="text-danger"> {{$errors->first('link')}}</span>
                                     @endif
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Discord</label>
                        <input
                          type="text"
                          class="form-control"
                          name="discord"
                          placeholder="enter Official Discord"
                          aria-describedby="defaultFormControlHelp"
                        />
                        @if($errors->any('discord'))
                                           <span class="text-danger"> {{$errors->first('discord')}}</span>
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
