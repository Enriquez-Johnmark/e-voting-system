@extends('layouts.template')
@section('pageTitle','Dashboard')
@section('content')
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
	<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
		<!--Begin::Dashboard 1-->
<!--Begin::Row-->
<div class="row">
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Activity-->
<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--skin-solid kt-portlet--height-fluid">
	<div class="kt-portlet__head kt-portlet__head--noborder kt-portlet__space-x">
		<div class="kt-portlet__head-label">
		   <h3 class="kt-portlet__head-title">
	            Activity
	       </h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<a href="#" class="btn btn-label-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
				Export
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
				<ul class="kt-nav">
    <li class="kt-nav__section kt-nav__section--first">
        <span class="kt-nav__section-text">Finance</span>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-graph-1"></i>
            <span class="kt-nav__link-text">Statistics</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
            <span class="kt-nav__link-text">Events</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-layers-1"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__section">
        <span class="kt-nav__section-text">Customers</span>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-4"></i>
            <span class="kt-nav__link-text">Notifications</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-file-1"></i>
            <span class="kt-nav__link-text">Files</span>
        </a>
    </li>
</ul>			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit">
		<div class="kt-widget17">
			<div class="kt-widget17__visual kt-widget17__visual--chart kt-portlet-fit--top kt-portlet-fit--sides" style="background-color: #fd397a">
				<div class="kt-widget17__chart" style="height:320px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
					<canvas id="kt_chart_activities" width="485" height="216" style="display: block; width: 485px; height: 216px;" class="chartjs-render-monitor"></canvas>
				</div>
			</div>
			<div class="kt-widget17__stats">
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="kt-widget17__icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
    </g>
</svg>						</span> 
						<span class="kt-widget17__subtitle">
							Delivered
						</span> 
						<span class="kt-widget17__desc">
							15 New Paskages
						</span>  
					</div>

					<div class="kt-widget17__item">
						<span class="kt-widget17__icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" id="Shape" fill="#000000" fill-rule="nonzero"></path>
        <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" id="Path" fill="#000000" opacity="0.3"></path>
    </g>
</svg>						</span>  
						<span class="kt-widget17__subtitle">
							Ordered
						</span> 
						<span class="kt-widget17__desc">
							72 New Items
						</span>  
					</div>					
				</div>
				<div class="kt-widget17__items">
					<div class="kt-widget17__item">
						<span class="kt-widget17__icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>						</span>  
						<span class="kt-widget17__subtitle">
							Reported
						</span> 
						<span class="kt-widget17__desc">
							72 Support Cases
						</span>  
					</div>	

					<div class="kt-widget17__item">
						<span class="kt-widget17__icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" id="Rectangle-102-Copy" fill="#000000"></path>
    </g>
</svg>						</span>  
						<span class="kt-widget17__subtitle">
							Arrived
						</span> 
						<span class="kt-widget17__desc">
							34 Upgraded Boxes
						</span>  
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Activity-->	</div>	
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Inbound Bandwidth-->
<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
	<div class="kt-portlet__head kt-portlet__space-x">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Inbound Bandwidth
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<a href="#" class="btn btn-label-success btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
				Export
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
				<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget20">
			<div class="kt-widget20__content kt-portlet__space-x">
				<span class="kt-widget20__number kt-font-brand">670+</span>
				<span class="kt-widget20__desc">Successful transactions</span>
			</div>
			<div class="kt-widget20__chart" style="height:130px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
				<canvas id="kt_chart_bandwidth1" width="485" height="130" style="display: block; width: 485px; height: 130px;" class="chartjs-render-monitor"></canvas>
			</div>
		</div>			 
	</div>
</div>
<!--end:: Widgets/Inbound Bandwidth-->		<div class="kt-space-20"></div>
		<!--begin:: Widgets/Outbound Bandwidth-->
<div class="kt-portlet kt-portlet--fit kt-portlet--head-noborder kt-portlet--height-fluid-half">
	<div class="kt-portlet__head kt-portlet__space-x">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Outbound Bandwidth
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<a href="#" class="btn btn-label-warning btn-sm  btn-bold dropdown-toggle" data-toggle="dropdown">
				Download
			</a>
			<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
				<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fluid">
		<div class="kt-widget20">
			<div class="kt-widget20__content kt-portlet__space-x">
				<span class="kt-widget20__number kt-font-danger">1340+</span>
				<span class="kt-widget20__desc">Completed orders</span>
			</div>
			<div class="kt-widget20__chart" style="height:130px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
				<canvas id="kt_chart_bandwidth2" width="485" height="130" style="display: block; width: 485px; height: 130px;" class="chartjs-render-monitor"></canvas>
			</div>
		</div>			 
	</div>
</div>
<!--end:: Widgets/Outbound Bandwidth-->	</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--Begin::Portlet-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Recent Activities
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                    <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body">
			<!--Begin::Timeline 3 -->
			<div class="kt-timeline-v2">
				<div class="kt-timeline-v2__items  kt-padding-top-25 kt-padding-bottom-30">
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">10:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-danger"></i>
						</div>
						<div class="kt-timeline-v2__item-text  kt-padding-top-5">
							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
							incididunt ut labore et dolore magna                                           	                                	               
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">12:45</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-success"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-timeline-v2__item-text--bold">
							AEOL Meeting With 
						</div>
						<div class="kt-list-pics kt-list-pics--sm kt-padding-l-20">
							<a href="#"><img src="./assets/media/users/100_4.jpg" title=""></a>
							<a href="#"><img src="./assets/media/users/100_13.jpg" title=""></a>
							<a href="#"><img src="./assets/media/users/100_11.jpg" title=""></a>
							<a href="#"><img src="./assets/media/users/100_14.jpg" title=""></a>
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">14:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-brand"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Make Deposit <a href="#" class="kt-link kt-link--brand kt-font-bolder">USD 700</a> To ESL.
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">16:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-warning"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
							incididunt ut labore et dolore magna elit enim at minim<br>
							veniam quis nostrud                                                            	                                
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">17:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-info"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Placed a new order in <a href="#" class="kt-link kt-link--brand kt-font-bolder">SIGNATURE MOBILE</a> marketplace.
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">16:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-brand"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Lorem ipsum dolor sit amit,consectetur eiusmdd tempor<br>
							incididunt ut labore et dolore magna elit enim at minim<br>
							veniam quis nostrud                                                            	                                
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">17:00</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-danger"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							Received a new feedback on <a href="#" class="kt-link kt-link--brand kt-font-bolder">FinancePro App</a> product.
						</div>
					</div>
					<div class="kt-timeline-v2__item">
						<span class="kt-timeline-v2__item-time">15:30</span>
						<div class="kt-timeline-v2__item-cricle">
							<i class="fa fa-genderless kt-font-danger"></i>
						</div>
						<div class="kt-timeline-v2__item-text kt-padding-top-5">
							New notification message has been received on <a href="#" class="kt-link kt-link--brand kt-font-bolder">LoopFin Pro</a> product.
						</div>
					</div>
				</div>
			</div>
			<!--End::Timeline 3 -->
	</div>
