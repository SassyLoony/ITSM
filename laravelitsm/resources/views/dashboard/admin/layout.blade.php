
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="">
    <meta charset="utf-8" />
    <title>ITSM</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::Fonts-->

    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{url("assets/plugins/custom/fullcalendar/fullcalendar.bundle.css") }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{url("assets/plugins/global/plugins.bundle.css") }}" rel="stylesheet" type="text/css" />
    <link href={{url("assets/plugins/custom/prismjs/prismjs.bundle.css")}} rel="stylesheet" type="text/css" />
    <link href="{{url("assets/css/style.bundle.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{url("assets/css/themes/layout/header/base/light.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{url("assets/css/themes/layout/header/menu/light.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{url("assets/css/themes/layout/brand/dark.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{url("assets/css/themes/layout/aside/dark.css")}}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{url("assets/media/logos/favicon.ico")}}" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="page-loading-enabled page-loading quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-minimize aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
    <!--begin::Logo-->
    <a href="index.html">
       <img alt="Logo" style="height:30px;;width:100px;" src="{{asset('assets/media/logos/XCMG_logo1.png')}}" /> 
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-5" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
                        <!--end::Svg Icon-->
					</span>
        </button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->

        <!--begin::Aside-->
        <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">

            <!--begin::Brand-->
            <div class="brand flex-column-auto" id="kt_brand">

                <!--begin::Logo-->
                <a href="{{ route('admin.home') }}" class="brand-logo">
                     <img alt="Logo" style="height:30px;;width:100px;" src="{{asset('assets/media/logos/XCMG_logo1.png')}}" />  
                </a>

                <!--end::Logo-->
            </div>

            <!--end::Brand-->

            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

                <!--begin::Menu Container-->
                <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">

                    <!--begin::Menu Nav-->
                    <ul class="menu-nav">
                        <li class="menu-item menu-item-active" aria-haspopup="true">
                            <a href="{{ route('admin.home') }}" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
													<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="menu-section">
                            <h4 class="menu-text">Services</h4>
                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>
                        <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{ route('admin.ticket') }}" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">

											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
													<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>

                                            <!--end::Svg Icon-->
										</span>
                                <span class="menu-text">Tickets</span>
                            </a>
                        </li>
                        <li class="menu-section">
                            <h4 class="menu-text">Utilities</h4>
                            <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                        </li>

                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                            <a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000"></path>
										<rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1"></rect>
									</g>
								</svg>
											<!--					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--		<rect x="0" y="0" width="24" height="24" />-->
											<!--		<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />-->
											<!--		<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />-->
											<!--	</g>-->
											<!--</svg>-->
                                                                <!--end::Svg Icon-->
															</span>
                                <span class="menu-text">Project</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                <ul class="menu-subnav">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.createprojects') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Create Project</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.user_assign_projects') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Assign Project</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.display_projects') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Manage Projects</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                            <a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24" />
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                <span class="menu-text">User</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                <ul class="menu-subnav">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.createuser') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Create User</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.display_users') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Manage Users</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                            <a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />
													<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />
												</g>
											</svg>
                                                                <!--end::Svg Icon-->
															</span>
                                <span class="menu-text">Consultant</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                <ul class="menu-subnav">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.createconsultant') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Create Consultant</span>
                                        </a>
                                    </li>
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.display_consultants') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Manage Consultants</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-item menu-item-submenu" data-menu-toggle="hover" aria-haspopup="true">
                            <a href="javascript:;" class="menu-link menu-toggle">
															<span class="svg-icon menu-icon">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"></path>
										<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
											<!--				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--		<rect x="0" y="0" width="24" height="24" />-->
											<!--		<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />-->
											<!--		<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />-->
											<!--	</g>-->
											<!--</svg>-->
                                                                <!--end::Svg Icon-->
															</span>
                                <span class="menu-text">Report</span>
                                <i class="menu-arrow"></i>
                            </a>
                            <div class="menu-submenu menu-submenu-classic menu-submenu-right">
                                <ul class="menu-subnav">
                                    <li class="menu-item" aria-haspopup="true">
                                        <a href="{{ route('admin.report') }}" class="menu-link">
                                            <i class="menu-bullet menu-bullet-dot">
                                                <span></span>
                                            </i>
                                            <span class="menu-text">Display Report</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                    <!--end::Menu Nav-->
                </div>

                <!--end::Menu Container-->
            </div>

            <!--end::Aside Menu-->
        </div>

        <!--end::Aside-->
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            <div id="kt_header" class="header header-fixed">
                <!--begin::Container-->
                <div class="container-fluid d-flex align-items-stretch justify-content-between">
                    <!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active" data-menu-toggle="click" aria-haspopup="true">
                                    <a href="javascript:;" class="menu-link menu-toggle">
                                        <!--<span class="menu-text">-->
                                            <img alt="Logo" style="height:45px;;width:120px;" src="{{asset('assets/media/logos/XCMG_logo.png')}}" />
                                            <!--</span>-->
                                        <i class="menu-arrow"></i>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>
                    <!--end::Header Menu Wrapper-->
                    <!--begin::Topbar-->
                    <div class="topbar">
                        <!--begin::Search-->
           <!--             <div class="dropdown mr-1" id="kt_quick_search_toggle">-->
                            <!--begin::Toggle-->
           <!--                 <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">-->
           <!--                     <div class="btn btn-icon btn-clean btn-lg btn-dropdown">-->
											<!--<span class="svg-icon svg-icon-xl svg-icon-primary">-->
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
											<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--			<rect x="0" y="0" width="24" height="24" />-->
											<!--			<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
											<!--			<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />-->
											<!--		</g>-->
											<!--	</svg>-->
                                                <!--end::Svg Icon-->
											<!--</span>-->
           <!--                     </div>-->
           <!--                 </div>-->
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
           <!--                 <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">-->
           <!--                     <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">-->
                                    <!--begin:Form-->
           <!--                         <form method="get" class="quick-search-form">-->
           <!--                             <div class="input-group">-->
           <!--                                 <div class="input-group-prepend">-->
											<!--			<span class="input-group-text">-->
											<!--				<span class="svg-icon svg-icon-lg">-->
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
											<!--					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--							<rect x="0" y="0" width="24" height="24" />-->
											<!--							<path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
											<!--							<path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />-->
											<!--						</g>-->
											<!--					</svg>-->
                                                                <!--end::Svg Icon-->
											<!--				</span>-->
											<!--			</span>-->
           <!--                                 </div>-->
           <!--                                 <input type="text" class="form-control" placeholder="Search..." />-->
           <!--                                 <div class="input-group-append">-->
											<!--			<span class="input-group-text">-->
											<!--				<i class="quick-search-close ki ki-close icon-sm text-muted"></i>-->
											<!--			</span>-->
           <!--                                 </div>-->
           <!--                             </div>-->
           <!--                         </form>-->
                                    <!--end::Form-->
                                    <!--begin::Scroll-->
           <!--                         <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325" data-mobile-height="200"></div>-->
                                    <!--end::Scroll-->
           <!--                     </div>-->
           <!--                 </div>-->
                            <!--end::Dropdown-->
           <!--             </div>-->
                        <!--end::Search-->
                        <!--begin::Notifications-->
           <!--             <div class="dropdown mr-1">-->
                            <!--begin::Toggle-->
           <!--                 <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">-->
           <!--                     <div class="btn btn-icon btn-clean btn-dropdown btn-lg pulse pulse-primary">-->
											<!--<span class="svg-icon svg-icon-xl svg-icon-primary">-->
												<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
											<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--			<rect x="0" y="0" width="24" height="24" />-->
											<!--			<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />-->
											<!--			<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />-->
											<!--		</g>-->
											<!--	</svg>-->
                                                <!--end::Svg Icon-->
											<!--</span>-->
           <!--                         <span class="pulse-ring"></span>-->
           <!--                     </div>-->
           <!--                 </div>-->
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
           <!--                 <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">-->
           <!--                     <form>-->
                                    <!--begin::Header-->
           <!--                         <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-3.jpg)">-->
                                        <!--begin::Title-->
           <!--                             <h4 class="d-flex flex-center rounded-top">-->
           <!--                                 <span class="text-white">Message Center</span>-->
           <!--                                 <span class="btn btn-success btn-sm font-weight-bold ml-2">25</span>-->
           <!--                             </h4>-->
                                        <!--end::Title-->
                                        <!--begin::Tabs-->
           <!--                             <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8 font-size-lg" role="tablist">-->
           <!--                                 <li class="nav-item">-->
           <!--                                     <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_notifications">Reminders</a>-->
           <!--                                 </li>-->
           <!--                                 <li class="nav-item">-->
           <!--                                     <a class="nav-link" data-toggle="tab" href="#topbar_notifications_events">Events</a>-->
           <!--                                 </li>-->
           <!--                                 <li class="nav-item">-->
           <!--                                     <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs">Logs</a>-->
           <!--                                 </li>-->
           <!--                             </ul>-->
                                        <!--end::Tabs-->
           <!--                         </div>-->
                                    <!--end::Header-->
                                    <!--begin::Content-->
           <!--                         <div class="tab-content">-->
                                        <!--begin::Tabpane-->
           <!--                             <div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">-->
                                            <!--begin::Scroll-->
           <!--                                 <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 flex-shrink-0 mr-3">-->
           <!--                                             <img alt="Pic" src="assets/media/users/150-5.jpg" />-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Marcus Smart</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">UI/UX, Art Director</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">-->
           <!--                                             <span class="symbol-label font-weight-bolder font-size-lg">AH</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Andreas Hawks</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">Python Developer</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-success font-weight-bolder font-size-sm pr-6">+23%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">-->
           <!--                                             <span class="symbol-label font-weight-bolder font-size-lg">SC</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sarah Connor</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-danger font-weight-bolder font-size-sm pr-6">-34%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 flex-shrink-0 mr-3">-->
           <!--                                             <img alt="Pic" src="assets/media/users/150-7.jpg" />-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Amanda Harden</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">UI/UX, Art Director</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-success font-weight-bolder font-size-sm pr-6">+72%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">-->
           <!--                                             <span class="symbol-label font-weight-bolder font-size-lg">SR</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sean Robbins</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">UI/UX, Art Director</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">-->
           <!--                                             <span class="symbol-label font-weight-bolder font-size-lg">SC</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Ana Stone</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">Figma, PSD</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-info font-weight-bolder font-size-sm pr-6">+34%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">-->
           <!--                                             <span class="symbol-label font-weight-bolder font-size-lg">JT</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Content-->
           <!--                                         <div class="d-flex flex-wrap flex-row-fluid">-->
                                                        <!--begin::Text-->
           <!--                                             <div class="d-flex flex-column pr-5 flex-grow-1">-->
           <!--                                                 <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Jason Tatum</a>-->
           <!--                                                 <span class="text-muted font-weight-bold">ASP.NET Developer</span>-->
           <!--                                             </div>-->
                                                        <!--end::Text-->
                                                        <!--begin::Section-->
           <!--                                             <div class="d-flex align-items-center py-2">-->
                                                            <!--begin::Label-->
           <!--                                                 <span class="text-success font-weight-bolder font-size-sm pr-6">+139%</span>-->
                                                            <!--end::Label-->
                                                            <!--begin::Btn-->
           <!--                                                 <a href="#" class="btn btn-icon btn-light btn-sm">-->
											<!--							<span class="svg-icon svg-icon-md svg-icon-success">-->
																			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
											<!--								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--										<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--										<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />-->
											<!--									</g>-->
											<!--								</svg>-->
                                                                            <!--end::Svg Icon-->
											<!--							</span>-->
           <!--                                                 </a>-->
                                                            <!--end::Btn-->
           <!--                                             </div>-->
                                                        <!--end::Section-->
           <!--                                         </div>-->
                                                    <!--end::Content-->
           <!--                                     </div>-->
                                                <!--end::Item-->
           <!--                                 </div>-->
                                            <!--end::Scroll-->
                                            <!--begin::Action-->
           <!--                                 <div class="d-flex flex-center pt-7">-->
           <!--                                     <a href="#" class="btn btn-light-primary font-weight-bold text-center">See All</a>-->
           <!--                                 </div>-->
                                            <!--end::Action-->
           <!--                             </div>-->
                                        <!--end::Tabpane-->
                                        <!--begin::Tabpane-->
           <!--                             <div class="tab-pane p-8" id="topbar_notifications_events" role="tabpanel">-->
                                            <!--begin::Scroll-->
           <!--                                 <div class="scroll pr-7 mr-n7" data-scroll="true" data-height="300" data-mobile-height="200">-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-primary mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-primary">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Color-profile.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M12,10.9996338 C12.8356605,10.3719448 13.8743941,10 15,10 C17.7614237,10 20,12.2385763 20,15 C20,17.7614237 17.7614237,20 15,20 C13.8743941,20 12.8356605,19.6280552 12,19.0003662 C11.1643395,19.6280552 10.1256059,20 9,20 C6.23857625,20 4,17.7614237 4,15 C4,12.2385763 6.23857625,10 9,10 C10.1256059,10 11.1643395,10.3719448 12,10.9996338 Z M13.3336047,12.504354 C13.757474,13.2388026 14,14.0910788 14,15 C14,15.9088933 13.7574889,16.761145 13.3336438,17.4955783 C13.8188886,17.8206693 14.3938466,18 15,18 C16.6568542,18 18,16.6568542 18,15 C18,13.3431458 16.6568542,12 15,12 C14.3930587,12 13.8175971,12.18044 13.3336047,12.504354 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
											<!--									<circle fill="#000000" cx="12" cy="9" r="5" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Project Launch</a>-->
           <!--                                             <span class="text-muted">Project campaign planning</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-warning mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-warning">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />-->
											<!--									<path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark-75 text-hover-primary mb-1 font-size-lg">Report Generation</a>-->
           <!--                                             <span class="text-muted">Annual report generation</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-success mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-success">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Share.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M10.9,2 C11.4522847,2 11.9,2.44771525 11.9,3 C11.9,3.55228475 11.4522847,4 10.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,16 C20,15.4477153 20.4477153,15 21,15 C21.5522847,15 22,15.4477153 22,16 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L10.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
											<!--									<path d="M24.0690576,13.8973499 C24.0690576,13.1346331 24.2324969,10.1246259 21.8580869,7.73659596 C20.2600137,6.12944276 17.8683518,5.85068794 15.0081639,5.72356847 L15.0081639,1.83791555 C15.0081639,1.42370199 14.6723775,1.08791555 14.2581639,1.08791555 C14.0718537,1.08791555 13.892213,1.15726043 13.7542266,1.28244533 L7.24606818,7.18681951 C6.93929045,7.46513642 6.9162184,7.93944934 7.1945353,8.24622707 C7.20914339,8.26232899 7.22444472,8.27778811 7.24039592,8.29256062 L13.7485543,14.3198102 C14.0524605,14.6012598 14.5269852,14.5830551 14.8084348,14.2791489 C14.9368329,14.140506 15.0081639,13.9585047 15.0081639,13.7695393 L15.0081639,9.90761477 C16.8241562,9.95755456 18.1177196,10.0730665 19.2929978,10.4469645 C20.9778605,10.9829796 22.2816185,12.4994368 23.2042718,14.996336 L23.2043032,14.9963244 C23.313119,15.2908036 23.5938372,15.4863432 23.9077781,15.4863432 L24.0735976,15.4863432 C24.0735976,15.0278051 24.0690576,14.3014082 24.0690576,13.8973499 Z" fill="#000000" fill-rule="nonzero" transform="translate(15.536799, 8.287129) scale(-1, 1) translate(-15.536799, -8.287129)" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Smart App</a>-->
           <!--                                             <span class="text-muted">Project Managemnt &amp; Design</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-danger mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-danger">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />-->
											<!--									<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Volume Service App</a>-->
           <!--                                             <span class="text-muted">Analytics &amp; Requirement Study</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-info mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-info">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />-->
											<!--									<path d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z" fill="#000000" opacity="0.3" />-->
											<!--									<path d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z" fill="#000000" opacity="0.3" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Reportio App</a>-->
           <!--                                             <span class="text-muted">Reporting Dashboard App Planning</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-primary mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-primary">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />-->
											<!--									<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Expo Loop</a>-->
           <!--                                             <span class="text-muted">System Analytics &amp; Development</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
                                                <!--begin::Item-->
           <!--                                     <div class="d-flex align-items-center mb-6">-->
                                                    <!--begin::Symbol-->
           <!--                                         <div class="symbol symbol-40 symbol-light-info mr-5">-->
											<!--					<span class="symbol-label">-->
											<!--						<span class="svg-icon svg-icon-lg svg-icon-info">-->
																		<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<!--							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--									<rect x="0" y="0" width="24" height="24" />-->
											<!--									<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />-->
											<!--									<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />-->
											<!--								</g>-->
											<!--							</svg>-->
                                                                        <!--end::Svg Icon-->
											<!--						</span>-->
											<!--					</span>-->
           <!--                                         </div>-->
                                                    <!--end::Symbol-->
                                                    <!--begin::Text-->
           <!--                                         <div class="d-flex flex-column font-weight-bold">-->
           <!--                                             <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Klup App</a>-->
           <!--                                             <span class="text-muted">App Design &amp; Development</span>-->
           <!--                                         </div>-->
                                                    <!--end::Text-->
           <!--                                     </div>-->
                                                <!--end::Item-->
           <!--                                 </div>-->
                                            <!--end::Scroll-->
           <!--                             </div>-->
                                        <!--end::Tabpane-->
                                        <!--begin::Tabpane-->
           <!--                             <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">-->
                                            <!--begin::Nav-->
           <!--                                 <div class="d-flex flex-center font-weight-bold text-center text-muted min-h-250px">All caught up!-->
           <!--                                     <br />No new messages.</div>-->
                                            <!--end::Nav-->
           <!--                             </div>-->
                                        <!--end::Tabpane-->
           <!--                         </div>-->
                                    <!--end::Content-->
           <!--                     </form>-->
           <!--                 </div>-->
                            <!--end::Dropdown-->
           <!--             </div>-->
                        <!--end::Notifications-->
                        <!--begin::Quick Actions-->
           <!--             <div class="dropdown mr-1">-->
                            <!--begin::Toggle-->
           <!--                 <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">-->
           <!--                     <div class="btn btn-icon btn-clean btn-dropdown btn-lg">-->
											<!--<span class="svg-icon svg-icon-xl svg-icon-primary">-->
												<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
											<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--			<rect x="0" y="0" width="24" height="24" />-->
											<!--			<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />-->
											<!--			<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />-->
											<!--			<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />-->
											<!--			<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />-->
											<!--		</g>-->
											<!--	</svg>-->
                                                <!--end::Svg Icon-->
											<!--</span>-->
           <!--                     </div>-->
           <!--                 </div>-->
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
           <!--                 <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">-->
                                <!--begin:Header-->
           <!--                     <div class="d-flex flex-column flex-center py-10 rounded-to border-bottom">-->
           <!--                         <h4 class="text-dark font-weight-bold">Quick Actions</h4>-->
           <!--                         <span class="btn btn-primary btn-sm font-weight-bold font-size-sm mt-2">23 new tasks</span>-->
           <!--                     </div>-->
                                <!--end:Header-->
                                <!--begin:Nav-->
           <!--                     <div class="row row-paddingless">-->
                                    <!--begin:Item-->
           <!--                         <div class="col-6">-->
           <!--                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">-->
											<!--		<span class="svg-icon svg-icon-3x svg-icon-primary">-->
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Sale2.svg-->
											<!--			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--					<rect x="0" y="0" width="24" height="24" />-->
											<!--					<polygon fill="#000000" opacity="0.3" points="12 20.0218549 8.47346039 21.7286168 6.86905972 18.1543453 3.07048824 17.1949849 4.13894342 13.4256452 1.84573388 10.2490577 5.08710286 8.04836581 5.3722735 4.14091196 9.2698837 4.53859595 12 1.72861679 14.7301163 4.53859595 18.6277265 4.14091196 18.9128971 8.04836581 22.1542661 10.2490577 19.8610566 13.4256452 20.9295118 17.1949849 17.1309403 18.1543453 15.5265396 21.7286168" />-->
											<!--					<polygon fill="#000000" points="14.0890818 8.60255815 8.36079737 14.7014391 9.70868621 16.049328 15.4369707 9.950447" />-->
											<!--					<path d="M10.8543431,9.1753866 C10.8543431,10.1252593 10.085524,10.8938719 9.13585777,10.8938719 C8.18793881,10.8938719 7.41737243,10.1252593 7.41737243,9.1753866 C7.41737243,8.22551387 8.18793881,7.45690126 9.13585777,7.45690126 C10.085524,7.45690126 10.8543431,8.22551387 10.8543431,9.1753866" fill="#000000" opacity="0.3" />-->
											<!--					<path d="M14.8641422,16.6221564 C13.9162233,16.6221564 13.1456569,15.8535438 13.1456569,14.9036711 C13.1456569,13.9520555 13.9162233,13.1851857 14.8641422,13.1851857 C15.8138085,13.1851857 16.5826276,13.9520555 16.5826276,14.9036711 C16.5826276,15.8535438 15.8138085,16.6221564 14.8641422,16.6221564 Z" fill="#000000" opacity="0.3" />-->
											<!--				</g>-->
											<!--			</svg>-->
                                                        <!--end::Svg Icon-->
											<!--		</span>-->
           <!--                                 <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Accounting</span>-->
           <!--                                 <span class="d-block text-dark-50 font-size-lg">eCommerce</span>-->
           <!--                             </a>-->
           <!--                         </div>-->
                                    <!--end:Item-->
                                    <!--begin:Item-->
           <!--                         <div class="col-6">-->
           <!--                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-bottom">-->
											<!--		<span class="svg-icon svg-icon-3x svg-icon-primary">-->
														<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Globe.svg-->
											<!--			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--					<rect x="0" y="0" width="24" height="24" />-->
											<!--					<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero" />-->
											<!--					<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6" />-->
											<!--				</g>-->
											<!--			</svg>-->
                                                        <!--end::Svg Icon-->
											<!--		</span>-->
           <!--                                 <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Management</span>-->
           <!--                                 <span class="d-block text-dark-50 font-size-lg">Company Reports</span>-->
           <!--                             </a>-->
           <!--                         </div>-->
                                    <!--end:Item-->
                                    <!--begin:Item-->
           <!--                         <div class="col-6">-->
           <!--                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right">-->
											<!--		<span class="svg-icon svg-icon-3x svg-icon-primary">-->
														<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
											<!--			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--					<rect x="0" y="0" width="24" height="24" />-->
											<!--					<path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />-->
											<!--					<path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />-->
											<!--				</g>-->
											<!--			</svg>-->
                                                        <!--end::Svg Icon-->
											<!--		</span>-->
           <!--                                 <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Projects</span>-->
           <!--                                 <span class="d-block text-dark-50 font-size-lg">Completed Tasks</span>-->
           <!--                             </a>-->
           <!--                         </div>-->
                                    <!--end:Item-->
                                    <!--begin:Item-->
           <!--                         <div class="col-6">-->
           <!--                             <a href="#" class="d-block py-10 px-5 text-center bg-hover-light">-->
											<!--		<span class="svg-icon svg-icon-3x svg-icon-primary">-->
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
											<!--			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
											<!--				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
											<!--					<polygon points="0 0 24 0 24 24 0 24" />-->
											<!--					<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
											<!--					<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />-->
											<!--				</g>-->
											<!--			</svg>-->
                                                        <!--end::Svg Icon-->
											<!--		</span>-->
           <!--                                 <span class="d-block text-dark-75 font-weight-bold font-size-h6 mt-2 mb-1">Members</span>-->
           <!--                                 <span class="d-block text-dark-50 font-size-lg">Latest joinings</span>-->
           <!--                             </a>-->
           <!--                         </div>-->
                                    <!--end:Item-->
           <!--                     </div>-->
                                <!--end:Nav-->
           <!--                 </div>-->
                            <!--end::Dropdown-->
           <!--             </div>-->
                        <!--end::Quick Actions-->
                        <!--begin::Quick panel-->
          <!--              <div class="topbar-item mr-1">-->
          <!--                  <div class="btn btn-icon btn-clean btn-lg" id="kt_quick_panel_toggle">-->
										<!--<span class="svg-icon svg-icon-xl svg-icon-primary">-->
											<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
										<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
										<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
										<!--			<rect x="0" y="0" width="24" height="24" />-->
										<!--			<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />-->
										<!--			<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />-->
										<!--		</g>-->
										<!--	</svg>-->
                                            <!--end::Svg Icon-->
										<!--</span>-->
          <!--                  </div>-->
          <!--              </div>-->
                        <!--end::Quick panel-->
                        <!--begin::Chat-->
          <!--              <div class="topbar-item">-->
          <!--                  <div class="btn btn-icon btn-clean btn-lg mr-1" data-toggle="modal" data-target="#kt_chat_modal">-->
										<!--<span class="svg-icon svg-icon-xl svg-icon-primary">-->
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Chat6.svg-->
										<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
										<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
										<!--			<rect x="0" y="0" width="24" height="24" />-->
										<!--			<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M14.4862 18L12.7975 21.0566C12.5304 21.54 11.922 21.7153 11.4386 21.4483C11.2977 21.3704 11.1777 21.2597 11.0887 21.1255L9.01653 18H5C3.34315 18 2 16.6569 2 15V6C2 4.34315 3.34315 3 5 3H19C20.6569 3 22 4.34315 22 6V15C22 16.6569 20.6569 18 19 18H14.4862Z" fill="black" />-->
										<!--			<path fill-rule="evenodd" clip-rule="evenodd" d="M6 7H15C15.5523 7 16 7.44772 16 8C16 8.55228 15.5523 9 15 9H6C5.44772 9 5 8.55228 5 8C5 7.44772 5.44772 7 6 7ZM6 11H11C11.5523 11 12 11.4477 12 12C12 12.5523 11.5523 13 11 13H6C5.44772 13 5 12.5523 5 12C5 11.4477 5.44772 11 6 11Z" fill="black" />-->
										<!--		</g>-->
										<!--	</svg>-->
                                            <!--end::Svg Icon-->
										<!--</span>-->
          <!--                  </div>-->
          <!--              </div>-->
                        <!--end::Chat-->
                        <!--begin::Languages-->
             <!--           <div class="dropdown mr-1">-->
                            <!--begin::Toggle-->
             <!--               <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">-->
             <!--                   <div class="btn btn-icon btn-clean btn-dropdown btn-lg">-->
             <!--                       <img class="h-20px w-20px rounded-sm" src="assets/media/svg/flags/226-united-states.svg" alt="" />-->
             <!--                   </div>-->
             <!--               </div>-->
                            <!--end::Toggle-->
                            <!--begin::Dropdown-->
             <!--               <div class="dropdown-menu p-0 m-0 dropdown-menu-anim-up dropdown-menu-sm dropdown-menu-right">-->
                                <!--begin::Nav-->
             <!--                   <ul class="navi navi-hover py-4">-->
                                    <!--begin::Item-->
             <!--                       <li class="navi-item">-->
             <!--                           <a href="#" class="navi-link">-->
													<!--<span class="symbol symbol-20 mr-3">-->
													<!--	<img src="assets/media/svg/flags/226-united-states.svg" alt="" />-->
													<!--</span>-->
             <!--                               <span class="navi-text">English</span>-->
             <!--                           </a>-->
             <!--                       </li>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
             <!--                       <li class="navi-item active">-->
             <!--                           <a href="#" class="navi-link">-->
													<!--<span class="symbol symbol-20 mr-3">-->
													<!--	<img src="assets/media/svg/flags/128-spain.svg" alt="" />-->
													<!--</span>-->
             <!--                               <span class="navi-text">Spanish</span>-->
             <!--                           </a>-->
             <!--                       </li>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
             <!--                       <li class="navi-item">-->
             <!--                           <a href="#" class="navi-link">-->
													<!--<span class="symbol symbol-20 mr-3">-->
													<!--	<img src="assets/media/svg/flags/162-germany.svg" alt="" />-->
													<!--</span>-->
             <!--                               <span class="navi-text">German</span>-->
             <!--                           </a>-->
             <!--                       </li>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
             <!--                       <li class="navi-item">-->
             <!--                           <a href="#" class="navi-link">-->
													<!--<span class="symbol symbol-20 mr-3">-->
													<!--	<img src="assets/media/svg/flags/063-japan.svg" alt="" />-->
													<!--</span>-->
             <!--                               <span class="navi-text">Japanese</span>-->
             <!--                           </a>-->
             <!--                       </li>-->
                                    <!--end::Item-->
                                    <!--begin::Item-->
             <!--                       <li class="navi-item">-->
             <!--                           <a href="#" class="navi-link">-->
													<!--<span class="symbol symbol-20 mr-3">-->
													<!--	<img src="assets/media/svg/flags/195-france.svg" alt="" />-->
													<!--</span>-->
             <!--                               <span class="navi-text">French</span>-->
             <!--                           </a>-->
             <!--                       </li>-->
                                    <!--end::Item-->
             <!--                   </ul>-->
                                <!--end::Nav-->
             <!--               </div>-->
                            <!--end::Dropdown-->
             <!--           </div>-->
                        <!--end::Languages-->
                        <!--begin::User-->
                        <div class="topbar-item ml-4">
                            <div class="btn btn-icon btn-light-primary h-40px w-40px p-0" id="kt_quick_user_toggle">
                                <img src="{{ asset('assets/media/svg/avatars/004-boy-1.svg') }}" class="h-30px align-self-end" alt="" />
                            </div>

