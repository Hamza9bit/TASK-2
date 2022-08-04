@extends('management.layout')

@section('content')

<div class="text-white">
<div style="height: 1000px; width:700px; background-color:#52617F;">

<div style="color: Black; position: absolute; top: 15px; left: 20px; margin: 0;">
        <a class="btn btn-secondary" href="{{ route('management.index')}}">Back</a>
 </div> 

<div style="height: 60px;"></div>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left" >
                <h2><strong>Employee Evaluation</strong></h2>
            </div>

            <div style="height: 10px;"></div>

             
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

        <div style="height: 10px;"></div>

        <div style="color: white; font-size: 20px; position: absolute; top: 160px; left: 540px; margin: 0;"><strong>Poor</strong></div>

        <div style="color: white; font-size: 20px; position: absolute; top: 160px; left: 750px; margin: 0;"><strong>Excellent</strong></div>



        <div style="font-size: 20px; position: absolute; top: 220px; left: 220px;" ><strong>Work Quality</strong></div>

        
        <div style="height: 40px; position: absolute; top: 220px; left: 555px; margin: 0">
            
               <label class="radio-inline">
                 <input type="radio" id="smt-fld-1-2" value="{{ $management->Report1 }}" name="Report1"></label>

        </div>         
        <div style="height: 40px; position: absolute; top: 220px; left: 785px; margin: 0">
     
                <label class="radio-inline">
                <input type="radio" id="smt-fld-1-3" value="{{ $management->Report1 }}" name="Report1"></label>
            

        </div>

        <div style="font-size: 20px; position: absolute; top: 280px; left: 220px;" ><strong>Team Work</strong></div>

        
        <div style="height: 40px; position: absolute; top: 280px; left: 555px; margin: 0">
            
               <label class="radio-inline">
                 <input type="radio" id="smt-fld-1-2" value="{{ $management->Report2 }}" name="Report2"></label>

        </div>         
        <div style="height: 40px; position: absolute; top: 280px; left: 785px; margin: 0">
     
                <label class="radio-inline">
                <input type="radio" id="smt-fld-1-3" value="{{ $management->Report2 }}" name="Report2"></label>
            

        </div>

        <div style="font-size: 20px; position: absolute; top: 340px; left: 220px;" ><strong>Time Management</strong></div>

        
        <div style="height: 40px; position: absolute; top: 340px; left: 555px; margin: 0">
            
               <label class="radio-inline">
                 <input type="radio" id="smt-fld-1-2" value="{{ $management->Report3 }}" name="Report3"></label>

        </div>         
        <div style="height: 40px; position: absolute; top: 340px; left: 785px; margin: 0">
     
                <label class="radio-inline">
                <input type="radio" id="smt-fld-1-3" value="{{ $management->Report3 }}" name="Report3"></label>
            

        </div>

        <div style="font-size: 20px; position: absolute; top: 400px; left: 220px;" ><strong>Communication Skills</strong></div>

        
        <div style="height: 40px; position: absolute; top: 400px; left: 555px; margin: 0">
            
               <label class="radio-inline">
                 <input type="radio" id="smt-fld-1-2" value="{{ $management->Report4}}" name="Report4"></label>

        </div>         
        <div style="height: 40px; position: absolute; top: 400px; left: 785px; margin: 0">
     
                <label class="radio-inline">
                <input type="radio" id="smt-fld-1-3" value="{{ $management->Report4 }}" name="Report4"></label>
            

        </div>

        <div style="font-size: 20px; position: absolute; top: 460px; left: 220px;" ><strong>Creativity</strong></div>

        
        <div style="height: 40px; position: absolute; top: 460px; left: 555px; margin: 0">
            
               <label class="radio-inline">
                 <input type="radio" id="smt-fld-1-2" value="{{ $management->Report5 }}" name="Report5"></label>

        </div>         
        <div style="height: 40px; position: absolute; top: 460px; left: 785px; margin: 0">
     
                <label class="radio-inline">
                <input type="radio" id="smt-fld-1-3" value="{{ $management->Report5 }}" name="Report5"></label>
            

        </div>

        <div class="form-group form-control-lg">

            <div style="height: 400px;"></div>

            <div class="form-group">
             <label><strong>Grade</strong></label>
            <select class="form-control" name="grade">
             <option selected>{{$management->grade}}</option>   <!--{{$management->grade}} to return the value stored in the database -->
             <option value="A*">A*  -  Employee of the Month</option>
             <option value="A">A  -  Excellent</option>
             <option value="B">B  -  Good</option>
             <option value="C">C  -  Average</option>
             <option value="D">D  -  Poor</option>
             <option value="F">F  -  Employee Probation</option>
            </select>
             <small class="form-text">Employee Overall Grading</small>
            </div>

        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <div style="color: white; font-size: 19px;"><strong>Comment</strong></div>
                    <div style="height: 8px;"></div>

                    <textarea name="comment" value="{{ $management->comment }}" id="comment" 
                     class="form-control" rows="5" placeholder="{{$management->comment}}">{{$management->comment}}</textarea>
                    
                </div>
            </div>

           

            <div class="col-xs-12 col-sm-12 col-md-12">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
            
         </div>

         
    </form>

    @endsection
