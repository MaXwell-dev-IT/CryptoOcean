@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Crypto information /</span> Add information </h4>
                <form action="{{ route('store_info') }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('POST')
                 <div class="card">
                    <h5 class="card-header">Add information</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success text-center">
                            <p>{{session('success')}}</p>
                        </div>
                    @endif
 
                    <div class="card-body">
                      <div>
                        <label for="defaultFormControlInput" class="form-label">About ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_about"
                          placeholder="enter arabic about "
                          aria-describedby="defaultFormControlHelp"
                        />
                 
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">About en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_about"
                          placeholder="enter english about"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_name"
                          placeholder="enter arabic name "
                          aria-describedby="defaultFormControlHelp"
                        />
                 
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
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Phone 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="phone1"
                          placeholder="enter phone number"
                          aria-describedby="defaultFormControlHelp"
                        />
                 
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Phone 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="phone2"
                          placeholder="enter phone number"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Email 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="email1"
                          placeholder="enter email"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Email 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="email2"
                          placeholder="enter email"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">X 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="twitter1"
                          placeholder="enter X"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">X 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="twitter2"
                          placeholder="enter X"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Youtube</label>
                        <input
                          type="text"
                          class="form-control"
                          name="youtube"
                          placeholder="enter youtube"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 1</label>
                        <input
                          type="text"
                          class="form-control"
                          name="telegram1"
                          placeholder="enter telegram"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 2</label>
                        <input
                          type="text"
                          class="form-control"
                          name="telegram2"
                          placeholder="enter telegram"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Telegram 3</label>
                        <input
                          type="text"
                          class="form-control"
                          name="telegram3"
                          placeholder="enter telegram"
                          aria-describedby="defaultFormControlHelp"
                        />
               
                      </div>
                      
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        <input
                          type="file"
                          class="form-control"
                          name="logo"
                          aria-describedby="defaultFormControlHelp"
                        />
              
                      </div>
                     
                      <br>
                      <button type="submit" class="btn btn-primary">Add</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
