@extends('layouts.template')
@section('pageTitle','Products')
@section('content')
<div class="kt-subheader   kt-grid__item" id="kt_subheader">
<div class="kt-container  kt-container--fluid ">
                    <div class="kt-subheader__main">

                            <h3 class="kt-subheader__title">
                                Products               
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
            Edit Election Title
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form" method="post" action="{{ route('title.update', $electionTitle->id)}}" enctype="multipart/form-data">
				<div class="kt-portlet__body">
                  <br>
                  <div class="form-group row" style="margin-bottom: 20px;">
                    @csrf
                    @method('PUT')
                      <label for="example-text-input" class="col-3 col-form-label">Edit Election Title:*</label>
                      <div class="col-8">
                          <input class="form-control" name="name" value="{{$electionTitle->name}}" type="text" placeholder="Election Title" required="">
                      </div>
                  </div>
                </div>
                <br>
                <br>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="submit" class="btn btn-primary">Save</button>
						
						<a href="{{ route('title')}}"  class="btn btn-danger" title="Cancel">
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




@endsection
