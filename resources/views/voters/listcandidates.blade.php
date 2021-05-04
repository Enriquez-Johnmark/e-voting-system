
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link href="./assets/css/demo1/pages/wizard/wizard-1.css" rel="stylesheet" type="text/css" />
</head>


<body>

<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<div class="kt-portlet">
	<div class="kt-portlet__body kt-portlet__body--fit">
		<div class="kt-grid  kt-wizard-v1 kt-wizard-v1--white" id="kt_wizard_v1" data-ktwizard-state="first">
			<div class="kt-grid__item">
                <br><br>
                <center><h1>{{$allTitles[0]->name}}</h1>
                <br><br>
				<!--begin: Form Wizard Nav -->
				<div class="kt-wizard-v1__nav">
					<div class="kt-wizard-v1__nav-items">
						<!--doc: Replace A tag with SPAN tag to disable the step link click -->
						<a class="kt-wizard-v1__nav-item" href="javascript:void(0);" data-ktwizard-type="step" data-ktwizard-state="current">
							<div class="kt-wizard-v1__nav-body">
								<div class="kt-wizard-v1__nav-icon">
									<i class="flaticon-avatar"></i>
								</div>
								<div class="kt-wizard-v1__nav-label">
									1. Female Category
								</div>
							</div>
						</a>
						
						
						<a class="kt-wizard-v1__nav-item" href="javascript:void(0);" data-ktwizard-type="step" data-ktwizard-state="pending">
							<div class="kt-wizard-v1__nav-body">
								<div class="kt-wizard-v1__nav-icon">
									<i class="flaticon-avatar"></i>
								</div>
								<div class="kt-wizard-v1__nav-label">
									2. Male Category
								</div>
							</div>
						</a>
						<a class="kt-wizard-v1__nav-item" href="javascript:void(0);" data-ktwizard-type="step" data-ktwizard-state="pending">
							<div class="kt-wizard-v1__nav-body">
								<div class="kt-wizard-v1__nav-icon">
									<i class="flaticon-globe"></i>
								</div>
								<div class="kt-wizard-v1__nav-label">
									3.Terms and Conditions
								</div>
							</div>
						</a>
					</div>
				</div>
				<!--end: Form Wizard Nav -->

			</div>
			<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v1__wrapper">
				<!--begin: Form Wizard Form-->
				<form  onsubmit="window.location.reload();" class="kt-form" action="{{route('vote.store')}}" method="post" id="kt_form" novalidate="novalidate">
					<!--begin: Form Wizard Step 1-->
                    @csrf
					<div class="kt-wizard-v1__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
						<div class="kt-heading kt-heading--md">Female Category:</div>
						<div class="kt-form__section kt-form__section--first">
                     @foreach($allFemales as $female)     
                     <br><br>  
			<div class="kt-widget kt-widget--user-profile-3">
               <div class="kt-widget__top">
                   <div class="kt-widget__media kt-hidden-">
                       <img src="{{ asset('/storage/pictures/'.$female->image) }}" alt="image">
                   </div>
                   <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                       
                   </div>
                   <div class="kt-widget__content">
                       <div class="kt-widget__head">
                           <a href="javascript:void(0);" class="kt-widget__username">
                           {{$female->firstname}} {{$female->lastname}}
                               <i class="flaticon2-correct kt-font-success"></i>                       
                           </a>
   
                           <div class="kt-widget__action">
                           <div class="kt-radio-inline">
                            
                             <label class="kt-radio kt-radio--bold kt-radio--brand">
                               <input type="radio" name="candidate_id" value="{{$female->id}}" required=""> <h3><b>Vote</b></h3>
                               <span></span>
                             </label>
                             
                           </div>
                           </div>
                       </div>
   
                      
   
                       <div class="kt-widget__info">
                         
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Grade & Section:
                               </div>
                               <div class="kt-widget__text">
                                   {{$female->grade_section}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   BirthDay:
                               </div>
                               <div class="kt-widget__text">
                                   {{$female->date_of_birth}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Height:
                               </div>
                               <div class="kt-widget__text">
                                   {{$female->height}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Weight:
                               </div>
                               <div class="kt-widget__text">
                                   {{$female->weight}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Blood Type:
                               </div>
                               <div class="kt-widget__text">
                                   {{$female->blood_type}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Motto:
                               </div>
                               <div class="kt-widget__text">
                                   {{$female->motto}}
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           @endforeach
						</div>
					</div>
					<!--end: Form Wizard Step 1-->

					<!--begin: Form Wizard Step 2-->
					
					<!--end: Form Wizard Step 2-->

					<!--begin: Form Wizard Step 3-->
					
					<!--end: Form Wizard Step 3-->

					<!--begin: Form Wizard Step 4-->
					<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
						<div class="kt-heading kt-heading--md">Male Category:</div>
						<div class="kt-form__section kt-form__section--first">
							<div class="kt-wizard-v1__form">
                            @foreach($allMales as $male)     
                     <br><br>  
			<div class="kt-widget kt-widget--user-profile-3">
               <div class="kt-widget__top">
                   <div class="kt-widget__media kt-hidden-">
                       <img src="{{ asset('/storage/pictures/'.$male->image) }}" alt="image">
                   </div>
                   <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                       
                   </div>
                   <div class="kt-widget__content">
                       <div class="kt-widget__head">
                           <a href="javascript:void(0);" class="kt-widget__username">
                           {{$male->firstname}} {{$male->lastname}}
                               <i class="flaticon2-correct kt-font-success"></i>                       
                           </a>
   
                           <div class="kt-widget__action">
                           <div class="kt-radio-inline">
                            
                             <label class="kt-radio kt-radio--bold kt-radio--brand">
                               <input type="radio" name="male_id" value="{{$male->id}}" required=""> <h3><b>Vote</b></h3>
                               <span></span>
                             </label>
                             
                           </div>
                           </div>
                       </div>
   
                      
   
                       <div class="kt-widget__info">
                         
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Grade & Section:
                               </div>
                               <div class="kt-widget__text">
                                   {{$male->grade_section}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   BirthDay:
                               </div>
                               <div class="kt-widget__text">
                                   {{$male->date_of_birth}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Height:
                               </div>
                               <div class="kt-widget__text">
                                   {{$male->height}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Weight:
                               </div>
                               <div class="kt-widget__text">
                                   {{$male->weight}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Blood Type:
                               </div>
                               <div class="kt-widget__text">
                                   {{$male->blood_type}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Motto:
                               </div>
                               <div class="kt-widget__text">
                                   {{$male->motto}}
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
           @endforeach
								
							</div>
						</div>
					</div>
					<!--end: Form Wizard Step 4-->

					<!--begin: Form Wizard Step 5-->
					<div class="kt-wizard-v1__content" data-ktwizard-type="step-content">
						<div class="kt-heading kt-heading--md">Terms and Conditions:</div>
						<div class="kt-form__section kt-form__section--first">
						@foreach($allTerms as $term)
						<p style="font-size:14px;">{{$term->description}}</p>
						@endforeach
						</div>
						
                        <br><br>
                        <div class="kt-radio-list">
                               <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" >
								<input type="checkbox" id="checkme"> I agree to the Terms and Conditions.
								<span></span>
                                </label>
                        </div>
					</div>
					<!--end: Form Wizard Step 5-->

					<!--begin: Form Actions -->
					<div class="kt-form__actions">
						<button class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
							Previous
						</button>
						<button id="sendNewSms" class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-submit" disabled="">
							Submit Vote
                        </button>
						<button class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"  data-ktwizard-type="action-next">
							Next Step
						</button>
					</div>
					<!--end: Form Actions -->
				</form>
				<!--end: Form Wizard Form-->
			</div>
		</div>
	</div>
</div>
	</div>

      

			
			
</body>
<!-- <script src="./assets/js/demo1/pages/wizard/wizard-1.js" type="text/javascript"></script> -->
    <script>
         var checker = document.getElementById('checkme');
        var sendbtn = document.getElementById('sendNewSms');
        // when unchecked or checked, run the function
        checker.onchange = function(){
        if(this.checked){
            sendbtn.disabled = false;
        } else {
            sendbtn.disabled = true;
        }

        }
    </script>

<script>
       $(document).ready(function(){
  $('#sendNewSms').on('click',function(){
     $('#form1').submit();
     $('#form2').submit();

   });

});
    </script>
 <script src="{{ asset('./assets/js/demo1/pages/crud/file-upload/dropzonejs.js')}}"></script>
 <script src="./assets/js/demo1/pages/wizard/wizard-3.js" type="text/javascript"></script>
  <script src="{{ asset ('./assets/js/demo1/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
  <script>  
  	$('.my-select').select2({
                
            });
  </script>


<script>
    "use strict";

// Class definition
var KTWizard1 = function () {
	// Base elements
	var wizardEl;
	var formEl;
	var validator;
	var wizard;
	
	// Private functions
	var initWizard = function () {
		// Initialize form wizard
		wizard = new KTWizard('kt_wizard_v1', {
			startStep: 1
		});

		// Validation before going to next page
		wizard.on('beforeNext', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		});

		wizard.on('beforePrev', function(wizardObj) {
			if (validator.form() !== true) {
				wizardObj.stop();  // don't go to the next step
			}
		});

		// Change event
		wizard.on('change', function(wizard) {
			setTimeout(function() {
				KTUtil.scrollTop();	
			}, 500);
		});
	}	

	var initValidation = function() {
		validator = formEl.validate({
			// Validate only visible fields
			ignore: ":hidden",

			// Validation rules
			rules: {	
				//= Step 1
				address1: {
					required: true 
				},
				postcode: {
					required: true
				},	   
				city: {
					required: true
				},	 
				state: {
					required: true
				},	 
				country: {
					required: true
				},	 

				//= Step 2
				package: {
					required: true
				},
				weight: {
					required: true
				},	
				width: {
					required: true
				},
				height: {
					required: true
				},	
				length: {
					required: true
				},			   

				//= Step 3
				delivery: {
					required: true
				},
				packaging: {
					required: true
				},	
				preferreddelivery: {
					required: true
				},	

				//= Step 4
				locaddress1: {
					required: true 
				},
				locpostcode: {
					required: true
				},	   
				loccity: {
					required: true
				},	 
				locstate: {
					required: true
				},	 
				loccountry: {
					required: true
				},	
			},
			
			// Display error  
			invalidHandler: function(event, validator) {	 
				KTUtil.scrollTop();

				swal.fire({
					"title": "", 
					"text": "There are some errors in your submission. Please correct them.", 
					"type": "error",
					"confirmButtonClass": "btn btn-secondary"
				});
			},

			// Submit valid form
			submitHandler: function (form) {
				
			}
		});   
	}

	var initSubmit = function() {
		var btn = formEl.find('[data-ktwizard-type="action-submit"]');

		btn.on('click', function(e) {
			e.preventDefault();

			if (validator.form()) {
				// See: src\js\framework\base\app.js
				KTApp.progress(btn);
				//KTApp.block(formEl);

				// See: http://malsup.com/jquery/form/#ajaxSubmit
				formEl.ajaxSubmit({
					success: function() {
						KTApp.unprogress(btn);
						//KTApp.unblock(formEl);

						swal.fire({
							"title": "", 
							"text": "Your Vote has been successfully submitted!", 
							"type": "success",
							"confirmButtonClass": "btn btn-secondary"
						});
                        setTimeout(function () { 
                            location.reload();
                            }, 3000);
					}
				});
			}
		});
	}

	return {
		// public functions
		init: function() {
			wizardEl = KTUtil.get('kt_wizard_v1');
			formEl = $('#kt_form');

			initWizard(); 
			initValidation();
			initSubmit();
		}
	};
}();

jQuery(document).ready(function() {	
	KTWizard1.init();
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