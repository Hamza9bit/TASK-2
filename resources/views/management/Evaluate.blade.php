@extends('management.layout')

@section('content')

<div style="height: 30px;"></div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Evaluate Employee</h2>
            </div>

            <div style="height: 10px;"></div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('management.index')}}">Back</a>
            </div>  
        </div>
    </div>

    @if($errors->any())

    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>
            @foreach($errors->all() as $error)
             
            <li>{{ $error }}</li>

            @endforeach

        </ul>
    </div>

    @endif

    <form action="{{ route('management.update',$management->id)}}" method="POST">

        @csrf

        @method('PUT')

        <div style="height: 20px;"></div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grade:</strong>

                    <input type="text" name="grade" value="{{ $management->grade }}" class="form-control" placeholder="A*">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Comment:</strong>

                    <input type="text" name="comment" value="{{ $management->comment }}" class="form-control" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
         </div>

    </form>

    @endsection
