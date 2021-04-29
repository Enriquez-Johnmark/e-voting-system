
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>


<body>

		

	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
    <form class="kt-form" method="post" action="{{ route('vote.store')}}" enctype="multipart/form-data">
    @csrf
    <br><br>
    <center><h1>{{ $allTitles[0]->name }}</h1></center>
    <br><br>
    @foreach($allCandidates as $candidate)
   
   
   <div class="kt-portlet">
       <div class="kt-portlet__body">
       

           <div class="kt-widget kt-widget--user-profile-3">
               <div class="kt-widget__top">
                   <div class="kt-widget__media kt-hidden-">
                       <img src="{{ asset('/images/backend_images/products/large/'.$candidate->image) }}" alt="image">
                   </div>
                   <div class="kt-widget__pic kt-widget__pic--danger kt-font-danger kt-font-boldest kt-font-light kt-hidden">
                       
                   </div>
                   <div class="kt-widget__content">
                       <div class="kt-widget__head">
                           <a href="javascript:void(0);" class="kt-widget__username">
                           {{$candidate->firstname}} {{$candidate->lastname}}
                               <i class="flaticon2-correct kt-font-success"></i>                       
                           </a>
   
                           <div class="kt-widget__action">
                           <div class="kt-radio-inline">
                            
                             <label class="kt-radio kt-radio--bold kt-radio--brand">
                               <input type="radio" name="candidate_id" value="{{$candidate->id}}" required=""> <h3><b>Vote</b></h3>
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
                                   {{$candidate->grade_section}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   BirthDay:
                               </div>
                               <div class="kt-widget__text">
                                   {{$candidate->date_of_birth}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Height:
                               </div>
                               <div class="kt-widget__text">
                                   {{$candidate->height}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Weight:
                               </div>
                               <div class="kt-widget__text">
                                   {{$candidate->weight}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Blood Type:
                               </div>
                               <div class="kt-widget__text">
                                   {{$candidate->blood_type}}
                               </div>
                           </div>
                           <div class="kt-widget__progress">
                               <div class="kt-widget__text">
                                   Motto:
                               </div>
                               <div class="kt-widget__text">
                                   {{$candidate->motto}}
                               </div>
                           </div>
                        
                         
                         
                       </div>
                   </div>
               </div>
           </div>
       </div>
       
   </div>
   
   @endforeach
   
   <div class="kt-portlet">
       <div class="kt-portlet__body">
           <!--begin: Pagination-->
           <div class="kt-pagination kt-pagination--brand">
             <h4>Terms and Condition:</h4>
             
           </div>
           
           <h5 style="margin-left:25px;">Blaahh.. Blaahh..Blaahh..Blaahh..Blaahh.. Balahhh.. Blaahh.. Balahhh.. Blaahh.. Balahhh.. Blaahh.. Balahhh.. Blaahh.. Balahhh..</h5>
           <br>
           <div class="kt-radio-list">
                               <!-- <label class="kt-radio kt-radio--bold kt-radio--brand">
                                   <input type="radio" name="is_votable" value="1"> I agree
                                   <span></span>
                               </label>
                               <label class="kt-radio kt-radio--bold kt-radio--danger">
                                   <input type="radio" name="is_votable" value="0"> I Disagree
                                   <span></span>
                               </label> -->

                               <label class="kt-checkbox kt-checkbox--bold kt-checkbox--success" >
								<input type="checkbox" id="checkme"> I agree to the Terms and Conditions.
								<span></span>
                                </label>
               <br>
               <br>
               <input type="submit" style="width:30%;" name="sendNewSms" class="btn btn-success btn-pill btn-elevate"  id="sendNewSms" value=" Submit Vote " disabled/>                           </div>

               <!-- <button type="submit" name="sendNewSms" id="sendNewSms" style="width:30%;" class="btn btn-brand btn-pill btn-elevate">Submit Vote</button> -->
   
           <!--end: Pagination-->
       </div>
   </div>
   </form>  
</div>

			
			
</body>
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

			






















