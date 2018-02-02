
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


$(document).ready(function () {
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
}