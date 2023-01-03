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
                        <th>Description</th>
                        <th>Created</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($blogs as $blog)
                      <tr>
                        <td>{{$blog->id}}</td>
                        <td> <img src="{{asset($blog->img)}}" > </td>
                        <td>{{$blog->name}}</td>
                        <td>{{$blog->description}}</td>
                        <th>{{$blog->created_at}}</th>
                        <td>
                          <div class="d-flex align-items-center">
                            @if(empty($blog->deleted_at))
                              <a href="{{URL::to('/editBlog/' . $blog->id)}}">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                            </button>
                              </a>
                            <a href="{{URL::to('/deleteBlog/' . $blog->id)}}">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            @else
                            <a href="{{URL::to('/restoreBlog/' . $blog->id)}}">
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
