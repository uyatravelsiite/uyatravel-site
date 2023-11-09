<?php
include_once 'header.php';
?>


<!DOCTYPE html>
<html>
<head>
  
  <title>uyaTRAVEL</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <style>
  .gallery-image {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
  }

  .img-box {
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease; 
  }

  @keyframes pulse {
    0% {
      transform: scale(1);
    }
    50% {
      transform: scale(1.1);
    }
    100% {
      transform: scale(1);
    }
  }

  .coming-soon {
    font-size: 24px;
    font-weight: bold;
    color: #ff7f50;
    animation: pulse 1s infinite;
  }

  .img-box img {
    width: 100%;
    height: auto;
  }

  .img-box:hover img {
    color: white;
    transform: scale(1.05);
  }

  /* Apply hover effect as default on smaller screens */
  @media (max-width: 767px) {
    .img-box img {
      transform: scale(1.05);
    }

    .img-box:hover img {
      transform: scale(1.05);
    }
  }

  .caption p {
    color: white;
    font-weight: 90%;
  }

  #dealsDiv{
    display: flex;
    flex-wrap: wrap;
  }

  .dealsCard{
    border: 1px lightgray solid;
    height: 500px;
    width: 320px;
    margin: 20px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    transition: border-color .3s;
  }

  .dealsCard:hover{
    border-color: darkblue;
  }

  .thumb{
    width: 310px;
    height: 310px;
    cursor: pointer;
  }

  .detbtns{
    background-color: navy;
    color: white;
    width: 90%;
    margin-bottom: 20px;
  }

  .detbtns:hover{
    color: wheat;
  }

  .title{
    color: darkblue;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    padding-left: 5px;
    padding-right: 5px;
    width: 100%;
    text-align: center;
  }

  @media screen and (max-width: 767px){
  #dealsDiv{
    justify-content: center;
    }
  }

  .dealsCard {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.dealsCard:hover {
  border-color: darkblue;
}

.thumb {
  width: 100%;
  height: auto;
  cursor: pointer;
}

.detbtns {
  background-color: navy;
  color: white;
  width: 90%;
  margin-bottom: 20px;
}

.detbtns:hover {
  color: wheat;
}
#dealsDiv {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
  grid-gap: 20px;
}

.dealsCard {
  border: 1px lightgray solid;
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-direction: column;
  transition: border-color .3s;
}

.detbtns {
  background-color: navy;
  color: white;
  width: 90%;
  height: 50px; /* Increase the height of the buttons */
  margin-bottom: 20px;
  font-size: 16px; /* Adjust the font size of the buttons */
}

.title {
  color: darkblue;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  padding-left: 5px;
  padding-right: 5px;
  width: 100%;
  text-align: center;
}
.title {
  color: darkblue;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
  padding-left: 5px;
  padding-right: 5px;
  width: 100%;
  text-align: center;
}
.detbtns {
  background-color: #333;
}

.scroll-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 9999; /* Add a higher z-index value to make the button appear on top */
  width: 40px;
  height: 40px;
  border: none;
  border-radius: 50%;
  font-size: 20px;
  cursor: pointer;
  display: none;
  background-image: url("images/up-arrow.png"); /* Add the image path here */
}

.scroll-to-top i {
  margin-top: 10px;
}

.scroll-to-top.show {
  display: block;
}

</style>


</head>

