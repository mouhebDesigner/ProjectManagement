<!DOCTYPE html>
<html lang="en" class="h-100">

<!-- Mirrored from vora.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 16:17:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Vora - Saas Bootstrap Admin Dashboard</title>

    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body class="h-100">
    <div class="authincation h-100">
        
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <div class="text-center mb-3">
                                        <a href="/"><img src="{{ asset('assets/images/logo-full.png') }}" alt=""></a>
                                    </div>
                                    <h4 class="text-center mb-4 text-white">Se connecter à votre compte</h4>
                                    <form action="{{ route('login') }}" method="post">
                                        @csrf 
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Email</strong></label>
                                            <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1 text-white"><strong>Mot de passe</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="**********">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1 text-white">
                                                    <input type="checkbox" name="remember" class="custom-control-input"
                                                        id="basic_checkbox_1" {{ old('remember') ? 'checked' : '' }}>
                                                    <label class="custom-control-label" for="basic_checkbox_1">Remember
                                                        me</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                
                                                @if (Route::has('password.request'))
                                                    <a class="text-white" href="{{ route('password.request') }}">
                                                        {{ __('Mot de passe oublié?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn bg-white text-primary btn-block">Connecter</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.min.js') }}"></script>
    <script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
</body>

<!-- Mirrored from vora.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Jul 2022 16:17:56 GMT -->

</html>
