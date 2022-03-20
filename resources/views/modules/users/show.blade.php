<!DOCTYPE html>
<html lang="en">
@include('layouts-dashboard.head')

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
                <!--begin::Primary-->
                <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
                    @include('layouts-dashboard.navbar')
                </div>
            </div>

            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
                    data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    @include('layouts-dashboard.header')
                </div>
                <!--end::Header-->

                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                    <div class="container-xxl" id="kt_content_container">
                        <div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0"
                            data-kt-swapper="true" data-kt-swapper-mode="prepend"
                            data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
                            <!--begin::Heading-->
                            <h1 class="text-dark fw-bolder my-1 fs-2">Datos</h1>
                            <!--end::Heading-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb fw-bold fs-base my-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/jet-html-pro/index.html" class="text-muted">Inicio</a>
                                </li>
                                <li class="breadcrumb-item text-muted">Mi Usuario</li>
                                <li class="breadcrumb-item text-dark">Mi Perfil</li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--begin::Card-->
                        <div class="d-flex flex-column flex-xl-row">
                            <!--begin::Sidebar-->
                            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">
                                <!--begin::Card-->
                                <div class="card mb-5 mb-xl-8">
                                    <!--begin::Card body-->
                                    <div class="card-body">
                                        <!--begin::Summary-->
                                        <!--begin::User Info-->
                                        <div class="d-flex flex-center flex-column py-5">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-100px symbol-circle mb-7">
                                                <img src="{{ asset('assets/dashboard/assets/media/avatars/avatar.png') }}" alt="image">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Name-->
                                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">
                                                {{ $user_show['name'] }}
                                            </a>
                                            <!--end::Name-->
                                            <!--begin::Position-->
                                            <div class="mb-9">
                                                <!--begin::Badge-->
                                                <div class="badge badge-lg badge-light-primary d-inline">Rol
                                                </div>
                                                <!--begin::Badge-->
                                            </div>
                                            <!--end::Position-->
                                        </div>
                                        <!--end::User Info-->
                                        <!--end::Summary-->
                                        <!--begin::Details toggle-->
                                        <div class="d-flex flex-stack fs-4 py-3">
                                            <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                                                href="#kt_user_view_details" role="button" aria-expanded="false"
                                                aria-controls="kt_user_view_details">Detalles
                                                <span class="ms-2 rotate-180">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                                    <span class="svg-icon svg-icon-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path
                                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                            </div>
                                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title=""
                                                data-bs-original-title="Edit customer details">
                                                <a href="{{ route('edit-user', $user_show['id']) }}" class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_update_details">Editar</a>
                                            </span>
                                        </div>
                                        <!--end::Details toggle-->
                                        <div class="separator"></div>
                                        <!--begin::Details content-->
                                        <div id="kt_user_view_details" class="collapse show">
                                            <div class="pb-5 fs-6">
                                                <!--begin::Details item-->
                                                <div class="fw-bolder mt-5">Email</div>
                                                <div class="text-gray-600">
                                                    <a href="#"
                                                        class="text-gray-600 text-hover-primary">{{ $user_show['email'] }}</a>
                                                </div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bolder mt-5">Address</div>
                                                <div class="text-gray-600">101 Collin Street,
                                                    <br>Melbourne 3000 VIC
                                                    <br>Australia
                                                </div>
                                                <!--begin::Details item-->
                                                <!--begin::Details item-->
                                                <div class="fw-bolder mt-5">Ultima Actualizacion</div>
                                                <div class="text-gray-600">{{ $user_show['updated_at'] }}</div>
                                                <!--begin::Details item-->
                                            </div>
                                        </div>
                                        <!--end::Details content-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->

                            </div>
                            <!--end::Sidebar-->
                            <!--begin::Content-->
                            <div class="flex-lg-row-fluid ms-lg-15">
                                <!--begin:::Tabs-->
                                <ul
                                    class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                            href="#kt_user_view_overview_tab">Resumen</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                            href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item ms-auto">
                                        <!--begin::Action menu-->
                                        <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                                            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Acci&#243n
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-2 me-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-5">
                                                <a href="#" class="menu-link text-danger px-5">Eliminar mi Cuenta</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                        <!--end::Menu-->
                                    </li>
                                    <!--end:::Tab item-->
                                </ul>
                                <!--end:::Tabs-->
                                <!--begin:::Tab content-->
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade show active" id="kt_user_view_overview_tab"
                                        role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card card-flush mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header mt-6">
                                                <!--begin::Card title-->
                                                <div class="card-title flex-column">
                                                    <h2 class="mb-1">Documentos Apa Creados</h2>
                                                    <div class="fs-6 fw-bold text-muted">Lista de documentos registrados</div>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <button type="button" class="btn btn-light-primary btn-sm"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_add_schedule">
                                                        <!--SVG file not found: media/icons/duotune/art/art008.svg-->
                                                        Crear Nuevo Documento Apa
                                                    </button>
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body p-9 pt-4">
                                                <!--begin::Tab Content-->
                                                <div class="tab-content">
                                                    <div class="table-responsive">
                                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb0 dataTable no-footer">
                                                            <thead>
                                                                <tr class="text-start fw-bolder fs-7 text-uppercase gw-0">
                                                                    <th class="text-center min-w-125px sorting">#</th>
                                                                    <th class="text-center min-w-125px sorting">Titulo</th>
                                                                    <th class="text-center min-w-125px sorting">Acci&#243n</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-bold text-gray-800">
                                                                <tr>
                                                                    <td class="text-center">1</td>
                                                                    <td class="text-center">example1</td>
                                                                    <td class="text-center">
                                                                        <div class="btn btn-group">
                                                                            <a href="#" class="btn btn-sm btn-outline-success">Ver</a>
                                                                            <a href="#" class="btn btn-sm btn-outline-primary">Editar</a>
                                                                            <form action="">
                                                                            @csrf
                                                                                <a href="#" class="btn btn-sm btn-outline-danger">Eliminar</a>
                                                                            </form>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!--end::Tab Content-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card pt-4 mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header border-0">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Profile</h2>
                                                </div>
                                                <!--end::Card title-->
                                            </div>
                                            <!--end::Card header-->
                                        </div>
                                        <!--end::Card-->
                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab"
                                        role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card pt-4 mb-6 mb-xl-9">

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0 pb-5">
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-dashed gy-5"
                                                        id="kt_table_users_login_session">
                                                        <!--begin::Table head-->
                                                        <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                                                            <!--begin::Table row-->
                                                            <tr class="text-start text-muted text-uppercase gs-0">
                                                                <th class="min-w-100px">Location</th>
                                                                <th>Device</th>
                                                                <th>IP Address</th>
                                                                <th class="min-w-125px">Time</th>
                                                                <th class="min-w-70px">Actions</th>
                                                            </tr>
                                                            <!--end::Table row-->
                                                        </thead>
                                                        <!--end::Table head-->
                                                        <!--begin::Table body-->
                                                        <tbody class="fs-6 fw-bold text-gray-600">
                                                            <tr>
                                                                <!--begin::Invoice=-->
                                                                <td>Australia</td>
                                                                <!--end::Invoice=-->
                                                                <!--begin::Status=-->
                                                                <td>Chome - Windows</td>
                                                                <!--end::Status=-->
                                                                <!--begin::Amount=-->
                                                                <td>207.15.45.10</td>
                                                                <!--end::Amount=-->
                                                                <!--begin::Date=-->
                                                                <td>23 seconds ago</td>
                                                                <!--end::Date=-->
                                                                <!--begin::Action=-->
                                                                <td>Current session</td>
                                                                <!--end::Action=-->
                                                            </tr>
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Card-->

                                    </div>
                                    <!--end:::Tab pane-->
                                </div>
                                <!--end:::Tab content-->
                            </div>
                            <!--end::Content-->
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