<body>
<div class="loader"></div>
  
 <br><br>
  <center><h2>OUR DEALS</h2></center><br>
  <center><img src="images/hotel.png" alt="" width="130px" height="150px" ></center>
  <center><p>Here are some of our deals in partnership with Travel Bella</p></center><br>
  <hr>
  <div id = "dealsDiv" class = "container">
  
    </div>
  <br>
  <center>
    <h2>Other Deals:</h2><br><hr><br><br><br><br>
    <h2 class="coming-soon">Coming Soon!</h2>
    <center><img src="images/delete.png" alt="" width="130px" height="150px" ></center>
    <h2 >We currently do not have international deals at the momment. You're welcome to sign up for our newsletter.</h2>
    
    <br><br><br><br>
  </center>
  
  <script type = "module">

        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.5.0/firebase-app.js";
  
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBiya-MbWDnCcsM-CL36LvY7oduMMxVRsQ",
            authDomain: "uya-travel.firebaseapp.com",
            databaseURL: "https://uya-travel-default-rtdb.firebaseio.com",
            projectId: "uya-travel",
            storageBucket: "uya-travel.appspot.com",
            messagingSenderId: "283228218463",
            appId: "1:283228218463:web:1320b719aabcf813dfa7ea",
            measurementId: "G-ZQYT7T1X7E"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        
        //import firebase storage functions
        import {getStorage, ref as sRef, uploadBytesResumable, getDownloadURL}
        from "https://www.gstatic.com/firebasejs/10.5.0/firebase-storage.js";

        //Firebase Realtime Database
        import {getDatabase, ref, set, child, get}
        from "https://www.gstatic.com/firebasejs/10.5.0/firebase-database.js";
        const realdb = getDatabase();

        var OuterDiv = document.getElementById('dealsDiv');
        var ArrayOfDeals = [];
        window.addEventListener('load', GetAllDeals);

        function GetAllDeals(){
            const dbref = ref(realdb);

            get(child(dbref, "deals"))
            .then((snapshot) => {
                snapshot.forEach(deal => {
                    ArrayOfDeals.push(deal.val());
                });
                AddAllDeals();
            })
        }

        function AddAllDeals(){
            let i = 0;
            ArrayOfDeals.forEach(deal => {
                AddADeal(deal, i++);
            });
            AssignAllEvents();
        }

        function AddADeal(partdeal, index){
            let html = 
            `
            <img src = "`+ partdeal.LinksOfImagesArray[0] +`" class="thumb mt-2" id="thumb-`+ index +`">
            <p class = "title" id = "title-`+ index +`">`+ getShortTitle(partdeal.deal_name) +`</p>
            <h5 class = "price">R`+ partdeal.deal_price +`</h5>
            <button class="detbtns btn" id="detbtn-`+ index +`">Enquire</button>
            `

            let newDeal = document.createElement('div');
            newDeal.classList.add('dealsCard');
            newDeal.innerHTML = html;
            OuterDiv.append(newDeal);
        }

        function getShortTitle(title){
            if(title.length > 49) title = title.substring(0,47);
            else return title;
            return title + "...";
        }

        function GetDealIndex(id){
            var indstart = id.indexOf('-') + 1;
            var indend = id.length;
            return Number(id.substring(indstart, indend));
        }

        function GoToDealDetails(event){
            var index = GetDealIndex(event.target.id);
            localStorage.Deal = JSON.stringify(ArrayOfDeals[index]);
            window.location = "description.php";
        }

        function AssignAllEvents(){
            var btns = document.getElementsByClassName('detbtns');
            var titles = document.getElementsByClassName('title');
            var thumbs = document.getElementsByClassName('thumb');

            for(let i = 0; i < btns.length; i++){
                btns[i].addEventListener('click', GoToDealDetails);
                titles[i].addEventListener('click', GoToDealDetails);
                thumbs[i].addEventListener('click', GoToDealDetails);
            }
        }

        function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

  window.addEventListener("scroll", function() {
    var scrollButton = document.querySelector(".scroll-to-top");
    if (window.pageYOffset > 200) {
      scrollButton.style.display = "block";
    } else {
      scrollButton.style.display = "none";
    }
  });

  document.addEventListener("DOMContentLoaded", function() {
const loader = document.querySelector(".loader");
setTimeout(function() {
loader.style.display = "none";
document.body.classList.remove("loading");
}, 2000);
});
    </script>
</body>
<footer>
  <?php
  require 'includes/footer.php';
  ?> 
</footer>
</html>
