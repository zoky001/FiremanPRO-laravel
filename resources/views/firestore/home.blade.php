@extends('firestore.app')

@section('content')
<!---->
<div  onload="checkAuth()" ng-controller="customersCtrl" class="container  "id="divid">
    <div class="row">


        <div class="w3-container w3-content " style="max-width:1500px;margin-top:40px">  
            <div class="w3-panel w3-round-xlarge w3-light-grey">
                <div class = "w3-center" style="margin-top:-10px">
                    <h1>Fire Store</h1>
                    <!-- Add new user--button -->





                    <ul id="bik" class="list-group">


                    </ul>

                </div>  


            </div>

            <!-- The Grid -->
            <div class="w3-row-padding">


                <!-- Left Column 
                
                
                -->

                <div class="w3-col m2 w3-round-xlarge ">
                    <br>

                    <!-- 
                    
                   End Left Column -->
                </div>
                <!-- Middle Column -->

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">

                        <div class="panel panel-default">
                            <div class="panel-heading">Podatci o kući</div>
                            <div class="panel-body">
                                <!--
                                <h1>Welcome to My Awesome App - Prijava</h1>
                                <div id="sign-in-status"></div>
                                <div id="sign-in"></div>
                                <div id="account-details"></div>
-->
                                <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="" >
                                    {{ csrf_field()}}

                                    <div class="form-group {{ $errors -> has('name_owner') ? ' has-error' : ''}}">
                                        <label for="ime" class="col-md-4 control-label">Ime vlasnika: </label>
                                        <div class="col-md-6">
                                            <input name="name_owner" id="ime" type="text" class="form-control"  aria-describedby="emailHelp" value="{{ old('name_owner')}}"placeholder="Pero" required="" >
                                            <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            -->
                                            @if ($errors->has('name_owner'))
                                            <span class="help-block">

                                                <strong>{{ $errors -> first('name_owner')}}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="form-group {{ $errors -> has('surname_owner') ? ' has-error' : ''}}">

                                        <label for="surname_owner" class="col-md-4 control-label">Prezme vlasnika: </label>
                                        <div class="col-md-6">
                                            <input value="{{ old('surname_owner')}}" name="surname_owner" id="prezime" type="text" class="form-control"   placeholder="Perić" required="">
                                            @if ($errors->has('surname_owner'))
                                            <span class="help-block">

                                                <strong>{{ $errors -> first('surname_owner')}}</strong>
                                            </span>
                                            @endif

                                        </div>
                                    </div>




                                    <p id="salji" class="btn btn-primary btn-lg centered" style="width: 50%;margin-left: 25%">Pohrani podatke</p>

                                </form>

                            </div>
                        </div> 

                    </div> 
                </div>






                <!-- Right Column -->
                <div class="w3-col m2 w3-round-xlarge w3-light-grey" >



                    <!-- End right-->
                </div>

            </div>

            <!-- End Grid -->
        </div>

    </div>
</div>

@endsection
