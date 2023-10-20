@extends('admin.home')
@section('content')


 <div class="container-xxl flex-grow-1 container-p-y">
 <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Atricle /</span> table article </h4>
              @if(session('status'))
                <h6 class="alert alert-success text-center"> {{session('status')}}</h6>
              @endif
              @if($article->count()>0)
              <div class="card">
                <h5 class="card-header">Table articles</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                      <th>Name ar</th>
                        <th>Name en</th>
                        <th>Description ar</th>
                        <th>Description en</th>
                        <th>Writer ar</th>
                        <th>Writer en</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <tr>
                      @foreach ($article as $article)        
                  <tr>                   
                    <td>
                      @if( $article->ar_name == NULL)
                      ----- 
                      @else
                    <strong>{{$article->ar_name}}</strong>
                    @endif
                    </td>
                    <td>
                      @if( $article->en_name == NULL)
                      ----- 
                      @else
                    <strong>{{$article->en_name}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $article->ar_desciption == NULL)
                      ----- 
                      @else
                    <strong>{{$article->ar_desciption}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $article->en_desciption == NULL)
                      ----- 
                      @else
                    <strong>{{$article->en_desciption}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $article->ar_writer == NULL)
                      ----- 
                      @else
                    <strong>{{$article->ar_writer}}</strong>
                    @endif
                    </td>
                    <td>
                    @if( $article->en_writer == NULL)
                      ----- 
                      @else
                    <strong>{{$article->en_writer}}</strong>
                    @endif
                    </td>
                    <td>
                      <img src="{{url('uploads/images/article/'.$article->image_major)}}" alt="" width="60px" height="60px">
                    </td>
                   
                    <td>
                        <form action="{{route('edit_article', ['id' => $article->id])}}" method="GET">														
                          @csrf
                          
                          <button type="submit" class="btn btn-warning">Edit</button> 
                          </form>
                    </td>
                    <td>
                   
                      <form action="{{route('delete_article', ['id' => $article->id])}}" method="POST">														
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                    
                    </td>
              
                  </tr>
                  @endforeach         
                  

                    </tbody>
                  </table>
                </div>
               
              </div>
              @else
                <h4 class="text-center">No article yet</h4>
              @endif
            </div>

@endsection
