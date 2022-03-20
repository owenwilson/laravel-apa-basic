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
                                <li class="breadcrumb-item text-muted">Tus documentos con norma APA</li>
                                <li class="breadcrumb-item text-dark">Crear un documento de investigaci&#243n</li>
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
                                    <h2>Formulario de registro para normas APA</h2>
                                    <!--end::Search-->
                                </div>
                                <!--end::Card title-->
                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a class="btn btn-success">Documentos con norma APA</a>
                                    <!--end::Button-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->
                            <!--begin::Card body-->
                            <div class="card card-flush">
                                <div class="card-body pt-0">
                                    <form method="POST" action="{{ route('register-document') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-center">
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label
                                                            class="form-label fs-6 fw-bolder text-dark required">TITULO</label>
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Escribe el titulo de tu investigacion" value="{{ old('title') }}" />
                                                        @if ($errors->has('title'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                                    <label
                                                        class="form-label fs-6 fw-bolder text-dark required">TEXTO</label>
                                                    <textarea type="text" class="form-control" id="textarea" rows="20"
                                                        name="content" placeholder="Escribe tu investigacion" value="{{ old('content') }}"></textarea>
                                                    @if ($errors->has('content'))
                                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-center">
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label
                                                            class="form-label fs-6 fw-bolder text-dark required">PIE DE PAGINA</label>
                                                        <input type="text" class="form-control" name="footer"
                                                            placeholder="Escribe el pie de pagina" value="{{ old('footer') }}" />
                                                        @if ($errors->has('footer'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('footer') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-center">
                                                    <a href="{{ route('home') }}" class="btn btn-danger">Cancelar</a>
                                                </div>
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
