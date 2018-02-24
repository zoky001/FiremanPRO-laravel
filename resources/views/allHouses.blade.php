@extends('layouts.app')

@section('content')


<!-- content -->
<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">


    <!-- Page Container -->
    <div class="w3-container w3-content " style="max-width:1500px;margin-top:40px">  
        <div class="w3-panel w3-round-xlarge w3-light-grey">
            <div class="row"> 
                <div class = "col-lg-3 col-xs-12" >
                    <h1 class="text-center"></h1>
                    <!-- Add new user--button -->
                </div>
                <div class="col-lg-6 col-xs-12" >
                
                        <form style="margin-top: 15px" role="form" method="POST" action="" >
                                {{ csrf_field() }}
                        <div class="input-group">
                            <input name="trazi" type="text" class="form-control" placeholder="Pretraživanje (ime, prezime ili oib)" >
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 col-xs-12 text-center"  >



                  

                </div>
            </div>
        </div>

        <!-- The Grid -->
        <div class="w3-row-padding">
            <!-- Left Column -->

            <!-- Middle Column -->
            <div class=" col-xs-12 col-sm-12 col-lg-12 w3-round-xlarge w3-light-grey ">


                <div class="w3-row-padding " style="margin-top:10px">









                    @foreach ($houses as $house)




                    <div class=' w3-margin-bottom col-lg-2 col-md-2 col-sm-4 col-xs-12'>

                        <div  class='w3-card-2  w3-ripple w3-round w3-hover-shadow '  style= "margin-top:10px" id="878">
                            <div class='w3-container'>
                                <h4 class='w3-center'> <a href = '' target = '_blank'> {{ $house -> name_owner }} {{ $house->surname_owner }} </a></h4>
                                <p class='w3-center'><img src="{{ asset('house_images/profil'. $house -> getProfilPic() -> FileName) }}" class='w3-circle' style='height:106px;width:106px' alt='Profil'></p>
                                <hr>
                                <p><i class='fa fa-pencil fa-fw w3-margin-right w3-text-theme'>{{ $house -> address -> streetName }} {{ $house -> address -> streetNumber }}</i> </p>
                                <p><i class='fa fa-home fa-fw w3-margin-right w3-text-theme'> {{ $house -> address -> place }}</i>  </p>
                                <p><i class='fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme'>{{ $house -> address -> post -> postal_code  }} {{ $house -> address -> post -> name  }}</i> </p>
                            </div>
                        </div>


                    </div> 



                    @endforeach












                </div>
                <!-- End middle-->
            </div>

            <!-- Right Column 
            <div class=" col-xs-6 col-sm-4 col-lg-2 w3-round-xlarge w3-light-grey " >



              
            </div>
            End right-->

        </div>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>

<!-- End page content -->
</div>


@endsection

