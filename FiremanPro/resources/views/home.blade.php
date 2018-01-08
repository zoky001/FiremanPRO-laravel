@extends('layouts.app')

@section('content')
<!---->
<div class="container" ng-controller="enternewHouse">
    <div class="row">
     
        
           <div class="w3-container w3-content " style="max-width:1500px;margin-top:40px">  
        <div class="w3-panel w3-round-xlarge w3-light-grey">
            <div class = "w3-center" style="margin-top:-10px">
                <h1>Dodavanje nove kuće - UNOS</h1>
                <!-- Add new user--button -->
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
                    
                            
                  

                            <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="{{ Route('addNewHouse') }}" >
                                {{ csrf_field() }}
                       
                                    <div class="form-group">
                                        
                                  

                                        <label for="ime" class="col-md-4 control-label"> Učitavanje slike profila kuće </label>
                                        <div class="input-group col-md-6">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Dodaj… <input type="file" name="user_photo" id="imgInp" required="">
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <br>
                                        <p class='w3-center'>
                                            <img id='img-upload'/>
                                        </p>  
                                    </div>

                                 






                                <div class="form-group {{ $errors->has('name_owner') ? ' has-error' : '' }}">
                                    <label for="ime" class="col-md-4 control-label">Ime vlasnika: </label>
                                    <div class="col-md-6">
                                        <input name="name_owner" id="ime" type="text" class="form-control"  aria-describedby="emailHelp" value="{{ old('name_owner') }}"placeholder="Pero" required="" >
                                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
