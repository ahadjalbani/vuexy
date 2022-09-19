
@extends('layouts.backend.master')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Post Table</h4>
      </div>
      <div class="card-body">

      </div>


        <div class="alert-body">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">post has updated sucessfully</h4>
                <div class="alert-body">
               </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
           <a style="margin: 10px 10px; float:right;" class="btn btn-primary" href="{{ route('post.create')}}">Add</a>

          <thead>
            <tr>

              <th>NAME</th>
              <th>DETAILS</th>

              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>

                  <span class="fw-bold">{{$post->name}}</span>
                </td>
                <td>{{$post->detail}}</td>

                <td>

                    <form action="{{ route('post.destroy',$post->id) }}" method="POST">

                        <a href="{{route('post.edit',['post'=>$post])}}" class="btn btn-warning waves-effect waves-float waves-light">Edit</a>
                        @csrf
                        @method('DELETE')

                        <button type="submit" style="margin:right 10px; 25px;" class="btn btn-danger">Delete</button>
                    </form>
                </td>

              </tr>

            @endforeach

          </tbody>
        </table>
        <hr>
        {{$posts->links('pagination::bootstrap-4')}}
      </div>
    </div>
  </div>

@endsection
