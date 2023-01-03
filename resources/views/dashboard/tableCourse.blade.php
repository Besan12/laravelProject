@extends('layouts.dashboardMain')
@section('content')

      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="table-responsive pt-3">
                <table class="table table-striped project-orders-table">
                    <thead>
                      <tr>
                        <th class="ml-5">ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>price</th>
                        <th>Rate</th>
                        <th>No. Students</th>
                        <th>Description</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $course)
                      <tr>
                      <td>{{$course->id}}</td>
                      <td> <img src="{{asset($course->img)}}" > </td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->price}}</td>
                        <td>{{$course->rate}}</td>
                        <td>{{$course->students}}</td>
                        <td>{{$course->description}}</td>
                        
                        <td>
                          <div class="d-flex align-items-center">
                            @if(empty($course->deleted_at))
                              <a href="{{URL::to('/editCourse/' . $course->id)}}">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                            </button>
                              </a>
                            <a href="{{URL::to('/deleteCourse/' . $course->id)}}">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            @else
                            <a href="{{URL::to('/restoreCourse/' . $course->id)}}">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text">
                              Restore
                            </button>
                            </a>
                            @endif
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

 @stop
