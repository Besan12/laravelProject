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
                        <th>Job</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($teachers as $teacher)
                      <tr>
                        <td>{{$teacher->id}}</td>
                        <td> <img src="{{asset($teacher->img)}}" > </td>
                        <td>{{$teacher->name}}</td>
                        <td>{{$teacher->job}}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            @if(empty($teacher->deleted_at))
                              <a href="{{URL::to('/editTeacher/' . $teacher->id)}}">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                            </button>
                              </a>
                            <a href="{{URL::to('/deleteTeacher/' . $teacher->id)}}">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            @else
                            <a href="{{URL::to('/restoreTeacher/' . $teacher->id)}}">
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
