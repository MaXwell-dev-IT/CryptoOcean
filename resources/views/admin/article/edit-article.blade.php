@extends('admin.home')
@section('content')


            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Article /</span> Edit article </h4>
              

                 <div class="card">

                    <h5 class="card-header">Edit article</h5>
                    @if ($message = Session::get('status'))
                        <div class="alert alert-success text-center">
                            <p>{{session('status')}}</p>
                        </div>
                    @endif

                    @if (count($article->images)>0)
                
                @foreach ($article->images as $img)
                <div style="display: flex;">
                <form action="{{  route('delete_image', ['id' => $img->id]) }}" method="post">
                    <button class="btn text-danger">X</button>
                    @csrf
                    @method('delete')
                    </form> 

                    <img src="{{asset('uploads/images/article/'.$img ->image)}}" class="img-responsive" style="max-height: 100px; max-width: 100px;" alt="" srcset=""> <br>
               
                    </div>
                    @endforeach
                @endif
                <form action="{{ route('update_article', ['id' => $article->id]) }}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PUT')
          
                    <div class="card-body">
                    <div>
                        <label for="defaultFormControlInput" class="form-label">Name ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_name"
                          value="{{$article->ar_name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                   
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Name en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_name"
                          value="{{$article->en_name}}"
                          aria-describedby="defaultFormControlHelp"
                        />
         
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Description ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_desciption"
                          value="{{$article->ar_desciption}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                 
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Description en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_desciption"
                          value="{{$article->en_desciption}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                  
                      </div>

                      <div>
                        <label for="defaultFormControlInput" class="form-label">Writer ar</label>
                        <input
                          type="text"
                          class="form-control"
                          name="ar_writer"
                          value="{{$article->ar_writer}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Writer en</label>
                        <input
                          type="text"
                          class="form-control"
                          name="en_writer"
                          value="{{$article->en_writer}}"
                          aria-describedby="defaultFormControlHelp"
                        />
                
                      </div>
                      <div>
                        <label for="defaultFormControlInput" class="form-label">Image</label>
                        <input
                          type="file"
                          class="form-control"
                          name="image_major"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <br>
                        <img src="{{url('uploads/images/article/'.$article->image_major)}}" alt="" width="60px" height="60px">

                     
                      </div>
                      <div >
                            <label for="">Pictures (multiple article pictures can be selected)</label>
                            <input class="form-control" name="images[]" multiple type="file"/>
                          
                        </div>
                     
                

                      
                   

                      <br>
                      <button type="submit" class="btn btn-primary">update</button>

                    </div>
                  </div>

                </form>
                
            </div>
           

@endsection
