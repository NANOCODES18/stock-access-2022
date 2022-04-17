@extends('dashb.dashlayout')
@section('dashbody')


        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">FUND WITHDRAWAL</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Withdraw Request Form</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <section class="box has-border-left-3">
                                        <header class="panel_header">
                                            <h2 class="title pull-left">Make Withdrawal</h2>
                                            <div class="actions panel_actions pull-right">
                                                <a class="box_toggle fa fa-chevron-down"></a>
                                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                                <a class="box_close fa fa-times"></a>
                                            </div>
                                        </header>
                                        <div class="content-body">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="transfer-wraper">
                                                        <div class="form-group no-mb">
                                                            <form action="{{route('userdashb_withdrawal_post')}}" method="post" >
                                                                @csrf
                                                            <label class="form-label">Enter Address</label>
                                                            <span class="desc"></span>

                                                                <input type="text" name="btcaddress" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="enter bitcoin address">



                                                            <label class="form-label">Amount</label>
                                                            <span class="desc"></span>

                                                            <div class="input-group mb-10">
                                                                <span class="input-group-addon">$</span>
                                                                <input type="number" name="amount" class="form-control" aria-label="Amount (to the nearest dollar)" placeholder="enter amount">

                                                            </div>

                                                            <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%"> Proceed With Withdrawal </button>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->

            </div>
        </section>




{{--











<section class="content-header">
    <h1>
    Fund withdrawal
    </h1>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="breadcrumb-item"><a href="#">Make Withdrawal</a></li>
      <li class="breadcrumb-item active">Withdrawal</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

   <div class="row">

       <div class="col-lg-12 col-12">

           <div class="row">

              <div class="col-12">
                  <h3 class="page-header">Withdrawal Request Form</h3>
              </div>

              <div class="col-lg-6 col-12">
                  <div class="box bg-info box-solid">
                    <div class="box-header with-border">
                      <h4 class="box-title">make withdrawal</h4>
                      <ul class="box-controls pull-right">
                        <li><a class="box-btn-close" href="#"></a></li>
                        <li><a class="box-btn-slide"  href="#"></a></li>
                        <li><a class="box-btn-fullscreen" href="#"></a></li>
                      </ul>
                    </div>

                    <div class="box-content">
                      <div class="box-body">
                        <form action="{{route('userdashb_withdrawal_post')}}" method="post" >
                            @csrf
                          <div class="form-group row">
                              <label class="col-12" for="login1-username">Enter address</label>
                              <div class="col-12">
                                  <input type="text" required class="form-control" placeholder="enter bitcoin address" name="btcaddress" value="">
                              </div>
                          </div>
                          <div class="form-group row">
                              <label class="col-12" for="lock1-password1">Amount (in usd)</label>
                              <div class="col-12">
                                  <input type="number" required class="form-control" id="lock1-password1" name="amount" placeholder="Enter Amount in USD">
                              </div>
                          </div>
                          <div class="form-group row mb-0">
                              <div class="col-12">
                                  <button type="submit" class="btn btn-success">
                                      <i class="fa fa-arrow-right mr-5"></i> Proceed with withdrawal
                                  </button>
                              </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
              </div>


           </div>

       </div>

    </div>

  </section>

 --}}

@endsection()
