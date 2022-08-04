@extends('management.layout')

@section('content')

<div style="height: 30px;"></div>

<div class="row">
    <div class = "col-lg-12 margin-tb">
    <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('management.index')}}">Back</a>
            </div>  
    </div>
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
                <input type="text" name="email" class="form-control" placeholder="jhonappleased@mail.com">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address</strong>
                <input type="text" name="Address" class="form-control" placeholder="Address">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone</strong>
                <input type="text" name="Phone" class="form-control" placeholder="Phone">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div<>

</form>

@endsection
