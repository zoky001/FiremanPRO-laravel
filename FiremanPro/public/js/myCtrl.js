/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*
 appEventi.config(function ($interpolateProvider) {
 
 $interpolateProvider.startSymbol('<%');
 $interpolateProvider.endSymbol('%>');
 
 });*/
appFiremanPro.controller('enternewHouse', function ($scope, $http) {


    /*home*/


    $scope.moreGndPhoto = function () {

        $scope.myHTML = " <span class=\"input-group-btn\">\n                                                <span class=\"btn btn-default btn-file\">\n                                                    Dodaj\u2026 <input type=\"file\" name=\"gnd_photo[]\" id=\"imgInp\" >\n                                                <\/span>\n                                            <\/span>";
        //"  <div class=\"form-group\">\n                                        \n                                  \n\n                                        <label for=\"ime\" class=\"col-md-4 control-label\"> U\u010ditavanje slike tlocrta ku\u0107e:  <\/label>\n                                        <div class=\"input-group col-md-6\">\n                                            <span class=\"input-group-btn\">\n                                                <span class=\"btn btn-default btn-file\">\n                                                    Dodaj\u2026 <input type=\"file\" name=\"gnd_photo[]\" id=\"imgInp\" >\n                                                <\/span>\n                                            <\/span>\n                                            <input type=\"text\" class=\"form-control\" readonly>\n                                        <\/div>\n                                        <br>\n                                        \n                                        <p class='w3-center'>\n                                            <img id='img-upload'\/>\n                                        <\/p>  \n                                        \n                                        \n                                    <\/div>";
        console.log("click");



    };
});

//JQuery
$("#addInput").click(function () {

    $(".inner").append("   <div class=\"form-group\">\n                                        \n                                  \n\n                                        <label for=\"ime\" class=\"col-md-4 control-label\"> U\u010ditavanje slike tlocrta ku\u0107e:  <\/label>\n                                        <div class=\"input-group col-md-6\">\n                                            <span class=\"input-group-btn\">\n                                                <span class=\"btn btn-default btn-file\">\n                                                    Dodaj\u2026 <input type=\"file\" name=\"gnd_photo[]\" id=\"imgInp\" >\n                                                <\/span>\n                                            <\/span>\n                                            <input type=\"text\" class=\"form-control\" readonly>\n                                        <\/div>\n                                        <br>\n                                        \n                                        <p class='w3-center'>\n                                            <img id='img-upload'\/>\n                                        <\/p>  \n                                        \n                                        \n                                    <\/div>");

});


appFiremanPro.controller('customersCtrl', function ($scope, $http) {

    $scope.names = "KONJR";





});

/*
 domMyHome.controller('Accounts', function ($scope, $http, $parse) {
 
 
 $scope.obrisiUserAccount = function (item) {
 // console.log('otvori info');
 // console.log(item.currentTarget);
 //console.log(item.currentTarget.getAttribute("data-url"));
 
 var data = $.param({
 Akcija: 'Obrisi',
 _token: item.currentTarget.getAttribute("data-csrf")
 
 });
 
 var id = item.currentTarget.getAttribute("data-hide");
 
 $http.post(item.currentTarget.getAttribute("data-url"),{
 Akcija: 'Obrisi',
 _token: item.currentTarget.getAttribute("data-csrf")
 
 })
 .then(function mySuccess(response) {
 
 //console.log(id);
 
 
 // Get the model
 var model = $parse(id);
 // Assigns a value to it
 model.assign($scope, true);
 
 console.log('uspjeh');
 }, function myError(response) {
 
 console.log('greška');
 
 });
 
 
 
 }
 
 $scope.zatvoriIzmjenuLozinke = function(){
 $scope.prikazi = 'display:none';
 
 }
 
 $scope.izmjeniLozinku = function (item){
 
 if ($scope.password != $scope.password_confirmation) {
 console.log('krive lozinke');
 $scope.errorLozinka = 'has-error';
 $scope.error = false;
 $scope.errors = "Lozinke se ne podudaraju!!";
 
 
 }else if($scope.password.length < 8){
 console.log('prekratka lozinka');
 $scope.errorLozinka = 'has-error';
 $scope.error = false;
 $scope.errors = "Lozinke mora sadržavati minimalno 8 znakova!!";
 }
 else{
 
 console.log('tocne lozinke');
 
 $http.post(item.currentTarget.getAttribute("data-url"),{
 password: $scope.password,
 password_confirmation: $scope.password_confirmation,
 // _token: item.currentTarget.getAttribute("data-csrf")
 
 })
 .then(function mySuccess(response) {
 
 //console.log(id);
 
 
 // Get the model
 //      var model = $parse(id);
 // Assigns a value to it
 //      model.assign($scope, true);
 
 console.log(response.data);
 if (response.data == "\"TRUE\"") {
 console.log('uspjesno izmjenjene lozinke: '); 
 
 $scope.formChangePassword = true;
 $scope.succes = true;
 
 }
 else{
 $scope.formChangePassword = true;
 $scope.danger = true;
 console.log('Greška kod promjene podataka'); 
 }
 
 
 
 
 }, function myError(response) {
 $scope.formChangePassword = true;
 $scope.danger = true;
 console.log('Greška kod promjene podataka'); 
 console.log('greška odgovora');
 
 });
 
 
 }
 
 
 
 }
 
 
 
 $scope.izmjeniPasswordUserAccount = function (item) {
 // console.log('otvori info');
 // console.log(item.currentTarget);
 //console.log(item.currentTarget.getAttribute("data-url"));
 
 $scope.formChangePassword = false;
 $scope.succes = false;
 
 $scope.danger = false;
 $scope.password = '';
 $scope.password_confirmation= '';
 var username = item.currentTarget.getAttribute("data-username");
 $scope.osoba = username;
 
 var id = item.currentTarget.getAttribute("data-id");
 $scope.idAccounta = id;
 
 var url = item.currentTarget.getAttribute("data-url");
 $scope.changeUrl= url;
 
 $scope.prikazi = 'display:block';
 
 
 }
 
 
 
 });
 */