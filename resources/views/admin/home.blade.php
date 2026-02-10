@extends('layouts.base')
@section('titulo', 'Home')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="toolbar" id="kt_toolbar">
            <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
                <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                    data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                    class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                    <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard</h1>
                </div>
            </div>
        </div>
        <div id="kt_content_container" class="container-xxl">
        <div class="row g-5 g-xl-8">
            <div class="col-xl-3">
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="black"></path>
                                <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="black"></path>
                                <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="black"></path>
                            </svg>
                        </span>
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ $servicos->sum('visitas') }}</div>
                        <div class="fw-bold text-gray-100">Páginas visualizadas</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                                <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                                <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                                <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
                            </svg>
                        </span>
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ count($leads) }}</div>
                        <div class="fw-bold text-gray-100">Leads Capturados</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-danger hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                                <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                                <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                                <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
                            </svg>
                        </span>
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ count($leads->where('status','Pendente')) }}</div>
                        <div class="fw-bold text-gray-100">Leads Aguardando</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="{{ route('leads.index') }}" class="card bg-success hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <span class="svg-icon svg-icon-gray-100 svg-icon-3x ms-n1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="black"/>
                                <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="black"/>
                                <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="black"/>
                                <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="black"/>
                            </svg>
                        </span>
                        <div class="text-gray-100 fw-bolder fs-2 mb-2 mt-5">{{ count($leads->where('status','Convertido')) }}</div>
                        <div class="fw-bold text-gray-100">Leads Convertidos</div>
                    </div>
                </a>
            </div>
        </div>

        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
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
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Leads Aguardando</span>
                    <span class="text-muted mt-1 fw-bold fs-7">{{ count($leads->where('status','Pendente')) }} leads agaurdando contato</span>
                </h3>
            </div>
             <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th>Agendamento</th>
                                <th>Solicitado</th>
                                <th>Nome</th>
                                <th>Telefone</th>
                                <th>Email</th>
                                <th>Serviço</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads->where('status','Pendente') as $lead)
                                <tr>
                                    <td>{{ date('d/m/Y',strtotime($lead->data)) }}</td>
                                    <td>{{ date('d/m/Y',strtotime($lead->created_at)) }}</td>
                                    <td>{{ $lead->nome }}</td>
                                    <td>
                                        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=55{{ setUri2($lead->telefone) }}&text=Olá {{ $lead->nome }}, somos da Expansom, você solicitou um agendamento para o serviço de {{ $lead->servico }} e gostaríamos de confirmar sua presença no dia {{ date('d/m/Y',strtotime($lead->data)) }}" target="_blank" rel="noopener noreferrer">{{ $lead->telefone }}<br>
                                        Clique para conversar
                                    </a>
                                    </td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->servico }}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#gerenciar{{ $lead->id }}">
                                            Gerenciar
                                        </button>
                                    </td>
                                </tr>

                                <div class="modal fade" id="gerenciar{{ $lead->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="fw-bolder">{{ $lead->nome }}</h2>
                                                <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
                                                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                                <form method="post" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="{{ route('leads.update',$lead->id) }}">
                                                    @csrf
                                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                                        <label class="required fs-6 fw-bold form-label mb-2">Status</label>
                                                        <select class="form-control form-control-solid" name="status">
                                                            <option value="Pendente" {{ $lead->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                                                            <option value="Excluir" {{ $lead->status == 'Excluir' ? 'selected' : '' }}>Spam</option>
                                                            <option value="Convertido" {{ $lead->status == 'Convertido' ? 'selected' : '' }}>Convertido</option>
                                                        </select>
                                                    </div>
                                                    <div class="fv-row mb-7 fv-plugins-icon-container">
                                                        <label class="required fs-6 fw-bold form-label mb-2">Anotações</label>
                                                        <textarea class="form-control form-control-solid" name="anotacoes">{{ $lead->anotacoes }}</textarea>
                                                    </div>
                                                    <div class="text-center pt-15">
                                                        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                            <span class="indicator-label">Atualizar</span>
                                                            <span class="indicator-progress">Please wait...
                                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                    </div>
                                                <div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">Estatisticas de Acesso</span>
                    <span class="text-muted mt-1 fw-bold fs-7">{{ $servicos->sum('visitas') }} páginas visualizadas</span>
                </h3>
            </div>
             <div class="card-body py-3">
                <div class="table-responsive">
                    <table class="table align-middle gs-0 gy-4">
                        <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="ps-4 min-w-300px rounded-start">Página</th>
                                <th class="min-w-125px">Hoje</th>
                                <th class="min-w-125px">Mês</th>
                                <th class="min-w-200px">Ano</th>
                                <th class="min-w-150px">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicos as $servico)
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-50px me-5">
                                                <span class="symbol-label bg-light">
                                                    <img src="{{ url("storage/{$servico->image}") }}" class="h-75 align-self-end" alt="">
                                                </span>
                                            </div>
                                            <div class="d-flex justify-content-start flex-column">
                                                <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $servico->titulo }}</a>
                                                <span class="text-muted fw-bold text-muted d-block fs-7">{{ $servico->categoria }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ count($servico->Analytic->whereBetween('created_at',[date('Y-m-d 00:00:00'),date('Y-m-d 23:59:59')])) }}</td>
                                    <td>{{ count($servico->Analytic->whereBetween('created_at',[date('Y-m-01 00:00:00'),date('Y-m-31 23:59:59')])) }}</td>
                                    <td>{{ count($servico->Analytic->whereBetween('created_at',[date('Y-01-01 00:00:00'),date('Y-12-31 23:59:59')])) }}</td>
                                    <td>{{ count($servico->Analytic) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
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
    <script src="{{url('admin')}}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{url('admin')}}/assets/js/scripts.bundle.js"></script>
    <script src="{{url('admin')}}/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="{{url('admin')}}/assets/js/custom/widgets.js"></script>
    <script src="{{url('admin')}}/assets/js/custom/apps/chat/chat.js"></script>
    <script src="{{url('admin')}}/assets/js/custom/modals/create-app.js"></script>
    <script src="{{url('admin')}}/assets/js/custom/modals/upgrade-plan.js"></script>
    <script src="{{url('admin')}}/assets/js/custom/intro.js"></script>
@endsection
