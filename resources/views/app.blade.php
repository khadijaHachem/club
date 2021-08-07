<html>

<head>
    <title>App Name - @yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>

    <style>
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #9C27B0;
            color: white;
            text-align: center;
        }

        nav {
  width:340px;
  margin:auto;
  font-size:18px;
}

ul {
  list-style-type:none;
  padding:0; margin:40px 0 0 0;
  text-align:center;
  font-family:"Lucida Grande", "Lucida Sans", Arial, sans-serif;
  float:left;
}

li {
  float:left;
  margin-right:40px;
}

li:last-child {
  margin-right:0;
}

li a {
  text-decoration:none;
  color:#999;
  transition:all 0.2s;
  -webkit-transition:all 0.2s;
  -moz-transition:all 0.2s;
}

li a:after {
  content:"";
  display:block;
  padding:10px 0 0 0;
  border-top:2px solid #999;
  width:0;
  transition:all 0.2s;
  -webkit-transition:all 0.2s;
  -moz-transition:all 0.2s;
}

li a:hover {
  color:#000;
}

li a:hover:after {
  width:100%;
  border-top:2px solid #000;
}

    </style>

</head>

<body>

    
    @section('sidebar')

    @show

    <nav>
  <ul>
    <li><a href="{{ route('clubs.index') }}">clubs</a></li>
    <li><a href="{{ route('cities.index') }}">cities</a></li>
    <li><a href="{{ route('sports.index') }}">sports</a></li>
    
  </ul>
  
</nav>
</br> 
</br>  
<div class="container">
        @yield('content')
    </div>

</body>

</html>
