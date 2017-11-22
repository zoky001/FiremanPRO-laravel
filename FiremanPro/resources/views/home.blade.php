@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
     
        
           <div class="w3-container w3-content " style="max-width:1500px;margin-top:40px">  
        <div class="w3-panel w3-round-xlarge w3-light-grey">
            <div class = "w3-center" style="margin-top:-10px">
                <h1>Dodavanje novog korisnika</h1>
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
                        <div class="panel-heading">Osobni podatci</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="" >
                                {{ csrf_field() }}






                                <div class="form-group {{ $errors->has('ime') ? ' has-error' : '' }}">
                                    <label for="ime" class="col-md-4 control-label">Ime</label>
                                    <div class="col-md-6">
                                        <input name="ime" id="ime" type="text" class="form-control"  aria-describedby="emailHelp" value="{{ old('ime') }}"placeholder="Pero" required="" >
                                        <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
-->
                                        @if ($errors->has('ime'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('ime') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>




                                <div class="form-group {{ $errors->has('prez') ? ' has-error' : '' }}">

                                    <label for="prezime" class="col-md-4 control-label">Prezme</label>
                                    <div class="col-md-6">
                                        <input value="{{ old('prez') }}" name="prez" id="prezime" type="text" class="form-control"   placeholder="Perić" required="">
                                        @if ($errors->has('prez'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('prez') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>

                             

                                <div class="form-group {{ $errors->has('datumRodjenja') ? ' has-error' : '' }}">
                                    <label for="datumRodjenja" class="col-md-4 control-label" >Datum rođenja</label>
                                    <div class="col-md-6">
                                        <input value="{{ old('datumRodjenja') }}" name="datumRodjenja" id="datumRodjenja" class="form-control" type="date" required="">
                                        @if ($errors->has('datumRodjenja'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('datumRodjenja') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('spol') ? ' has-error' : '' }}">
                                    
                                    <label for="spol" class="col-md-4 control-label" >Spol  @if ($errors->has('spol'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('spol') }}</strong>
                                        </span>

                                        @endif</label>
                                    
                                       <div class="col-md-6" style="margin-left: 5%">
                                            <div class="radio">

                                                <input type="radio" class="form-check-input" name="spol" id="optionsRadios1" value="m" >
                                                Muškarac

                                            </div>

                                            <div class="radio">

                                                  <input type="radio" class="form-check-input" name="spol" id="optionsRadios2" value="z">
                                                Žena

                                            </div>

                                        </div>
                                    <!--
                                    
                                       <div class="col-md-6">
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="spol" id="optionsRadios1" value="m" >
                                                Muškarac
                                            </label>
                                        </div>

                                        <div class="form-check">
                                            <label class="form-check-label col-md-4 control-label">
                                                <input type="radio" class="form-check-input" name="spol" id="optionsRadios2" value="z">
                                                Žena
                                            </label>
                                        </div>

                                       
                                    </div>
                                    -->
                                 

                                </div>

                               

                                <div class="form-group {{ $errors->has('imeOca') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="imeOca">Ime oca</label>
                                    <div class="col-md-6">
                                        <input value="{{ old('imeOca') }}" name="imeOca" id="imeOca" type="text" class="form-control"   placeholder="Josip" required="">
                                        @if ($errors->has('imeOca'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('imeOca') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('djevojackoPrezime') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="djevojackoPrezime">Djevojačko prezime</label>
                                    <div class="col-md-6">
                                        <input value="{{ old('djevojackoPrezime') }}" name="djevojackoPrezime" id="djevojackoPrezime" type="text" class="form-control"   placeholder="Horvat">
                                        @if ($errors->has('djevojackoPrezime'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('djevojackoPrezime') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('mjestoRodjenja') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="mjestoRodjenja">Mjesto rođenja</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('mjestoRodjenja') }}" name="mjestoRodjenja" id="mjestoRodjenja" type="text" class="form-control"   placeholder="Varaždin" required="">
                                        @if ($errors->has('mjestoRodjenja'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('mjestoRodjenja') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('drzavljanstvo') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="drzavljanstvo">Državljanstvo</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('drzavljanstvo') }}" name="drzavljanstvo" id="drzavljanstvo" type="text" class="form-control"   placeholder="Hrvatsko" required="">
                                        @if ($errors->has('drzavljanstvo'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('drzavljanstvo') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                   <div class="form-group {{ $errors->has('oib') ? ' has-error' : '' }}">
                                    <label for="oib" class="col-md-4 control-label">Oib</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('oib') }}" name="oib" id="oib" type="text" class="form-control"   placeholder="12458795235" required="">
                                        @if ($errors->has('oib'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('oib') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('jmbg') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="jmbg">JMBG</label>
                                    <div class="col-md-6">
                                        <input value="{{ old('jmbg') }}" name="jmbg" id="jmbg" type="text" class="form-control"   placeholder="12458795235" required="">
                                        @if ($errors->has('jmbg'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('jmbg') }}</strong>
                                        </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('brOsobne') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="brOsobne">Broj osobne:</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('brOsobne') }}"name="brOsobne" id="brOsobne" type="text" class="form-control"   placeholder="12458795235" required="">
                                        @if ($errors->has('brOsobne'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('brOsobne') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('adresa') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="adresa">Adresa</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('adresa') }}" name="adresa" id="adresa" type="text" class="form-control"   placeholder="Varaždinska 2 Babinec 42208 Cestica" required="">
                                        @if ($errors->has('adresa'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('adresa') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('bracnoStanje') ? ' has-error' : '' }} " >
                                    <label class="col-md-4 control-label" for="bracnoStanje">Bračno stanje</label>
                                    <div class="col-md-6">
                                        <select name="bracnoStanje" id="bracnoStanje" class="form-control" required="">
                                            <option value="-1" disabled="" selected="">Odaberite..</option>
                                            <option value="udata">Udata/Oženjen</option>
                                            <option value="neudata">Neudata/Neoženjen</option>
                                            <option value="udovac">Udovac/Udovica</option>

                                        </select>
                                        @if ($errors->has('bracnoStanje'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('bracnoStanje') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('imeDruga') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="imeDruga">Ime bračnog druga</label>
                                    <div class="col-md-6">
                                        <input value="{{ old('imeDruga') }}" name="imeDruga" id="imeDruga" type="text" class="form-control"   placeholder="Marija" >
                                        @if ($errors->has('imeDruga'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('imeDruga') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('prezimeDruga') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="prezimeDruga">Prezime bračnog druga</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('prezimeDruga') }}" name="prezimeDruga" id="prezimeDruga" type="text" class="form-control"   placeholder="Horvat" >
                                        @if ($errors->has('prezimeDruga'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('prezimeDruga') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('sprema') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="sprema">Stručna sprema</label>

                                    <div class="col-md-6">
                                        <select name="sprema" id="sprema" class="form-control" required="">
                                            <option value="-1" disabled="" selected="">Odaberite..</option>
                                            <option value="NK">NK (I. niža stručna sprema)</option>
                                            <option value="PK, NSS">PK, NSS (II. niža stručna sprema)</option>
                                            <option value="KV">KV (III. srednja stručna sprema)</option>
                                            <option value="KV, SSS">KV, SSS (IV. srednja stručna sprema, 3-godišnja škola)</option>

                                            <option value="VK">VK (V. srednja stručna sprema – 4-godišnja škola)</option>
                                            <option value="VŠS">VŠS (VI/1. i VI/2. viša stručna sprema ili specijalist)</option>
                                            <option value="VSS">VSS (VII/1. visoka stručna sprema / magistar struke)</option>
                                            <option value="Magistar">Magistar (VII/2. magistar znanosti)</option>
                                            <option value="Doktor ">Doktor (VIII. doktor znanosti)</option>

                                        </select>

                                        @if ($errors->has('sprema'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('sprema') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('zvanje') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="zvanje">Zvanje</label>

                                    <div class="col-md-6">

                                        <input value="{{ old('zvanje') }}" name="zvanje" id="zvanje" type="text" class="form-control"   placeholder="Tokar" required="">
                                        @if ($errors->has('zvanje'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('zvanje') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>







                                <div class="form-group {{ $errors->has('zdrastvenoStanje') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="zdravstveoStanje">Zdravstveno stanje:</label>

                                    <div class="col-md-6">
                                        <textarea  name="zdravstvenoStanje" id="zdravstvenoStanje" class="form-control" id="exampleTextarea" rows="3" > {{ old('zdravstvenoStanje') }}</textarea>
                                        @if ($errors->has('zdravstvenoStanje'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('zdravstvenoStanje') }}</strong>
                                        </span>
                                        @endif
                                    </div> 
                                </div>
                                
                                  <div class="form-group {{ $errors->has('tezina') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="datumPrijema">Težina:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left"value="{{ old('tezina') }}" name="tezina" id="datumPrijema" type="number" min="20" max="999" class="form-control"  required="" >
                                        <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >kg</label>
                                        
                                        @if ($errors->has('tezina'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('tezina') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                
                                 <div class="form-group {{ $errors->has('visina') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="visina">Visina:</label>

                                    <div class="col-md-6">
                                        <input style="width: 50%;float: left" value="{{ old('visina') }}" name="visina" id="datumPrijema" type="number" class="form-control"  min="100" max="250" required="" >
                                    <label style="width: 40%;float: left;text-align: left"
                                              class="col-md-4 control-label" >cm</label>
                                        
                                        @if ($errors->has('visina'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('visina') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('ugovor') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="ugovor">Ugovor</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('ugovor') }}" name="ugovor" id="ugovor" type="text" class="form-control"   placeholder="Broj ugovora" >
                                        @if ($errors->has('ugovor'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('ugovor') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('czss') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="czss">Czss</label>

                                    <div class="col-md-6">

                                        <input value="{{ old('czss') }}" name="czss" id="czss" type="text" class="form-control"   placeholder="" >
                                        @if ($errors->has('czss'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('czss') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('datumPrijema') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="datumPrijema">Datum prijema</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('datumPrijema') }}" name="datumPrijema" id="datumPrijema" type="date" class="form-control"  required="" >
                                        @if ($errors->has('datumPrijema'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('datumPrijema') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <legend class="w3-center"> Podatci skrbnika</legend>

                                <div class="form-group {{ $errors->has('imeSkrbnika') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="imeSkrbnika">Ime skrbnika</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('imeSkrbnika') }}" name="imeSkrbnika" id="imeSkrbnika" type="text" class="form-control"   placeholder="Ana" required="">
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('prezimeSkrbnika') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="prezimeSkrbnika">Prezime skrbnika</label>

                                    <div class="col-md-6"> 
                                        <input value="{{ old('prezimeSkrbnika') }}" name="prezimeSkrbnika" id="prezimeSkrbnika" type="text" class="form-control"   placeholder="Horvat" required="" >
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('adresaSkrbnika') ? ' has-error' : '' }} ">
                                    <label class="col-md-4 control-label" for="adresaSkrbnika">Adresa skrbnika</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('adresaSkrbnika') }}" name="adresaSkrbnika" id="adresaSkrbnika" type="text" class="form-control"   placeholder="Varaždinska 158" required="">
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('srodstvoSkrbnika') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="srodstvoSkrbnika">Srodstvo skrbnika</label>

                                    <div class="col-md-6">
                                        <input value="{{ old('srodstvoSkrbnika') }}" name="srodstvoSkrbnika" id="SrodstvoSkrbnika" type="text" class="form-control"   placeholder="Sin" required="">
                                    </div>
                                </div>

                                <div class="form-group {{ $errors->has('kontakt') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="kontakt">Kontakt:</label>

                                    <div class="col-md-6">

                                        <input value="{{ old('kontakt') }}" name="kontakt" id="kontakt" type="tel" class="form-control"   placeholder="" required="">
                                    </div>
                                </div>
                                
                                 <div class="form-group {{ $errors->has('napomena') ? ' has-error' : '' }}">
                                    <label class="col-md-4 control-label" for="napomena">Napomena:</label>
                                    <div class="col-md-6">
                                        <textarea  name="napomena" id="napomena" class="form-control" id="exampleTextarea" rows="3" >{{ old('napomena') }}</textarea>
                                        @if ($errors->has('napomena'))
                                        <span class="help-block">

                                            <strong>{{ $errors->first('napomena') }}</strong>
                                        </span>
                                        @endif
                                    </div>  
                                </div>














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
