<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="{{ asset('frontend/js/new.js') }}"></script>
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('frontend/css/fontawesome.min') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
   <script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
   


    
</head>
<body>
 <div class="top-header">
    <div class="container">
        <div class="row">
        <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
        <div class="logo-main">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('frontend/img/logonew.png') }}"></a>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav navlinks">
     
        @foreach($menus as $menu)
            <li class="nav-item">
                @if(strtolower($menu->slug) == 'home')
                    <a class="nav-link active" aria-current="page" href="{{ url('/') }}">
                        {{ $menu->title }}
                    </a>
                @else
                    <a class="nav-link active" aria-current="page" href="{{ url(strtolower(str_replace(' ', '-', $menu->slug))) }}">
                        {{ $menu->title }}
                    </a>
                @endif
            </li>
        @endforeach
  <!-- 
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/services') }}">Our Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/work') }}">Our Work</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/contact') }}">Contact US</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
        </div>
    </div>

 </div>
</body>
</html>