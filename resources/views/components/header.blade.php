<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="marhansolutions.com" />
    <title>University marketplace - Home</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>

    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css"/>

  </head>

<body>

<header class="float-start w-100 top-headers-div">
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="{{ URL::to('/') }}">
         <img alt="logo" src="images/logo-uni.png"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="mx-auto mb-2 navbar-nav mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" href="{{ URL::to('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('directory') }}">Directory</a>
          </li>
          <li class="nav-item"></li>
            <a class="nav-link" href="{{ URL::to('contact') }}">Contact</a>
          </li>
        </ul>

         <div class="cm-right-menus">

            <ul class="d-flex align-items-center">
               <li>
                @php
                    if(session('user_id')=='')
                    {
                @endphp
                 <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn login-btn">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                  </svg>
                   Login </a>
                   @php
                     } else {
                   @endphp
                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg> {{ session('user_name') }} |
                   <a href="{{ URL::to('logout') }}" class="btn login-btn"> Logout </a>
                   @php
                     }
                   @endphp
               </li>
               <li>
                @php
                    if(session('user_id')=='')
                    {
                @endphp
                <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn add-btn">
                    Post a Add listing <i class="ri-add-fill"></i>
                </a>
                @php
                     } else {
                @endphp
                <a href="{{ URL::to('addpost') }}" class="btn add-btn">
                    Post a Add listing <i class="ri-add-fill"></i>
                </a>
                @php
                     }
                @endphp
              </li>
            </ul>

         </div>


      </div>
    </div>
  </nav>
</header>
