
@extends('layouts.backend.master')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Table Basic</h4>
      </div>
      <div class="card-body">

      </div>


        <div class="alert-body">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">user has updated sucessfully</h4>
                <div class="alert-body">
               </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
           <a style="margin: 10px 10px; float:right;" class="btn btn-primary" href="{{ route('user.create')}}">Add</a>

          <thead>
            <tr>

              <th>NAME</th>
              <th>EMAIL</th>

              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
                <td>

                  <span class="fw-bold">{{$user->name}}</span>
                </td>
                <td>{{$user->email}}</td>

                <td>

                    <form action="{{ route('user.destroy',$user->id) }}" method="POST">

                        <a href="{{route('user.edit',['user'=>$user])}}" class="btn btn-warning waves-effect waves-float waves-light">Edit</a>
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
        {{$users->links('pagination::bootstrap-4')}}
      </div>
    </div>
  </div>

@endsection