{{--      <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">--}}
{{--       <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>--}}
{{--                      <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>--}}
{{--                      <span class="symbol symbol-35 symbol-light-success">--}}
{{--                          <span class="symbol-label font-size-h5 font-weight-bold">S</span>--}}
{{--                      </span>--}}
{{--                  </div>--}}

                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Topbar-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Header-->
            <!--begin::Content-->
            <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                <!--begin::Subheader-->
                <div class="subheader py-6 py-lg-8 subheader-transparent" id="kt_subheader">
                    <div class="container d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                        <!--begin::Info-->
                        @yield('subhead')
                        <!--end::Info-->
                        <!--begin::Toolbar-->
                        <!--end::Toolbar-->
                    </div>
                </div>
                <!--end::Subheader-->
                <!--begin::Entry-->
                <div class="d-flex flex-column-fluid">
                    <!--begin::Container-->
                    @yield('content')
                    <!--end::Container-->
                </div>
                <!--end::Entry-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">Admin Profile
            <small class="text-muted font-size-sm ml-2"></small></h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url('{{ asset('assets/media/svg/avatars/004-boy-1.svg') }}')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">Name : {{ Auth::guard('admin')->user()->name }}</a>
                <div class="text-muted mt-1">Profile : Admin</div>
                <div class="navi mt-1">
                    <a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{ Auth::guard('admin')->user()->email }}</span>
								</span>
                    </a>
                </div>
            </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="{{ route('admin.admin_profile') }}" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-danger">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Adress-book2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
												<path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
											</g>
										</svg>
                                    
									</span>
                        </div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">My Account</div>
                        <div class="text-muted">Profile info
                            <span class="label label-light-danger label-inline font-weight-bold">update</span></div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
            <!--begin::Item-->
         <!--   <a href="custom/apps/user/profile-3.html" class="navi-item">-->
         <!--       <div class="navi-link">-->
         <!--           <div class="symbol symbol-40 bg-light mr-3">-->
         <!--               <div class="symbol-label">-->
									<!--<span class="svg-icon svg-icon-md svg-icon-success">-->
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
									<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
									<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
									<!--			<rect x="0" y="0" width="24" height="24" />-->
									<!--			<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />-->
									<!--			<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />-->
									<!--		</g>-->
									<!--	</svg>-->
                                        <!--end::Svg Icon-->
									<!--</span>-->
         <!--               </div>-->
         <!--           </div>-->
         <!--           <div class="navi-text">-->
         <!--               <div class="font-weight-bold">My Tasks</div>-->
         <!--               <div class="text-muted">Todo and tasks</div>-->
         <!--           </div>-->
         <!--       </div>-->
         <!--   </a>-->
            <!--end:Item-->
            <!--begin::Item-->
         <!--   <a href="custom/apps/user/profile-2.html" class="navi-item">-->
         <!--       <div class="navi-link">-->
         <!--           <div class="symbol symbol-40 bg-light mr-3">-->
         <!--               <div class="symbol-label">-->
									<!--<span class="svg-icon svg-icon-md svg-icon-primary">-->
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Half-star.svg-->
									<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
									<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
									<!--			<polygon points="0 0 24 0 24 24 0 24" />-->
									<!--			<path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" fill="#000000" opacity="0.3" />-->
									<!--			<path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" fill="#000000" />-->
									<!--		</g>-->
									<!--	</svg>-->
                                        <!--end::Svg Icon-->
									<!--</span>-->
         <!--               </div>-->
         <!--           </div>-->
         <!--           <div class="navi-text">-->
         <!--               <div class="font-weight-bold">My Events</div>-->
         <!--               <div class="text-muted">Logs and notifications</div>-->
         <!--           </div>-->
         <!--       </div>-->
         <!--   </a>-->
            <!--end:Item-->
            <!--begin::Item-->
         <!--   <a href="custom/apps/userprofile-1/overview.html" class="navi-item">-->
         <!--       <div class="navi-link">-->
         <!--           <div class="symbol symbol-40 bg-light mr-3">-->
         <!--               <div class="symbol-label">-->
									<!--<span class="svg-icon svg-icon-md svg-icon-info">-->
										<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-opened.svg-->
									<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
									<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
									<!--			<rect x="0" y="0" width="24" height="24" />-->
									<!--			<path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3" />-->
									<!--			<path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000" />-->
									<!--		</g>-->
									<!--	</svg>-->
                                        <!--end::Svg Icon-->
									<!--</span>-->
         <!--               </div>-->
         <!--           </div>-->
         <!--           <div class="navi-text">-->
         <!--               <div class="font-weight-bold">My Statements</div>-->
         <!--               <div class="text-muted">latest tasks and projects</div>-->
         <!--           </div>-->
         <!--       </div>-->
         <!--   </a>-->
            <!--end:Item-->
            <!--begin::Item-->
            <span class="navi-item mt-2">
						<span class="navi-link">
							<a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-sm btn-light-primary font-weight-bolder py-3 px-6">Sign Out</a>
						</span>
                        <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
					</span>
            <!--end:Item-->
        </div>
        <!--end::Nav-->
        <!--begin::Separator-->
        <!--<div class="separator separator-dashed my-7"></div>-->
        <!--end::Separator-->
        <!--begin::Notifications-->
       <!-- <div class="pt-5">-->
            <!--begin:Heading-->
       <!--     <h5 class="mb-7">Recent Notifications</h5>-->
            <!--end:Heading-->
            <!--begin::Item-->
       <!--     <div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">-->
                <!--begin::Icon-->
       <!--         <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">-->
							<!--<span class="svg-icon svg-icon-4x svg-icon-primary position-absolute opacity-15">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">-->
							<!--		<g stroke="none" stroke-width="1" fill-rule="evenodd">-->
							<!--			<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                                <!--end::Svg Icon-->
							<!--</span>-->
       <!--             <span class="svg-icon svg-icon-lg svg-icon-primary position-absolute">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Files/File-done.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
							<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
							<!--			<polygon points="0 0 24 0 24 24 0 24" />-->
							<!--			<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z M10.875,15.75 C11.1145833,15.75 11.3541667,15.6541667 11.5458333,15.4625 L15.3791667,11.6291667 C15.7625,11.2458333 15.7625,10.6708333 15.3791667,10.2875 C14.9958333,9.90416667 14.4208333,9.90416667 14.0375,10.2875 L10.875,13.45 L9.62916667,12.2041667 C9.29375,11.8208333 8.67083333,11.8208333 8.2875,12.2041667 C7.90416667,12.5875 7.90416667,13.1625 8.2875,13.5458333 L10.2041667,15.4625 C10.3958333,15.6541667 10.6354167,15.75 10.875,15.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />-->
							<!--			<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                        <!--end::Svg Icon-->
							<!--</span>-->
       <!--         </div>-->
                <!--end::Icon-->
                <!--begin::Description-->
       <!--         <div class="ml-1">-->
       <!--             <h3 class="text-dark-75 font-weight-bolder font-size-lg">Important Notice</h3>-->
       <!--             <p class="m-0 text-dark-50 font-weight-bold">Lorem Ipsum is simply dummy text of the printing and industry.</p>-->
       <!--         </div>-->
                <!--end::Description-->
       <!--     </div>-->
            <!--end::Item-->
            <!--begin::Item-->
       <!--     <div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">-->
                <!--begin::Icon-->
       <!--         <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">-->
							<!--<span class="svg-icon svg-icon-4x svg-icon-danger position-absolute opacity-15">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">-->
							<!--		<g stroke="none" stroke-width="1" fill-rule="evenodd">-->
							<!--			<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                                <!--end::Svg Icon-->
							<!--</span>-->
       <!--             <span class="svg-icon svg-icon-lg svg-icon-danger position-absolute">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
							<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
							<!--			<rect x="0" y="0" width="24" height="24" />-->
							<!--			<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />-->
							<!--			<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                        <!--end::Svg Icon-->
							<!--</span>-->
       <!--         </div>-->
                <!--end::Icon-->
                <!--begin::Description-->
       <!--         <div class="ml-1">-->
       <!--             <h3 class="text-dark-75 font-weight-bolder font-size-lg">System Update</h3>-->
       <!--             <p class="m-0 text-dark-50 font-weight-bold">There are many variations of passages of Lorem Ipsum available.</p>-->
       <!--         </div>-->
                <!--end::Description-->
       <!--     </div>-->
            <!--end::Item-->
            <!--begin::Item-->
       <!--     <div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">-->
                <!--begin::Icon-->
       <!--         <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">-->
							<!--<span class="svg-icon svg-icon-4x svg-icon-success position-absolute opacity-15">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">-->
							<!--		<g stroke="none" stroke-width="1" fill-rule="evenodd">-->
							<!--			<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                                <!--end::Svg Icon-->
							<!--</span>-->
       <!--             <span class="svg-icon svg-icon-lg svg-icon-success position-absolute">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
							<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
							<!--			<rect x="0" y="0" width="24" height="24" />-->
							<!--			<path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />-->
							<!--			<path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />-->
							<!--		</g>-->
							<!--	</svg>-->
                        <!--end::Svg Icon-->
							<!--</span>-->
       <!--         </div>-->
                <!--end::Icon-->
                <!--begin::Description-->
       <!--         <div class="ml-1">-->
       <!--             <h3 class="text-dark-75 font-weight-bolder font-size-lg">Server Maintenance</h3>-->
       <!--             <p class="m-0 text-dark-50 font-weight-bold">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>-->
       <!--         </div>-->
                <!--end::Description-->
       <!--     </div>-->
            <!--end::Item-->
            <!--begin::Item-->
       <!--     <div class="bg-gray-100 d-flex align-items-center p-5 rounded gutter-b">-->
                <!--begin::Icon-->
       <!--         <div class="d-flex flex-center position-relative ml-4 mr-6 ml-lg-6 mr-lg-10">-->
							<!--<span class="svg-icon svg-icon-4x svg-icon-info position-absolute opacity-15">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-polygon.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" width="70px" height="70px" viewBox="0 0 70 70" fill="none">-->
							<!--		<g stroke="none" stroke-width="1" fill-rule="evenodd">-->
							<!--			<path d="M28 4.04145C32.3316 1.54059 37.6684 1.54059 42 4.04145L58.3109 13.4585C62.6425 15.9594 65.3109 20.5812 65.3109 25.5829V44.4171C65.3109 49.4188 62.6425 54.0406 58.3109 56.5415L42 65.9585C37.6684 68.4594 32.3316 68.4594 28 65.9585L11.6891 56.5415C7.3575 54.0406 4.68911 49.4188 4.68911 44.4171V25.5829C4.68911 20.5812 7.3575 15.9594 11.6891 13.4585L28 4.04145Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                                <!--end::Svg Icon-->
							<!--</span>-->
       <!--             <span class="svg-icon svg-icon-lg svg-icon-info position-absolute">-->
								<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Alarm-clock.svg-->
							<!--	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
							<!--		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">-->
							<!--			<rect x="0" y="0" width="24" height="24" />-->
							<!--			<path d="M7.14319965,19.3575259 C7.67122143,19.7615175 8.25104409,20.1012165 8.87097532,20.3649307 L7.89205065,22.0604779 C7.61590828,22.5387706 7.00431787,22.7026457 6.52602525,22.4265033 C6.04773263,22.150361 5.88385747,21.5387706 6.15999985,21.0604779 L7.14319965,19.3575259 Z M15.1367085,20.3616573 C15.756345,20.0972995 16.3358198,19.7569961 16.8634386,19.3524415 L17.8320512,21.0301278 C18.1081936,21.5084204 17.9443184,22.1200108 17.4660258,22.3961532 C16.9877332,22.6722956 16.3761428,22.5084204 16.1000004,22.0301278 L15.1367085,20.3616573 Z" fill="#000000" />-->
							<!--			<path d="M12,21 C7.581722,21 4,17.418278 4,13 C4,8.581722 7.581722,5 12,5 C16.418278,5 20,8.581722 20,13 C20,17.418278 16.418278,21 12,21 Z M19.068812,3.25407593 L20.8181344,5.00339833 C21.4039208,5.58918477 21.4039208,6.53893224 20.8181344,7.12471868 C20.2323479,7.71050512 19.2826005,7.71050512 18.696814,7.12471868 L16.9474916,5.37539627 C16.3617052,4.78960984 16.3617052,3.83986237 16.9474916,3.25407593 C17.5332781,2.66828949 18.4830255,2.66828949 19.068812,3.25407593 Z M5.29862906,2.88207799 C5.8844155,2.29629155 6.83416297,2.29629155 7.41994941,2.88207799 C8.00573585,3.46786443 8.00573585,4.4176119 7.41994941,5.00339833 L5.29862906,7.12471868 C4.71284263,7.71050512 3.76309516,7.71050512 3.17730872,7.12471868 C2.59152228,6.53893224 2.59152228,5.58918477 3.17730872,5.00339833 L5.29862906,2.88207799 Z" fill="#000000" opacity="0.3" />-->
							<!--			<path d="M11.9630156,7.5 L12.0475062,7.5 C12.3043819,7.5 12.5194647,7.69464724 12.5450248,7.95024814 L13,12.5 L16.2480695,14.3560397 C16.403857,14.4450611 16.5,14.6107328 16.5,14.7901613 L16.5,15 C16.5,15.2109164 16.3290185,15.3818979 16.1181021,15.3818979 C16.0841582,15.3818979 16.0503659,15.3773725 16.0176181,15.3684413 L11.3986612,14.1087258 C11.1672824,14.0456225 11.0132986,13.8271186 11.0316926,13.5879956 L11.4644883,7.96165175 C11.4845267,7.70115317 11.7017474,7.5 11.9630156,7.5 Z" fill="#000000" />-->
							<!--		</g>-->
							<!--	</svg>-->
                        <!--end::Svg Icon-->
							<!--</span>-->
       <!--         </div>-->
                <!--end::Icon-->
                <!--begin::Description-->
       <!--         <div class="ml-1">-->
       <!--             <h3 class="text-dark-75 font-weight-bolder font-size-lg">DB Migration</h3>-->
       <!--             <p class="m-0 text-dark-50 font-weight-bold">If you are going to use a passage of Lorem Ipsum, you need.</p>-->
       <!--         </div>-->
                <!--end::Description-->
       <!--     </div>-->
            <!--end::Item-->
       <!-- </div>-->
        <!--end::Notifications-->
    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->
<!--begin::Quick Panel-->
<div id="kt_quick_panel" class="offcanvas offcanvas-right pt-5 pb-10">
    <!--begin::Header-->
    <div class="offcanvas-header offcanvas-header-navs d-flex align-items-center justify-content-between mb-5">
        <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-3x nav-tabs-primary flex-grow-1 px-10" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_logs">Logs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_notifications">Notifications</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#kt_quick_panel_settings">Settings</a>
            </li>
        </ul>
        <div class="offcanvas-close mt-n1 pr-5">
            <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_panel_close">
                <i class="ki ki-close icon-xs text-muted"></i>
            </a>
        </div>
    </div>
    <!--end::Header-->
    <!--begin::Content-->
    <div class="offcanvas-content px-10">
        <div class="tab-content">
            <!--begin::Tabpane-->
            <div class="tab-pane fade show pt-3 pr-5 mr-n5 active" id="kt_quick_panel_logs" role="tabpanel">
                <!--begin::Section-->
                <div class="mb-15">
                    <h5 class="font-weight-bold mb-5">System Messages</h5>
                    <!--begin::Timeline-->
                    <div class="timeline timeline-5">
                        <div class="timeline-items">
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Icon-->
                                <div class="timeline-media bg-light-primary">
											<span class="svg-icon svg-icon-primary svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000" />
														<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="timeline-desc timeline-desc-light-primary">
                                    <span class="font-weight-bolder text-primary">09:30 AM</span>
                                    <p class="font-weight-normal text-dark-50 pb-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Icon-->
                                <div class="timeline-media bg-light-warning">
											<span class="svg-icon svg-icon-warning svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Attachment2.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M11.7573593,15.2426407 L8.75735931,15.2426407 C8.20507456,15.2426407 7.75735931,15.6903559 7.75735931,16.2426407 C7.75735931,16.7949254 8.20507456,17.2426407 8.75735931,17.2426407 L11.7573593,17.2426407 L11.7573593,18.2426407 C11.7573593,19.3472102 10.8619288,20.2426407 9.75735931,20.2426407 L5.75735931,20.2426407 C4.65278981,20.2426407 3.75735931,19.3472102 3.75735931,18.2426407 L3.75735931,14.2426407 C3.75735931,13.1380712 4.65278981,12.2426407 5.75735931,12.2426407 L9.75735931,12.2426407 C10.8619288,12.2426407 11.7573593,13.1380712 11.7573593,14.2426407 L11.7573593,15.2426407 Z" fill="#000000" opacity="0.3" transform="translate(7.757359, 16.242641) rotate(-45.000000) translate(-7.757359, -16.242641)" />
														<path d="M12.2426407,8.75735931 L15.2426407,8.75735931 C15.7949254,8.75735931 16.2426407,8.30964406 16.2426407,7.75735931 C16.2426407,7.20507456 15.7949254,6.75735931 15.2426407,6.75735931 L12.2426407,6.75735931 L12.2426407,5.75735931 C12.2426407,4.65278981 13.1380712,3.75735931 14.2426407,3.75735931 L18.2426407,3.75735931 C19.3472102,3.75735931 20.2426407,4.65278981 20.2426407,5.75735931 L20.2426407,9.75735931 C20.2426407,10.8619288 19.3472102,11.7573593 18.2426407,11.7573593 L14.2426407,11.7573593 C13.1380712,11.7573593 12.2426407,10.8619288 12.2426407,9.75735931 L12.2426407,8.75735931 Z" fill="#000000" transform="translate(16.242641, 7.757359) rotate(-45.000000) translate(-16.242641, -7.757359)" />
														<path d="M5.89339828,3.42893219 C6.44568303,3.42893219 6.89339828,3.87664744 6.89339828,4.42893219 L6.89339828,6.42893219 C6.89339828,6.98121694 6.44568303,7.42893219 5.89339828,7.42893219 C5.34111353,7.42893219 4.89339828,6.98121694 4.89339828,6.42893219 L4.89339828,4.42893219 C4.89339828,3.87664744 5.34111353,3.42893219 5.89339828,3.42893219 Z M11.4289322,5.13603897 C11.8194565,5.52656326 11.8194565,6.15972824 11.4289322,6.55025253 L10.0147186,7.96446609 C9.62419433,8.35499039 8.99102936,8.35499039 8.60050506,7.96446609 C8.20998077,7.5739418 8.20998077,6.94077682 8.60050506,6.55025253 L10.0147186,5.13603897 C10.4052429,4.74551468 11.0384079,4.74551468 11.4289322,5.13603897 Z M0.600505063,5.13603897 C0.991029355,4.74551468 1.62419433,4.74551468 2.01471863,5.13603897 L3.42893219,6.55025253 C3.81945648,6.94077682 3.81945648,7.5739418 3.42893219,7.96446609 C3.0384079,8.35499039 2.40524292,8.35499039 2.01471863,7.96446609 L0.600505063,6.55025253 C0.209980772,6.15972824 0.209980772,5.52656326 0.600505063,5.13603897 Z" fill="#000000" opacity="0.3" transform="translate(6.014719, 5.843146) rotate(-45.000000) translate(-6.014719, -5.843146)" />
														<path d="M17.9142136,15.4497475 C18.4664983,15.4497475 18.9142136,15.8974627 18.9142136,16.4497475 L18.9142136,18.4497475 C18.9142136,19.0020322 18.4664983,19.4497475 17.9142136,19.4497475 C17.3619288,19.4497475 16.9142136,19.0020322 16.9142136,18.4497475 L16.9142136,16.4497475 C16.9142136,15.8974627 17.3619288,15.4497475 17.9142136,15.4497475 Z M23.4497475,17.1568542 C23.8402718,17.5473785 23.8402718,18.1805435 23.4497475,18.5710678 L22.0355339,19.9852814 C21.6450096,20.3758057 21.0118446,20.3758057 20.6213203,19.9852814 C20.2307961,19.5947571 20.2307961,18.9615921 20.6213203,18.5710678 L22.0355339,17.1568542 C22.4260582,16.76633 23.0592232,16.76633 23.4497475,17.1568542 Z M12.6213203,17.1568542 C13.0118446,16.76633 13.6450096,16.76633 14.0355339,17.1568542 L15.4497475,18.5710678 C15.8402718,18.9615921 15.8402718,19.5947571 15.4497475,19.9852814 C15.0592232,20.3758057 14.4260582,20.3758057 14.0355339,19.9852814 L12.6213203,18.5710678 C12.2307961,18.1805435 12.2307961,17.5473785 12.6213203,17.1568542 Z" fill="#000000" opacity="0.3" transform="translate(18.035534, 17.863961) scale(1, -1) rotate(45.000000) translate(-18.035534, -17.863961)" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="timeline-desc timeline-desc-light-warning">
                                    <span class="font-weight-bolder text-warning">2:45 PM</span>
                                    <p class="font-weight-normal text-dark-50 pt-1 pb-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Icon-->
                                <div class="timeline-media bg-light-success">
											<span class="svg-icon svg-icon-success svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
														<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="timeline-desc timeline-desc-light-success">
                                    <span class="font-weight-bolder text-success">3:12 PM</span>
                                    <p class="font-weight-normal text-dark-50 pt-1 pb-2">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="timeline-item">
                                <!--begin::Icon-->
                                <div class="timeline-media bg-light-danger">
											<span class="svg-icon svg-icon-danger svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<polygon points="0 0 24 0 24 24 0 24" />
														<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
														<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Info-->
                                <div class="timeline-desc timeline-desc-light-danger">
                                    <span class="font-weight-bolder text-danger">7:05 PM</span>
                                    <p class="font-weight-normal text-dark-50 pt-1">To start a blog, think of a topic about and first brainstorm ways to write details</p>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                    </div>
                    <!--end::Timeline-->
                </div>
                <!--end::Section-->
                <!--begin::Section-->
                <div class="mb-5">
                    <h5 class="font-weight-bold mb-5">Notifications</h5>
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35 flex-shrink-0 mr-3">
                            <img alt="Pic" src="assets/media/users/150-5.jpg" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap flex-row-fluid">
                            <!--begin::Text-->
                            <div class="d-flex flex-column pr-5 flex-grow-1">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Marcus Smart</a>
                                <span class="text-muted font-weight-bold">UI/UX, Art Director</span>
                            </div>
                            <!--end::Text-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center py-2">
                                <!--begin::Label-->
                                <span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
                                <!--end::Label-->
                                <!--begin::Btn-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                </a>
                                <!--end::Btn-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35 symbol-light-info flex-shrink-0 mr-3">
                            <span class="symbol-label font-weight-bolder font-size-lg">AH</span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap flex-row-fluid">
                            <!--begin::Text-->
                            <div class="d-flex flex-column pr-5 flex-grow-1">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Andreas Hawks</a>
                                <span class="text-muted font-weight-bold">Python Developer</span>
                            </div>
                            <!--end::Text-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center py-2">
                                <!--begin::Label-->
                                <span class="text-success font-weight-bolder font-size-sm pr-6">+23%</span>
                                <!--end::Label-->
                                <!--begin::Btn-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                </a>
                                <!--end::Btn-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35 symbol-light-success flex-shrink-0 mr-3">
                            <span class="symbol-label font-weight-bolder font-size-lg">SC</span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap flex-row-fluid">
                            <!--begin::Text-->
                            <div class="d-flex flex-column pr-5 flex-grow-1">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sarah Connor</a>
                                <span class="text-muted font-weight-bold">HTML, CSS. jQuery</span>
                            </div>
                            <!--end::Text-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center py-2">
                                <!--begin::Label-->
                                <span class="text-danger font-weight-bolder font-size-sm pr-6">-34%</span>
                                <!--end::Label-->
                                <!--begin::Btn-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                </a>
                                <!--end::Btn-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35 flex-shrink-0 mr-3">
                            <img alt="Pic" src="assets/media/users/150-7.jpg" />
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap flex-row-fluid">
                            <!--begin::Text-->
                            <div class="d-flex flex-column pr-5 flex-grow-1">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Amanda Harden</a>
                                <span class="text-muted font-weight-bold">UI/UX, Art Director</span>
                            </div>
                            <!--end::Text-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center py-2">
                                <!--begin::Label-->
                                <span class="text-success font-weight-bolder font-size-sm pr-6">+72%</span>
                                <!--end::Label-->
                                <!--begin::Btn-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                </a>
                                <!--end::Btn-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center mb-6">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35 symbol-light-danger flex-shrink-0 mr-3">
                            <span class="symbol-label font-weight-bolder font-size-lg">SR</span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap flex-row-fluid">
                            <!--begin::Text-->
                            <div class="d-flex flex-column pr-5 flex-grow-1">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Sean Robbins</a>
                                <span class="text-muted font-weight-bold">UI/UX, Art Director</span>
                            </div>
                            <!--end::Text-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center py-2">
                                <!--begin::Label-->
                                <span class="text-success font-weight-bolder font-size-sm pr-6">+65%</span>
                                <!--end::Label-->
                                <!--begin::Btn-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                </a>
                                <!--end::Btn-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <div class="d-flex align-items-center">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-35 symbol-light-primary flex-shrink-0 mr-3">
                            <span class="symbol-label font-weight-bolder font-size-lg">JT</span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Content-->
                        <div class="d-flex flex-wrap flex-row-fluid">
                            <!--begin::Text-->
                            <div class="d-flex flex-column pr-5 flex-grow-1">
                                <a href="#" class="text-dark text-hover-primary mb-1 font-weight-bold font-size-lg">Jason Tatum</a>
                                <span class="text-muted font-weight-bold">ASP.NET Developer</span>
                            </div>
                            <!--end::Text-->
                            <!--begin::Section-->
                            <div class="d-flex align-items-center py-2">
                                <!--begin::Label-->
                                <span class="text-success font-weight-bolder font-size-sm pr-6">+139%</span>
                                <!--end::Label-->
                                <!--begin::Btn-->
                                <a href="#" class="btn btn-icon btn-light btn-sm">
											<span class="svg-icon svg-icon-success">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-right.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24" />
															<path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-270.000000) translate(-12.000003, -11.999999)" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>
											</span>
                                </a>
                                <!--end::Btn-->
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Item-->
                </div>
                <!--end::Section-->
            </div>
            <!--end::Tabpane-->
            <!--begin::Tabpane-->
            <div class="tab-pane fade pt-2 pr-5 mr-n5" id="kt_quick_panel_notifications" role="tabpanel">
                <!--begin::Nav-->
                <div class="navi navi-icon-circle navi-spacer-x-0">
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-bell text-success icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">5 new user generated report</div>
                                <div class="text-muted">Reports based on sales</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon2-box text-danger icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">2 new items submited</div>
                                <div class="text-muted">by Grog John</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-psd text-primary icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">79 PSD files generated</div>
                                <div class="text-muted">Reports based on sales</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon2-supermarket text-warning icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                <div class="text-muted">Total 234 items</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                <div class="text-muted">Fostest is Barry</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-safe-shield-protection text-danger icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">3 Defence alerts</div>
                                <div class="text-muted">40% less alerts thar last week</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-notepad text-primary icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">Avarage 4 blog posts per author</div>
                                <div class="text-muted">Most posted 12 time</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-users-1 text-warning icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">16 authors joined last week</div>
                                <div class="text-muted">9 photodrapehrs, 7 designer</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon2-box text-info icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">2 new items have been submited</div>
                                <div class="text-muted">by Grog John</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon2-download text-success icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">2.8 GB-total downloads size</div>
                                <div class="text-muted">Mostly PSD end AL concepts</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon2-supermarket text-danger icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">$2900 worth producucts sold</div>
                                <div class="text-muted">Total 234 items</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-bell text-primary icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">7 new user generated report</div>
                                <div class="text-muted">Reports based on sales</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <a href="#" class="navi-item">
                        <div class="navi-link rounded">
                            <div class="symbol symbol-50 mr-3">
                                <div class="symbol-label">
                                    <i class="flaticon-paper-plane-1 text-success icon-lg"></i>
                                </div>
                            </div>
                            <div class="navi-text">
                                <div class="font-weight-bold font-size-lg">4.5h-avarage response time</div>
                                <div class="text-muted">Fostest is Barry</div>
                            </div>
                        </div>
                    </a>
                    <!--end::Item-->
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Tabpane-->
            <!--begin::Tabpane-->
            <div class="tab-pane fade pt-3 pr-5 mr-n5" id="kt_quick_panel_settings" role="tabpanel">
                <form class="form">
                    <!--begin::Section-->
                    <div class="pt-1">
                        <h4 class="mb-7">Privacy Settings:</h4>
                        <div class="pb-5">
                            <div class="checkbox-inline mb-2">
                                <label class="checkbox">
                                    <input type="checkbox" />
                                    <span></span>You have new notifications.</label>
                            </div>
                            <div class="checkbox-inline mb-2">
                                <label class="checkbox">
                                    <input type="checkbox" />
                                    <span></span>You're sent a direct message</label>
                            </div>
                            <div class="checkbox-inline mb-2">
                                <label class="checkbox">
                                    <input type="checkbox" checked="checked" />
                                    <span></span>Someone adds you as a connection</label>
                            </div>
                            <div class="checkbox-inline mb-2">
                                <label class="checkbox checkbox-success">
                                    <input type="checkbox" />
                                    <span></span>Upon new order</label>
                            </div>
                            <div class="checkbox-inline mb-2">
                                <label class="checkbox checkbox-success">
                                    <input type="checkbox" />
                                    <span></span>New membership approval</label>
                            </div>
                        </div>
                        <!--begin::Group-->
                        <div class="text-muted">After you log in, you will be asked for additional information to confirm your identity.</div>
                        <!--end::Group-->
                    </div>
                    <!--end::Section-->
                    <div class="separator separator-dashed my-8"></div>
                    <!--begin::Section-->
                    <div class="pt-1">
                        <h4 class="mb-7">Security Settings:</h4>
                        <div class="pb-5">
                            <div class="checkbox-inline">
                                <label class="checkbox mb-2">
                                    <input type="checkbox" />
                                    <span></span>Personal information safety</label>
                            </div>
                            <p class="form-text text-muted pb-5 mb-0">After you log in, you will be asked for additional information to confirm your identity. For extra security, this requires you to confirm your email.
                                <a href="#" class="font-weight-bold">Learn more</a>.</p>
                            <button type="button" class="btn btn-light-danger font-weight-bolder btn-sm">Setup login verification</button>
                        </div>
                    </div>
                    <!--end::Section-->
                </form>
            </div>
            <!--end::Tabpane-->
        </div>
    </div>
    <!--end::Content-->
