<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Stock Access</title>
    <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Fontawesome CSS -->
	  <link rel="stylesheet" href="{{asset('temp/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">




    <link rel="stylesheet" href="{{asset('temp/css/bootstrap.min.css')}}">
	<!-- Fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('temp/css/fontawesome-all.min.css')}}">
	<!-- Flaticon CSS -->
	<link rel="stylesheet" href="{{asset('temp/font/flaticon.css')}}">
	<!-- Google Web Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('temp/style.css')}}">
  </head>
  <body>



@yield('body')


<section id="seventh">
    <div class="container">
      <div class="row text-center row1">
        <div class="col-md-4">
          <h3>Contact Us</h3>
          <h5>Send Us A Message</h5>
          <form id="contactform" method="POST" action="{{route('postcontact')}}">
            @csrf
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="message" rows="4" cols="10" placeholder="Message"></textarea>
          </div>
          <button type="submit" class="btn d-md-flex">Send</button>
        </form>
        </div>
        <div class="col-md-4" id="links">
          <h3>Sitemap</h3>
          <div class="links">
            <a href="{{route('index')}}">Home</a>
            <a href="{{route('about')}}">About Us</a>
            <a href="{{route('invest')}}">Invest</a>
            <a href="{{route('blog')}}">Blog</a>
            <a href="{{route('faq')}}">FAQ</a>
            <a href="{{route('login')}}">Login</a>
            <a href="{{route('register')}}">Sign Up</a>
          </div>
        </div>
        <div class="col-md-4">
          <img src="images/logo2send.png" width="100" height="40" alt="website logo">
          <h3></h3>
          <div class="contacts">
            {{-- <p><i class="fas fa-phone-alt"></i> &nbsp; &nbsp; &nbsp; {{$compd? $compd->companyphone :"+1 coming soon"}}</p>
            <p><i class="fas fa-envelope"></i> &nbsp; &nbsp; &nbsp; {{$compd? $compd->companyemail :"email coming soon"}}</p> --}}
            <p><i class="fab fa-facebook"></i> &nbsp; &nbsp; &nbsp; @fb/stockaccess.com</p>
            <p><i class="fab fa-twitter"></i> &nbsp; &nbsp; &nbsp; @tw/stockaccess.com</p>
            <p><i class="fab fa-instagram-square"></i> &nbsp; &nbsp; &nbsp; @ig/stockaccess.com</p>
            <p><i class="fab fa-linkedin"></i> &nbsp; &nbsp; &nbsp; @ln/stockaccess.com</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/61d87dc7f7cf527e84d0f9d0/1foqqmnhj';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
  <div class="container-fluid" id="copyright">
    <p>Copyright &copy; 2021 All Rights Reserved Stock Access</p>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="./js/script.js"></script>
</body>
</html>
