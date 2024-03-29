<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!-- begin::Head -->

<head>
    <!--begin::Base Path (base relative path for assets of this page) -->
    <base href="../../../../">
    <!--end::Base Path -->
    <meta charset="utf-8" />

    <title>@yield('pageTitle') | Voting System</title>
    <meta name="_token" content="{{ csrf_token() }}" />  
    <meta name="description" content="Edit user example">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">
    <!--end::Fonts -->

    <!--begin::Page Custom Styles(used by this page) -->
    
   
    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="{{ asset ('./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" type="text/css" />
    <!--end:: Global Mandatory Vendors -->
    <link href="{{ asset ('./assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--begin:: Global Optional Vendors -->
    <link href="{{ asset ('./assets/vendors/general/tether/dist/css/tether.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/select2/dist/css/select2.cs')}}s" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/nouislider/distribute/nouislider.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/dropzone/dist/dropzone.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/quill/dist/quill.snow.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/@yaireo/tagify/dist/tagify.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/summernote/dist/summernote.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/animate.css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/toastr/build/toastr.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/dual-listbox/dist/dual-listbox.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/sweetalert2/dist/sweetalert2.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/socicon/css/socicon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/custom/vendors/flaticon/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/custom/vendors/flaticon2/flaticon.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css" />
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Styles(used by all pages) -->

    <link href="{{ asset ('./assets/css/demo1/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->

    <!--begin::Layout Skins(used by all pages) -->

    <link href="{{ asset ('./assets/css/demo1/skins/header/base/light.cs')}}s" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/css/demo1/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/css/demo1/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset ('./assets/css/demo1/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->

    
</head>
<!-- end::Head -->

<!-- begin::Body -->

<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <h3 style="color:white;">EAC:VOTING</h3>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>

            <!-- <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button> -->

            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>
    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
            <!-- begin:: Aside -->
            @if( Auth::user()->role == 1)
            @include('layouts.sidebar')
            @else
            @include('layouts.usersidebar')
            @endif


           <!-- end:: Aside -->
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <!-- begin:: Header -->
                @include('layouts.header')
                <!-- end:: Header -->
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
                    <!-- begin:: Content Head -->
              
                    <!-- end:: Content Head -->
                    <!-- begin:: Content -->
                    @yield('content')
                    <!-- end:: Content -->
                </div>

                <!-- begin:: Footer -->
                @include('layouts.footer')
                <!-- end:: Footer -->
            </div>
        </div>
    </div>

    <!-- end:: Page -->

    <!-- begin::Quick Panel -->
    <!-- <div id="kt_quick_panel" class="kt-quick-panel">
        <a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>

        <div class="kt-quick-panel__nav">
            <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
                </li>
            </ul>
        </div>

        <div class="kt-quick-panel__content">
            <div class="tab-content">
                <div class="tab-pane fade show kt-scroll active" id="kt_quick_panel_tab_notifications" role="tabpanel">
                    <div class="kt-notification">
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-line-chart kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New order has been received
                                </div>
                                <div class="kt-notification__item-time">
                                    2 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-box-1 kt-font-brand"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New customer is registered
                                </div>
                                <div class="kt-notification__item-time">
                                    3 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-chart2 kt-font-danger"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Application has been approved
                                </div>
                                <div class="kt-notification__item-time">
                                    3 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-image-file kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New file has been uploaded
                                </div>
                                <div class="kt-notification__item-time">
                                    5 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-drop kt-font-info"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New user feedback received
                                </div>
                                <div class="kt-notification__item-time">
                                    8 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-pie-chart-2 kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    System reboot has been successfully completed
                                </div>
                                <div class="kt-notification__item-time">
                                    12 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-favourite kt-font-danger"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New order has been placed
                                </div>
                                <div class="kt-notification__item-time">
                                    15 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item kt-notification__item--read">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-safe kt-font-primary"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Company meeting canceled
                                </div>
                                <div class="kt-notification__item-time">
                                    19 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-psd kt-font-success"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New report has been received
                                </div>
                                <div class="kt-notification__item-time">
                                    23 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon-download-1 kt-font-danger"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    Finance report has been generated
                                </div>
                                <div class="kt-notification__item-time">
                                    25 hrs ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon-security kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New customer comment recieved
                                </div>
                                <div class="kt-notification__item-time">
                                    2 days ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="kt-notification__item">
                            <div class="kt-notification__item-icon">
                                <i class="flaticon2-pie-chart kt-font-warning"></i>
                            </div>
                            <div class="kt-notification__item-details">
                                <div class="kt-notification__item-title">
                                    New customer is registered
                                </div>
                                <div class="kt-notification__item-time">
                                    3 days ago
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane fade kt-scroll" id="kt_quick_panel_tab_logs" role="tabpanel">
                    <div class="kt-notification-v2">
                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon-bell kt-font-brand"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    5 new user generated report
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Reports based on sales
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-box kt-font-danger"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    2 new items submited
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    by Grog John
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon-psd kt-font-brand"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    79 PSD files generated
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Reports based on sales
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-supermarket kt-font-warning"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    $2900 worth producucts sold
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Total 234 items
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon-paper-plane-1 kt-font-success"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    4.5h-avarage response time
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Fostest is Barry
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-information kt-font-danger"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    Database server is down
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    10 mins ago
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-mail-1 kt-font-brand"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    System report has been generated
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Fostest is Barry
                                </div>
                            </div>
                        </a>

                        <a href="#" class="kt-notification-v2__item">
                            <div class="kt-notification-v2__item-icon">
                                <i class="flaticon2-hangouts-logo kt-font-warning"></i>
                            </div>
                            <div class="kt-notification-v2__itek-wrapper">
                                <div class="kt-notification-v2__item-title">
                                    4.5h-avarage response time
                                </div>
                                <div class="kt-notification-v2__item-desc">
                                    Fostest is Barry
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="tab-pane kt-quick-panel__content-padding-x fade kt-scroll" id="kt_quick_panel_tab_settings" role="tabpanel">
                    <form class="kt-form">
                        <div class="kt-heading kt-heading--sm kt-heading--space-sm">Customer Care</div>

                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Notifications:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--success kt-switch--sm">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_1">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Case Tracking:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--success kt-switch--sm">
                                <label>
                                    <input type="checkbox"  name="quick_panel_notifications_2">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-last form-group-xs row">
                            <label class="col-8 col-form-label">Support Portal:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--success kt-switch--sm">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_2">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>

                        <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                        <div class="kt-heading kt-heading--sm kt-heading--space-sm">Reports</div>

                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Generate Reports:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--danger">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_3">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Report Export:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--danger">
                                <label>
                                    <input type="checkbox"  name="quick_panel_notifications_3">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-last form-group-xs row">
                            <label class="col-8 col-form-label">Allow Data Collection:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--danger">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_4">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>

                        <div class="kt-separator kt-separator--space-md kt-separator--border-dashed"></div>

                        <div class="kt-heading kt-heading--sm kt-heading--space-sm">Memebers</div>

                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Enable Member singup:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--brand">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_5">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-xs row">
                            <label class="col-8 col-form-label">Allow User Feedbacks:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--brand">
                                <label>
                                    <input type="checkbox"  name="quick_panel_notifications_5">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                        <div class="form-group form-group-last form-group-xs row">
                            <label class="col-8 col-form-label">Enable Customer Portal:</label>
                            <div class="col-4 kt-align-right">
                                <span class="kt-switch kt-switch--sm kt-switch--brand">
                                <label>
                                    <input type="checkbox" checked="checked" name="quick_panel_notifications_6">
                                    <span></span>
                                </label>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end::Quick Panel -->

    <!-- begin::Scrolltop -->
    <div id="kt_scrolltop" class="kt-scrolltop">
        <i class="fa fa-arrow-up"></i>
    </div>
    <!-- end::Scrolltop -->

    <!-- begin::Global Config(global config for global JS sciprts) -->
    <script>
        var KTAppOptions = {
            "colors": {
                "state": {
                    "brand": "#5d78ff",
                    "dark": "#282a3c",
                    "light": "#ffffff",
                    "primary": "#5867dd",
                    "success": "#34bfa3",
                    "info": "#36a3f7",
                    "warning": "#ffb822",
                    "danger": "#fd3995"
                },
                "base": {
                    "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                    "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                }
            }
        };
    </script>
    <!-- end::Global Config -->

    <!--begin:: Global Mandatory Vendors -->
    <script src="{{ asset ('./assets/vendors/general/jquery/dist/jquery.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/popper.js/dist/umd/popper.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/js-cookie/src/js.cookie.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/moment/min/moment.min.j')}}s" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/sticky-js/dist/sticky.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/wnumb/wNumb.j')}}s" type="text/javascript"></script>
    <!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->
    <script src="{{ asset ('./assets/vendors/general/jquery-form/dist/jquery.form.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/block-ui/jquery.blockUI.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js')}}"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.j')}}s" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.j')}}s" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/bootstrap-switch.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/select2/dist/js/select2.full.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/handlebars/dist/handlebars.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/nouislider/distribute/nouislider.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/owl.carousel/dist/owl.carousel.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/autosize/dist/autosize.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/clipboard/dist/clipboard.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/dropzone/dist/dropzone.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/dropzone.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/quill/dist/quill.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/@yaireo/tagify/dist/tagify.polyfills.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/@yaireo/tagify/dist/tagify.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/summernote/dist/summernote.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/markdown/lib/markdown.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/bootstrap-notify.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/jquery-validation/dist/jquery.validate.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/jquery-validation/dist/additional-methods.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/jquery-validation.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/toastr/build/toastr.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/dual-listbox/dist/dual-listbox.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/raphael/raphael.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/morris.js/morris.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/chart.js/dist/Chart.bundle.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/waypoints/lib/jquery.waypoints.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/counterup/jquery.counterup.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/es6-promise-polyfill/promise.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/sweetalert2/dist/sweetalert2.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/custom/js/vendors/sweetalert2.init.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/jquery.repeater/src/lib.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/jquery.repeater/src/jquery.input.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/jquery.repeater/src/repeater.js')}}" type="text/javascript"></script>
    <script src="{{ asset ('./assets/vendors/general/dompurify/dist/purify.js')}}" type="text/javascript"></script>
    <!--end:: Global Optional Vendors -->

    <!--begin::Global Theme Bundle(used by all pages) -->

    <script src="{{ asset ('./assets/js/demo1/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
   
    <!--end::Page Scripts -->

                            <script src="{{ asset ('./assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
                            
                            <!--Start:: My datatable script -->
                            <script src="{{ asset ('./assets/script/datatables.init.js')}}" type="text/javascript"></script>
                            <script src="{{ asset ('./assets/script/datatables-tabs.init.js')}}" type="text/javascript"></script>
                            <!-- End:: My Datatable Script -->
                            <script src="{{ asset ('./assets/js/demo1/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
   
                       
                              
                           
                            <script src="{{ asset ('./assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
                            <script src="{{ asset('./assets/js/demo1/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
                            <script src="{{ asset ('./assets/js/demo1/pages/crud/forms/widgets/bootstrap-timepicker.js')}}" type="text/javascript"></script>


@stack('script')





</body>
<!-- end::Body -->

</html>