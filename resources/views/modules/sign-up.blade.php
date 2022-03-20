<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Iniciar Sesion</title>
    <meta name="description"
        content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
    <meta name="keywords"
        content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
    <link rel="canonical" href="Https://preview.keenthemes.com/jet-free" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="{{ asset('assets/dashboard/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/dashboard/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>

<body id="kt_body" class="bg-white">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Sign-up -->
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <!--begin::Content-->
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <!--begin::Wrapper-->
                <div class="w-lg-600px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <!--begin::Form-->
                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                        novalidate="novalidate" id="kt_sign_up_form" 
                        action="{{ route('store') }}"
                        method="POST"
                        name="register"
                        onsubmit="return validateform()">
                        @csrf
                        <!--begin::Heading-->
                        <div class="mb-10 text-center">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Crear una cuenta</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <div class="text-gray-400 fw-bold fs-4">Ya tienes una cuenta?
                                <a href="{{ route('sign-in') }}" class="link-primary fw-bolder">Inicia sesion aqui</a>
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--end::Heading-->


                        <!--begin::Input group-->
                        <div class="row fv-row mb-7 fv-plugins-icon-container">
                            <!--begin::Col-->
                            <!--<div class="col-xl-6">-->
                                <label class="form-label fw-bolder text-dark fs-6">Nombre</label>
                                <input class="form-control form-control-lg form-control-solid" 
                                    type="text"
                                    placeholder="Nombre" 
                                    name="name"
                                    autocomplete="off"
                                    value="{{ old('name') }}">
                                <span class="text-danger" id="messageName"></span>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            <!--</div>-->
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-7 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Correo Electronico</label>
                            <input class="form-control form-control-lg form-control-solid"
                                type="email"
                                placeholder="Correo Electronico" 
                                name="email" 
                                autocomplete="off"
                                value="{{ old('email') }}">
                            <span class="text-danger" id="messageEmail"></span>
                            @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6">Contraseña</label>
                                <!--end::Label-->
                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" 
                                        type="password"
                                        placeholder="Escribe tu Contraseña"
                                        name="password"
                                        autocomplete="off">
                                    <span class="text-danger" id="messagePassword"></span>
                                    @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>
                                <!--end::Input wrapper-->
                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Hint-->
                            <div class="text-muted">Use 8 o más caracteres con una combinación de letras, numeros y
                                simbolos.</div>
                            <!--end::Hint-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-5 fv-plugins-icon-container">
                            <label class="form-label fw-bolder text-dark fs-6">Confirmar Contraseña</label>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                placeholder="Escribe nuevamente tu contraseña" name="password"
                                autocomplete="off">
                                <span class="text-danger" id="messagePassword"></span>
                            @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <!-- <div class="fv-row mb-10 fv-plugins-icon-container">
        <label class="form-check form-check-custom form-check-solid mb-5">
         <input class="form-check-input" type="checkbox" name="toc" value="1">
         <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree &amp;
         <a href="#" class="ms-1 link-primary">Terms and conditions</a>.</span>
        </label>
       <div class="fv-plugins-message-container invalid-feedback"></div></div> -->
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                <span class="indicator-label">Registrarse</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        <!--end::Actions-->
                        <br>
                        <div class="text-center">
                            <a href="{{ route('index') }}" id="kt_sign_up_submit" class="btn btn-lg btn-danger">
                                <span class="indicator-label">Cancelar</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </a>
                        </div>
                        <!--end::Actions-->
                        <div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Content-->
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-column-auto p-10">
                <!--begin::Links-->
                <div class="d-flex align-items-center fw-bold fs-6">
                    <a href="https://github.com/owenwilson" class="text-muted text-hover-primary px-2">Github -
                        Wilson</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Authentication - Sign-up-->
    </div>
    <!--end::Main-->
    <script>
        var hostUrl = "{{ asset('assets/dashboard/assets/') }}";
    </script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="{{ asset('assets/dashboard/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/dashboard/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/dashboard/assets/js/scripts.validate_form_sign-up.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--end::Javascript-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->

    <!--end::Body-->
</body>

</html>
