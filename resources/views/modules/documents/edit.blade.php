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
                            <h1 class="text-dark fw-bolder my-1 fs-2">Actualizar</h1>
                            <!--end::Heading-->
                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb fw-bold fs-base my-1">
                                <li class="breadcrumb-item text-muted">
                                    <a href="/jet-html-pro/index.html" class="text-muted">Inicio</a>
                                </li>
                                <li class="breadcrumb-item text-muted">Tus documentos con norma APA</li>
                                <li class="breadcrumb-item text-dark">Actualizar documento de investigaci&#243n</li>
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
                                    <h2>Formulario de actualizacion para normas APA</h2>
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
                            {{-- @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div>{{$error}}</div>
                                @endforeach
                            @endif --}}
                            <div class="card card-flush">
                                <div class="card-body pt-0">
                                    <form method="POST" action="{{ route('update-document', $document_edit['id']) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-center">
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label
                                                            class="form-label fs-6 fw-bolder text-dark required">TITULO</label>
                                                        <input type="text" class="form-control" name="title"
                                                            placeholder="Escribe el titulo de tu investigacion"
                                                            @if($document_edit['title'])
                                                            value="{{ $document_edit['title'] }}"
                                                            @else
                                                            value="{{ old('title') }}"
                                                            @endif/>
                                                        @if ($errors->has('title'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('title') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-center">
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label
                                                            class="form-label fs-6 fw-bolder text-dark required">AUTOR</label>
                                                        <input type="text" class="form-control" name="researcher"
                                                            placeholder="Nombre Autor"
                                                            @if($document_edit['researcher'])
                                                            value="{{ $document_edit['researcher'] }}"
                                                            @else
                                                            value="{{ old('researcher') }}"
                                                            @endif/>
                                                        @if ($errors->has('researcher'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('researcher') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-center">
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label
                                                            class="form-label fs-6 fw-bolder text-dark required">FECHA</label>
                                                        <input type="date" class="form-control" name="date_document"
                                                        @if($document_edit['date_document'])
                                                        value="{{ $document_edit['date_document'] }}"
                                                        @else
                                                        value="{{ old('date_document') }}"
                                                        @endif/>
                                                        @if ($errors->has('date_document'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('date_document') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="text-center">
                                                    <div class="fv-row mb-8 fv-plugins-icon-container">
                                                        <label
                                                            class="form-label fs-6 fw-bolder text-dark required">INSTITUCION</label>
                                                        <input type="text" class="form-control" name="institution"
                                                            placeholder="Nombre de la institucion"
                                                            @if($document_edit['institution'])
                                                            value="{{ $document_edit['institution']}}"
                                                            @else
                                                            value="{{ old('institution') }}"
                                                            @endif/>
                                                        @if ($errors->has('institution'))
                                                            <span
                                                                class="text-danger">{{ $errors->first('institution') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                                    <label
                                                        class="form-label fs-6 fw-bolder text-dark required">INDICE DE TABLA</label>
                                                    <textarea type="text" class="form-control" id="textarea" rows="3"
                                                        name="table_index" placeholder="Ejemplo: Los Algoritmos, Los Programadores">{{ old('table_index') ? old('table_index'):$document_edit['table_index'] }}</textarea>
                                                    @if ($errors->has('table_index'))
                                                        <span class="text-danger">{{ $errors->first('table_index') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                                    <label
                                                        class="form-label fs-6 fw-bolder text-dark required">RESUMEN O ABSTRACT</label>
                                                    <textarea type="text" class="form-control" id="textarea" rows="20"
                                                        name="content" placeholder="Escribe tu investigacion">{{ old('content') ? old('content'):$document_edit['content'] }}</textarea>
                                                    @if ($errors->has('content'))
                                                        <span class="text-danger">{{ $errors->first('content') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="fv-row mb-8 fv-plugins-icon-container">
                                                    <div class="container1">
                                                        <label class="form-label fs-6 fw-bolder text-dark required">Bibliografia</label>
                                                        <button class="add_form_field btn btn-sm btn-primary">Agregar Nuevo Campo &nbsp;
                                                          <span style="font-size:16px; font-weight:bold;">+ </span>
                                                        </button>
                                                        @foreach ($document_edit->bibliographies as $item)
                                                        <input class="form-control" type="text" name="author[]" placeholder="Autor" value="{{ $item['author'] }}">
                                                        <input class="form-control" type="text" name="title_author[]" placeholder="Titulo" value="{{ $item['title'] }}">
                                                        <input class="form-control" type="number" name="year[]" placeholder="Año" value="{{ $item['year'] }}">
                                                        <input class="form-control" type="text" name="city[]" placeholder="Ciudad" value="{{ $item['city'] }}">
                                                        <input class="form-control" type="text" name="editorial[]" placeholder="Editorial" value="{{ $item['editorial'] }}">
                                                        <br>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-primary">Actualizar</button>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="text-center">
                                                    <a href="{{ route('index-document') }}" class="btn btn-danger">Cancelar</a>
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
