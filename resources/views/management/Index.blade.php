@extends('management.layout')

@section('content') 

<div class="p-3 mb-2 bg-dark text-white">

<div style="height: 30px;"></div>

<div class = "float-left">
    <h2>&nbsp&nbspEmployee Evaluation Management System&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </h2>
</div>

<div class = "row" style="height: 80px;">
    <div class = "col-lg-12 margin-t8b">

        <div class = "float-left" >

        <a class = "btn btn-success" href="{{route('management.create') }}"> Add New Employee</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
  
    <div class="alert alert-success">
        
        <p>{{$message}}</p>
    </div>

@endif

<table class="table table-bordered table-dark">

    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Job Title</th>  
        <th>Grade</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($management as $management)

    <tr>
        <td>{{++$i}}</td>
        <td>{{$management->name}}</td>
        <td>{{$management->email}}</td>
        <td>{{$management->Phone}}</td>
        <td>{{$management->job_title}}</td>
        <td>{{$management->grade}}</td>
        <td>
            <form action="{{ route('management.destroy',$management->id) }}" method = "POST">

                  <!-- <a class="btn btn-info" href="{{ route('management.show', $management->id) }}">View</a> -->

                  <a class="btn btn-primary" href="{{ route('management.edit', $management->id) }}">Edit</a>

                  <a class="btn btn-warning" href="{{ route('management.show', $management->id) }}">Evaluate</a>

                  @csrf

                  @method('DELETE') 

                  <button type="submit" class = "btn btn-danger">Delete</button>

            </form>
          </td>
    </tr>

    @endforeach

</table>
</div>


