@extends('layouts.base')
@section('titulo', 'Cadastro de Serviço')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Cadastro de Serviço</h1>
                </div>
            </div>
        </div>
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-xxl">
                @if (session('success'))
                    <div class="alert alert-success d-flex align-items-center p-5 mb-10">
                        <span class="svg-icon svg-icon-2hx svg-icon-success me-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3"
                                    d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                    fill="black"></path>
                                <path
                                    d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                    fill="black"></path>
                            </svg>
                        </span>
                        <div class="d-flex flex-column">
                            <h4 class="mb-1 text-success">{{ session('success') }}</h4>
                        </div>
                    </div>
                @endif
                <div class="card mb-5 mb-xl-10">
                    <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                        data-bs-target="#kt_account_profile_details" aria-expanded="true"
                        aria-controls="kt_account_profile_details">
                        <div class="card-title m-0">
                            <h3 class="fw-bolder m-0">Formulário de Cadastro</h3>
                        </div>
                    </div>
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form enctype="multipart/form-data" name="personForm" id="personForm" method="POST" action="{{ route('andes.depois.store') }}" class="form fv-plugins-bootstrap5 fv-plugins-framework">
                            @csrf
                            <div class="card-body border-top p-9">
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Serviço</label>
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input type="text" name="titulo" id="titulo" class="form-control form-control-lg form-control-solid" placeholder="Serviço" value="{{ old('nome') }}">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Antes</label>
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input name="antes" type="file" class="form-control-file">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Depois</label>
                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                        <input name="depois" type="file" class="form-control-file">
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                <button type="submit" name="executar" class="btn btn-primary" id="salvar">Salvar</button>
                                <button id="salvando" class="btn btn-primary mb-1 mb-sm-0 mr-0 mr-sm-1" type="button"
                                    disabled>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    <span class="ml-25 align-middle">Salvando...</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="{{url('admin')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{url('admin')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{url('admin')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
@endsection

@section('js')
<script src="{{ url('admin') }}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ url('admin') }}/assets/js/scripts.bundle.js"></script>
<script src="{{ url('admin') }}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{ url('admin') }}/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script src="{{ url('admin') }}/assets/js/custom/documentation/documentation.js"></script>
<script src="{{ url('admin') }}/assets/js/custom/documentation/search.js"></script>
<script src="{{ url('admin') }}/assets/js/custom/documentation/editors/ckeditor/classic.js"></script>
    <script>
        $(document).ready(function() {
            $("#salvando").hide();
            $("#salvar").on("click", function() {
                $("#salvando").show();
                $("#salvar").hide();
            });
        });
    </script>
@endsection
