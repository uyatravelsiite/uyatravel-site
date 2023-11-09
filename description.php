<!DOCTYPE html>
<html>
<head>
  <?php
  include_once 'header.php';
  ?>
  <title>uyaTRAVEL</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Raleway:600,900" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Add any additional CSS styles you need */
    body {
      font-family: 'Raleway', sans-serif;
    }

    .container {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  flex-wrap: wrap;
}

.card-container {
  display: flex;
  justify-content: space-between;
  width: 100%;
  overflow-x: auto;
}

.card {
  flex: 0 0 auto;
  width: 100%; /* Adjust the width as needed */
  max-width: 290px;
  height: auto; /* Adjust the height as needed */
  margin: 0 10px;
  transition: transform 0.3s;
}
    .card:hover {
      transform: scale(1.1);
    }

    .card img {
      max-width: 100%;
      height: auto;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #contentsDiv {
  display: flex;
  justify-content: center;
  align-items: flex-start;
  flex-wrap: wrap;
}

#imgsDiv,
#detailsDiv {
  width: 100%;
  max-width: 500px;
}

#bigimg {
  width: 100%;
  height: auto;
  min-height: 200px;
  max-height: 400px;
}

.smlimgsDiv {
  display: flex;
  flex-wrap: wrap;
  margin-top: 10px;
  margin-left: 6px;
}

.smimgs {
  flex: 0 0 auto;
  width: 80px;
  height: 80px;
  border: 1px gray solid;
  margin-right: 5px;
  margin-bottom: 5px;
}

    .breadcrumb{
        background-color: transparent;
        border: 1px lightgray solid;
        font-size: 12px;
        color: darkgrey;
        margin-top: 10px;
    }

    .breadcrumb-item, .breadcrumb-item a{
        color: darkslategray !important;
        font-weight: bold;
    }

    .active{
        color: black;
        font-weight: normal;
    }

    #detailsDiv {
  width: 100%;
  max-width: 300px;
}

    #title, #description{
        word-wrap: break-word;
    }

    @media (max-width: 768px) {
  .card-container {
    flex-wrap: wrap;
  }

  .card {
    width: 100%;
    max-width: none;
    margin: 10px 0;
  }

  #imgsDiv,
  #detailsDiv {
    max-width: 100%;
  }
}
  </style>
</head>
<body>
<div class="loader"></div>
  <br><br>
  <center><h1>BALCONY CABIN - BELLA CRUISE</h1></center>
  <hr>
  <div class = "container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="deals.php">Deals</a></li>
                <li id = "titleLi"class="breadcrumb-item active" aria-current="page"></li>
            </ol>
        </nav>

        <div id = "contentsDiv">
            <div id = "imgsDiv" class = "mr-5">
                <div id = "bigimgDiv">
                    <img id = "bigimg" src="">
                </div>

                <div id = "smlimgsDiv">
                </div>
            </div>
            </div>

                <div id = "detailsDiv">
                    <h4 id="title"></h4>
                    <p id = "description">
                    </p>
                    <p id = "tscs">
                    </p>
                    <p id = "comment">
                    </p>
                    <h3 id = "price"></h3>
                    <div id = "btnDiv" class = "mt-3">
                        <a href="cart-form.php"><button class = "btn btn-lg btn-primary mr-2">Enquire Now</button> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        let deal = null;

        window.onload = function(){
            deal = localStorage.Deal;
            if(deal){
                deal = JSON.parse(deal);
                LoadDeal();
            }
        }

        function LoadDeal(){
            document.getElementById('titleLi').innerHTML = deal.deal_name;
            document.getElementById('bigimg').src = deal.LinksOfImagesArray[0];
            document.getElementById('title').innerHTML = deal.deal_name;
            document.getElementById('description').innerHTML = deal.deal_description;
            document.getElementById('tscs').innerHTML = deal.deal_tc;
            document.getElementById('comment').innerHTML = "NOTE: " + deal.deal_comment;
            document.getElementById('price').innerHTML = "R" + deal.deal_price;
            GenImgs();
        }

        function GenImgs(){
            let i = 1;
            let html = '';
            deal.LinksOfImagesArray.forEach(imglink => {
                let img = document.createElement('img');
                img.src = imglink;
                img.classList.add("smimgs", "mr-2", "mb-2");
                img.id = 'im' + (i++);
                img.addEventListener('click', ChangeBigImg);
                document.getElementById('smlimgsDiv').append(img);
            });
        }

        function ChangeBigImg(){
            let elem = document.getElementById(event.target.id);
            document.getElementById('bigimg').src = elem.src;
        }

        document.addEventListener("DOMContentLoaded", function() {
const loader = document.querySelector(".loader");
setTimeout(function() {
loader.style.display = "none";
document.body.classList.remove("loading");
}, 2000);
});

    </script>

  
</body>
<?php
  include_once 'includes/footer.php';
  ?>
</html>