</div>
<!--End::Portlet-->	</div>	
	
	<div class="col-xl-8 order-lg-2 order-xl-1">
		<div class="kt-portlet kt-portlet--height-fluid kt-portlet--mobile ">
	<div class="kt-portlet__head kt-portlet__head--lg kt-portlet__head--noborder kt-portlet__head--break-sm">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Exclusive Datatable Plugin
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-md dropdown-menu-fit">
                    <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body kt-portlet__body--fit">
		<!--begin: Datatable -->
		<div class="kt-datatable kt-datatable--default kt-datatable--brand kt-datatable--scroll kt-datatable--loaded" id="kt_datatable_latest_orders" style=""><div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 447px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 300px;"></div></div><table class="kt-datatable__table" style="display: block; max-height: 500px;"><thead class="kt-datatable__head"><tr class="kt-datatable__row" style="left: 0px;"><th data-field="RecordID" class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--all kt-checkbox--solid"><input type="checkbox">&nbsp;<span></span></label></span></th><th data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 254px;">Company</span></th><th data-field="ShipDate" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Date</span></th><th data-field="Status" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 100px;">Status</span></th><th data-field="Type" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 200px;">Managed By</span></th><th data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell kt-datatable__cell--sort"><span style="width: 80px;">Actions</span></th></tr></thead><tbody class="kt-datatable__body ps ps--active-y" style="max-height: 447px;"><tr data-row="0" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="1">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo1.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Gleichner, Ziemann and Gutkowski</a>                                <span class="kt-user-card-v2__email">Angular, React</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">2/12/2018</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-success">Success</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<div class="kt-badge kt-badge--xl kt-badge--info">N</div>							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Nixie Sailor</a>								<span class="kt-user-card-v2__desc">CEO</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="1" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="2">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo2.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Rosenbaum-Reichel</a>                                <span class="kt-user-card-v2__email">Vue, Kendo</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">8/6/2017</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Done</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<div class="kt-badge kt-badge--xl kt-badge--success">E</div>							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Emelita Giraldez</a>								<span class="kt-user-card-v2__desc">Designer</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="2" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="3">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo3.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Kulas, Cassin and Batz</a>                                <span class="kt-user-card-v2__email">.NET, Oracle, MySQL</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">5/26/2016</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-brand">Pending</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_6.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Ula Luckin</a>								<span class="kt-user-card-v2__desc">Architect</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="3" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="4">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo4.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Pfannerstill-Treutel</a>                                <span class="kt-user-card-v2__email">Node, SASS, Webpack</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">7/2/2016</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-brand">Pending</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_7.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Evangeline Cure</a>								<span class="kt-user-card-v2__desc">CEO</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="4" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="5">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo5.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Dicki-Kling</a>                                <span class="kt-user-card-v2__email">MangoDB, Java</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">5/20/2017</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Processing</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_8.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Tierney St. Louis</a>								<span class="kt-user-card-v2__desc">Manager</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="5" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="6">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo3.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Gleason, Kub and Marquardt</a>                                <span class="kt-user-card-v2__email">.NET, Oracle, MySQL</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">11/26/2016</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-warning">Canceled</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_9.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Gerhard Reinhard</a>								<span class="kt-user-card-v2__desc">Developer</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="6" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="7">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo4.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Jenkins Inc</a>                                <span class="kt-user-card-v2__email">Node, SASS, Webpack</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">6/28/2016</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Processing</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_10.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Englebert Shelley</a>								<span class="kt-user-card-v2__desc">CEO</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="7" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="8">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo5.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Streich LLC</a>                                <span class="kt-user-card-v2__email">MangoDB, Java</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">8/5/2016</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Done</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_11.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Hazlett Kite</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="8" class="kt-datatable__row" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="9">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo3.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Haley, Schamberger and Durgan</a>                                <span class="kt-user-card-v2__email">.NET, Oracle, MySQL</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">3/31/2017</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-danger">Processing</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_12.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Freida Morby</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr><tr data-row="9" class="kt-datatable__row kt-datatable__row--even" style="left: 0px;"><td class="kt-datatable__cell--center kt-datatable__cell kt-datatable__cell--check" data-field="RecordID"><span style="width: 40px;"><label class="kt-checkbox kt-checkbox--single kt-checkbox--solid"><input type="checkbox" value="10">&nbsp;<span></span></label></span></td><td data-field="ShipName" data-autohide-disabled="false" class="kt-datatable__cell"><span style="width: 254px;">                        <div class="kt-user-card-v2">                            <div class="kt-user-card-v2__pic">                                <img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/client-logos/logo4.png">                            </div>                            <div class="kt-user-card-v2__details">                                <a class="kt-user-card-v2__name" href="#">Labadie, Predovic and Hammes</a>                                <span class="kt-user-card-v2__email">Node, SASS, Webpack</span>                            </div>                        </div></span></td><td data-field="ShipDate" class="kt-datatable__cell"><span style="width: 100px;"><span class="kt-font-bold">1/26/2017</span></span></td><td data-field="Status" class="kt-datatable__cell"><span style="width: 100px;"><span class="btn btn-bold btn-sm btn-font-sm  btn-label-brand">Pending</span></span></td><td data-field="Type" class="kt-datatable__cell"><span style="width: 200px;"><div class="kt-user-card-v2">							<div class="kt-user-card-v2__pic">								<img alt="photo" src="https://keenthemes.com/metronic/preview/assets/media/users/100_10.jpg">							</div>							<div class="kt-user-card-v2__details">								<a class="kt-user-card-v2__name" href="#">Obed Helian</a>								<span class="kt-user-card-v2__desc">Sales</span>							</div>						</div></span></td><td data-field="Actions" data-autohide-disabled="false" class="kt-datatable__cell"><span style="overflow: visible; position: relative; width: 80px;">                        <div class="dropdown">                            <a data-toggle="dropdown" class="btn btn-sm btn-clean btn-icon btn-icon-md">                                <i class="flaticon-more-1"></i>                            </a>                            <div class="dropdown-menu dropdown-menu-right">                                <ul class="kt-nav">                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-expand"></i>                                            <span class="kt-nav__link-text">View</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-contract"></i>                                            <span class="kt-nav__link-text">Edit</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-trash"></i>                                            <span class="kt-nav__link-text">Delete</span>                                        </a>                                    </li>                                    <li class="kt-nav__item">                                        <a class="kt-nav__link" href="#">                                            <i class="kt-nav__link-icon flaticon2-mail-1"></i>                                            <span class="kt-nav__link-text">Export</span>                                        </a>                                    </li>                                </ul>                            </div>                        </div>                    </span></td></tr></tbody></table><div class="kt-datatable__pager kt-datatable--paging-loaded"><ul class="kt-datatable__pager-nav"><li><a title="First" class="kt-datatable__pager-link kt-datatable__pager-link--first kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-fast-back"></i></a></li><li><a title="Previous" class="kt-datatable__pager-link kt-datatable__pager-link--prev kt-datatable__pager-link--disabled" data-page="1" disabled="disabled"><i class="flaticon2-back"></i></a></li><li style=""></li><li style="display: none;"><input type="text" class="kt-pager-input form-control" title="Page number"></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number kt-datatable__pager-link--active" data-page="1" title="1">1</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="2" title="2">2</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="3" title="3">3</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="4" title="4">4</a></li><li><a class="kt-datatable__pager-link kt-datatable__pager-link-number" data-page="5" title="5">5</a></li><li></li><li><a title="Next" class="kt-datatable__pager-link kt-datatable__pager-link--next" data-page="2"><i class="flaticon2-next"></i></a></li><li><a title="Last" class="kt-datatable__pager-link kt-datatable__pager-link--last" data-page="20"><i class="flaticon2-fast-next"></i></a></li></ul><div class="kt-datatable__pager-info"><div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><div class="dropdown bootstrap-select kt-datatable__pager-size" style="width: 60px;"><select class="selectpicker kt-datatable__pager-size" title="Select page size" data-width="60px" data-selected="10" tabindex="-98"><option class="bs-title-option" value=""></option><option class="bs-title-option" value=""></option><option value="10">10</option><option value="20">20</option><option value="30">30</option><option value="50">50</option><option value="100">100</option></select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select page size"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select page size</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div><button type="button" class="btn dropdown-toggle btn-light" data-toggle="dropdown" role="combobox" aria-owns="bs-select-1" aria-haspopup="listbox" aria-expanded="false" title="Select page size"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">10</div></div> </div></button><div class="dropdown-menu "><div class="inner show" role="listbox" id="bs-select-1" tabindex="-1"><ul class="dropdown-menu inner show" role="presentation"></ul></div></div></div><span class="kt-datatable__pager-detail">Showing 1 - 10 of 200</span></div></div></div>
		<!--end: Datatable -->
	</div>
