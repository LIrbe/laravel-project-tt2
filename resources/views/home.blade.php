@extends('layouts.app')

@section('content')
<!--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>-->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>URMF</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html{line-height:1;-webkit-text-size-adjust:100%}
            body{margin:0;background-image: url("/images/mainbackground.png");background-size: cover;}
            a{background-color:transparent}[hidden]{display:none}
            html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:2}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}
            a{color:inherit;text-decoration:inherit}
            svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}
            .bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}
            .bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}
            .border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}
            .border-t{border-top-width:1px}
            .flex{display:flex}
            .grid{display:grid}
            .hidden{display:none}
            .items-center{align-items:center}
            .justify-center{justify-content:center}
            .font-semibold{font-weight:600}
            .h-5{height:1.25rem}
            .h-8{height:2rem}
            .h-16{height:4rem}
            .text-sm{font-size:.875rem}
            .text-lg{font-size:1.125rem}
            .leading-7{line-height:1.75rem}
            .mx-auto{margin-left:auto;margin-right:auto}
            .ml-1{margin-left:.25rem}
            .mt-2{margin-top:.5rem}
            .mr-2{margin-right:.5rem}
            .ml-2{margin-left:.5rem}
            .mt-4{margin-top:1rem}
            .ml-4{margin-left:1rem}
            .mt-8{margin-top:2rem}
            .ml-12{margin-left:3rem}
            .-mt-px{margin-top:-1px}
            .max-w-6xl{max-width:72rem}
            .min-h-screen{min-height:100vh}
            .overflow-hidden{overflow:hidden}
            .p-6{padding:1.5rem}
            .py-4{padding-top:1rem;padding-bottom:1rem}
            .px-6{padding-left:1.5rem;padding-right:1.5rem}
            .pt-8{padding-top:2rem}
            .fixed{position:fixed}
            .relative{position:relative}
            .top-0{top:0}
            .right-0{right:0}
            .right-50{right:50}
            .shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}
            .text-center{text-align:center}
            .text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}
            .text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}
            .text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
            .text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}
            .text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}
            .text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}
            .text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}
            .underline{text-decoration:underline}
            .antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}
            .w-5{width:1.25rem}
            .w-8{width:2rem}
            .w-auto{width:auto}
            .grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}
            @media (min-width:640px){
                .sm\:rounded-lg{border-radius:.5rem}
                .sm\:block{display:inline-block}
                .sm\:items-center{align-items:center}
                .sm\:justify-start{justify-content:flex-start}
                .sm\:justify-between{justify-content:space-between}
                .sm\:h-20{height:5rem}
                .sm\:ml-0{margin-left:0}
                .sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}
                .sm\:pt-0{padding-top:0}
                .sm\:text-left{text-align:left}
                .sm\:text-right{text-align:right}
            }
            @media (min-width:768px){
                .md\:border-t-0{border-top-width:0}
                .md\:border-l{border-left-width:1px}
                .md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}
            }
            @media (min-width:1024px){
                .lg\:px-8{padding-left:2rem;padding-right:2rem}
            }
            @media (prefers-color-scheme:dark){
                .dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}
                .dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}
                .dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}
                .dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}
                .dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}
                .dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}
            }
        </style>
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
           <!--  @if (Route::has('login'))
           <div style = "width:100%;height:70px;" class="fixed top-0 right-0 px-6 py-4 sm:block dark:bg-gray-800">    
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="underline text-gray-900 dark:text-white">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="underline text-gray-900 dark:text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 underline text-gray-900 dark:text-white">Register</a>
                        @endif
                    @endauth
                </div>
                @endif
            </div>-->

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
              
            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex">
                <div><img src = "/images/logo.png" style = "height:100px;padding-right:10px;padding-top:10px;padding-left:10px"></div>  
                <div><h1 style = "display:box" class="font-semibold"><b>Unofficial Rimworld Modding Forum</b></h1></div>
            </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div style = "padding-left:32px" class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Browse Mods</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Browse dozens of Rimworld mods ranging from mods that add hundreds of new items or activities, to mods that add a new and convenient option to the menu screen. 
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div style = "padding-left:32px"  class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="{{ route('login') }}" class="underline text-gray-900 dark:text-white">Your Profile</a></div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Access your profile to customize your password, username, profile picture and add your mod to the forum. 
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <div style = "padding-left:32px"   class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Modding Support</a></div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Have problems with your game, due to adding too many mods? You can come here and post your problem with your crash logs and modlist, to have the internet hivemind solve your problem for you.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                            <div style = "padding-left:32px"   class="ml-4 text-lg leading-7 font-semibold"><a href="#" class="underline text-gray-900 dark:text-white">Discussion</a></div>
                            </div>
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Want to share a funny story about your modded game? Post it here for all to see, and we can all laugh at the antics of this fantastic game.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" style = "padding-left:15px;padding-right:15px;padding-bottom:15px">
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://store.steampowered.com/app/294100/RimWorld/" class="ml-1 underline">
                                Purchase the game!
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="#" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
        </div>
            </div>
        </div>
    </body>
</html>

@endsection
