@extends('layouts.dashboardMain')
@section('content')

@include('includes.includeEditStatus')
@include('includes.includeErrors')

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Edit Course</h4>
                  <form class="forms-sample" method="post" action="{{URL::to('/updateCourse')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$course->id}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  value="{{$course->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="text" class="form-control" name="description" value="{{$course->description}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Price</label>
                      <input type="text" class="form-control" name="price" value="{{$course->price}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Rate</label>
                      <input type="text" class="form-control" name="rate" value="{{$course->rate}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Number of Students</label>
                      <input type="text" class="form-control" name="students" value="{{$course->students}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Teacher id</label>
                      <input type="text" class="form-control" name="teacher" value="{{$course->teacher_id}}">
                    </div>
                    <div class="form-group">
                      <div><label>Course Image</label></div>
                      <input type="file" name="img" >
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        
      </div>
      <!-- partial -->
@stop