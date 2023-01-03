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
                  <h4 class="card-title">Edit Category</h4>
                  <form class="forms-sample" method="post" action="{{URL::to('/updateCategory')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" name="id" value="{{$category->id}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  value="{{$category->name}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Number of courses</label>
                      <input type="text" class="form-control" name="courses" value="{{$category->courses}}">
                    </div>
                    <div class="form-group">
                      <div><label>Category Image</label></div>
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