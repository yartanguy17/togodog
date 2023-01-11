<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
            <img src="{{asset('website/assets/img/logo.jpg')}}" alt="TogoDog" style="height: 300px;width: 300px;">
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
<script type="text/javascript">

    $(function () {
        ReadyLogin.init();
        $('input').on('keyup', (e) => {
            if (e.keyCode === 13) checkCredentials()
        });
    });


    function checkCredentials() {
        Notiflix.Loading.Circle()
        $.ajax({
            type: 'POST',
            enctype: 'multipart/form-data',
            url: '{{ route('app.access.check') }}',
            dataType: 'JSON',
            data: new FormData($('#auth-form')[0]),
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,

            success: function (response) {
                console.log(response);
                Notiflix.Loading.Remove()
                if (response.status) {
                    swal({
                        title: 'Bienvenue ' + response.lastname + " " + response.firstname,
                        text: 'Votre authentification a été autorisée !',
                        type: "success",
                        showCancelButton: true,
                        cancelButtonClass: 'btn btn-success border-radius',
                        showConfirmButton: false,
                        cancelButtonText: 'D\'ACCORD'
                    }).then(() => {
                        Notiflix.Loading.Circle()
                        if (response.url !== null) window.location.replace(response.url);
                        else window.location.reload();
                    });
                } else showWarning(response.error);
            },

            error: function (response) {
                console.log(response);
                Notiflix.Loading.Remove()
                swal({
                    title: "Echec de l'opération",
                    text: 'Erreur interne du serveur',
                    type: "warning",
                    showCancelButton: true,
                    cancelButtonClass: 'btn btn-warning border-radius',
                    showConfirmButton: false,
                    cancelButtonText: 'D\'ACCORD'
                }).then(() => {
                    Notiflix.Loading.Circle()
                    window.location.reload()
                });
            }
        });
    }
</script>
