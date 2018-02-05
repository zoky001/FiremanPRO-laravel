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

    fillPostListbox();

    /*$scope.moreGndPhoto = function () {
     
     $scope.myHTML = " <span class=\"input-group-btn\">\n                                                <span class=\"btn btn-default btn-file\">\n                                                    Dodaj\u2026 <input type=\"file\" name=\"gnd_photo[]\" id=\"imgInp\" >\n                                                <\/span>\n                                            <\/span>";
     //"  <div class=\"form-group\">\n                                        \n                                  \n\n                                        <label for=\"ime\" class=\"col-md-4 control-label\"> U\u010ditavanje slike tlocrta ku\u0107e:  <\/label>\n                                        <div class=\"input-group col-md-6\">\n                                            <span class=\"input-group-btn\">\n                                                <span class=\"btn btn-default btn-file\">\n                                                    Dodaj\u2026 <input type=\"file\" name=\"gnd_photo[]\" id=\"imgInp\" >\n                                                <\/span>\n                                            <\/span>\n                                            <input type=\"text\" class=\"form-control\" readonly>\n                                        <\/div>\n                                        <br>\n                                        \n                                        <p class='w3-center'>\n                                            <img id='img-upload'\/>\n                                        <\/p>  \n                                        \n                                        \n                                    <\/div>";
     console.log("click");
     };
     */
    $scope.upload = function () {
        console.log($scope.name_owner);
        var storageRef = firebase.storage().ref();
        var storage = firebase.storage();
        var imagesRef = storageRef.child('images').child('profil_pic');
        var imagesGNDRef = storageRef.child('images').child('gnd_plan_pic');
        // File or Blob named mountains.jpg
        var file = $('#imgInp')[0].files[0];
      uploadImageToFirebaseStorage(imagesRef, file);
      
      
     var $mvar = $('.gnd_photo')
        console.log("FILEE: " + $mvar.length);//.files[0]);
         for (i=0; i<$mvar.length; i++)    {
                
                  console.log("FILEE: " + $('.gnd_photo')[i].files[0]);//.files[0]);
                     uploadImageToFirebaseStorage(imagesGNDRef, $('.gnd_photo')[i].files[0]);
            }
       
    }


});


appFiremanPro.controller('login', function ($scope, $http) {
    console.log("LOGINN");

//firebase AUTH
// FirebaseUI config.
    var uiConfig = {
        signInSuccessUrl: '/firestore',
        signInOptions: [
            // Leave the lines as is for the providers you want to offer your users.
            firebase.auth.GoogleAuthProvider.PROVIDER_ID,
            firebase.auth.FacebookAuthProvider.PROVIDER_ID,
            firebase.auth.TwitterAuthProvider.PROVIDER_ID,
            firebase.auth.GithubAuthProvider.PROVIDER_ID,
            firebase.auth.EmailAuthProvider.PROVIDER_ID,
            firebase.auth.PhoneAuthProvider.PROVIDER_ID
        ],
        // Terms of service url.
        tosUrl: '<your-tos-url>'
    };

// Initialize the FirebaseUI Widget using Firebase.
    var ui = new firebaseui.auth.AuthUI(firebase.auth());
// The start method will wait until the DOM is loaded.
    ui.start('#firebaseui-auth-container', uiConfig);





});

//JQuery
$("#addInput").click(function () {

    $(".inner").append("   <div class=\"form-group\">\n                                        \n                                  \n\n                                        <label for=\"ime\" class=\"col-md-4 control-label\"> U\u010ditavanje slike tlocrta ku\u0107e:  <\/label>\n                                        <div class=\"input-group col-md-6\">\n                                            <span class=\"input-group-btn\">\n                                                <span class=\"btn btn-default btn-file\">\n                                                    Dodaj\u2026 <input type=\"file\" name=\"gnd_photo[]\"  class=\"gnd_photo\" >\n                                                <\/span>\n                                            <\/span>\n                                            <input type=\"text\" class=\"form-control\" readonly>\n                                        <\/div>\n                                        <br>\n                                        \n                                        <p class='w3-center'>\n                                            <img id='img-upload'\/>\n                                        <\/p>  \n                                        \n                                        \n                                    <\/div>");

});


appFiremanPro.controller('customersCtrl', function ($scope, $http) {

    $scope.names = "KONJR";





});


function fillPostListbox() {
    postsCollectionRef//.where("capital", "==", true)
            .get()
            .then(function (querySnapshot) {
                querySnapshot.forEach(function (doc) {
                    // doc.data() is never undefined for query doc snapshots
                    console.log(doc.id, " => ", doc.data());
                    $("#postList").append("<option value=\"" + doc.id + "\" >" + doc.data().Name + "</option>");
                });
            })
            .catch(function (error) {
                console.log("Error getting documents: ", error);
            });

}
function uploadImageToFirebaseStorage(imagesRef, file) {
    // Get a reference to the storage service, which is used to create references in your storage bucket


    console.log("FILE: " + file.name);
// Create the file metadata
    var metadata = {
        contentType: 'image/jpeg'
    };

// Upload file and metadata to the object 'images/mountains.jpg'
    var uploadTask = imagesRef.child(IDunique()+file.name).put(file, metadata);

// Listen for state changes, errors, and completion of the upload.
    uploadTask.on(firebase.storage.TaskEvent.STATE_CHANGED, // or 'state_changed'
            function (snapshot) {
                // Get task progress, including the number of bytes uploaded and the total number of bytes to be uploaded
                var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
                console.log('Upload is ' + progress + '% done');
                switch (snapshot.state) {
                    case firebase.storage.TaskState.PAUSED: // or 'paused'
                        console.log('Upload is paused');
                        break;
                    case firebase.storage.TaskState.RUNNING: // or 'running'
                        console.log('Upload is running');
                        break;
                }
            }, function (error) {

        // A full list of error codes is available at
        // https://firebase.google.com/docs/storage/web/handle-errors
        switch (error.code) {
            case 'storage/unauthorized':
                // User doesn't have permission to access the object
                break;

            case 'storage/canceled':
                // User canceled the upload
                break;


            case 'storage/unknown':
                // Unknown error occurred, inspect error.serverResponse
                break;
        }
    }, function () {
        // Upload completed successfully, now we can get the download URL
        var downloadURL = uploadTask.snapshot.downloadURL;
        console.log("LINK:" + downloadURL);
    });



}
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