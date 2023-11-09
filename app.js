var firebaseConfig = {
    apiKey: "AIzaSyBiya-MbWDnCcsM-CL36LvY7oduMMxVRsQ",
    authDomain: "uya-travel.firebaseapp.com",
    databaseURL: "https://uya-travel-default-rtdb.firebaseio.com",
    projectId: "uya-travel",
    storageBucket: "uya-travel.appspot.com",
    messagingSenderId: "283228218463",
    appId: "1:283228218463:web:1320b719aabcf813dfa7ea",
};

firebase.initializeApp(firebaseConfig);

var database = firebase.database();
var generalSettingsRef = database.ref("generalSettings");
var siteAboutElement = document.getElementById("site_about");

generalSettingsRef.once("value")
    .then(function (snapshot) {
        var generalSettingsData = snapshot.val();
        
        if (generalSettingsData && generalSettingsData.site_about) {
            siteAboutElement.textContent = generalSettingsData.site_about;
        } else {
            siteAboutElement.textContent = "Data not available.";
        }
    })
    .catch(function (error) {
        console.error("Error getting generalSettings data: " + error);
        siteAboutElement.textContent = "Error fetching data from Firebase.";
    });
