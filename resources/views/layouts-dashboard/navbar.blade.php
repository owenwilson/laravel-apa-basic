<!--begin::Nav-->
<div class="aside-nav d-flex flex-column flex-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
    <!--begin::Primary menu-->
    <div id="kt_aside_menu"
        class="menu menu-column menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5"
        data-kt-menu="true">
        <div class="menu-item py-2">
            <a class="menu-link active menu-center" href="{{ route('home') }}" title="Panel" data-bs-toggle="tooltip"
                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon me-0">
                    <!--begin::Svg Icon | path: icons/duotone/Home/Home2.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z"
                                fill="#00B2FF" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
            </a>
        </div>
        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" data-kt-menu-flip="bottom"
            class="menu-item py-2">
            <span class="menu-link menu-center" title="Mi Perfil" data-bs-toggle="tooltip"
                data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon me-0">
                    <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero" />
                            </g>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                <div class="menu-item">
                    <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1"><a href="{{ route('show-user', Auth::user()->id) }}">Mi Perfil</a></span>
                    </div>
                </div>
            </div>
        </div>

        <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" data-kt-menu-flip="bottom"
            class="menu-item py-2">
            <span class="menu-link menu-center" title="Crear Documento Apa" data-bs-toggle="tooltip" data-bs-trigger="hover"
                data-bs-dismiss="click" data-bs-placement="right">
                <span class="menu-icon me-0">
                    <!--begin::Svg Icon | path: icons/duotone/Communication/Group-chat.svg-->
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24"
                            version="1.1">
                            <path
                                d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z"
                                fill="#000000" />
                            <path
                                d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z"
                                fill="#000000" opacity="0.3" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                </span>
            </span>
            <div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
                <div class="menu-item">
                    <div class="menu-content">
                        <span class="menu-section fs-5 fw-bolder ps-1 py-1">Documentos</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="{{ route('index-document') }}" data-kt-page="pro">
                        <span class="menu-bullet">
                            <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Documentos Apa
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!--end::Primary menu-->
</div>
<!--end::Nav-->
<!--begin::Footer-->
<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
    <!--begin::Menu-->
    <div class="mb-7">
        <button type="button" class="btn btm-sm btn-icon btn-color-gray-400 btn-active-color-primary btn-active-light"
            data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start"
            data-kt-menu-flip="top-end" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click"
            title="Quick actions">
            <!--begin::Svg Icon | path: icons/duotone/Communication/Dial-numbers.svg-->
            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <rect fill="#000000" opacity="0.3" x="4" y="4" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="4" y="10" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="10" y="4" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="10" y="10" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="16" y="4" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="16" y="10" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="4" y="16" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="10" y="16" width="4" height="4" rx="2" />
                    <rect fill="#000000" x="16" y="16" width="4" height="4" rx="2" />
                </svg>
            </span>
            <!--end::Svg Icon-->
        </button>
        <!--begin::Menu 2-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
            data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Sesion</div>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
            <!--end::Menu separator-->
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="{{ route('signout') }}" class="menu-link px-3">Cerrar Sesion</a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
            <!--end::Menu separator-->
        </div>
        <!--end::Menu 2-->
    </div>
    <!--end::Menu-->
</div>
<!--end::Footer-->
