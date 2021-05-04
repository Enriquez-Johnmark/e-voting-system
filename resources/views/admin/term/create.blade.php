<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>

		

	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="row">
	<div class="col-md-6">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						New Terms and Conditions
					</h3>
				</div>
			</div>
			<!--begin::Form-->
			<form class="kt-form" method="post" action="{{ route('term.store')}}" enctype="multipart/form-data">
				<div class="kt-portlet__body">
                  <br>
                  <div class="form-group row" style="margin-bottom: 20px;">
                      @csrf
                      <label for="example-text-input" class="col-3 col-form-label">Terms and Condition:*</label>
                      <div class="col-8">
                      <textarea class="form-control" name="description"></textarea>                      
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
			
			
</body>

 <script src="{{ asset('./assets/js/demo1/pages/crud/file-upload/dropzonejs.js')}}"></script>
  <script src="{{ asset ('./assets/js/demo1/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
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

			





















