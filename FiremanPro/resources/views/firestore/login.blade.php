@extends('firestore.app')

@section('content')
<!---->
<div  ng-controller="login" class="container" ng-controller="enternewHouse">
    <div class="row">


        <div class="w3-container w3-content " style="max-width:1500px;margin-top:40px">  


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
                            <div class="panel-heading">Prijava</div>
                            <div class="panel-body">
                                <h1>Odaberite željeni način prijave</h1>
                             

                                <div id="firebaseui-auth-container"></div> <br>


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
