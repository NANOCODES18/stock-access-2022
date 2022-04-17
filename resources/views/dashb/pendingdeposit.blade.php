@extends('dashb.dashlayout')
@section('dashbody')

        <!-- START CONTENT -->
        <section id="main-content" class=" ">
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">TRANSACTIONS</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Pending Deposits</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Deposit Date</th>
                                                    <th>Amount</th>
                                                    <th>Method</th>
                                                    <th>Account</th>
                                                    <th>Status</th>
                                            </thead>
                                            <tbody>
                                                @if ($user_pending_deposit->count()>0)
                                                @foreach ( $user_pending_deposit as $pending_deposit )
                                                <tr>
                                                   <td class="text-center">{{$loop->index + 1}}</td>
                                                   <td><a href="#" class="text-yellow hover-warning">{{ Auth::user()->name }}</a></td>
                                                   <td class="text-right"><span></span>{{Carbon\Carbon::parse($pending_deposit->depositDate)->diffForHumans()}}</td>
                                                   <td class="text-right"><span>$</span> {{$pending_deposit->amount}}</td>
                                                   <td class="text-right"><span>$</span>{{$pending_deposit->method}}</td>
                                                   <td class="text-right"><span>$</span>{{$pending_deposit->methodAccount	}}</td>
                                                   <td class="text-right"><span class="label label-danger">Deposit pending</span></td>
                                                </tr>

                                                @endforeach

                                                @else

                                                <tr>

                                                   <td colspan="6" class="text-center"><a href="#" class="text-yellow hover-warning">You have no pending deposit</a></td>
                                                </tr>

                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->

            </div>
        </section>
        <!-- END CONTENT -->







{{--

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
          Transactions
        </h1>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="breadcrumb-item"><a href="#">deposits</a></li>
          <li class="breadcrumb-item active">Pending deposits</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">
              <!-- Default box -->
                <div class="box box-solid bg-dark">
                  <div class="box-header with-border">
                    <h3 class="box-title">Pending Deposits</h3>

                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                              title="Collapse">
                        <i class="fa fa-minus"></i></button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                      <div class="table-responsive">
                          <table class="table table-striped table-bordered no-margin">
                            <thead>
                              <tr>
                                 <th class="text-center">S/N</th>
                                 <th>Name</th>
                                 <th class="text-right">Deposit Date</th>
                                 <th class="text-right">Amount</th>
                                 <th class="text-right">Method</th>
                                 <th class="text-right">Account</th>
                                 <th class="text-right">Status</th>
                              </tr>
                             </thead>
                             <tbody>
                                 @if ($user_pending_deposit->count()>0)
                                 @foreach ( $user_pending_deposit as $pending_deposit )
                                 <tr>
                                    <td class="text-center">{{$loop->index + 1}}</td>
                                    <td><a href="#" class="text-yellow hover-warning">{{ Auth::user()->name }}</a></td>
                                    <td class="text-right"><span></span>{{Carbon\Carbon::parse($pending_deposit->depositDate)->diffForHumans()}}</td>
                                    <td class="text-right"><span>$</span> {{$pending_deposit->amount}}</td>
                                    <td class="text-right"><span>$</span>{{$pending_deposit->method}}</td>
                                    <td class="text-right"><span>$</span>{{$pending_deposit->methodAccount	}}</td>
                                    <td class="text-right"><span class="label label-danger">Deposit pending</span></td>
                                 </tr>

                                 @endforeach

                                 @else

                                 <tr>

                                    <td colspan="6" class="text-center"><a href="#" class="text-yellow hover-warning">You have no pending deposit</a></td>
                                 </tr>

                                 @endif


                             </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                <!-- /.box -->
          </div>

        </div>
      </section> --}}

@endsection()
