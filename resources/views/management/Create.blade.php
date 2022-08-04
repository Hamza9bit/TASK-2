@extends('management.layout')

@section('content')

<div class="text-white">
<div style="height: 700px; width:500px; background-color:#52617F;">

<div style="color: Black; position: absolute; top: 15px; left: 20px; margin: 0;">
        <a class="btn btn-secondary" href="{{ route('management.index')}}">Back</a>
 </div> 

<div style="height: 60px;"></div>

<div class="row">
    <div class = "col-lg-12 margin-tb">
</div>

@if ($errors->any())

    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
        </ul>
    </div>

@endif

<form action="{{ route('management.store')}}" method="POST">

    @csrf

    <div style="height: 30px;"></div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Employee Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email</strong>
                <input type="text" name="email" class="form-control" placeholder="johnappleased@mail.com">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address</strong>
                <input type="text" name="Address" class="form-control" placeholder="House no#..">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone</strong>
                <input type="text" name="Phone" class="form-control" placeholder="+92-XXX-XXXXXXX">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Job Title</strong>
                <input type="text" name="job_title" class="form-control" placeholder="Admin etc.">
            </div>
        </div>

        <div style="height: 30px;"></div>

        <div class="col-xs-12 col-sm-11 col-md-12">
            <button type="submit" class="btn btn-dark">  Submit</button>
        </div>
    </div<>

</form>

@endsection
