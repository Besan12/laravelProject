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
                  <h4 class="card-title">Create Teacher</h4>
                  <form class="forms-sample" method="post" action="{{URL::to('/storeTeacher')}}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" name="name"  placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Job</label>
                      <input type="text" class="form-control" name="job" placeholder="Job">
                    </div>
                    <div class="form-group">
                      <div><label>Teacher Image</label></div>
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