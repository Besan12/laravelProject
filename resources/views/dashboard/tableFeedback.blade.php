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
                        <th>Profession</th>
                        <th>Message</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($feedbacks as $feedback)
                      <tr>
                        <td>{{$feedback->id}}</td>
                        <td> <img src="{{asset($feedback->img)}}" > </td>
                        <td>{{$feedback->name}}</td>
                        <td>{{$feedback->profession}}</td>
                        <td>{{$feedback->message}}</td>
                        <td>
                          <div class="d-flex align-items-center">
                            @if(empty($feedback->deleted_at))
                              <a href="{{URL::to('/editFeedback/' . $feedback->id)}}">
                            <button type="button" class="btn btn-success btn-sm btn-icon-text mr-3">
                              Edit
                            </button>
                              </a>
                            <a href="{{URL::to('/deleteFeedback/' . $feedback->id)}}">
                            <button type="button" class="btn btn-danger btn-sm btn-icon-text mr-3">
                              Delete
                            </button>
                            </a>
                            @else
                            <a href="{{URL::to('/restoreFeedback/' . $feedback->id)}}">
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
