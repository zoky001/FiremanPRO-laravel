@extends('firestore.app')

@section('content')

<div  onload="checkAuth()" ng-controller="intervention" class="container  "id="divid">
    <div class="row">


        <div class="w3-container w3-content " style="max-width:1500px;margin-top:40px">  
            <div class="w3-panel w3-round-xlarge w3-light-grey">
                <div class = "w3-center" style="margin-top:-10px">
                    <h1 >Intervencije</h1>
                    <!-- Add new user--button -->





                    <ul id="listHouses" class="list-group">


                    </ul>

                </div>  

                <br>

                <div  id="patrolListDiv" class = "w3-center hidden" style="margin-top:-10px">
                    <h1> Patrole </h1>
                    <!-- Add new user--button -->





                    <ul id="listPatrol" class="list-group">


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