-->
                                        @if ($errors->has('name_owner'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('name_owner') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>




                                <div class="form-group {{ $errors->has('surname_owner') ? ' has-error' : '' }}">

                                    <label for="surname_owner" class="col-md-4 control-label">Prezme vlasnika: </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('surname_owner') }}" name="surname_owner" id="prezime" type="text" class="form-control"   placeholder="Perić" required="">
                                        @if ($errors->has('surname_owner'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('surname_owner') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                
                                    <div class="form-group {{ $errors->has('streetName') ? ' has-error' : '' }}">

                                    <label for="streetName" class="col-md-4 control-label">Ulica:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('streetName') }}" name="streetName" id="HRO_type_of_roof" type="text" class="form-control"   placeholder="Varaždinska" >
                                        @if ($errors->has('streetName'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('streetName') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                 <div class="form-group {{ $errors->has('streetNumber') ? ' has-error' : '' }}">

                                    <label for="streetNumber" class="col-md-4 control-label">Kućni broj:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('streetNumber') }}" name="streetNumber" id="streetNumber" type="text" class="form-control"   placeholder="16" >
                                        @if ($errors->has('streetNumber'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('streetNumber') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                              
                                
                                          <div class="form-group {{ $errors->has('place') ? ' has-error' : '' }}">

                                    <label for="place" class="col-md-4 control-label">Selo:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('place') }}" name="place" id="place" type="text" class="form-control"   placeholder="16" >
                                        @if ($errors->has('place'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('place') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                
                                   <div class="form-group {{ $errors->has('postal_code') ? ' has-error' : '' }} " >
                                    <label class="col-md-4 control-label" for="postal_code">Pošta</label>
                                    <div class="col-md-6">
                                        <select name="postal_code" id="power_supply" class="form-control" required="">
                                            <option value="-1" disabled="" selected="">Odaberite..</option>
                                            @foreach($posts as $post)
                                            <option value="{{ $post -> id }}">{{ $post -> name }}</option>
                                           
@endforeach
                                        </select>
                                        @if ($errors->has('power_supply'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('postal_code') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                               
                           
                                
                                    <div class="form-group {{ $errors->has('longitude') ? ' has-error' : '' }}">

                                    <label for="longitude" class="col-md-4 control-label">Longitude:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('longitude') }}" name="longitude" id="longitude" type="numbeer" value="42208" class="form-control"   placeholder="46.000" required="">
                                        @if ($errors->has('longitude'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('longitude') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                   <div class="form-group {{ $errors->has('latitude') ? ' has-error' : '' }}">

                                    <label for="latitude" class="col-md-4 control-label">Latitude:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('latitude') }}" name="latitude" id="latitude" type="numbeer" value="42208" class="form-control"   placeholder="16.000" required="">
                                        @if ($errors->has('latitude'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('latitude') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                
                                
                                
                                    <div class="form-group {{ $errors->has('number_of_tenants') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="number_of_tenants">Broj stanara:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('number_of_tenants') }}" name="number_of_tenants" id="datumPrijema" type="number" min="0" max="99" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >stanara</label>
                                        
                                        @if ($errors->has('number_of_tenants'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('number_of_tenants') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                  <div class="form-group {{ $errors->has('number_of_floors') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="number_of_floors">Broj katova:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('number_of_floors') }}" name="number_of_floors" id="datumPrijema" type="number" min="0" max="999" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >katova</label>
                                        
                                        @if ($errors->has('number_of_floors'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('number_of_floors') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group {{ $errors->has('list_of_floors') ? ' has-error' : '' }}">

                                    <label for="list_of_floors" class="col-md-4 control-label">Popis katova: </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('list_of_floors') }}" name="list_of_floors" id="list_of_floors" type="text" class="form-control"   placeholder="Prvi kat, frugi kat.." required="">
                                        @if ($errors->has('list_of_floors'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('list_of_floors') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                  <div class="form-group {{ $errors->has('number_of_children') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="number_of_children">Broj djece:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('number_of_children') }}" name="number_of_children" id="number_of_children" type="number" min="0" max="99" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" ></label>
                                        
                                        @if ($errors->has('number_of_children'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('number_of_children') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                  <div class="form-group {{ $errors->has('year_children') ? ' has-error' : '' }}">

                                    <label for="year_children" class="col-md-4 control-label">Popis godišta djece: </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('year_children') }}" name="year_children" id="year_children" type="text" class="form-control"   placeholder="1995, 1999, 1998.." required="">
                                        @if ($errors->has('year_children'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('year_children') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                  <div class="form-group {{ $errors->has('number_of_adults') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="number_of_adults">Broj odraslih:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('number_of_adults') }}" name="number_of_adults" id="number_of_adults" type="number" min="0" max="99" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >osoba</label>
                                        
                                        @if ($errors->has('number_of_adults'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('number_of_adults') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                  <div class="form-group {{ $errors->has('years_adults') ? ' has-error' : '' }}">

                                    <label for="years_adults" class="col-md-4 control-label">Popis godišta odraslih osoba: </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('years_adults') }}" name="years_adults" id="years_adults" type="text" class="form-control"   placeholder="1965, 1969, 1958.." required="">
                                        @if ($errors->has('years_adults'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('years_adults') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                   <div class="form-group {{ $errors->has('number_of_powerless_and_elders') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="number_of_powerless_and_elders">Broj nemoćnih osoba:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('number_of_powerless_and_elders') }}" name="number_of_powerless_and_elders" id="number_of_powerless_and_elders" type="number" min="0" max="99" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >osoba</label>
                                        
                                        @if ($errors->has('number_of_powerless_and_elders'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('number_of_powerless_and_elders') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                 <div class="form-group {{ $errors->has('years_powerless_elders') ? ' has-error' : '' }}">

                                    <label for="years_adults" class="col-md-4 control-label">Popis godišta nemoćnih osoba: </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('years_powerless_elders') }}" name="years_powerless_elders" id="years_adults" type="text" class="form-control"   placeholder="1965, 1969, 1958.." required="">
                                        @if ($errors->has('years_powerless_elders'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('years_powerless_elders') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                <div class="form-group {{ $errors->has('disability_person') ? ' has-error' : '' }}">
                                    
                                    <label for="disability_person" class="col-md-4 control-label" >Invalid u kučanstvu:   @if ($errors->has('disability_person'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('disability_person') }}</strong>
                                        </span>

                                        @endif</label>
                                    
                                       <div class="col-md-6" style="margin-left: 5%">
                                             <div class="radio">

                                                 <input type="radio" class="form-check-input" name="disability_person" id="optionsRadios2" value="0" checked="">
                                                NE

                                            </div>
                                            <div class="radio">

                                                <input type="radio" class="form-check-input" name="disability_person" id="optionsRadios1" value="1" >
                                                DA

                                            </div>

                                          

                                        </div>
                                 
                                 

                                </div>
                                
                                  <div class="form-group {{ $errors->has('power_supply') ? ' has-error' : '' }} " >
                                    <label class="col-md-4 control-label" for="power_supply">Vrsta strujnog priključka</label>
                                    <div class="col-md-6">
                                        <select name="power_supply" id="power_supply" class="form-control" required="">
                                            <option value="-1" disabled="" selected="">Odaberite..</option>
                                            <option value="NADZEMNI">Nadzemni</option>
                                            <option value="PODZEMNI">Podzemni</option>
                                            <option value="NEMA">Nema priključak</option>

                                        </select>
                                        @if ($errors->has('power_supply'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('power_supply') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                
                                 <div class="form-group {{ $errors->has('gas_connection') ? ' has-error' : '' }}">
                                    
                                    <label for="gas_connection" class="col-md-4 control-label" >Postoji priključak plina?   @if ($errors->has('gas_connection'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('gas_connection') }}</strong>
                                        </span>

                                        @endif</label>
                                    
                                       <div class="col-md-6" style="margin-left: 5%">
                                             <div class="radio">

                                                 <input type="radio" class="form-check-input" name="gas_connection" id="optionsRadios2" value="0" checked="">
                                                NE

                                            </div>
                                            <div class="radio">

                                                <input type="radio" class="form-check-input" name="gas_connection" id="optionsRadios1" value="1" >
                                                DA

                                            </div>

                                          

                                        </div>
                                 
                                 

                                </div>
                                
                                
                                  <div class="form-group {{ $errors->has('type_of_heating') ? ' has-error' : '' }}">

                                    <label for="type_of_heating" class="col-md-4 control-label">Način/vrsta grijanja:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('type_of_heating') }}" name="type_of_heating" id="type_of_heating" type="text" class="form-control"   placeholder="drva, plin, pelete..." required="">
                                        @if ($errors->has('type_of_heating'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('type_of_heating') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                   <div class="form-group {{ $errors->has('number_of_gas_bottle') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="number_of_gas_bottle">Broj plinskih boca:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('number_of_gas_bottle') }}" name="number_of_gas_bottle" id="number_of_gas_bottle" type="number" min="0" max="999" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >komada</label>
                                        
                                        @if ($errors->has('number_of_gas_bottle'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('number_of_gas_bottle') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                  <div class="form-group {{ $errors->has('type_of_roof') ? ' has-error' : '' }}">

                                    <label for="type_of_roof" class="col-md-4 control-label">Vrsta krova:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('type_of_roof') }}" name="type_of_roof" id="type_of_roof" type="text" class="form-control"   placeholder="npr. lim, crijep..." required="">
                                        @if ($errors->has('type_of_roof'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('type_of_roof') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                      <div class="form-group {{ $errors->has('hydrant_distance') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="hydrant_distance">Udaljenost najbližeg hidranta:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('hydrant_distance') }}" name="hydrant_distance" id="number_of_gas_bottle" type="number" min="0" max="99999" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >m</label>
                                        
                                        @if ($errors->has('hydrant_distance'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('hydrant_distance') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                
                                    <div class="form-group {{ $errors->has('high_risk_object') ? ' has-error' : '' }}">
                                    
                                    <label for="high_risk_object" class="col-md-4 control-label" >Postoji objekt visokog rizika?   @if ($errors->has('high_risk_object'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('high_risk_object') }}</strong>
                                        </span>

                                        @endif</label>
                                    
                                       <div class="col-md-6" style="margin-left: 5%">
                                             <div class="radio">

                                                 <input type="radio" class="form-check-input" name="high_risk_object" id="optionsRadios2" value="0" checked="">
                                                NE

                                            </div>
                                            <div class="radio">

                                                <input type="radio" class="form-check-input" name="high_risk_object" id="optionsRadios1" value="1" >
                                                DA

                                            </div>

                                          

                                        </div>
                                 
                                 

                                </div>
                                 <div class="form-group {{ $errors->has('HRO_type_of_roof') ? ' has-error' : '' }}">

                                    <label for="HRO_type_of_roof" class="col-md-4 control-label">Vrsta krova objekta visokog rizika:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('HRO_type_of_roof') }}" name="HRO_type_of_roof" id="HRO_type_of_roof" type="text" class="form-control"   placeholder="npr. lim, crijep..." required="">
                                        @if ($errors->has('HRO_type_of_roof'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('HRO_type_of_roof') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                
                                
                                
                                    <div class="form-group {{ $errors->has('HRO_power_supply') ? ' has-error' : '' }}">
                                    
                                    <label for="HRO_power_supply" class="col-md-4 control-label" >Ima li objekt visokog rizika priključak električne energije?  @if ($errors->has('HRO_power_supply'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('HRO_power_supply') }}</strong>
                                        </span>

                                        @endif</label>
                                    
                                       <div class="col-md-6" style="margin-left: 5%">
                                             <div class="radio">

                                                 <input type="radio" class="form-check-input" name="HRO_power_supply" id="optionsRadios2" value="0" checked="">
                                                NE

                                            </div>
                                            <div class="radio">

                                                <input type="radio" class="form-check-input" name="HRO_power_supply" id="optionsRadios1" value="1" >
                                                DA

                                            </div>

                                          

                                        </div>
                                 
                                 

                                </div>
                                
                                
                                  <div class="form-group {{ $errors->has('HRO_content') ? ' has-error' : '' }}">

                                    <label for="HRO_content" class="col-md-4 control-label">Sadržaj objekta visokog rizika:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('HRO_content') }}" name="HRO_content" id="HRO_content" type="text" class="form-control"   placeholder="npr. svinje, kokoši, ugljen..." required="">
                                        @if ($errors->has('HRO_content'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('HRO_content') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                
                                
                                
                                    <div class="form-group {{ $errors->has('HRO_animals') ? ' has-error' : '' }}">
                                    
                                    <label for="HRO_animals" class="col-md-4 control-label" >Ima li objekt visokog rizika životinje?  @if ($errors->has('HRO_animals'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('HRO_animals') }}</strong>
                                        </span>

                                        @endif</label>
                                    
                                       <div class="col-md-6" style="margin-left: 5%">
                                             <div class="radio">

                                                 <input type="radio" class="form-check-input" name="HRO_animals" id="optionsRadios2" value="0" checked="">
                                                NE

                                            </div>
                                            <div class="radio">

                                                <input type="radio" class="form-check-input" name="HRO_animals" id="optionsRadios1" value="1" >
                                                DA

                                            </div>

                                          

                                        </div>
                                 
                                 

                                </div>
                                
                                
                                
                                  <div class="form-group {{ $errors->has('telNumber') ? ' has-error' : '' }}">

                                    <label for="telNumber" class="col-md-4 control-label">Telefonski broj:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('telNumber') }}" name="telNumber" id="telNumber" type="text" class="form-control"   placeholder="042725099" required="">
                                        @if ($errors->has('telNumber'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('telNumber') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                
                                        
                                  <div class="form-group {{ $errors->has('mobNumber') ? ' has-error' : '' }}">

                                    <label for="mobNumber" class="col-md-4 control-label">Broj mobitela:  </label>
                                    <div class="col-md-6">
                                        <input value="{{ old('mobNumber') }}" name="mobNumber" id="mobNumber" type="text" class="form-control"   placeholder="0995982910" required="">
                                        @if ($errors->has('mobNumber'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('mobNumber') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>
                                
                                     <div class="form-group">
                                        
                                  

                                        <label for="ime" class="col-md-4 control-label"> Učitavanje slike tlocrta kuće:  </label>
                                        <div class="input-group col-md-6">
                                            <span class="input-group-btn">
                                                <span class="btn btn-default btn-file">
                                                    Dodaj… <input type="file" name="gnd_photo[]" id="imgInp" >
                                                </span>
                                            </span>
                                            <input type="text" class="form-control" readonly>
                                        </div>
                                        <br>
                                        <p class='w3-center'>
                                            <img id='img-upload'/>
                                        </p>  
                                    </div>
                                    
                                
                             
                           <div class="inner"></div>
                               
                           <p  id = "addInput"  class="btn btn-success btn-lg centered" style="width: 50%;margin-left: 25%"> Učitaj još slika </p>
                             
                           <br>
                           <br>


                                <button type="submit" class="btn btn-primary btn-lg centered" style="width: 50%;margin-left: 25%">Pohrani podatke</button>
                           
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
