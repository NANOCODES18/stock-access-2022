@extends("layouts.spacedcustomlayout")

@section("body")


    <section class="blogfront">
        <nav class="navbar navbar-expand-lg sticky-top change" id="navbar" >
            <a class="navbar-brand" href="{{route('index')}}">
              <img src="./images/logo2send.png" alt="" width="220" height="42" style="object-fit: contain;">
              <!-- STOCK ACCESS -->
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            @include('nav')
          </nav>

          <div class="overlay2"></div>

          <div class="text">
            <h1>FAQ</h1>
          </div>

    </section>

    <section id="blog-content">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <!-- <div class="bs-example"> -->
                <div class="accordion" id="accordionExample">
                    @if (isset($faqs))
                    @foreach ($faqs as $faq)

                    <div class="card">
                      <div class="card-header" id="headingOne" style="background-color: #24248f;">
                          <h2 class="mb-0">
                              <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" style="color: ivory;text-decoration: none;">{{$faq->question}}</button>
                          </h2>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body" style="color: #24248f;">
                              <p>{{$faq->answer}}.</p>
                          </div>
                      </div>
                  </div>

                    @endforeach

                    @endif
                </div>
            <!-- </div> -->

            <br><br>
          </div>
          <div class="col-md-5">
            <img src="images/13.svg" class="img-fluid mx-auto d-block" alt="Responsive image" style="height: 500px;">
          </div>
        </div>
      </div>
    </section>

    <section id="seventh">
      <div class="container">
        <div class="row text-center row1">
          <div class="col-md-4">
            <h3>Contact Us</h3>
            <h5>Send Us A Message</h5>
            <form id="contactform">
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
              <a href="blog.html">Blog</a>
              <a href="faq.html">FAQ</a>
              <a href="login.html">Login</a>
              <a href="signup.html">Sign Up</a>
            </div>
          </div>
          <div class="col-md-4">
            <img src="images/logo2send.png" width="100" height="40" alt="website logo">
            <h3></h3>
            <div class="contacts">
              <p><i class="fas fa-phone-alt"></i> &nbsp; &nbsp; &nbsp; +1-226-2732583</p>
              <p><i class="fas fa-envelope"></i> &nbsp; &nbsp; &nbsp; johndoe@stockaccess.com</p>
              <p><i class="fab fa-facebook"></i> &nbsp; &nbsp; &nbsp; @fb/stockaccess.com</p>
              <p><i class="fab fa-twitter"></i> &nbsp; &nbsp; &nbsp; @tw/stockaccess.com</p>
              <p><i class="fab fa-instagram-square"></i> &nbsp; &nbsp; &nbsp; @ig/stockaccess.com</p>
              <p><i class="fab fa-linkedin"></i> &nbsp; &nbsp; &nbsp; @ln/stockaccess.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container-fluid" id="copyright">
      <p>Copyright &copy; 2021 All Rights Reserved Stock Access</p>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/script.js"></script>
  </body>
</html>


@endsection()
