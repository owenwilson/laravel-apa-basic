<!DOCTYPE html>
<html lang="en">
	@include('layouts-dashboard.head')
    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
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
                </div>

                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						@include('layouts-dashboard.header')
					</div>
					<!--end::Header-->

                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container"><div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="text-dark fw-bolder my-1 fs-2">Lista</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="/jet-html-pro/index.html" class="text-muted">Inicio</a>
									</li>
									<li class="breadcrumb-item text-muted">Administracion de documentos Apa</li>
									<li class="breadcrumb-item text-dark">Lista</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--begin::Card-->
							<div class="card card-flush">
								<!--begin::Card header-->
								<div class="card-header mt-6">
									<!--begin::Card title-->
									<div class="card-title">
										<!--begin::Search-->
										<div class="d-flex align-items-center position-relative my-1 me-5">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1 position-absolute ms-6">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
											<input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Buscar Documento">
										</div>
										<!--end::Search-->
									</div>
									<!--end::Card title-->
									<!--begin::Card toolbar-->
									<div class="card-toolbar">
										<!--begin::Button-->
										<a type="button" href="{{ route('create-document') }}" class="btn btn-light-primary">
										<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
										<span class="svg-icon svg-icon-3">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"></rect>
												<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="black"></rect>
												<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="black"></rect>
											</svg>
										</span>
										<!--end::Svg Icon-->Crear Documento Apa</a>
										<!--end::Button-->
									</div>
									<!--end::Card toolbar-->
								</div>
								<!--end::Card header-->
								<!--begin::Card body-->
								<div class="card-body pt-0">
									<!--begin::Table-->
                                    <div id="kt_permissions_table_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <table
                                            class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                                            id="kt_permissions_table">
                                            <!--begin::Table head-->
                                            <thead>
                                                <!--begin::Table row-->
                                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                                    <th class="min-w-125px sorting">#</th>
                                                    <th class="min-w-125px sorting">Titulo del Proyecto Apa</th>
                                                    <th class="min-w-125px sorting">Fecha de creacion</th>
                                                    <th class="min-w-125px sorting">Ultima Actualizacion</th>
                                                    <th class="text-end min-w-100px sorting_disabled">Accion</th>
                                                </tr>
                                                <!--end::Table row-->
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody class="fw-bold text-gray-600">
                                            @foreach ($documents as $index => $list_documents)
                                                <tr class="odd">
                                                    <td>{{ $index+1 }}</td>
                                                    <td>{{ $list_documents['title'] }}</td>
                                                    <td data-order="2022-06-20T20:43:00-04:00">{{ $list_documents['created_at'] }}</td>
                                                    <td data-order="2022-06-20T20:43:00-04:00">{{ $list_documents['updated_at'] }}</td>
                                                    <td class="text-end">
                                                        <div class="btn-group">
                                                            <a href="#" class="btn btn-primary btn-sm">Editar</a>
                                                            <form method="POST" action="#">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                                        </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <div class="row">
                                        <div
                                            class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                                            <div class="dataTables_length" id="kt_permissions_table_length">
                                                <label>
                                                    <select name="kt_permissions_table_length"
                                                        aria-controls="kt_permissions_table"
                                                        class="form-select form-select-sm form-select-solid">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                </label>
                                            </div>
                                        </div>
                                        <div
                                            class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="kt_permissions_table_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled"
                                                        id="kt_permissions_table_previous">
                                                        <a href="#" aria-controls="kt_permissions_table" data-dt-idx="0"
                                                            tabindex="0" class="page-link"><i
                                                                class="previous"></i></a>
                                                    </li>
                                                    <li class="paginate_button page-item active"><a href="#"
                                                            aria-controls="kt_permissions_table" data-dt-idx="1"
                                                            tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled"
                                                        id="kt_permissions_table_next">
                                                        <a href="#" aria-controls="kt_permissions_table" data-dt-idx="2"
                                                            tabindex="0" class="page-link">
                                                            <i class="next">
                                                            </i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Table-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Card-->
						</div>
						<!--end::Container-->
					</div>
					@include('layouts-dashboard.footer')
                </div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
        @include('layouts-dashboard.scripts')
    </body>
</html>
