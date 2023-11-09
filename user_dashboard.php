<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <!-- Include Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/9.5.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.5.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.5.0/firebase-database.js"></script>
</head>
<body>
    <h2>User Dashboard</h2>

    <div id="user-info">
        <!-- User information will be displayed here -->
    </div>

    <div id="reservation-list">
        <!-- Reservation list will be displayed here -->
    </div>

    <button id="logout-button">Logout</button>

    <script>
        // Initialize Firebase
        const firebaseConfig = {
            apiKey: "YOUR_API_KEY",
            authDomain: "YOUR_AUTH_DOMAIN",
            projectId: "YOUR_PROJECT_ID",
            storageBucket: "YOUR_STORAGE_BUCKET",
            messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
            appId: "YOUR_APP_ID"
        };

        firebase.initializeApp(firebaseConfig);

        // Check user authentication state
        firebase.auth().onAuthStateChanged(function(user) {
            if (user) {
                // User is signed in
                const username = user.displayName || "User";
                document.getElementById('user-info').innerHTML = `<p>Welcome, ${username}!</p>`;
                loadReservations(user.uid);
            } else {
                // User is not signed in, redirect to login
                window.location.href = "login.html"; // Replace with your login page URL
            }
        });

        // Function to load user reservations from Firebase Realtime Database
        function loadReservations(userId) {
            const reservationsRef = firebase.database().ref(`reservations/${userId}`);
            reservationsRef.on('value', (snapshot) => {
                const reservationList = snapshot.val();
                if (reservationList) {
                    displayReservations(reservationList);
                } else {
                    document.getElementById('reservation-list').innerHTML = "<p>No reservations found.</p>";
                }
            });
        }

        // Function to display user reservations
        function displayReservations(reservationList) {
            const reservationDiv = document.getElementById('reservation-list');
            let reservationsHtml = "<p>Your Reservations:</p><ul>";
            for (const reservationId in reservationList) {
                if (reservationList.hasOwnProperty(reservationId)) {
                    reservationsHtml += `<li>${reservationList[reservationId].reservationDetails}</li>`;
                }
            }
            reservationsHtml += "</ul>";
            reservationDiv.innerHTML = reservationsHtml;
        }

        // Logout button click event
        document.getElementById('logout-button').addEventListener('click', () => {
            firebase.auth().signOut().then(() => {
                // Sign-out successful, redirect to login
                window.location.href = "login.html"; // Replace with your login page URL
            }).catch((error) => {
                console.error("Logout Error:", error);
            });
        });
    </script>
</body>
</html>
