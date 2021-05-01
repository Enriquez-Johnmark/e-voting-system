
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
		<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
			<div class="kt-login__container">
				<div class="kt-login__signin">
					<div class="kt-login__head">
						<h3 class="kt-login__title" style="color:white;margin-bottom:15px;">Emilio Aguinaldo College</h3>
                        <h4 class="kt-login__title" style="color:white;">Login Portal</h4>
                    </div>
                    @if(Session::has('success'))
                        
                        <div class="alert alert-success" role="alert">
                            <div class="alert-icon"><i class="flaticon2-check-mark"></i></div>
                            <div class="alert-text" style="font-size:13px;">{{Session::get('success')}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                            </button>
                            </div>
                        </div>

                    @endif
					<form class="kt-form" method="post" action="{{ route('login') }}">
						<div class="input-group">
                            @csrf
							<input class="form-control" type="text" style="color:white;" placeholder="Email" name="email" autocomplete="off">
						</div>
						<div class="input-group">
							<input class="form-control" type="password" style="color:white;" placeholder="Password" name="password">
						</div>
						
						<div class="kt-login__actions">
							<button id="kt_login_signin_submit" type="submit" class="btn btn-brand btn-pill kt-login__btn-primary">Sign In</button>
                            <a  id="kt_login_signup_cancel" style="padding:15px 25px 15px 25px;" class="btn btn-secondary btn-pill" href="{{ route('register')}}">
														Sign Up
                             </a>
                        </div>
                        
					</form>
				</div>
				
				
			</div>	
		</div>
	</div>
</div>	
	</div>
	
<!-- end:: Page -->


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


