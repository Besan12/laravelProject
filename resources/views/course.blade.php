@extends('layouts.main')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Courses</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="{{URL::to('/')}}">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Courses</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


@include('includes.includeCategory' , ['categories', $categories])
    <div class="paginate">
        {{$categories->links()}}
    </div>

@include('includes.includeCourse' , ['courses', $courses])
    <div class="paginate">
        {{$courses->links()}}
    </div>
    
@stop