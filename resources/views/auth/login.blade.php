<x-guest-layout>
    <div class="d-flex flex-column flex-root">

        <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
            style="background-image: url(/metronic8/demo1{{url('admin')}}/assets/media/illustrations/sketchy-1/14.png">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="../../../index.html" class="mb-12">
                    <img alt="Logo" src="{{url('admin')}}/assets/media/logos/logo.png" class="w-200px" />
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                    <form class="form w-100" method="POST" id="kt_sign_in_form" action="{{ route('login') }}">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-dark mb-3">Àrea Restrita</h1>
                            <!--end::Title-->
                            <!--begin::Link-->
                            @if (Route::has('register'))
                                <div class="text-gray-400 fw-bold fs-4">É novo aqui?
                                    <a href="{{ route('register') }}" class="link-primary fw-bolder">Crie uma
                                        conta</a>
                                </div>
                            @endif
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                            <!--end::Label-->
                            <!--begin::Input-->
                            <x-input id="email" class="form-control form-control-lg form-control-solid" type="email" name="email" :value="old('email')" required autofocus placeholder="Email"/>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack mb-2">
                                <!--begin::Label-->
                                <label class="form-label fw-bolder text-dark fs-6 mb-0">Senha</label>
                                <!--end::Label-->
                                <!--begin::Link-->
                                @if (Route::has('password.request'))
                                    <a class="link-primary fs-6 fw-bolder" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                                <!--end::Link-->
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Input-->
                            <x-input id="password" class="form-control form-control-lg form-control-solid"
                                type="password" name="password" required autocomplete="current-password"
                                placeholder="Senha" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <!--begin::Submit button-->
                            <button type="submit" id="logar" class="btn btn-lg btn-primary w-100 mb-5">
                                <span class="indicator-label">Continue</span>
                                <span class="indicator-progress">Carregando seu perfil...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button id="carregando" class="btn btn-lg btn-primary w-100 mb-5" disabled>
                               <span class="spinner-border spinner-border-sm align-middle ms-2"></span> Carregando seu perfil...
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
<script>
    $(document).ready(function() {
        $("#carregando").hide();
        $("#logar").click(function() {
            $("#logar").hide();
            $("#carregando").show();
        });
    });
</script>
