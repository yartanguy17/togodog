<!DOCTYPE html>
<html>
    @include('admin.partials.header')

<body>

<!-- <img src="{{ asset('img/logo.png') }}" alt="" class="animation-pulseSlow"> -->




<div id="login-main">



    <div class="card" style="width: 18rem; margin-left:40%" >
        <img class="card-img-top" src="{{asset('website/assets/img/logo.jpg')}}" alt="Togo Dog"  style="height:100px;width: 100px;  display:block;margin:0px auto;">
        <div class="card-body">
            <div id="login-main-container">
                <!-- Login Header -->


                @if($Session=Session::get('info'))
                    <div class="alert alert-success">{{ $Session }}</div>
                @endif


                <div style="padding-top: 0" class="block animation-fadeInQuick">

                    <div style="margin-bottom: 15px">
                        <h3 class="text-bold text-center" style="color:#c0362c;">AUTHENTIFICATION</h3>
                        <div> Veuillez entrez vos identifiants pour vous connecter</div>
                    </div>


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form id="auth-form"  action="{{ route('login.check') }}" method="post"  class="form-horizontal">
                        @csrf
                        <div class="form-group">
                            <label for="login-email" class="col-xs-12 text-uppercase font-8em">Adresse email</label>
                            <div class="col-xs-12">
                                <input type="email" id="login-email" name="email" class="border-radius form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="example@sepa.app">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                            </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label for="login-password" class="col-xs-12 text-uppercase font-8em">Mot de passe</label>
                            <div class="col-xs-12">
                                <input type="password" id="login-password" name="password" required autocomplete="current-password" class="border-radius form-control @error('password') is-invalid @enderror" placeholder="**********">
                                @error('password')
                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-12 text-center">
                                <label class="csscheckbox csscheckbox-primary">
                                    <input type="checkbox" name="remember_me" id="login-remember-me" {{ old('remember') ? 'checked' : '' }}><span></span> Se souvenir de moi ?
                                </label>
                            </div>
                            <div class="col-xs-12 text-center">
                                <button type="submit" style="border-radius: 25px" type="button" class="btn btn-effect-ripple btn-primary theme-background">S'authentifier</button>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>


                <footer class="text-muted text-center text-uppercase font-6em animation-pullUp">
                    &copy; Copyright {{ date('Y') }}. All rights reserved
                </footer>

            </div>
        </div>
      </div>

</div>


{{-- @include('admin.partials.js') --}}

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
            url: '{{ route('login.check') }}',
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
</body>
</html>
