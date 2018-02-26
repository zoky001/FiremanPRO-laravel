<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSRF Token -->
    <meta property="URL" content="{{ asset('') }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="manifest" href="{{ asset('js//manifest.json') }}">
    <link type="text/css" rel="stylesheet" href="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.css" />
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/2.5.1/firebase-ui-auth.css" />
<!---->
</head>
<body ng-app="firemanPRO">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                         
                        <li><a class="auth" href=""> Popis kuca </a></li>
                        <li><a class="auth" href="{{Route('newHouse')}}"> Unos kuce </a></li>
                       <li><a class="auth" href="{{Route('newIntervention')}}"> Intervencija</a></li>
                   
                    
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        
                       

                     
                        <li><a class="sign-in" href="" id="sign-in" ></a></li>
                        <li class="dropdown auth hidden">
                            <a id="userName" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                 <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a class="sign-in"href="" id="sign-in"> </a></li>
                                </ul>
                            </li>
                      
                    </ul>
                </div>
            </div>
        </nav>
        
                    @if($flash = session('message'))
   
     
             <div id="flash-message" class="panel panel-success hidden-xs hidden-sm">
      <div class="panel-heading">
          Obavijest
      </div>
      
      <div class="panel-body">
          {{ $flash }}
      </div>
    </div>
    @endif

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--angular -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-sanitize.js">
    

  <script src="{{ asset('js/app.js') }}"></script>
  


           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>
           
           
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
         
          
           <script src="https://www.gstatic.com/firebasejs/4.9.1/firebase.js"></script>
        
           
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-firestore.js"></script>  
<script src="https://www.gstatic.com/firebasejs/ui/2.5.1/firebase-ui-auth__hr.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-messaging.js"></script>


  <script src="{{ asset('js/googleMap.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhrH-2ADB3_rhv9JlkSUfqY4ra_vNXPPI&callback=myMap"></script>
<!--

<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-database.js"></script>

  <script src="https://cdn.firebase.com/libs/firebaseui/2.5.1/firebaseui.js"></script>
        
<!-- Leave out Storage -->
<!-- <script src="https://www.gstatic.com/firebasejs/4.9.0/firebase-storage.js"></script> -->

<!-- AngularFire -->
<script src="https://cdn.firebase.com/libs/angularfire/2.3.0/angularfire.min.js"></script>
    <script src="{{ asset('js/fireStore.js') }}"></script>
  <script src="{{ asset('js/firebaseMessage.js') }}"></script>
    <script src="{{ asset('js/myApp.js') }}"></script>
    <script src="{{ asset('js/myCtrl.js') }}"></script>
</body>
        <style>
                                #flash-message{
    position: fixed;
    bottom:20px;
    right: 20px;
    z-index: 10;
    height: 120px;
    width: 400px;
    
}
.btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}

#img-upload{
    max-width: 50%;
   
    max-height: 250px;
}
                            </style>
                            
                                
                                       <script>
                            $(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
            console.log("promjena");
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		     console.log("promjena");
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
                     console.log("promjena");
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
                            </script>
</html>

                           