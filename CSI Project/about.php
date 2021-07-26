<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/> 
    <title>Contact Us</title>
    <?php
    include 'header.php';
    ?>
    <style>
        /* section{
            display: flex;
        } */
        body{
            background-color:#f2f2f2;
        }
        .card-body{
            display:flex;
            flex-direction: column;
            justify-content:center;
            align-items: center;
        }
        .sm{
            /* display: flex; */
            /* margin-left:5px; */
            /* justify-content: center; */
            margin: 20px 5px;
            align-self: center;
            padding-left: 14%;
        }
        
        .sm a{
            color: #f2f2f2;
            width: 56px;
            font-size: 22px;
            transition: .3s linear;
        }
        
        .sm a:hover{
            color: #e66767;
        }
        .card-footer{
            background: #f4f4f4;
            padding: 60px 10px;
        }
        @media only screen and (max-width: 415px){
            .row{
                  display:flex;
                  flex-direction:column;
                  justify-content:center;
                  align-self:center;
                }
              .text{
                padding-left: 0px;
                padding-right: 0px;
                 align-self:center;
                 text-align:justify;
                 width:100%;
              }
              .col-5{
                  margin-left:1vh;
              }
        }
        @media only screen and (max-width: 600px) and (min-width:415px){
            .row{
                  display:flex;
                  flex-direction:column;
                  justify-content:center;
                  align-self:center;
                }
              .text{
                padding-left: 0px;
                padding-right: 0px;
                 align-self:center;
                 text-align:justify;
                 width:100%;
              }
              .col-5{
                  margin-left:4vh;
                  /* align-self: center; */
                  /* margin-left: -14%; */
                  /* width:60%; */
                  /* display:inline-block; */
                  /* overflow:hidden; */
                  /* justify-content: center; */
                 padding-left: 8vh;
                 padding-right: 0px;
                 /* align-self:center; */
                 /* text-align:justify; */
                 width:60%;
              }
        }
        @media only screen and (max-width: 1000px) and (min-width:600px){
              .row{
                  display:flex;
                  flex-direction:column;
                  justify-content:center;
                  align-items:center;
              }
              .col-5{
                margin-left: -14%;
                width:60%;
              }
              .text{
                align-self:center;
                 text-align:justify;
                 width:100%;              }
        }
        @media only screen and (min-width: 1000px){
               .row{
                   display:flex;
                   flex-direction:row;
                   justify-content:center;
                  align-items:center;
               }
        }
    </style>
</head>
<body>
<!-- new -->
<div class="container my-4">
  <div class="row">
    <div class="col-5" style="margin-right:0px">
    <div class="container my-4">
        <div class="card" style="width: 18rem;background-color:black;color:white;">
        <img class="card-img-top" src="Meet.jpg" alt="Card image cap" style="height:20%">
        <div class="card-body">
            <p class="card-text mb-2"><strong>Meet Patel</strong></p>
            <p class="card-text">Computer Engineer</p>
            <a href="contactus.php" class="btn btn-primary">Comtact Me</a>
        <div class="sm">
                  <a href="https://www.linkedin.com/in/meetkumar-patel-002319212" class="fab fa-linkedin" target="_blank"></a>
                  <a href="https://twitter.com/Meetpat93072443" class="fab fa-twitter" target="_blank"></a>
                  <a href="#" class="fab fa-github"></a>
         </div>
         </div>
        </div>
     </div>
    </div>
    <div class="col-6 my-4 text"style="margin-left:0px;">
        <h1>About Me</h1>
        <h2>Meet Patel</h2>
        <p>Hi guys i am pursuing BTech in Computer Engineering from Dharmsinh Desai University and i am Coding enthusiast with 3 ⭐(1636 rating) coder on codechef and 5 ⭐in c++ on Hackerrank.skilled in C,C++,HTML,CSS,PHP .Also i am campus ambassador @greatlearning.    </div>
        </p>
        <!-- <div class="sm">
                  <a href="https://www.linkedin.com/in/meetkumar-patel-002319212" class="fab fa-linkedin" target="_blank"></a>
                  <a href="https://twitter.com/Meetpat93072443" class="fab fa-twitter" target="_blank"></a>
                  <a href="#" class="fab fa-github"></a>
         </div> -->
    </div>
  </div>
</div>
    <?php
      include 'footer.php';
    ?>
</body>
</html>