<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Book A Dine</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <link rel="stylesheet" href="{{asset('/css/layouts/guest.css')}}">
        <link rel="shortcut icon" href="{{asset('/pictures/icons/favicon.ico')}}" type="image/x-icon">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased" style="background-color: #000">
      <div class="guest-navbar shadow-md" x-data="{ isOpen: false }">
        <nav class="container-fluid  mx-auto md:flex md:justify-between md:items-center">
          <div class="flex items-center justify-between">
            <a class="home-icon "
              href="/">
                BOOK A DINE
            </a>
            <!-- Mobile menu button -->
            <div @click="isOpen = !isOpen" class="flex md:hidden">
              <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400"
                aria-label="toggle menu">
                <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                  <path fill-rule="evenodd"
                    d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                  </path>
                </svg>
              </button>
            </div>
          </div>
  
          <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
          <div :class="isOpen ? 'flex' : 'hidden'"
            class="flex-col mt-8 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
            
            <a class="nav-item"
              href="{{ route('categories.index') }}">Categories</a>
            <a class="nav-item"
              href="{{ route('menus.index') }}">Our Menu</a>
            <a class="nav-item"
              href="{{ route('reservations.step.one') }}">Make Reservation</a>
              <a class="nav-item"
              href="/gallery/index">Gallery</a>
              <a class="nav-item"
              href="/about/index">About</a> 


            @if(Auth::check())

            <div class="hidden sm:flex sm:items-center sm:ml-6" >
              <x-dropdown align="right" width="48">
                  <x-slot name="trigger">
                      <button class="index-login inline-flex items-center ">
                          <div>{{ Auth::user()->name }}</div>

                          <div class="ml-1">
                              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                              </svg>
                          </div>
                      </button>
                  </x-slot>

                  <x-slot name="content" >
                      <a href="{{route('dashboard')}}" style="color: #000"
                      class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">
                          Dashboard</a>
                      <x-dropdown-link :href="route('profile.edit')" >
                          {{ __('Profile') }}
                      </x-dropdown-link>

                      <!-- Authentication -->
                      <form method="POST" action="{{ route('logout') }}">
                          @csrf

                          <x-dropdown-link :href="route('logout')"
                                  onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </x-dropdown-link>
                      </form>
                  </x-slot>
              </x-dropdown>
          </div>
            @else
              <a class="index-login"
              href="{{ route('login') }}">
              login</a>
            @endif
            
          </div>
        </nav>
      </div>

     
      


      <div class=" font-sans text-gray-900 antialiased min-h-screen">
          {{ $slot }}
      </div>

      
      <hr>
      <footer>
        <div class="container">
          <div class="row contact-us">
            <h1>CONTACT US </h1>
          </div>
        </div>
    
        <div class="container mt-10">
          <div class="row g-2">
              <div class="col-4 about">

                <a class="footer-icon" href="/">
                    BOOK A DINE
                </a>
                  <div>
                    <p class="icon-slogan">"Elevating dining experiences, one reservation at a time. Your table, your time – seamless reservations with passion and precision."</p>
                  </div>
              </div>
            <div class="col-4 ">
              <p class="contact">Contact Info</p>
              <div class="address">
                  <p>
                    <i class="bi bi-geo-alt-fill"></i>
                    <span class="ml-2">2/62,100ft street,</span><br>
                    <span class="ml-10">Ghandhipuram,Coimbatore,</span><br>
                    <span class="ml-10">Tamilnamdu,India</span><br>
                    <span class="ml-10">642001</span>
                  </p>
              </div>
              <div class="mobile-number mt-3">
                <p>
                  <i class="bi bi-telephone-outbound-fill"></i>
                  <span class="ml-2">+91 9923232232</span>
                </p>
              </div>
              <div class="mail mt-3">
                <i class="bi bi-envelope-fill"></i>
                <span class="ml-2">bookadine@gmail.com</span>
              </div>
            </div>
            <div class="col-4 social-media">
              <p class="social-media-head">Social Media</p>
              <div>
                <a href="#" class="s-icon ">
                  <i class="bi bi-youtube"></i>Youtube
                </a><br>
                <a href="#" class="s-icon mt-2">
                  <i class="bi bi-facebook" ></i>FaceBook
                </a><br>
                <a href="#" class="s-icon mt-2" >
                  <i class="bi bi-twitter"></i>Twitter
                </a><br>
                <a href="#" class="s-icon mt-2"> 
                  <i class="bi bi-instagram " ></i>Instagram
                </a><br>
               </div>
            </div>
          </div>
          
        </div>
      </footer>

      <div class="book">
        <div class="booking">
          <a href="{{ route('reservations.step.one') }}">
              BOOK A 
              <br>TABLE
          </a>
      </div>
    </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
