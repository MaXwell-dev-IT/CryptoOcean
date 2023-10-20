@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Profile /</span> Edit profile </h4>
                <form action="{{ route('profile.update.admin') }}" method="POST" enctype="multipart/form-data" >
                @csrf
        @method('patch')
                 <div class="card">
                    <h5 class="card-header">Profile Information</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success text-center">
                            <p>{{session('success')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name</label>
                        <input
                          type="text"
                          class="form-control"
                          name="name"
                          value="{{Auth::user()->name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Email</label>
                        <input
                          type="email"
                          class="form-control"
                          name="email"
                          value="{{Auth::user()->email}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                      </div>
            
                      <br>
                      <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                  </div>

                </form>
                
            </div>
         <div class="container-xxl flex-grow-1 container-p-y">
                <form action="{{ route('password.update') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
                 <div class="card">
                    <h5 class="card-header">Update Password</h5>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success text-center">
                            <p>{{session('status')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Current Password</label>
                        <input
                          type="password"
                          class="form-control"
                          name="current_password"
                          placeholder="enter current password"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <x-input-error  :messages="$errors->updatePassword->get('current_password')" class="mt-2" />

                    
                      </div>
                      <div>
                      <label for="defaultFormControlInput" class="form-label">Password</label>
                        <input
                          type="password"
                          class="form-control"
                          name="password"
                          placeholder="enter password"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <x-input-error  :messages="$errors->updatePassword->get('password')" class="mt-2" />

                      </div>
                      <div>
                      <label for="defaultFormControlInput" class="form-label">Confirm Password</label>
                        <input
                          type="password"
                          class="form-control"
                          name="password_confirmation"
                          placeholder="enter confirm password"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <x-input-error  :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

                      
                      </div>
                     
                      <br>
                      <button type="submit" class="btn btn-primary">Save</button>

                    </div>
                  </div>

                </form>
                
            </div>
              
            <div class="container-xxl flex-grow-1 container-p-y">
                <form action="{{ route('profile.destroy.admin') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('DELETE')
                 <div class="card">
                    <h5 class="card-header">Delete account</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{session('success')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                     
                      <div>
                        <label for="defaultFormControlInput" class="form-label"> {{ __('Are you sure you want to delete your account?') }}</label>
                       
                      </div>
                      <div>
                      <label for="defaultFormControlInput" class="form-label">Password</label>
                        <input
                          type="password"
                          class="form-control"
                          name="password"
                          placeholder="enter password"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />

                      </div>
                     
                      <br>
                      <button type="submit" class="btn btn-danger">Delete</button>

                    </div>
                  </div>

                </form>
                
            </div>
           
           

@endsection
