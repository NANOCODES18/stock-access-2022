@extends("layouts.spacedcustomlayout")

@section("body")
    <section class="plansfront">
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
            <h1>INVEST WITH US</h1>
            <p>Stock Access is dedicated to helping Investment enthusiasts reach their desired goals and broaden their financial horizons.
              <br>
        We seek to provide maximum security, privacy and a world class investment expertise across the crypto market.
        Coupled with a wide range of experience in the market, we transform new investment ideas into practical investment
        products designed to deliver maximized R.O.Is despite our significantly minimized risk level.
            </p>
          </div>

    </section>

    <section id="eigth" style="padding-top: 75px;">
      <div class="container">
        <h2>Investment Plans</h2>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="card card-body">
                  <h5 class="card-title">Beginners Trader Plan</h5>
                  <p class="card-text">  $1000 <b>Minimum</b> - $9000 <b>Maximum</b></p>
                  <!-- <br> -->
                  <p class="card-text">4.5% weekly R.O.I <br> Arbitration duration: 30days </p>
                  <a href="{{route('login')}}" >GET STARTED</a>
              </div>
            </div>
            <div class="col-md-5">
                <div class="card card-body">
                    <h5 class="card-title">Advanced beginners Trader plan</h5>
                    <p class="card-text">  $10,000  <b>Minimum</b> - $45,000 <b>Maximum</b></p>
                    <!-- <br> -->
                    <p class="card-text">7.5% weekly R.O.I<br> Arbitration duration: 42 days </p>
                    <a href="{{route('login')}}" >GET STARTED</a>
                </div>
            </div>
            <div class="col-md-1"></div>
            </div><br><br>
            <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <div class="card card-body">
                    <h5 class="card-title">Proficient Trader’s Plan</h5>
                    <p class="card-text">  $50,000 <b>Minimum</b> - $150,000 <b>Maximum</b></p>
                    <!-- <br> -->
                    <p class="card-text">9.5% weekly R.O.I <br> Arbitration duration: 60 days </p>
                    <a href="{{route('login')}}" >GET STARTED</a>
                 </div>
            </div>
            <div class="col-md-5">
                <div class="card card-body">
                    <h5 class="card-title">Expert Trading Plan</h5>
                    <p class="card-text">  $170,000 <b>Minimum</b> - $400,000 <b>Maximum</b></p>
                    <!-- <br> -->
                    <p class="card-text">12% weekly R.O.I <br> Arbitration duration: 60days </p>
                    <a href="{{route('login')}}" >GET STARTED</a>
                </div>
            </div>
            <div class="col-md-1"></div>
            </div>
      </div>
    </section>




@endsection()
