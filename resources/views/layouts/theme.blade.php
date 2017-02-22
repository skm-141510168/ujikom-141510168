<html><html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">

  <div class="w3-bar w3-white w3-wide w3-padding-8 w3-card-2">
    <a href="{{url('/home')}}" class="w3-margin-left w3-bar-item w3-button"><b>HOME</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Login</a>
      <a href="#about" class="w3-bar-item w3-button">Logout</a>
    </div>
  </div>
</div>
 @yield('content')
