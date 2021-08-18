
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/2b7720102e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Construction Information System</title>
     <link rel="stylesheet" href="{{ asset('css/app.css') }}">
     <script src="{{ asset('js/tabs.js') }}"></script>
     


     <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>

  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  </head>
  <body onload="mypreloader()">
    <div id="preloader">
        <script>

            $(document).ready(function(){
                $('.sidebar').click(function(){
                    $('.sidebar').toggleClass('active');
                    $('.sidebarbtn').toggleClass('hur');
                })
            })
            </script>

    </div>
    <div class="sidebar">
        <ul>
            <li><a href="/usersdashboard" ><i class="fas fa-tachometer-alt"></i>Dashboard</a></li>
            <!--<li><a href="" ><i class="fas fa-user"></i>Register User</a></li>-->
            
            
            <li><a href="{{ route('auth.logout') }}"><i class="fas fa-sign-out-alt"></i>



                Logout</a></li>

        </ul>
        <button class="sidebarbtn"><span></span></button>
    </div>
    <div style="background-color: blue;"class="cont-home-nav">
        <h2>Construction Information System </h2>
    </div>
@yield('content')

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2b7720102e.js" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
      var preloader=document.getElementById("preloader");
      function mypreloader(){
        preloader.style.display="none";
      }
      </script>

  </body>
</html>
