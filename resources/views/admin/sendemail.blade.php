@extends("adminlayout.adminlayout")
@section("body")
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>


tinymce.init({
  selector: 'textarea#default'
});


  </script>

  <!-- MAIN CONTENT-->
  <div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">

            {{-- email --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Email</div>
                        <div class="card-body">

                            <form action="{{route('sendmail')}}" method="post" novalidate="novalidate">
                                @csrf
                                <input type="text" name="userid" value="{{ isset($id)? $id : ''}}" id="">

                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Title</label>
                                    <input id="about" name="mailtitle" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-name" class="control-label mb-1">Content</label>
                                    <textarea id="default" name="mail"  cols="15" value="" rows="13">

                                    </textarea>

                                    {{-- <textarea style="background-color: rgb(137, 204, 243)" name="" id="" cols="40" rows="30"></textarea> --}}
                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                </div>


                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        <i class="fa fa-pen fa-lg"></i>&nbsp;
                                       <span>Send Email</span>

                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>




        </div>
    </div>
</div>
  </div>

@endsection
