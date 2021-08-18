<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/2b7720102e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CIS</title>
  </head>
  <body onload="mypreloader()" class="home">
    <div id="preloader">

    </div>
    
    <nav id="navbar" class="container-fluid" >
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>

      </ul>
    </nav>
    <div class="container"id="main">
      <div>
      <h1>Construction Information System</h1>
      </div>
    <div class="secmain">
    </div>
    
    <a href="#mainpart" id="mainbtn" class="button">Get started </a>
    
  </div>

  <section id="about" class="sectionone">
    <div class="container">
    <div class="seconediv">
      <h2> About Us </h2>
      <hr class="horizontal">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore labore, deserunt debitis repudiandae laboriosam unde dolores? Eveniet, suscipit et excepturi nemo velit iure quidem explicabo enim debitis consequuntur! Odit amet explicabo, quam beatae asperiores quas dolores vel officia esse provident assumenda eaque, incidunt corporis laborum commodi quisquam distinctio quae adipisci perspiciatis harum illo sunt ad et dolorem? Porro ea error praesentium eos, delectus accusantium neque ad magni doloremque consectetur.
      </p>
    </div>
  </div>
  </section>
  <section class="sectiontwo">
    <div class="container">
    <div class="sectwodiv">
      <h2 id="mainpart"> Pick which one are you</h2>
      <hr class="horizontal">
    </div>
    <div class="links">
      <div class="tiles"><h3>Contractor</h3>
      
      <a class="contractorlink" href="/contractorlogin"></a></div>
      
      <div class="tiles"><h3>User</h3>
      
      <a class="userlink" href="/Userslogin"></a></div>
      </div>
    
    </div>
  </section>
  <section class="sectionthree">
    <div class="container">
    <div class="secthreediv">
      <h2> Contact Us </h2>
      <hr class="horizontal">
    </div>
    
    <form id="contact">
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="Comments" class="form-label">Comments</label>
        <textarea id="Comments" class="form-control" name="" rows="4" cols="50"> </textarea>
      </div>
     
      <button class='btn text-center' type="submit" class="">Submit</button>
    </form>
    </div>
  </section>

  </span></p>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

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