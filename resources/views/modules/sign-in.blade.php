<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
		<title>Iniciar Sesion</title>
		<meta name="description" content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/jet-free" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/dashboard/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/dashboard/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
    </head>
    <body id="kt_body" class="bg-white">
        <!--begin::Main-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                    <!--begin::Wrapper-->
                <!--begin::Alert-->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <div class="d-flex flex-column">
                        <h4 class="mb-1 text-dark text-white">{{ $message }}</h4>
                    </div>
                </div>
                @endif
                <!--end::Alert-->
                    <div class="w-lg-500px bg-white rounded shadow-sm p-10 p-lg-15 mx-auto">
                        <!--begin::Form-->
                        <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                            novalidate="novalidate" id="kt_sign_in_form"
                            action="{{ route('login') }}"
                            method="POST"
                            name="login"
                            onsubmit="return validateform()">
                            @csrf
                            <!--begin::Heading-->
                            <div class="text-center mb-8">
                                <!--begin::Title-->
                                <h1 class="text-dark mb-3">Iniciar Sesion</h1>
                                <!--end::Title-->
                                <!--begin::Link-->
                                <div class="text-gray-400 fw-bold fs-4">Eres nuevo? 
                                <a href="{{ route('sign-up') }}" class="link-primary fw-bolder">Create una cuenta</a></div>
                                <!--end::Link-->
                            </div>
                            <!--begin::Heading-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-8 fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label for="email" class="form-label fs-6 fw-bolder text-dark">Correo</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid"
                                type="email" 
                                name="email" 
                                placeholder="Escribe tu correo@domain.com" 
                                required />
                                <!--end::Input-->
                            <span id="messageEmail" class="text-danger"></span>
                            @if ($errors->has('email'))
                                <div class="fv-plugins-message-container text-danger">{{ $errors->first('email') }}</div>
                                <!--<span class="text-danger">{{ $errors->first('email') }}</span>-->
                            @endif
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack mb-2">
                                    <!--begin::Label-->
                                    <label for="password" class="form-label fw-bolder text-dark fs-6 mb-0">Contraseña</label>
                                    <!--end::Label-->
                                    <!--begin::Link-->
                                    <a href="#" class="link-primary fs-6 fw-bolder">Recuperar Contraseña ?</a>
                                    <!--end::Link-->
                                </div>
                                <!--end::Wrapper-->
                                <!--begin::Input-->
                                <input class="form-control form-control-lg form-control-solid" 
                                type="password"
                                placeholder="Escribe tu contraseña" 
                                name="password"
                                autocomplete="off"
                                required>
                                <!--end::Input-->
                            <span id="messagePassword" class="text-danger"></span>
                            @if ($errors->has('password'))
                            <div class="fv-plugins-message-container text-danger">{{ $errors->first('password') }}</div>
                            @endif
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
                                    <span class="indicator-label">Iniciar Sesion</span>
                                    <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Submit button-->
                            </div>
                            <!--end::Actions-->
                            <div class="text-center">
                                <!--begin::Submit button-->
                                <a href="{{ route('index') }}" type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-danger w-100 mb-5">
                                    <span class="indicator-label">Cancelar</span>
                                    <span class="indicator-progress">Please wait... 
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </a>
                                <!--end::Submit button-->
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
                        <a href="https://github.com/owenwilson" class="text-muted text-hover-primary px-2">Github - Wilson</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Main-->
        <script>var hostUrl = "{{ asset('assets/dashboard//assets/') }}";</script>
        <!--begin::Javascript-->
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="{{ asset('assets/dashboard/assets/plugins/global/plugins.bundle.js') }}"></script>
        <script src="{{ asset('assets/dashboard/assets/js/scripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/dashboard/assets/js/scripts.validate_form_sign-in.js') }}"></script>
        <!--end::Global Javascript Bundle-->
        <!--end::Javascript-->
        <!--Begin::Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!--End::Google Tag Manager (noscript) -->
    </body>    
    <!--end::Body-->
</html>