</div>
<!--end::Quick Panel-->
<!--begin::Chat Panel-->
<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header align-items-center px-4 py-3">
                    <div class="text-left flex-grow-1">
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown dropdown-inline">
                            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<span class="svg-icon svg-icon-lg">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24" />
													<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
													<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
												</g>
											</svg>
                                            <!--end::Svg Icon-->
										</span>
                            </button>
                            <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                                <!--begin::Navigation-->
                                <ul class="navi navi-hover py-5">
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<polygon points="0 0 24 0 24 24 0 24" />
																	<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Member</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3" />
																	<path d="M10.875,15.75 C10.6354167,15.75 10.3958333,15.6541667 10.2041667,15.4625 L8.2875,13.5458333 C7.90416667,13.1625 7.90416667,12.5875 8.2875,12.2041667 C8.67083333,11.8208333 9.29375,11.8208333 9.62916667,12.2041667 L10.875,13.45 L14.0375,10.2875 C14.4208333,9.90416667 14.9958333,9.90416667 15.3791667,10.2875 C15.7625,10.6708333 15.7625,11.2458333 15.3791667,11.6291667 L11.5458333,15.4625 C11.3541667,15.6541667 11.1145833,15.75 10.875,15.75 Z" fill="#000000" />
																	<path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Contact</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Time-schedule.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M10.9630156,7.5 L11.0475062,7.5 C11.3043819,7.5 11.5194647,7.69464724 11.5450248,7.95024814 L12,12.5 L15.2480695,14.3560397 C15.403857,14.4450611 15.5,14.6107328 15.5,14.7901613 L15.5,15 C15.5,15.2109164 15.3290185,15.3818979 15.1181021,15.3818979 C15.0841582,15.3818979 15.0503659,15.3773725 15.0176181,15.3684413 L10.3986612,14.1087258 C10.1672824,14.0456225 10.0132986,13.8271186 10.0316926,13.5879956 L10.4644883,7.96165175 C10.4845267,7.70115317 10.7017474,7.5 10.9630156,7.5 Z" fill="#000000" />
																	<path d="M7.38979581,2.8349582 C8.65216735,2.29743306 10.0413491,2 11.5,2 C17.2989899,2 22,6.70101013 22,12.5 C22,18.2989899 17.2989899,23 11.5,23 C5.70101013,23 1,18.2989899 1,12.5 C1,11.5151324 1.13559454,10.5619345 1.38913364,9.65805651 L3.31481075,10.1982117 C3.10672013,10.940064 3,11.7119264 3,12.5 C3,17.1944204 6.80557963,21 11.5,21 C16.1944204,21 20,17.1944204 20,12.5 C20,7.80557963 16.1944204,4 11.5,4 C10.54876,4 9.62236069,4.15592757 8.74872191,4.45446326 L9.93948308,5.87355717 C10.0088058,5.95617272 10.0495583,6.05898805 10.05566,6.16666224 C10.0712834,6.4423623 9.86044965,6.67852665 9.5847496,6.69415008 L4.71777931,6.96995273 C4.66931162,6.97269931 4.62070229,6.96837279 4.57348157,6.95710938 C4.30487471,6.89303938 4.13906482,6.62335149 4.20313482,6.35474463 L5.33163823,1.62361064 C5.35654118,1.51920756 5.41437908,1.4255891 5.49660017,1.35659741 C5.7081375,1.17909652 6.0235153,1.2066885 6.2010162,1.41822583 L7.38979581,2.8349582 Z" fill="#000000" opacity="0.3" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Event</span>
                                            <span class="navi-link-badge">
														<span class="label label-light-primary label-inline font-weight-bold">new</span>
													</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Git3.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M7,11 L15,11 C16.1045695,11 17,10.1045695 17,9 L17,8 L19,8 L19,9 C19,11.209139 17.209139,13 15,13 L7,13 L7,15 C7,15.5522847 6.55228475,16 6,16 C5.44771525,16 5,15.5522847 5,15 L5,9 C5,8.44771525 5.44771525,8 6,8 C6.55228475,8 7,8.44771525 7,9 L7,11 Z" fill="#000000" opacity="0.3" />
																	<path d="M6,21 C7.1045695,21 8,20.1045695 8,19 C8,17.8954305 7.1045695,17 6,17 C4.8954305,17 4,17.8954305 4,19 C4,20.1045695 4.8954305,21 6,21 Z M6,23 C3.790861,23 2,21.209139 2,19 C2,16.790861 3.790861,15 6,15 C8.209139,15 10,16.790861 10,19 C10,21.209139 8.209139,23 6,23 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M18,7 C19.1045695,7 20,6.1045695 20,5 C20,3.8954305 19.1045695,3 18,3 C16.8954305,3 16,3.8954305 16,5 C16,6.1045695 16.8954305,7 18,7 Z M18,9 C15.790861,9 14,7.209139 14,5 C14,2.790861 15.790861,1 18,1 C20.209139,1 22,2.790861 22,5 C22,7.209139 20.209139,9 18,9 Z" fill="#000000" fill-rule="nonzero" />
																	<path d="M6,7 C7.1045695,7 8,6.1045695 8,5 C8,3.8954305 7.1045695,3 6,3 C4.8954305,3 4,3.8954305 4,5 C4,6.1045695 4.8954305,7 6,7 Z M6,9 C3.790861,9 2,7.209139 2,5 C2,2.790861 3.790861,1 6,1 C8.209139,1 10,2.790861 10,5 C10,7.209139 8.209139,9 6,9 Z" fill="#000000" fill-rule="nonzero" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Task</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Settings4.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
																	<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Settings</span>
                                        </a>
                                    </li>
                                    <li class="navi-separator my-3"></li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Info-circle.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10" />
																	<rect fill="#000000" x="11" y="10" width="2" height="7" rx="1" />
																	<rect fill="#000000" x="11" y="7" width="2" height="2" rx="1" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Help</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
													<span class="navi-icon">
														<span class="svg-icon svg-icon-md svg-icon-primary">
															<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Safe-chat.svg-->
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																	<rect x="0" y="0" width="24" height="24" />
																	<path d="M8,17 C8.55228475,17 9,17.4477153 9,18 L9,21 C9,21.5522847 8.55228475,22 8,22 L3,22 C2.44771525,22 2,21.5522847 2,21 L2,18 C2,17.4477153 2.44771525,17 3,17 L3,16.5 C3,15.1192881 4.11928813,14 5.5,14 C6.88071187,14 8,15.1192881 8,16.5 L8,17 Z M5.5,15 C4.67157288,15 4,15.6715729 4,16.5 L4,17 L7,17 L7,16.5 C7,15.6715729 6.32842712,15 5.5,15 Z" fill="#000000" opacity="0.3" />
																	<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000" />
																</g>
															</svg>
                                                            <!--end::Svg Icon-->
														</span>
													</span>
                                            <span class="navi-text">Privacy</span>
                                            <span class="navi-link-badge">
														<span class="label label-light-danger label-rounded font-weight-bold">5</span>
													</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <div class="text-center flex-grow-1">
                        <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                        <div>
                            <span class="label label-dot label-success"></span>
                            <span class="font-weight-bold text-muted font-size-sm">Active</span>
                        </div>
                    </div>
                    <div class="text-right flex-grow-1">
                        <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                            <i class="ki ki-close icon-1x"></i>
                        </button>
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Scroll-->
                    <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                        <!--begin::Messages-->
                        <div class="messages">
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/150-11.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">2 Hours</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">3 minutes</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/150-9.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                            </div>
                            <!--end::Message Out-->
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/150-11.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/150-9.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                            </div>
                            <!--end::Message Out-->
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/150-2.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                                    <a href="#">https://github.com</a></div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/150-9.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                            </div>
                            <!--end::Message Out-->
                            <!--begin::Message In-->
                            <div class="d-flex flex-column mb-5 align-items-start">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-40 mr-3">
                                        <img alt="Pic" src="assets/media/users/150-2.jpg" />
                                    </div>
                                    <div>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                                        <span class="text-muted font-size-sm">40 seconds</span>
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                            </div>
                            <!--end::Message In-->
                            <!--begin::Message Out-->
                            <div class="d-flex flex-column mb-5 align-items-end">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <span class="text-muted font-size-sm">Just now</span>
                                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                                    </div>
                                    <div class="symbol symbol-circle symbol-40 ml-3">
                                        <img alt="Pic" src="assets/media/users/150-9.jpg" />
                                    </div>
                                </div>
                                <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                            </div>
                            <!--end::Message Out-->
                        </div>
                        <!--end::Messages-->
                    </div>
                    <!--end::Scroll-->
                </div>
                <!--end::Body-->
                <!--begin::Footer-->
                <div class="card-footer align-items-center">
                    <!--begin::Compose-->
                    <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
                    <div class="d-flex align-items-center justify-content-between mt-5">
                        <div class="mr-3">
                            <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                                <i class="flaticon2-photograph icon-lg"></i>
                            </a>
                            <a href="#" class="btn btn-clean btn-icon btn-md">
                                <i class="flaticon2-photo-camera icon-lg"></i>
                            </a>
                        </div>
                        <div>
                            <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                        </div>
                    </div>
                    <!--begin::Compose-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Card-->
        </div>
    </div>
