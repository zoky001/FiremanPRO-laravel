
// Initialize Firebase
var config = {
    apiKey: "AIzaSyCVRMFVsZDVTwT7S1b7fvdf2CxSlXG3XFI",
    authDomain: "firemanpro-3c4cb.firebaseapp.com",
    databaseURL: "https://firemanpro-3c4cb.firebaseio.com",
    projectId: "firemanpro-3c4cb",
    storageBucket: "firemanpro-3c4cb.appspot.com",
    messagingSenderId: "664394819209"
};
firebase.initializeApp(config);


// Initialize Cloud Firestore through Firebase
var db = firebase.firestore();
var postsCollectionRef = db.collection("posts");
var interventionCollectionRef = db.collection("intervention_track");
var housesCollectionRef = db.collection("houses");
var patrolCollectionRef = db.collection("fireman_Patrol");
function IDunique() {
  // Math.random should be unique because of its seeding algorithm.
  // Convert it to base 36 (numbers + letters), and grab the first 9 characters
  // after the decimal.
  return Math.random().toString(36).substr(2, 9)+'_';
};


db.collection("fireman_Patrol")
        .onSnapshot(function (querySnapshot) {
            $("#bik").empty();
            var cities = [];
            querySnapshot.forEach(function (doc) {
                cities.push(doc.data().Name);
                $("#bik").append(
                        " <li class='list-group-item '>" + doc.data().Name + "<span id='" + doc.id + "'class='badge brisi_item'>BRISI</span></li>"
                        );
                $(".brisi_item").click(function () {
                    console.log("THISSS: ", this.id);
                    brisanjeItema(this.id);



                });

            });

            //document.getElementById("bik").innerHTML = cities[0];

        });
/*
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
*/
initApp = function () {
    firebase.auth().onAuthStateChanged(function (user) {
        if (user) {
            // User is signed in.
            
            //show
            $( ".auth" ).removeClass( "hidden" );
           
            var displayName = user.displayName;
            var email = user.email;
            var emailVerified = user.emailVerified;
            var photoURL = user.photoURL;
            var uid = user.uid;
            var phoneNumber = user.phoneNumber;
            var providerData = user.providerData;
            
             $("#userName").text(email);
             $("#userName").append("<span class=\"caret\"></span>");
             
            user.getIdToken().then(function (accessToken) {
                //  document.getElementById('sign-in-status').textContent = 'Signed in';
              
                $(".sign-in").text("Odjava");
                /*
                document.getElementById('account-details').textContent = JSON.stringify({
                    displayName: displayName,
                    email: email,
                    emailVerified: emailVerified,
                    phoneNumber: phoneNumber,
                    photoURL: photoURL,
                    uid: uid,
                    accessToken: accessToken,
                    providerData: providerData
                }, null, '  ');*/
            });
        } else {
            //show
            $( ".auth" ).addClass( "hidden" );
            // User is signed out.
            // document.getElementById('sign-in-status').textContent = 'Signed out';
 $(".sign-in").text("Prijava");
 // document.getElementById('account-details').textContent = 'null';
        }
    }, function (error) {
        console.log(error);
    });
};


$(document).ready(function () {
checkAuth();
    initApp();
    $("#salji").click(function () {
        ime = $("#ime").val();
        prezime = $("#prezime").val();
        // Add a new document with a generated id.
        db.collection("fireman_Patrol").add({
            Name: ime,
            Type: prezime
        })
                .then(function (docRef) {
                    console.log("Document written with ID: ", docRef.id);
                })
                .catch(function (error) {
                    console.error("Error adding document: ", error);
                });

    });



    $("#sign-in").click(function () {
        firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                // User is signed in.
                firebase.auth().signOut().then(function () {
                    // Sign-out successful.
                    console.log("LOGOUT SUCCE");
                }).catch(function (error) {
                    // An error happened.
                    console.log("LOGOUT FAIL");
                });

            } else {
                window.location.replace("http://127.0.0.1:8000/firestore/login");


            }
        }, function (error) {
            console.log(error);
        });
    });

 


});




function brisanjeItema(id) {
    console.log("IDD: ", id);

    db.collection("fireman_Patrol").doc(id).delete().then(function () {
        console.log("Document successfully deleted!");
    }).catch(function (error) {
        console.error("Error removing document: ", error);
    });
    return 0;

    // The function returns the product of p1 and p2
};


function checkAuth() {
    console.log("provjera identiteta");
   firebase.auth().onAuthStateChanged(function (user) {
            if (user) {
                // User is signed in.
           
            } else {
                if($(location).attr('href') != "http://127.0.0.1:8000/firestore/login")
                window.location.replace("http://127.0.0.1:8000/firestore/login");
            }
        }, function (error) {
            console.log(error);
        });

    // The function returns the product of p1 and p2
};