<?php include('partials-front/menu.php');?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
            *{
                margin:0px;
                padding :0px;

            }
            .main{
            }
            body{
                font-family:Arial;
            }
            .cards{
                width:18%;
                display:inline-block;

                border-radius:15px;
                margin:40px;
                box-shadow:2px 2px 10px black;
            }
            
            .cards:hover{
                box-shadow:4px 4px 10px black;


            }
            .image img{
                width:100%;
                height:300px;
                border-top-right-radius:15px;
                border-top-left-radius:15px;
                

            }
            .title{
                padding:5px;
                text-align:center;
            }
            .description{
                text-align:center;

            }
            button{
                margin-top:30px;
                margin-bottom:30px;
                background-color:white;
                border:1px solid black;
                padding:10px;
                border-radius:5px;
                

            }
            button:hover{
                background-color:black;
                color:white;
                transition:0.5s;
            }
        </style>
    </head>
    <body>
        <div>
            <br>
            <br>
            <h1  font-weight="75px" class='description'> Contact Us</h1>
            <br> 
            <br>
        <div class="cards">
            <div class="image">
            <img src="images/nandini.jpeg" alt="">


            </div>
            <div class="title">

            <h3>Nandini Achugatla</h3>
            <br>
            <p>Software Developer</p>
            <br>
            <small>VIIT PUNE</small>
                        

            </div>
            <div class="description">
                <button> <b> Contact</b></button>
            </div>
            <br>
        </div>

        <div class="cards">
            <div class="image">
            <img src="images/shubham.jpeg" alt="">


            </div>
            <div class="title">

            <h3>Shubham Vanarase</h3>
            <br>
            <p>Software Developer</p>
            <br>
            <small>VIIT PUNE</small>
                        

            </div>
            <div class="description">
                <button> <b> Contact</b></button>
            </div>
            <br>
        </div>
        

        <div class="cards">
            <div class="image">
            <img src="images/sohan.jpeg" alt="">


            </div>
            <div class="title">

            <h3>Sohan Wagh</h3>
            <br>
            <p>Software Developer</p>
            <br>
            <small>VIIT PUNE</small>
                        

            </div>
            <div class="description">
                <button> <b> Contact</b></button>
            </div>
            <br>
        </div>
        

        <div class="cards">
            <div class="image">
            <img src="images/sans.jpeg" alt="">


            </div>
            <div class="title">

            <h3>Sanskruti Suryawashi</h3>
            <br>
            <p>Software Developer</p>
            <br>
            <small>VIIT PUNE</small>
                        

            </div>
            <div class="description">
                <button> <b> Contact</b></button>
            </div>
            <br>
        </div>
       
        </div> 
        
    </body>
</html>

<?php include('partials-front/footer.php');?>
