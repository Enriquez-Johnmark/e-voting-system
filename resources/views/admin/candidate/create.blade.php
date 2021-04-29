<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>

		

	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-md-7">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						New Candidate
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form" method="post" action="{{ route('candidate.store')}}" enctype="multipart/form-data">
				<div class="kt-portlet__body">
                  <br>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      @csrf
                      <label for="example-text-input" class="col-3 col-form-label">First Name:*</label>
                      <div class="col-8">
                          <input class="form-control" name="firstname" type="text" placeholder="Input First Name" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Last Name:*</label>
                      <div class="col-8">
                          <input class="form-control" name="lastname" type="text" placeholder="Input Last Name" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Grade & Section:*</label>
                      <div class="col-8">
                          <input class="form-control" name="grade_section" type="text" placeholder="Input Grade & Section" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Zodiac Sign:*</label>
                      <div class="col-8">
                          <input class="form-control" name="zodiac_sign" type="text" placeholder="Input Zodiac Sign" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Height:*</label>
                      <div class="col-8">
                          <input class="form-control" name="height" type="text" placeholder="Input Height" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Weight:*</label>
                      <div class="col-8">
                          <input class="form-control" name="weight" type="text" placeholder="Input Weight" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      <label for="example-text-input" class="col-3 col-form-label">Blood Type:*</label>
                      <div class="col-8">
                          <input class="form-control" name="blood_type" type="text" placeholder="Input Blood Type" required="">
                      </div>
                  </div>
                  <div class="form-group row" style="margin-bottom: 20px;">
                        <label for="motto" class="col-3 col-form-label">Motoo:</label>
                        <div class="col-8">
                          <textarea class="form-control" name="motto" id="motto"></textarea>
                        </div>
                  </div>
                  
                  <div class="form-group row">
                    <label class="col-3 col-form-label">Category</label>
                    <div class="col-8">
                    <div class="kt-radio-inline">
                      <label class="kt-radio">
                        <input type="radio" name="category" value="male"> Male
                        <span></span>
                      </label>
                      <label class="kt-radio">
                        <input type="radio" name="category" value="female"> Female
                        <span></span>
                      </label>
                    </div>
                    </div>
                  </div>
                  <div class="form-group row">
                      <label class="col-3 col-form-label">Date of Birth:*</label>
                      <div class="col-8">
                        <div class="input-group date">
                          <input type="text" class="form-control" name="date_of_birth" readonly="" placeholder="Select date" id="kt_datepicker_3" required="">
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
			
			
</body>

 <script src="{{ asset('./assets/js/demo1/pages/crud/file-upload/dropzonejs.js')}}"></script>
  <script src="{{ asset ('./assets/js/demo1/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
  <script src="./assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
  <script>  
  	$('.my-select').select2({
                
            });
  </script>

<!-- Script Factory - Factory Series Dynamic Dependent -->
<!-- <script>
	 $('#factories').on('change', function(e){
    console.log(e);
    var factory_id = e.target.value;
    $.get('inventory/json-series?factory_id=' + factory_id,function(data) {
      console.log(data);
      $('#series').empty();
      $('#series').append('<option value="0" disabled selected="">Select a Series</option>');

       $.each(data, function(index, seriesObj){
        $('#series').append('<option value="'+ seriesObj.id +'">'+ seriesObj.series_name +'</option>');
      })
    });
  });
</script> -->
<!-- End:: -->

<!--  -->
<!-- <script>
	$('#categories').on('change', function(e){
    console.log(e);
    var category_id = e.target.value;
    $.get('inventory/json-subCategories?category_id=' + category_id,function(data) {
      console.log(data);
      $('#subcategories').empty();
      $('#subcategories').append('<option value="0" disabled selected="">Select a Sub Category</option>');

       $.each(data, function(index, subCatObj){
        $('#subcategories').append('<option value="'+ subCatObj.id +'">'+ subCatObj.sub_category_name +'</option>');
      })
    });
  });

</script> -->
<!-- <script>

 $(document).ready(function () {
  $('#mask-price')
    .inputmask( "9,999,999.99",{
     numericInput: !0
  });
})

</script> -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


<!-- <script>
// Warning before leaving the page (back button, or outgoinglink)
window.onbeforeunload = function() {
   return "";
   //if we return nothing here (just calling return;) then there will be no pop-up question at all
   //return;
};

</script> -->






</html>

			





















