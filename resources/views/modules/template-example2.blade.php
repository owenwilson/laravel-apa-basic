<!DOCTYPE html>
<html lang="en">
	@include('layouts-dashboard.head')
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Primary-->
					<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
						@include('layouts-dashboard.navbar')
					</div>
					<!--end::Primary-->
					<!--begin::Action-->
					<!--end::Action-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						@include('layouts-dashboard.header')
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="kt_content_container">
							<!--begin::Row-->
							<div class="row g-5 gx-xxl-8 mb-xxl-3">
								<!--begin::Col-->
								<div class="col-xxl-4">
									<!--begin::Engage Widget 1-->
									<div class="card card-xxl-stretch">
										<!--begin::Card body-->
										<div class="card-body d-flex flex-column justify-content-between h-100">
											<!--begin::Section-->
											<div class="pt-12">
												<!--begin::Title-->
												<h3 class="text-dark text-center fs-1 fw-boldest line-height-lg">Kickstart
												
											</div>
											<!--end::Section-->
											<!--begin::Image-->
											<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-150px" style="background-image:url('assets/dashboard/assets/media/illustrations/user-welcome.png')"></div>
											<!--end::Image-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Engage Widget 1-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xxl-8">
									<!--begin::Chart Widget 1-->
									<div class="card card-xxl-stretch mb-5 mb-xxl-8">
										<!--begin::Card header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Card title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-boldest fs-3 text-dark">Authors Overview</span>
												<span class="text-gray-400 mt-2 fw-bold fs-6">Lista de usuarios</span>
											</h3>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Nav-->
												<ul class="nav nav-pills">
													<li class="nav-item me-1">
														<a class="nav-link btn btn-outline-primary"
														data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_chart_widget_1_tab_pane_1">
														Registrar Nuevo Usuario
														</a>
													</li>
												</ul>
												<!--end::Nav-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body p-0">
											<!--begin::Tab content-->
											<div class="tab-content pt-10">
												<div class="row p-0 px-9" >
													<div class="table-responsive">
														<table class="table table-hover">
															<thead>
																<tr>
																	<td>#</td>
																	<td>example 1</td>
																	<td>example 2</td>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>example data 1</td>
																	<td>example data 2</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<!--end::Tab content-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Chart Widget 1-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					@include('layouts-dashboard.footer')
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
	@include('layouts-dashboard.scripts')
	</body>
	<!--end::Body-->
</html>