@extends('layouts.dashboardMain')
@section('content')

@include('includes.includeCreateStatus')
@include('includes.includeErrors')

      <!-- partial -->
      <div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Create Course</h4>
                  <form class="forms-sample" method="post" action="{{URL::to('/storeCourse')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Description</label>
                      <input type="text" class="form-control" name="description" placeholder="Description">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Price</label>
                      <input type="text" class="form-control" name="price" placeholder="Price">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Rate</label>
                      <input type="text" class="form-control" name="rate" placeholder="Rate">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Number of Students</label>
                      <input type="text" class="form-control" name="students" placeholder="Number of students">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Teacher id</label>
                      <input type="text" class="form-control" name="teacher" placeholder="Teacher id">
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