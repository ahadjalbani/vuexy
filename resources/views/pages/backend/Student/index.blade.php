
@extends('layouts.backend.master')

@section('content')

<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Student Data</h4>
      </div>
      <div class="card-body">

      </div>


        <div class="alert-body">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">student has updated sucessfully</h4>
                <div class="alert-body">
               </div>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table">
           <a style="margin: 10px 10px; float:right;" class="btn btn-primary" href="{{ route('student.create')}}">Add</a>

          <thead>
            <tr>

              <th>NAME</th>
              <th>EMAIL</th>
              <th>PROGRAM</th>
              <th>UNIVERSITY</th>
              <th>IMAGE</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($students as $student)
            <tr>
                <td>

                  <span class="fw-bold">{{$student->name}}</span>
                </td>
                <td>{{$student->email}}</td>
                <td>
                <span class="fw-bold">{{$student->program}}</span>
                </td>
                <td> <span class="fw-bold">{{$student->university}}</td>

    <td><img src="{{asset('/images/'. $student->image) }}" width="100px"></td>

                <td>

                    <form action="{{ route('student.destroy',$student->id) }}" method="POST">

                        <a href="{{route('student.edit',['student'=>$student])}}" class="btn btn-warning waves-effect waves-float waves-light">Edit</a>
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
        {{$students->links('pagination::bootstrap-4')}}
      </div>
    </div>
  </div>

@endsection