</div>     
	</div>
	<div class="col-lg-6 col-xl-4 order-lg-1 order-xl-1">
		<!--begin:: Widgets/Blog-->
<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
    <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(./assets/media//products/product4.jpg)">
            <h3 class="kt-widget19__title kt-font-light">
					Introducing New Feature
				</h3>
			<div class="kt-widget19__shadow"></div>
			<div class="kt-widget19__labels">
				<a href="#" class="btn btn-label-light-o2 btn-bold ">Recent</a>
			</div>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="kt-widget19__wrapper">
            <div class="kt-widget19__content">
                <div class="kt-widget19__userpic">
                    <img src="./assets/media//users/user1.jpg" alt="">
                </div>
                <div class="kt-widget19__info">
                    <a href="#" class="kt-widget19__username">
						Anna Krox  
					</a>
                    <span class="kt-widget19__time">
						UX/UI Designer, Google
					</span>
                </div>
                <div class="kt-widget19__stats">
                    <span class="kt-widget19__number kt-font-brand">
						18
					</span>
                    <a href="#" class="kt-widget19__comment">
						Comments
					</a>
                </div>
            </div>
            <div class="kt-widget19__text">
                Lorem Ipsum is simply dummy text of the printing and typesetting  scrambled a type specimen book text of the dummy text of the printing printing and typesetting industry scrambled dummy text of the printing.
            </div>
        </div>
        <div class="kt-widget19__action">
            <a href="#" class="btn btn-sm btn-label-brand btn-bold">Read More...</a>
        </div>
    </div>
</div>
<!--end:: Widgets/Blog-->	</div>	
</div>
<!--End::Row-->

<!--Begin::Row-->
<div class="row">
	<div class="col-xl-8 col-lg-12 order-lg-3 order-xl-1">
		<!--begin:: Widgets/Best Sellers-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Best Sellers
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget5_tab1_content" role="tab">
						Latest
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab2_content" role="tab">
						Month
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget5_tab3_content" role="tab">
						All time
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget5_tab1_content" aria-expanded="true">
				<div class="kt-widget5">
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product27.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Great Logo Designn
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes. 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Keenthemes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">19,200</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1046</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product22.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Branding Mockup
								</a>
								<p class="kt-widget5__desc">
									Metronic bootstrap themes. 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">24,583</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">3809</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>		

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product15.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Awesome Mobile App
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes.Lorem Ipsum Amet 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">210,054</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1103</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>						
				</div>
			</div>
			<div class="tab-pane" id="kt_widget5_tab2_content">
				<div class="kt-widget5">
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Branding Mockup
								</a>
								<p class="kt-widget5__desc">
									Metronic bootstrap themes. 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>
						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">24,583</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">3809</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Awesome Mobile App
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes.Lorem Ipsum Amet 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>
						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">210,054</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1103</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>	

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Great Logo Designn
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes. 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Keenthemes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>
						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">19,200</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1046</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="tab-pane" id="kt_widget5_tab3_content">
				<div class="kt-widget5">
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product11.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Awesome Mobile App
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes.Lorem Ipsum Amet 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>
						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">210,054</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1103</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>	

					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product6.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Great Logo Designn
								</a>
								<p class="kt-widget5__desc">
									Metronic admin themes. 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Keenthemes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>
						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">19,200</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">1046</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>
					
					<div class="kt-widget5__item">
						<div class="kt-widget5__content">
							<div class="kt-widget5__pic">
								<img class="kt-widget7__img" src="./assets/media//products/product10.jpg" alt="">
							</div>
							<div class="kt-widget5__section">
								<a href="#" class="kt-widget5__title">
									Branding Mockup
								</a>
								<p class="kt-widget5__desc">
									Metronic bootstrap themes. 
								</p>
								<div class="kt-widget5__info">
									<span>Author:</span>
									<span class="kt-font-info">Fly themes</span>
									<span>Released:</span>
									<span class="kt-font-info">23.08.17</span>
								</div>
							</div>
						</div>
						
						<div class="kt-widget5__content">
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">24,583</span>
								<span class="kt-widget5__sales">sales</span>
							</div>
							<div class="kt-widget5__stats">
								<span class="kt-widget5__number">3809</span>
								<span class="kt-widget5__votes">votes</span>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</div>
</div> 
<!--end:: Widgets/Best Sellers-->


 	</div>    
	<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
		<!--begin:: Widgets/New Users-->
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				New Users
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
					Today
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget4_tab2_content" role="tab">
					Month
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget4_tab1_content">
				<div class="kt-widget4">
					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_4.jpg" alt="">   
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Anna Strong
							</a>
							<p class="kt-widget4__text">
								Visual Designer,Google Inc 
							</p>							 		 
						</div>						 
						<a href="#" class="btn btn-sm btn-label-brand btn-bold">Follow</a>						 
					</div>  

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_14.jpg" alt="">     
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Milano Esco
							</a>
							<p class="kt-widget4__text">
								Product Designer, Apple Inc 
							</p>							 		 
						</div>						
						<a href="#" class="btn btn-sm btn-label-warning btn-bold">Follow</a>						
					</div> 

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_11.jpg" alt="">     
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Nick Bold
							</a>  
							<p class="kt-widget4__text">
								Web Developer, Facebook Inc 
							</p>							 		 
						</div>						
						<a href="#" class="btn btn-sm btn-label-danger btn-bold">Follow</a>						
					</div>

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_1.jpg" alt="">      
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Wiltor Delton
							</a>
							<p class="kt-widget4__text">
								Project Manager, Amazon Inc 
							</p>							 		 
						</div>		
						<a href="#" class="btn btn-sm btn-label-success btn-bold">Follow</a>						
					</div> 

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_5.jpg" alt="">   
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Nick Stone
							</a>
							<p class="kt-widget4__text">
								Visual Designer, Github Inc 
							</p>							 		 
						</div>						
						<a href="#" class="btn btn-sm btn-label-primary btn-bold">Follow</a>						
					</div>						 
				</div>             
			</div>

			<div class="tab-pane" id="kt_widget4_tab2_content">
				<div class="kt-widget4">
					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_2.jpg" alt="">   
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Kristika Bold
							</a> 
							<p class="kt-widget4__text">
								Product Designer,Apple Inc 
							</p>							 		 
						</div>						
						<a href="#" class="btn btn-sm btn-label-success">Follow</a>						
					</div>

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_13.jpg" alt="">    
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Ron Silk
							</a> 
							<p class="kt-widget4__text">
								Release Manager, Loop Inc 
							</p>							 		 
						</div>	
						<a href="#" class="btn btn-sm btn-label-brand">Follow</a>					
					</div>

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_9.jpg" alt="">     
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Nick Bold
							</a> 
							<p class="kt-widget4__text">
								Web Developer, Facebook Inc 
							</p>							 		 
						</div>					
						<a href="#" class="btn btn-sm btn-label-danger">Follow</a>						
					</div>

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_2.jpg" alt="">     
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Wiltor Delton
							</a> 
							<p class="kt-widget4__text">
								Project Manager, Amazon Inc
							</p>							 		 
						</div>	
						<a href="#" class="btn btn-sm btn-label-success">Follow</a>					
					</div>

					<div class="kt-widget4__item">
						<div class="kt-widget4__pic kt-widget4__pic--pic">
							<img src="./assets/media/users/100_8.jpg" alt="">       
						</div>
						<div class="kt-widget4__info">
							<a href="#" class="kt-widget4__username">
								Nick Bold
							</a> 
							<p class="kt-widget4__text">
								Web Developer, Facebook Inc
							</p>							 		 
						</div>	
						<a href="#" class="btn btn-sm btn-label-info">Follow</a>							
					</div>				 
				</div>			 
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/New Users-->	</div>    

	<div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
		<!--begin:: Widgets/Daily Sales-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-widget14">
		<div class="kt-widget14__header kt-margin-b-30">
			<h3 class="kt-widget14__title">
				Daily Sales              
			</h3>
			<span class="kt-widget14__desc">
				Check out each collumn for more details
			</span>
		</div>
		<div class="kt-widget14__chart" style="height:120px;"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
			<canvas id="kt_chart_daily_sales" style="display: block; width: 267px; height: 120px;" width="267" height="120" class="chartjs-render-monitor"></canvas>
		</div>
	</div>
</div>	
<!--end:: Widgets/Daily Sales-->  </div>
  <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
		<!--begin:: Widgets/Profit Share-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-widget14">
		<div class="kt-widget14__header">
			<h3 class="kt-widget14__title">
				Profit Share            
			</h3>
			<span class="kt-widget14__desc">
				Profit Share between customers
			</span>
		</div>	 
		<div class="kt-widget14__content">	
			<div class="kt-widget14__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
				<div class="kt-widget14__stat">45</div>
				<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px; display: block;" width="140" height="140" class="chartjs-render-monitor"></canvas>
			</div> 
			<div class="kt-widget14__legends">
				<div class="kt-widget14__legend">
					<span class="kt-widget14__bullet kt-bg-success"></span>
					<span class="kt-widget14__stats">37% Sport Tickets</span>
				</div>
				<div class="kt-widget14__legend">
					<span class="kt-widget14__bullet kt-bg-warning"></span>
					<span class="kt-widget14__stats">47% Business Events</span>
				</div>
				<div class="kt-widget14__legend">
					<span class="kt-widget14__bullet kt-bg-brand"></span>
					<span class="kt-widget14__stats">19% Others</span>
				</div>
			</div>			
		</div> 
	</div>
</div>		
<!--end:: Widgets/Profit Share-->  </div>
  <div class="col-xl-4 col-lg-4 order-lg-2 order-xl-1">
		<!--begin:: Widgets/Revenue Change-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-widget14">
		<div class="kt-widget14__header">
			<h3 class="kt-widget14__title">
				Revenue Change            
			</h3>
			<span class="kt-widget14__desc">
				Revenue change breakdown by cities
			</span>
		</div>
		<div class="kt-widget14__content">
			<div class="kt-widget14__chart">
				<div id="kt_chart_revenue_change" style="height: 150px; width: 150px;"><svg height="150" version="1.1" width="150" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.3125px; top: -0.015625px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.2.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><path fill="none" stroke="#34bfa3" d="M75,118.33333333333334A43.333333333333336,43.333333333333336,0,0,0,117.85251574201737,68.56263467263734" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#34bfa3" stroke="#ffffff" d="M75,121.33333333333334A46.333333333333336,46.333333333333336,0,0,0,120.8192283703109,68.11697091920455L134.3342525658702,66.08672493134401A60,60,0,0,1,75,135Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#fd3995" d="M117.85251574201737,68.56263467263734A43.333333333333336,43.333333333333336,0,0,0,82.89188458674082,32.39136313554092" stroke-width="2" opacity="0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 0;"></path><path fill="#fd3995" stroke="#ffffff" d="M120.8192283703109,68.11697091920455A46.333333333333336,46.333333333333336,0,0,0,83.43824582736133,29.441534429539914L85.92722481241034,16.003425879979744A60,60,0,0,1,134.3342525658702,66.08672493134401Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#5d78ff" d="M82.89188458674082,32.39136313554092A43.333333333333336,43.333333333333336,0,1,0,74.98638643205842,118.33333119491907" stroke-width="2" opacity="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); opacity: 1;"></path><path fill="#5d78ff" stroke="#ffffff" d="M83.43824582736133,29.441534429539914A46.333333333333336,46.333333333333336,0,1,0,74.98544395427786,121.333331046875L74.97957964808764,139.9999967923786A65,65,0,1,1,86.83782688011121,11.087044703311392Z" stroke-width="3" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="75" y="65" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 15px; font-weight: 800;" font-weight="800" transform="matrix(1.2745,0,0,1.2745,-20.5882,-20.1765)" stroke-width="0.7846153846153845"><tspan dy="5.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Paris</tspan></text><text x="75" y="85" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: Arial; font-size: 14px;" transform="matrix(0.9028,0,0,0.9028,7.3015,7.4861)" stroke-width="1.1076923076923078"><tspan dy="5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text></svg></div>
			</div>  		 
			<div class="kt-widget14__legends">
				<div class="kt-widget14__legend">
					<span class="kt-widget14__bullet kt-bg-success"></span>
					<span class="kt-widget14__stats">+10% New York</span>
				</div>
				<div class="kt-widget14__legend">
					<span class="kt-widget14__bullet kt-bg-warning"></span>
					<span class="kt-widget14__stats">-7% London</span>
				</div>
				<div class="kt-widget14__legend">
					<span class="kt-widget14__bullet kt-bg-brand"></span>
					<span class="kt-widget14__stats">+20% California</span>
				</div>
			</div>		 
		</div> 	 
	</div>
</div>	
<!--end:: Widgets/Revenue Change-->	</div>
	
	<div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
		<!--begin:: Widgets/Tasks -->
<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Tasks
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget2_tab1_content" role="tab">
					Today
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab2_content" role="tab">
					Week
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget2_tab3_content" role="tab">
					Month
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget2_tab1_content">
				<div class="kt-widget2">
					<div class="kt-widget2__item kt-widget2__item--primary">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great  Again.Lorem Ipsum Amet 
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--warning">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Prepare Docs For Metting On Monday
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>

						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>						
					</div>

					<div class="kt-widget2__item kt-widget2__item--brand">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Widgets Development. Estudiat Communy Elit
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Aziko
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--success">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Development. Lorem Ipsum
							</a>
							<a class="kt-widget2__username">
								By James							 
							</a>		 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--danger">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>


						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--info">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>
				</div>            
			</div>

			<div class="tab-pane" id="kt_widget2_tab2_content">
				<div class="kt-widget2">
					<div class="kt-widget2__item kt-widget2__item--success">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Development.Lorem Ipsum
							</a>
							<a class="kt-widget2__username">
								By James							 
							</a>		 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--warning">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Prepare Docs For Metting On Monday
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>

						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>						
					</div>

					<div class="kt-widget2__item kt-widget2__item--danger">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>


						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--primary">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>

						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great  Again.Lorem Ipsum Amet 
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>

						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--info">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--brand">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Widgets Development.Estudiat Communy Elit
							</a>
							<a href="#" class="kt-widget2__username">
								By Aziko
							</a>							 	 
						</div>						
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>
				</div>	
			</div>	

			<div class="tab-pane" id="kt_widget2_tab3_content">
				<div class="kt-widget2">

					<div class="kt-widget2__item kt-widget2__item--warning">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Development. Lorem Ipsum
							</a>
							<a class="kt-widget2__username">
								By James							 
							</a>		 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--danger">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--brand">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Widgets Development.Estudiat Communy Elit
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Aziko
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--info">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Sean
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--success">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
							<input type="checkbox">
							<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Completa Financial Report For Emirates Airlines
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

					<div class="kt-widget2__item kt-widget2__item--primary">
						<div class="kt-widget2__checkbox">
							<label class="kt-checkbox kt-checkbox--solid kt-checkbox--single">
								<input type="checkbox">
								<span></span>
							</label>
						</div>
						<div class="kt-widget2__info">
							<a href="#" class="kt-widget2__title">
								Make Metronic Great  Again.Lorem Ipsum Amet 
							</a>							 
							<a href="#" class="kt-widget2__username">
								By Bob
							</a>							 	 
						</div>
						<div class="kt-widget2__actions">
							<a href="#" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown">
								<i class="flaticon-more-1"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
								<ul class="kt-nav">
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-line-chart"></i>
            <span class="kt-nav__link-text">Reports</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-send"></i>
            <span class="kt-nav__link-text">Messages</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
            <span class="kt-nav__link-text">Charts</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-avatar"></i>
            <span class="kt-nav__link-text">Members</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-settings"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
</ul>							</div>
						</div>
					</div>

				</div>
			</div>		
		</div>
	</div>
</div>
<!--end:: Widgets/Tasks -->
    </div>
    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
		<!--begin:: Widgets/Notifications-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Notifications
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<ul class="nav nav-pills nav-pills-sm nav-pills-label nav-pills-bold" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#kt_widget6_tab1_content" role="tab">
						Latest
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab2_content" role="tab">
						Week
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#kt_widget6_tab3_content" role="tab">
						Month
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="tab-content">
			<div class="tab-pane active" id="kt_widget6_tab1_content" aria-expanded="true">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been received.
                            </div>
                            <div class="kt-notification__item-time">
                                2 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.98630124,11 4.48466491,11.0516454 4,11.1500272 L4,7 C4,5.8954305 4.8954305,5 6,5 L20,5 C21.1045695,5 22,5.8954305 22,7 L22,16 C22,17.1045695 21.1045695,18 20,18 L12.9835977,18 Z M19.1444251,6.83964668 L13,10.1481833 L6.85557487,6.83964668 C6.4908718,6.6432681 6.03602525,6.77972206 5.83964668,7.14442513 C5.6432681,7.5091282 5.77972206,7.96397475 6.14442513,8.16035332 L12.6444251,11.6603533 C12.8664074,11.7798822 13.1335926,11.7798822 13.3555749,11.6603533 L19.8555749,8.16035332 C20.2202779,7.96397475 20.3567319,7.5091282 20.1603533,7.14442513 C19.9639747,6.77972206 19.5091282,6.6432681 19.1444251,6.83964668 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M8.4472136,18.1055728 C8.94119209,18.3525621 9.14141644,18.9532351 8.89442719,19.4472136 C8.64743794,19.9411921 8.0467649,20.1414164 7.5527864,19.8944272 L5,18.618034 L5,14.5 C5,13.9477153 5.44771525,13.5 6,13.5 C6.55228475,13.5 7,13.9477153 7,14.5 L7,17.381966 L8.4472136,18.1055728 Z" id="Path-85" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New member is registered and pending for approval.
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5"></circle>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Membership application has been added.
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Bound" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M18.5,8 C17.1192881,8 16,6.88071187 16,5.5 C16,4.11928813 17.1192881,3 18.5,3 C19.8807119,3 21,4.11928813 21,5.5 C21,6.88071187 19.8807119,8 18.5,8 Z M18.5,21 C17.1192881,21 16,19.8807119 16,18.5 C16,17.1192881 17.1192881,16 18.5,16 C19.8807119,16 21,17.1192881 21,18.5 C21,19.8807119 19.8807119,21 18.5,21 Z M5.5,21 C4.11928813,21 3,19.8807119 3,18.5 C3,17.1192881 4.11928813,16 5.5,16 C6.88071187,16 8,17.1192881 8,18.5 C8,19.8807119 6.88071187,21 5.5,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M5.5,8 C4.11928813,8 3,6.88071187 3,5.5 C3,4.11928813 4.11928813,3 5.5,3 C6.88071187,3 8,4.11928813 8,5.5 C8,6.88071187 6.88071187,8 5.5,8 Z M11,4 L13,4 C13.5522847,4 14,4.44771525 14,5 C14,5.55228475 13.5522847,6 13,6 L11,6 C10.4477153,6 10,5.55228475 10,5 C10,4.44771525 10.4477153,4 11,4 Z M11,18 L13,18 C13.5522847,18 14,18.4477153 14,19 C14,19.5522847 13.5522847,20 13,20 L11,20 C10.4477153,20 10,19.5522847 10,19 C10,18.4477153 10.4477153,18 11,18 Z M5,10 C5.55228475,10 6,10.4477153 6,11 L6,13 C6,13.5522847 5.55228475,14 5,14 C4.44771525,14 4,13.5522847 4,13 L4,11 C4,10.4477153 4.44771525,10 5,10 Z M19,10 C19.5522847,10 20,10.4477153 20,11 L20,13 C20,13.5522847 19.5522847,14 19,14 C18.4477153,14 18,13.5522847 18,13 L18,11 C18,10.4477153 18.4477153,10 19,10 Z" id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New report file has been uploaded.
                            </div>
                            <div class="kt-notification__item-time">
                                5 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="Rectangle-10" x="0" y="0" width="24" height="24"></rect>
        <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" id="Path-3" fill="#000000"></path>
        <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New user feedback received and pending for review.
                            </div>
                            <div class="kt-notification__item-time">
                                8 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" id="Combined-Shape" fill="#000000"></path>
        <circle id="Oval" fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"></circle>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Database sever #2 has been fully restarted. 
                            </div>
                            <div class="kt-notification__item-time">
                                23 hrs ago
                            </div>
                        </div>
                    </a>
                </div>
            </div>

			<div class="tab-pane" id="kt_widget6_tab2_content" aria-expanded="false">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M9.35321926,16.3736278 L16.3544311,10.3706602 C16.5640654,10.1909158 16.5882961,9.87526197 16.4085517,9.66562759 C16.3922584,9.64662485 16.3745611,9.62887247 16.3556091,9.6125202 L9.35439731,3.57169798 C9.14532254,3.39130299 8.82959492,3.41455255 8.64919993,3.62362732 C8.5708616,3.71442013 8.52776329,3.83034375 8.52776329,3.95026134 L8.52776329,15.9940512 C8.52776329,16.2701936 8.75162092,16.4940512 9.02776329,16.4940512 C9.14714624,16.4940512 9.2625893,16.4513356 9.35321926,16.3736278 Z" id="Path-10-Copy" fill="#000000" transform="translate(12.398118, 9.870355) rotate(-450.000000) translate(-12.398118, -9.870355) "></path>
        <rect id="Rectangle-Copy" fill="#000000" opacity="0.3" transform="translate(12.500000, 17.500000) scale(-1, 1) rotate(-270.000000) translate(-12.500000, -17.500000) " x="11" y="11" width="3" height="13" rx="0.5"></rect>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New company application has been approved.
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <rect id="Rectangle-62-Copy" fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"></rect>
        <rect id="Rectangle-62-Copy-2" fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"></rect>
        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" id="Path-95" fill="#000000" fill-rule="nonzero"></path>
        <rect id="Rectangle-62-Copy-4" fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"></rect>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New report has been received.
                            </div>
                            <div class="kt-notification__item-time">
                                23 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New file has been uploaded and pending for review.
                            </div>
                            <div class="kt-notification__item-time">
                                5 hrs ago
                            </div>
                        </div>
                    </a>
                    
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
        <circle id="Oval-14" fill="#000000" cx="12" cy="9" r="5"></circle>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                Membership application has been added.
                            </div>
                            <div class="kt-notification__item-time">
                                3 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--info">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
        <path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New customer is registered.
                            </div>
                            <div class="kt-notification__item-time">
                                3 days ago
                            </div>
                        </div>
                    </a>
                </div>
			</div>
            
            <div class="tab-pane" id="kt_widget6_tab3_content" aria-expanded="false">
                <div class="kt-notification">
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" id="Path-50" fill="#000000" opacity="0.3"></path>
        <path d="M14.5,11 C15.0522847,11 15.5,11.4477153 15.5,12 L15.5,15 C15.5,15.5522847 15.0522847,16 14.5,16 L9.5,16 C8.94771525,16 8.5,15.5522847 8.5,15 L8.5,12 C8.5,11.4477153 8.94771525,11 9.5,11 L9.5,10.5 C9.5,9.11928813 10.6192881,8 12,8 C13.3807119,8 14.5,9.11928813 14.5,10.5 L14.5,11 Z M12,9 C11.1715729,9 10.5,9.67157288 10.5,10.5 L10.5,11 L13.5,11 L13.5,10.5 C13.5,9.67157288 12.8284271,9 12,9 Z" id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>                        </div>
                        <div class="kt-notification__item-details">
                            <div class="kt-notification__item-title">
                                New order has been received.
                            </div>
                            <div class="kt-notification__item-time">
                                2 hrs ago
                            </div>
                        </div>
                    </a>
                    <a href="#" class="kt-notification__item">
                        <div class="kt-notification__item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M13,5.06189375 C12.6724058,5.02104333 12.3386603,5 12,5 C11.6613397,5 11.3275942,5.02104333 11,5.06189375 L11,4 L10,4 C9.44771525,4 9,3.55228475 9,3 C9,2.44771525 9.44771525,2 10,2 L14,2 C14.5522847,2 15,2.44771525 15,3 C15,3.55228475 14.5522847,4 14,4 L13,4 L13,5.06189375 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M16.7099142,6.53272645 L17.5355339,5.70710678 C17.9260582,5.31658249 18.5592232,5.31658249 18.9497475,5.70710678 C19.3402718,6.09763107 19.3402718,6.73079605 18.9497475,7.12132034 L18.1671361,7.90393167 C17.7407802,7.38854954 17.251061,6.92750259 16.7099142,6.53272645 Z" id="Combined-Shape" fill="#000000"></path>
        <path d="M11.9630156,7.5 L12.0369844,7.5 C12.2982526,7.5 12.5154733,7.70115317 12.5355117,7.96165175 L12.9585886,13.4616518 C12.9797677,13.7369807 12.7737386,13.9773481 12.4984096,13.9985272 C12.4856504,13.9995087 12.4728582,14 12.4600614,14 L11.5399386,14 C11.2637963,14 11.0399386,13.7761424 11.0399386,13.5 C11.0399386,13.4872031 11.0404299,13.4744109 11.0414114,13.4616518 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" id="Path-107" fill="#000000"></path>
    </g>
</svg>                        </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <rect id="Combined-Shape" fill="#000000" opacity="0.3" x="2" y="9" width="20" height="13" rx="2"></rect>
        <rect id="Rectangle-116-Copy" fill="#000000" opacity="0.3" x="5" y="5" width="14" height="2" rx="0.5"></rect>
        <rect id="Rectangle-116-Copy-2" fill="#000000" opacity="0.3" x="7" y="1" width="10" height="2" rx="0.5"></rect>
        <path d="M10.8333333,20 C9.82081129,20 9,19.3159906 9,18.4722222 C9,17.6284539 9.82081129,16.9444444 10.8333333,16.9444444 C11.0476105,16.9444444 11.2533018,16.9750785 11.4444444,17.0313779 L11.4444444,12.7916011 C11.4444444,12.4782408 11.6398662,12.2012404 11.9268804,12.1077729 L15.4407693,11.0331119 C15.8834716,10.8889438 16.3333333,11.2336005 16.3333333,11.7169402 L16.3333333,12.7916011 C16.3333333,13.1498215 15.9979332,13.3786009 15.7222222,13.4444444 C15.3255297,13.53918 14.3070112,13.7428837 12.6666667,14.0555556 L12.6666667,18.5035214 C12.6666667,18.5583862 12.6622174,18.6091837 12.6535404,18.6559869 C12.5446237,19.4131089 11.771224,20 10.8333333,20 Z" id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>                        </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--warning">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
        <path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
        <path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="#000000"></path>
    </g>
</svg>                        </div>
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
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--danger">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" id="Combined-Shape" fill="#000000"></path>
        <rect id="Rectangle-Copy-2" fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"></rect>
    </g>
</svg>                        </div>
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
		</div>
	</div>
</div>
<!--end:: Widgets/Notifications-->    </div>
    <div class="col-xl-4 col-lg-6 order-lg-3 order-xl-1">
		<!--begin:: Widgets/Support Tickets -->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Support Tickets
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<div class="dropdown dropdown-inline">
				<button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="flaticon-more-1"></i>
				</button>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-fit dropdown-menu-md">
                    <!--begin::Nav-->
<ul class="kt-nav">
    <li class="kt-nav__head">
        Export Options                                    
        <span data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--brand kt-svg-icon--md1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
        <circle id="Oval-5" fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
        <rect id="Rectangle-9" fill="#000000" x="11" y="10" width="2" height="7" rx="1"></rect>
        <rect id="Rectangle-9-Copy" fill="#000000" x="11" y="7" width="2" height="2" rx="1"></rect>
    </g>
</svg>        </span>
   </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-drop"></i>
            <span class="kt-nav__link-text">Activity</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-calendar-8"></i>
            <span class="kt-nav__link-text">FAQ</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-telegram-logo"></i>
            <span class="kt-nav__link-text">Settings</span>
        </a>
    </li>
    <li class="kt-nav__item">
        <a href="#" class="kt-nav__link">
            <i class="kt-nav__link-icon flaticon2-new-email"></i>
            <span class="kt-nav__link-text">Support</span>
            <span class="kt-nav__link-badge">
                <span class="kt-badge kt-badge--success kt-badge--rounded">5</span>
            </span>
        </a>
    </li>
    <li class="kt-nav__separator"></li>
    <li class="kt-nav__foot">
        <a class="btn btn-label-danger btn-bold btn-sm" href="#">Upgrade plan</a>                                    
        <a class="btn btn-clean btn-bold btn-sm" href="#" data-toggle="kt-tooltip" data-placement="right" title="" data-original-title="Click to learn more...">Learn more</a>
    </li>
</ul>
<!--end::Nav-->				</div>
			</div>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="kt-widget3">
			<div class="kt-widget3__item">
				<div class="kt-widget3__header">
					<div class="kt-widget3__user-img">							 
						<img class="kt-widget3__img" src="./assets/media/users/user1.jpg" alt="">  
					</div>
					<div class="kt-widget3__info">
						<a href="#" class="kt-widget3__username">
						Melania Trump   
						</a><br> 
						<span class="kt-widget3__time">
						2 day ago
						</span>		 
					</div>
					<span class="kt-widget3__status kt-font-info">
					Pending
					</span>	
				</div>
				<div class="kt-widget3__body">
					<p class="kt-widget3__text"> 
						Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
					</p>
				</div>
			</div>
			<div class="kt-widget3__item">
				<div class="kt-widget3__header">
					<div class="kt-widget3__user-img">							 
						<img class="kt-widget3__img" src="./assets/media/users/user4.jpg" alt="">  
					</div>
					<div class="kt-widget3__info">
						<a href="#" class="kt-widget3__username">
						Lebron King James   
						</a><br> 
						<span class="kt-widget3__time">
						1 day ago
						</span>		 
					</div>
					<span class="kt-widget3__status kt-font-brand">
					Open
					</span>	
				</div>
				<div class="kt-widget3__body">
					<p class="kt-widget3__text"> 
						Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.					
					</p>
				</div>
			</div>
			<div class="kt-widget3__item">
				<div class="kt-widget3__header">
					<div class="kt-widget3__user-img">							 
						<img class="kt-widget3__img" src="./assets/media/users/user5.jpg" alt="">    
					</div>
					<div class="kt-widget3__info">
						<a href="#" class="kt-widget3__username">
						Deb Gibson  
						</a><br> 
						<span class="kt-widget3__time">
						3 weeks ago
						</span>		 
					</div>
					<span class="kt-widget3__status kt-font-success">
					Closed
					</span>	
				</div>
				<div class="kt-widget3__body">
					<p class="kt-widget3__text"> 
						Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!--end:: Widgets/Support Tickets -->	</div>
</div>
<!--End::Row-->
<!--End::Dashboard 1-->	</div>
<!-- end:: Content -->				</div>





@endsection
