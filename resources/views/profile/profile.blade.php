@extends('layouts.app')

@section('content')
        <div class="container">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
              
              <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg flex" style = "--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))">
                  <div style = "--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))"><img src = "/images/logo.png" style = "height:100px;padding-right:10px;padding-top:10px;padding-left:10px"></div>  
                  <div style = "width:90%;display:box;padding-top:20px;--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))"><h1 style = "display:box" class="font-semibold"><b>Unofficial Rimworld Modding Forum</b></h1></div>
              </div>
                  <div class="mt-8 dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                        <div class = "row">
                                <div class = "col">    
                                        <div class="p-6">
                                                <div style = "padding-left:32px" class="flex items-center">
                                                       <img src = "/images/{{ $user->profile->image }}.png" alt = "profile.png" class = "rounded-circle">
                                                </div>
                                        </div>
                                </div>
                                <div class = "col">
                                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                                                <div style = "padding-left:32px"  class="flex items-center">
                                                        <div class="ml-4 text-lg leading-7 font-semibold"><p class="text-white">{{ $user->username }}</p></div>
                                                </div>
                                        </div>
                                
        
                                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                                <div class="flex items-center">
                                <div style = "padding-left:32px"   class="ml-4 text-lg leading-7 font-semibold"><p class="text-white">{{ $user->profile->description }}</p></div>
                                </div>
                                </div>
                                </div>
                        </div>
<div class = row>
        <div class = "col">
                          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                              <div class="flex items-center">
                              <div style = "padding-left:32px"   class="ml-4 text-lg leading-7 font-semibold"><br><a href="/m/create" class="underline text-gray-900 dark:text-white">Post New Mod</a></div>
                              </div>
                          </div>
</div>
<div class = "col">
                          <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                              <div class="flex items-center">
                              <div style = "padding-left:32px"   class="ml-4 text-lg leading-7 font-semibold"><br><p class="text-white">Used e-mail: {{ $user->email }}</p></div>
                              </div>
                          </div>
                      </div>
</div>
</div>
                  </div>
                
        </div>
@endsection