</div>
<!--end::Chat Panel-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
                <!--end::Svg Icon-->
			</span>
</div>
<!--end::Scrolltop-->
<!--begin::Sticky Toolbar-->

<!--end::Sticky Toolbar-->
<!--begin::Demo Panel-->

<!--end::Demo Panel-->
<script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3E97FF", "secondary": "#E5EAEE", "success": "#08D1AD", "info": "#844AFF", "warning": "#F5CE01", "danger": "#FF3D60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#DEEDFF", "secondary": "#EBEDF3", "success": "#D6FBF4", "info": "#6125E1", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{url("assets/plugins/global/plugins.bundle.js")}}"></script>
<script src="{{url("assets/plugins/custom/prismjs/prismjs.bundle.js")}}"></script>
<script src="{{url("assets/js/scripts.bundle.js")}}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="{{url("assets/plugins/custom/fullcalendar/fullcalendar.bundle.js")}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{url("assets/js/pages/widgets.js")}}"></script>
<script src="{{url("assets/js/pages/features/forms/widgets/select2.js")}}"></script>

<!--end::Page Scripts-->
</body>
<script src="{{url("assets/js/pages/features/file-upload/dropzonejs.js")}}"></script>
<script src="{{url("assets/js/lightbox/fslightbox.js")}}"></script>

{{-- This model box for Projects --}}
<script>
    $('#exampleModalCenter_project').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var myid = button.data('myid');
        var pname = button.data('pname');
        var pcode = button.data('pcode');
        var pcode1 = button.data('ptype');
        var pcode2 = button.data('psp');
        var pcode3 = button.data('cname');
        var pcode4 = button.data('cloc');
        var modal = $(this);
        modal.find('.modal-body #myid').val(myid);
        modal.find('.modal-body #pname').val(pname);
        modal.find('.modal-body #pcode').val(pcode);
        modal.find('.modal-body #ptype').val(pcode1);
        modal.find('.modal-body #psp').val(pcode2);
        modal.find('.modal-body #cname').val(pcode3);
        modal.find('.modal-body #cloc').val(pcode4);
    })
</script>
{{-- This model box for Projects --}}

<!--end::Body-->
</html>
