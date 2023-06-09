<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ asset('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ asset('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}

 
 <!doctype html>
 <html lang="en" dir="ltr">
 
 <head>
 
     <!-- META DATA -->
     <meta charset="UTF-8">
     <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
     <meta name="author" content="Spruko Technologies Private Limited">
     <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">
 
     <!-- FAVICON -->
     <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}">
 
     <!-- TITLE -->
     <title>Vine Portfolio</title>
 
     <!-- BOOTSTRAP CSS -->
     <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
 
     <!-- STYLE CSS -->
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
 
     <!-- Plugins CSS -->
     <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet">
 
     <!--- FONT-ICONS CSS -->
     <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
 
     <!-- INTERNAL Switcher css -->
     <link href="{{ asset('assets/switcher/css/switcher.css') }}" rel="stylesheet">
     <link href="{{ asset('assets/switcher/demo.css') }}" rel="stylesheet">
 
 </head>
 
 <body class="app sidebar-mini ltr login-img">
 
     <!-- BACKGROUND-IMAGE -->
     <div class="">
 
         <!-- GLOABAL LOADER -->
         <div id="global-loader">
             <img src="{{ asset('assets/images/loader.svg') }}" class="loader-img" alt="Loader">
         </div>
         <!-- /GLOABAL LOADER -->
 
         <!-- PAGE -->
         <div class="page">
             <div class="">
                 <!-- Theme-Layout -->
 
                 <!-- CONTAINER OPEN -->
                 <div class="col col-login mx-auto mt-7">
                     <div class="text-center">
 {{--                         <a href="index.html"><img src="{{ asset('assets/images/brand/logo-white.png') }}" class="header-brand-img" alt=""></a>
  --}}                    </div>
                 </div>
 
                 <div class="container-login100">
                     <div class="wrap-login100 p-6">
                         <form method="POST" action="{{ asset('login') }}">
                             @csrf
 
                             <span class="login100-form-title pb-5">
                                 Connexion
                             </span>
                             <div class="panel panel-primary">
                                 <div class="panel-body tabs-menu-body p-0 pt-5">
                                     <div class="tab-content">
                                         <div class="tab-pane active" id="tab5">
                                             <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                 <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                     <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                 </a>
                                                 <input class="input100 border-start-0 form-control ms-0" type="email" name="email" placeholder="Email">
                                             </div>
                                             <div class="container-login100-form-btn">
                                                 <button type="submit" class="login100-form-btn btn-primary">Connexion</button>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
 
                         </form>
                     </div>
                 </div>
                 <!-- CONTAINER CLOSED -->
             </div>
         </div>
         <!-- End PAGE -->
 
     </div>
     <!-- BACKGROUND-IMAGE CLOSED -->
 
     <!-- JQUERY JS -->
 
    
     <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
 
     <!-- BOOTSTRAP JS -->
     <script src="{{ asset('assets/plugins/bootstrap/js/popper.min.js') }}"></script>
     <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
 
     <!-- SHOW PASSWORD JS -->
     <script src="{{ asset('assets/js/show-password.min.js') }}"></script>
 
     <!-- GENERATE OTP JS -->
     <script src="{{ asset('assets/js/generate-otp.js') }}"></script>
 
     <!-- Perfect SCROLLBAR JS-->
     <script src="{{ asset('assets/plugins/p-scroll/perfect-scrollbar.js') }}"></script>
 
     <!-- Color Theme js -->
     <script src="{{ asset('assets/js/themeColors.js') }}"></script>
 
     <!-- CUSTOM JS -->
     <script src="{{ asset('assets/js/custom.js') }}"></script>
 
     <!-- Custom-switcher -->
     <script src="{{ asset('assets/js/custom-swicher.js') }}"></script>
 
     <!-- Switcher js -->
     <script src="{{ asset('assets/switcher/js/switcher.js') }}"></script>
 
 </body>
 
 </html>
 
