@extends('layouts.template')
@section('pageTitle','Candidate')
@section('content')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
<div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">

                            <h3 class="kt-subheader__title">
                                Candidate               
        </h3>

                            <span class="kt-subheader__separator kt-subheader__separator--v"></span>


                        </div>
                        
                    </div>
</div>
            <div id="product_content"> 
            <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-md-6">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
            Edit Candidate
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form" method="post" action="{{ route('candidate.update',$candidate->id)}}" enctype="multipart/form-data">
				<div class="kt-portlet__body">
                  <br>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      @csrf
                      @method('PUT')
                      <label for="example-text-input" class="col-3 col-form-label">First Name:*</label>
                      <div class="col-8">
                          <input class="form-control" name="firstname" value="{{$candidate->firstname}}" type="text" placeholder="Input First Name" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Last Name:*</label>
                      <div class="col-8">
                          <input class="form-control" name="lastname" value="{{$candidate->lastname}}" type="text" placeholder="Input Last Name" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Grade & Section:*</label>
                      <div class="col-8">
                          <input class="form-control" name="grade_section" value="{{$candidate->grade_section}}" type="text" placeholder="Input Grade & Section" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Zodiac Sign:*</label>
                      <div class="col-8">
                          <input class="form-control" name="zodiac_sign" value="{{$candidate->zodiac_sign}}" type="text" placeholder="Input Zodiac Sign" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Height:*</label>
                      <div class="col-8">
                          <input class="form-control" name="height" type="text" value="{{$candidate->height}}" placeholder="Input Height" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Weight:*</label>
                      <div class="col-8">
                          <input class="form-control" name="weight" type="text" value="{{$candidate->weight}}" placeholder="Input Weight" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Blood Type:*</label>
                      <div class="col-8">
                          <input class="form-control" name="blood_type" type="text" value="{{$candidate->blood_type}}" placeholder="Input Blood Type" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                        <label for="motto" class="col-3 col-form-label">Motoo:</label>
                        <div class="col-8">
                          <textarea class="form-control" name="motto" id="motto">{{$candidate->motto}}</textarea>
                        </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-3 col-form-label">Category</label>
                    <div class="col-8">
                    <div class="kt-radio-inline">
                      <label class="kt-radio">
                        <input type="radio" name="category" value="male" {{ $candidate->category == 'male' ? 'checked' : ''}}> Male
                        <span></span>
                      </label>
                      <label class="kt-radio">
                        <input type="radio" name="category" value="female" {{ $candidate->category =='female' ? 'checked' : ''}}> Female
                        <span></span>
                      </label>
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-3 col-form-label">Date of Birth:*</label>
                      <div class="col-8">
                        <div class="input-group date">
                          <input type="text" class="form-control date" value="{{$candidate->date_of_birth}}" name="date_of_birth" readonly="" placeholder="Select date" id="kt_datepicker_3" required="">
                          <div class="input-group-append">
                            <span class="input-group-text">
                              <i class="la la-calendar-check-o"></i>
                            </span>
                          </div>
                        </div>
                      </div>
			            </div>
                  <div class="form-group row">
                      <label class="col-3 col-form-label">Picture:</label>
                        <div class="col-8" style="margin-top: 5px;">
                        <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required="">
                        <br>
                        <h6>Image Old Value:</h6>
                        <img src="{{ asset('/images/backend_images/products/large/'.$candidate->image) }}" style="width:70px;">

                      </div>
                  </div>
                </div>
                <br>
                <br>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Save</button>
						
						<a href="{{ route('candidate')}}"  class="btn btn-danger" title="Cancel">
                                                         Cancel 
                                                        </a>
					</div>
				</div>
				</form>
			
			<!--end::Form-->			
		</div>
		<!--end::Portlet-->

		<!--begin::Portlet-->
	
		<!--end::Portlet-->
	</div>
	

</div>	
</div>
                </div>
@push('scripts')



@endpush



@endsection
