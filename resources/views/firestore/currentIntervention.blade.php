@extends('firestore.app')

@section('content')

    <div onload="checkAuth()" ng-controller="currrentIntervention" class="container  " id="divid">


        <input id="IDintervencije" class="hidden" name="IDintervencije" value="{{$id}}">

        <br>
        <div class="w3-center">

            <!-- The Grid -->
            <div class="w3-row-padding">


                <!--  Start Left Column -->
                <div class="col-md-3 w3-round-xlarge w3-light-grey ">
                    <br>
                    <p>Vatrogasne postrojbe</p>
                    <div id="patrolListDiv" class="w3-center hidden" style="margin-top:-10px">

                        <ul id="listPatrol" class="list-group">


                        </ul>

                    </div>


                </div>
                <!--  End Left Column -->


                <!-- Middle Column -->
                <div class="col-md-7 w3-round-xlarge ">


                    <br>

                    <div class="centered" id="map" style="width:100%;height:500px;">

                    </div>

                </div>
                <!-- End Middle Column -->

                <!-- Right Column -->
                <div class="col-md-2 w3-round-xlarge w3-light-grey">
                    <div class="w3-center" style="margin-top:-10px">
                        <h1>Trenutna intervencija</h1>
                        <p id="ownerName"></p>
                        <!-- Add new user--button -->


                    </div>


                </div>
                <!-- End right-->

            </div>

            <!-- End Grid -->
        </div>

    </div>


@endsection
