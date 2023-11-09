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
var contactSettingsRef = database.ref("contactSettings");

contactSettingsRef.once("value")
  .then(function (snapshot) {
    var contactSettingsData = snapshot.val();

    if (contactSettingsData) {
      document.getElementById("address").textContent = contactSettingsData.address || "Data not available.";
      document.getElementById("email").textContent = contactSettingsData.email || "Data not available.";
      document.getElementById("gmap").textContent = contactSettingsData.gmap || "Data not available.";
      document.getElementById("iframeSrc").textContent = contactSettingsData.iframeSrc || "Data not available.";
      document.getElementById("phoneNumbers").textContent = contactSettingsData.phoneNumbers || "Data not available.";
      document.getElementById("socialLinks").textContent = contactSettingsData.socialLinks || "Data not available.";
    } else {
      document.getElementById("address").textContent = "Data not available.";
      document.getElementById("email").textContent = "Data not available.";
      document.getElementById("gmap").textContent = "Data not available.";
      document.getElementById("iframeSrc").textContent = "Data not available.";
      document.getElementById("phoneNumbers").textContent = "Data not available.";
      document.getElementById("socialLinks").textContent = "Data not available.";
    }
  })
  .catch(function (error) {
    console.error("Error getting contactSettings data: " + error);
    document.getElementById("address").textContent = "Error fetching data from Firebase.";
    document.getElementById("email").textContent = "Error fetching data from Firebase.";
    document.getElementById("gmap").textContent = "Error fetching data from Firebase.";
    document.getElementById("iframeSrc").textContent = "Error fetching data from Firebase.";
    document.getElementById("phoneNumbers").textContent = "Error fetching data from Firebase.";
    document.getElementById("socialLinks").textContent = "Error fetching data from Firebase.";
  });

