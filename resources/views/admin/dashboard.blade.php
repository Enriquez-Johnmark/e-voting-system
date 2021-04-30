@extends('layouts.template')
@section('pageTitle','Dashboard')
@section('content')
<!-- <h3 style="margin-bottom:50px;margin-left:25px;">Dashboard</h3> -->
  <div class="kt-subheader   kt-grid__item" id="kt_subheader">
    <div class="kt-container  kt-container--fluid ">
                        <div class="kt-subheader__main">

                        <h3 class="kt-subheader__title">
                            Dashboard                           
                        </h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>
                        </div>
                           
    </div>
  </div>
	
  <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
														
					<!-- begin:: Content -->
				<h1 style="margin-left:25px;">Welcome to Admin Panel</h1>
        <br><br><br>
        <h1 style="margin-left:25px;">Results:</h1>
        @if($results->isNotEmpty())
        <table class="table table-striped- table-bordered table-hover table-checkable" style="width:50%;margin-left:20px;">
          <thead>
            <tr>
              <th>Candidate Name</th>
              <th>Number of Votes</th>
            </tr>
          </thead>
          <tbody>
            @foreach($results as $result)
          <tr>
              <td>{{$result->firstname}} {{$result->lastname}}</td>
              <td>{{$result->votes_count}}</td>
            </tr>
           @endforeach 
          </tbody>
          </table>
        @else
        <h1 style="margin-left:20px;">No Data Available</h1>
        @endif

       
       
<!-- end:: Content -->				</div>





@endsection
