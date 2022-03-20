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
                            <h1 class="text-dark fw-bolder my-1 fs-2">Registrar</h1>
                            <!--end::Heading-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb fw-bold fs-base my-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/jet-html-pro/index.html" class="text-muted">Inicio</a>
                                </li>
                                <li class="breadcrumb-item text-muted">Administraci&#243n de usuarios</li>
                                <li class="breadcrumb-item text-dark">Crear Usuario</li>
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
                                    <h2>Formulario de registro de usuarios</h2>
                                    <!--end::Search-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <h3>registrando....</h3>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card card-flush">
                                <div class="card-body pt-0">
                                    <form method="POST" action="{{ route('register-user') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
					<div class="fv-row mb-8 fv-plugins-icon-container">
					    <label class="form-label fs-6 fw-bolder text-dark required">Nombre</label>
                                                <input type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Escribe tu nombre"
                                                value="{{ old('name') }}"/>
                                                @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                @endif
                                        </div>
					<div class="fv-row mb-8 fv-plugins-icon-container">
                                            <label class="form-label fs-6 fw-bolder text-dark required">Email</label>
                                                <input type="email"
                                                class="form-control"
                                                name="email"
                                                placeholder="Escribe tu correo electronico"
                                                value="{{ old('email') }}"/>
                                                @if ($errors->has('email'))
                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                @endif
                                        </div>
					<div class="fv-row mb-8 fv-plugins-icon-container">
                                            <label class="form-label fs-6 fw-bolder text-dark required">Contrase&#241a</label>
                                                <input type="text"
                                                class="form-control"
                                                name="password"
                                                placeholder="Escribe tu contrase&#241a"/>
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                        </div>
					<div class="fv-row mb-8 fv-plugins-icon-container">
                                            <label class="form-label fs-6 fw-bolder text-dark required">Repite la contrase&#241a</label>
                                                <input type="text"
                                                class="form-control"
                                                name="password"
                                                placeholder="Repite la contrase&#241a"/>
                                                @if ($errors->has('password'))
                                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                                @endif
                                        </div>
					</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <button type="submit" class="btn btn-primary">Registrar</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6">
                                            <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>
                                        </div>
                                    </div>
                                    </form>
                                </div>
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
