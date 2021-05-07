
<!DOCTYPE html>
<html lang="en" >
    <!-- begin::Head -->
    <head><!--begin::Base Path (base relative path for assets of this page) -->
<base href="../../../../"><!--end::Base Path -->
        <meta charset="utf-8"/>

        <title>Voting System</title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->

        
                    <!--begin::Page Custom Styles(used by this page) -->
                             <link href="./assets/css/demo1/pages/login/login-4.css" rel="stylesheet" type="text/css" />
                        <!--end::Page Custom Styles -->
        
        <!--begin:: Global Mandatory Vendors -->
<link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->
<link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
<link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Styles(used by all pages) -->
                    
                    <link href="./assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
                <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        
<link href="./assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
<link href="./assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->

       
    </head>
    <!-- end::Head -->

    <!-- begin::Body -->
    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >

       
    	<!-- begin:: Page -->
	<div class="kt-grid kt-grid--ver kt-grid--root">
		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" id="kt_login">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(./assets/media/bg/bg-2.jpg);">
    <div class="kt-login__head">
        <br>
				
			</div>
    
    
    <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
			<div class="kt-login__container">
				<div class="kt-login__signin">
					<div class="kt-login__head">
						<h3 class="kt-login__title" style="color:white;margin-bottom:15px;">Emilio Aguinaldo College</h3>
                        <h4 class="kt-login__title" style="color:white;">Login Portal</h4>
                    </div>
                    @if(Session::has('success'))
                        
                        <div class="alert alert-danger" role="alert">
                            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                            <div class="alert-text" style="font-size:13px;">{{Session::get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                            </button>
                            </div>
                        </div>

                    @endif
                    @foreach ($errors->all() as $message) 
							<div class="alert alert-danger" role="alert">
                        <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                        <div class="alert-text" style="font-size:15px;">{{$message}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                        </button>
                        </div>
                    </div>
						@endforeach
					<form class="kt-form" method="post" action="{{ route('login') }}">
						<div class="input-group">
                            @csrf
							<input class="form-control" type="text" style="color:white;" placeholder="Email" name="email" autocomplete="off">
						</div>
                        <div class="kt-input-icon">
                            <input class="form-control" id="myInput" type="password" style="color:white;" placeholder="Password" name="password">
                        </div>
                        <br>
                        <div class="form-group" style="margin-left:25px;">
                            <div class="kt-checkbox-inline">
                                <label class="kt-checkbox">
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                    <span></span>
                                </label>
                            </div>
					    </div>
						
						<div class="kt-login__actions">
							<button id="kt_login_signin_submit" type="submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
                            
                        </div>
                        
					</form>
				
				</div>
                <br><br>
                <div class="kt-login__account">
					<span class="kt-login__account-msg">
						Don't have an account yet ?
					</span>&nbsp;&nbsp;
                    <a  id="kt_login_signup_cancel" href="{{ route('register')}}">
						Sign Up! 
                    </a>				
                </div>
				
				
			</div>	
		</div>
	</div>
</div>	
	</div>
	
<!-- end:: Page -->

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {"colors":{"state":{"brand":"#5d78ff","dark":"#282a3c","light":"#ffffff","primary":"#5867dd","success":"#34bfa3","info":"#36a3f7","warning":"#ffb822","danger":"#fd3995"},"base":{"label":["#c5cbe3","#a1a8c3","#3d4465","#3e4466"],"shape":["#f0f3ff","#d9dffa","#afb4d4","#646c9a"]}}};
        </script>
        <!-- end::Global Config -->

    	<!--begin:: Global Mandatory Vendors -->
<script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
<script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
<script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
<script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
<script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
<script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>
<!--end:: Global Mandatory Vendors -->

<!--begin:: Global Optional Vendors -->

<!--end:: Global Optional Vendors -->

<!--begin::Global Theme Bundle(used by all pages) -->
    	    	   
		    	   <script src="./assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
				<!--end::Global Theme Bundle -->

        
                    <!--begin::Page Scripts(used by this page) -->
                            <!-- <script src="./assets/js/demo1/pages/login/login-general.js" type="text/javascript"></script> -->
                        <!--end::Page Scripts -->
            </body>
    <!-- end::Body -->
</html>


