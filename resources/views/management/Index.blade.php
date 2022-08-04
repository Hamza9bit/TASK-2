@extends('management.layout')

@section('content') 

<div class="text-white">
<div style="height: 3840px; width:1540px; background-color:#52617F;">

<div style="height: 30px;"></div>

<div style="position: absolute; top: 15px; left: 40px; margin: 0;">
    <h2>Employee Evaluation Management System
    </h2>
</div>

<div class = "row" style="height: 80px;">
    <div class = "col-lg-12 margin-t8b">

        <div style="position: absolute; top: 15px; right: 87px; margin: 0;">

        <a class = "btn btn-light" href="{{route('management.create') }}"> Add New Employee</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
  
    <div class="alert alert-success" style="height:55px; width:300px; top: 0px; left: 35px;">
        <p>{{$message}}</p>
    </div>

@endif

<table class="table table-bordered text-white" style="width:95%; position: absolute; top: 190px; left: 35px; margin: 0;">
<thead style="background-color:#272E3C;">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Job Title</th>  
        <th>Grade</th>
        <th width="250px">Action</th>
    </tr>
</thead>

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

                  <a class="btn btn-secondary" href="{{ route('management.edit', $management->id) }}">Edit</a>

                  <a class="btn btn-dark" href="{{ route('management.show', $management->id) }}">Evaluate</a>

                  @csrf

                  @method('DELETE') 

                  <button type="submit" class = "btn btn-danger">Delete</button>
            </form>
          </td>
    </tr>

    @endforeach

</table>
</div>


