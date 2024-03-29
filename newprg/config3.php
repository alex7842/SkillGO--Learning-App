
<?php
/*require 'regphp.php';
require 'logphp.php';*/
include 'new.php';
session_start();

if (!empty($_SESSION["name"])) {
    $name = $_SESSION["name"];
    
    // Modify the query to retrieve the user's image based on their name
    $query = "SELECT * FROM base1 WHERE name = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $name); // "s" indicates a string parameter
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $image = $row["image"];
        $ema=$row["email"];
      
      
    } else {
        echo "User not found";
    }
} else {
    echo "Name not found";
}
?> 
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Playground</title>
         <link rel="stylesheet" href="welcome4.css">  
    <link rel="website icon" type="png" href="logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!--   <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <script src="https://kit.fontawesome.com/d9f0abd257.js" crossorigin="anonymous"></script>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
 

    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
   
    <link href='https://fonts.googleapis.com/css?family=Alkalami' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>    
    <link href='https://fonts.googleapis.com/css?family=Bakbak One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,300&family=Noto+Sans&family=Nunito+Sans:ital,opsz@1,6..12&family=Open+Sans:wght@500&family=Poppins:wght@300&family=Roboto+Slab:wght@500&display=swap" rel="stylesheet">


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1/dist/css/splide.min.css
" rel="stylesheet">
   <script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1/dist/js/splide.min.js
"></script>
<link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@300&display=swap" rel="stylesheet">
    
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> 
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script> 
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!--    <script src="//code.tidio.co/lzr9hspwvp2cxfz6t6drbshmfnjod1rz.js" async></script> -->

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
 

   
</head>
<body>
 

<div class="flex">
<div class="parent" id="parent">

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header flex-r" style="flex-direction: row-reverse;">
   
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <div class="head">
         
<div  role="button" class="back" onclick="e()" ><i class="fa-solid fa-arrow-left" style="color: #005eff;"></i>Back</div>

</div>
  </div>
  <script type="text/javascript">
    function e(){
      window.open("config.php?username=<?php echo $name;?>");
    }
  </script>
  <div class="offcanvas-body"  style="overflow-y: hidden;">
<div class="flex-c1">
 <div class="progress" >
  <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">11%</div>
</div>
<p> <strong>11%</strong> Completed in <strong>1</strong> hr</p>
</div>
<div class="line"></div>


    <div class="content">
        <p style=" margin-left:1%;">Course Discussion</p>
        <div class="box">
        <i class="fa-solid fa-bars" style="color: #ffffff;"></i> <i class="fa-solid fa-ellipsis-vertical" style="color: #ffffff;margin-left: 1px; "></i>   <span style="margin-left:2%;">Contents</span>
        </div>
        <br>
        <div class="scroll1">
            <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button id="one" class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="background-color: #ECF0F1;">
        <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span class="spa" style=" margin-left: 5%;">JavaScript  Introduction</span>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">Why Javascript</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">Es6 Engine</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">Features of Es6</li><br>
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Javascript Scope</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button  id="two" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: #ECF0F1;" >
        <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span  class="spa"  style="margin-left: 5%;">Variables in JavaScript</span>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">Var keyword</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">let and const</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">CamelCase variables</li><br>

        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">JavaScript Identifiers</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button id="three" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" style="background-color: #ECF0F1;">
       <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span  class="spa"  style="margin-left: 5%;">Data Types in JavaScript</span>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">Object Datatype</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">JavaScript Booleans</li><br>
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Undefined</li><br>
          <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Null value</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree1">
      <button  id="four"class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree1" aria-expanded="false" aria-controls="collapseThree" style="background-color: #ECF0F1;">
       <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span  class="spa"  style="margin-left: 5%;">Operators</span>
      </button>
    </h2>
    <div id="collapseThree1" class="accordion-collapse collapse" aria-labelledby="headingThree1" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">Arithmetic operator</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">Relational operator</li><br>

        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Logical operator</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree2">
      <button id="five" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2" style="background-color: #ECF0F1;">
       <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span  class="spa"  style="margin-left: 5%;">Condition Statement</span>
      </button>
    </h2>
    <div id="collapseThree2" class="accordion-collapse collapse" aria-labelledby="headingThree2" data-bs-parent="#accordionExample">
      <div class="accordion-body">
   <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">If Else condition</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">Ternary operator</li><br>
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Switch Statement</li><br>
         <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Template Literal</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree3">
      <button id="six" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree3" aria-expanded="false" aria-controls="collapseThree3" style="background-color: #ECF0F1;">
       <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span   class="spa"  style="margin-left: 5%;">Loops in Javascript</span>
      </button>
    </h2>
    <div id="collapseThree3" class="accordion-collapse collapse" aria-labelledby="headingThree3" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">For loop</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">While loop</li><br>
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Do While Loop</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree4">
      <button id="seven" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4" style="background-color: #ECF0F1;">
       <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span   class="spa"  style="margin-left: 5%;">Objects / Methods</span>
      </button>
    </h2>
    <div id="collapseThree4" class="accordion-collapse collapse" aria-labelledby="headingThree4" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">Constructor Function</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">Complex object Date Property</li><br>
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">This keyword</li><br>
       </ul>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree5">
      <button id="eight" class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree5" aria-expanded="false" aria-controls="collapseThree5" style="background-color: #ECF0F1;">
       <i class="fa-solid he fa-location-arrow fa-rotate-by" style="--fa-rotate-angle: 50deg;"></i> <span   class="spa"  style="margin-left: 5%;">Arrow function in JavaScript</span>
      </button>
    </h2>
    <div id="collapseThree5" class="accordion-collapse collapse" aria-labelledby="headingThree5" data-bs-parent="#accordionExample">
      <div class="accordion-body">
    <ul class="ul">
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%">Filter</li><br>
        <i class="fa-solid  fa-xs fa-video"></i> <li style="display:inline-block;margin-left: 2%;">Map,Lambda</li><br>
        <i class="fa-solid fa-xs fa-video"></i> <li style="display:inline-block; margin-left: 2%;">Reduce</li><br>
       </ul>
      </div>
    </div>
  </div>

  </div>
</div>
  
</div>
<div class="line"></div>

    
        
    </div>
  </div>
</div>
 
    </div> 
    <div class="page">
        <div class="nav-bar1" id="nav-bar1">
     <!--           <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
  Link with href
</a> -->
            <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample" id="bar"> <i class="fa-solid fa-bars fa-2x" style="color: #2270f7;"></i></a>
             <p class="title p left">Javascript Complete Course</p>
         
             <p class="discuss" data-toggle="tooltip" data-placement="top" title="3 Discussion"><a  style="text-decoration: none;" href="#commit">Discuss(3)</a></p>
             <p class="discuss"  id="discuss" data-toggle="tooltip" data-placement="top" title="Next-Content" role="button">Next <i class="fa-solid fa-angles-right" role="button" style="color: #1f71ff;"></i></p>
              <button  onclick="al()"class="btn1" data-toggle="tooltip" data-placement="top" title="Get Certified">Certify <i class="fa-solid fa-arrow-right"></i></button>
        
         
        </div>
        <script type="text/javascript">
          function al(){
            window.open("alert.php?username=<?php echo $name; ?>");
          }
        </script>
        <div>
            <br>
            <br>
            <h2 class="left top" id="title">Basics of Javascript</h2>
            <br>
             <div class="video" id="frame">
       <iframe id="fram" width="650" height="421" src="https://www.youtube.com/embed/PlbupGCBV6w?si=fehoqAvC67D7YhfT"></iframe>
           </div>
           <br>
           <div class="topi">
               <h2 class="left">Topics Covered</h2>
               <ul>
                <div class="list">
                    <div>
               <i class="fa-solid fa-bookmark" style="color: #2e7bff;"></i> <li id="l1" style="display:inline-block;">Why Javascript</li><br>
                      <i class="fa-solid fa-bookmark" style="color: #2e7bff;"></i><li id="l2" style="display:inline-block;">Es6 Engine</li><br>
                        <i class="fa-solid fa-bookmark" style="color: #2e7bff;"></i><li id="l3" style="display:inline-block;">Features of Es6</li><br>
                   <i class="fa-solid fa-bookmark" style="color: #2e7bff;"></i> <li  id="l4" style="display:inline-block;">Javascript Scope</li><br>
                              </div>
                            
                               <div class="msg position-relative" id="msg">
                               
<a href="config.php"><span  id="close" class="close position-absolute top-0 start-100 translate-middle p-2 " role="button"> <i class="fa-solid  fa-1x fa-x" style="color:black;"></i>   <span class="visually-hidden">New alerts</span></span></a>
    Try  our premium courses at 50% discount Today <i class="fa-solid  fa-wand-magic-sparkles fa-fade" id="magic" ></i>
    
</div>

               </ul>
               </div>
           </div>
                    
        
              
           <div class="tes">
               <h2 class="left">Javascript Exercise</h2>
               <br>
               <div class="test">
                   <h4 class="hw" style="color: white; margin-left: 0.4em;
                   padding: 1%;margin-top: 0.2em;">Test Yourself With Exercise :</h4>
                   <div class="white">
                     <div class="card1">
    <div class="question" id="question">
     <p id="quest"> Question goes here</p>
    </div>
    <div id="answer">
      <button class="btn">Answer 1</button>
       <button class="btn">Answer 2</button>
       <button class="btn">Answer 3</button>
       <button class="btn">Answer 4</button>
    </div>
    <button id="next-btn">Next</button>
  </div>
                       
                   </div>

               </div>
               
           </div>
           <br>
           <div class="comment left" id="commit">
            <h2>Discuss</h2>
           </div>
           <br>

           <div class="add left">
            <p>Add a Comment as <span style="font-size: 22px;font-family:'Epilogue', sans-serif; font-weight: bold"> @ <?php  
           echo "$name";
           ?></span></p>
          
            </div>
           <div class="mce left" id="mce" style="margin-left: 4%;">
            <div class="new">
                      <div class="tool-icon">
                         <i data-toggle="tooltip" data-placement="top" title="Bold" class="fa-solid fa-bold"></i><i data-toggle="tooltip" data-placement="top" title="Italic" class="fa-solid fa-italic"></i><i class="fa-solid fa-underline" data-toggle="tooltip" data-placement="top" title="Underline" ></i><i data-toggle="tooltip" data-placement="top" title="List" class="fa-solid fa-list"></i><i data-toggle="tooltip" data-placement="top" title="List-ol" class="fa-solid fa-list-ol"></i><i data-toggle="tooltip" data-placement="top" title="Link" class="fa-solid fa-link"></i>

                      </div>
                     
                  </div>
                      <div class="text-box top1" id="text-box">

                          <input placeholder="Write a comment...." id="value1">
                      </div>

                      <div class="comment image top1">
                       <input type="file" class="file-input" id="fileInput" name="file">

                        <label for="fileInput" class="custom-button">📸 Image</label>
                        <button class="custom" id="post">Post</button>
                      </div>
      </div>
      <br>
      <br>
      <div class="flex" role="button" id="btn2"><i role="button"  class="fa-solid fa-bars-staggered"></i>Sort</div>
      <div id="new1"></div>


      <div id="par">
  <div class="struct" id="one" class="box1">
    <div class="head1">
    <div class="round">
      A
    </div>
    <div class="name1">
      <span>Akhil R</span>
      <span>1 week ago</span>
    </div>
    <img data-toggle="tooltip" data-placement="top" title="Delete comment" src="dot.png" class="dot">
  </div>
  <div class="para">
    <p>
   I'm learning JavaScript after python.....and I feel javascript is more similar to python 😅  </p>
  </div>
  <div class="like">
    <div class="head2">
      <span id="like" onclick="click1(this)"><img class="icon" src="like-light.png"></img></span> 
      <span class="imp" id="unlike" onclick="unclick(this)"><img class="icon" src="dislike-light.png"></img></span>
    </div>
    <span><i class="fa-solid fa-reply"></i> reply</span>
  </div>
  </div>
<br>
     <br>
  <div class="struct left" id="two" class="box1">
    <div class="head1">
    <div class="round">H
      
    </div>
    <div class="name1">
      <span>Hari Rajesh</span>
      <span>1 month ago</span>
    </div>
        <img data-toggle="tooltip" data-placement="top" title="Delete comment" src="dot.png" class="dot">
  </div>
  <div class="para">
    <p>
    The mystey is solved...😂. Thx mate </p>
  </div>
  <div class="like">
    <div class="head2">
      <span  id="like" onclick="click1(this)"><img class="icon" src="like-light.png"></img></span> 
      <span class="imp" id="unlike" onclick="unclick(this)"><img class="icon" src="dislike-light.png"></img></span>
    </div>
    <span><i class="fa-solid fa-reply"></i> reply</span>
  </div>
  <br>
  <div class="line"></div>
  <br>
   <div class="head1" style="margin-left: 13%;">
    <div class="round">
      V
    </div>
    <div class="name1">
      <span>Vishwa R</span>
      <span>1 month ago</span>
    </div>
  </div>

  <div class="para" style="margin-left: 13%;">
    <p>
    Is this tutorial covered es6</p>
  </div>
  </div>
<br>
     <br>
  <div class="struct left" id="three" class="box1">
    <div class="head1">
    <div class="round">
      S
    </div>
    <div class="name1">
      <span>Sathish s</span>
      <span>3 months ago</span>
    </div>
        <img data-toggle="tooltip" data-placement="top" title="Delete comment" src="dot.png" class="dot">
  </div>
  <div class="para">
    <p>
   I don't know what will happen if we add boolean and boolean.</p>
  </div>
  <div class="like">
    <div class="head2">
      <span id="like" onclick="click1(this)"><img class="icon" src="like-light.png"></img></span> 
      <span class="imp" id="unlike" onclick="unclick(this)"><img class="icon" src="dislike-light.png"></img></span>
    </div>
    <span><i class="fa-solid fa-reply"></i> reply</span>
  </div>
  </div>
</div>
  <div class="line"></div>
  <br>
<footer class="footer" id="foot">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="skill2.png" alt="Homeverse logo" class="image1">
          </a>

          <p class="section-text">
            SkillGo is a professional  that advances the Learning technology knowledge and information technology.
          </p>

         

          <ul class="social-list">

            <li>
              <a href="https://www.facebook.com/iete.org" target="_blank" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.linkedin.com/school/iete/" target="_blank" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="https://www.youtube.com/@ieteaitr7814" target="_blank" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Community</p>
            </li>

            <li>
              <a href="alert.php" class="footer-link">About</a>
            </li>

            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>

         

            <li>
              <a href="#" class="footer-link">Locations Map</a>
            </li>
            <li>
            <a href="tel:+0123456789" class="footer-link">
                044 2835 0773
              </a>
            </li>


          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Services</p>
            </li>

            

            <li>
              <a href="config2.html" class="footer-link">FAQ</a>
            </li>

            <li>
              <a href="#" class="footer-link">Contact Us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Events</a>
            </li>

            <li>
              <a href="#" class="footer-link">Terms & Conditions</a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title"> Useful Links </p>
            </li>

            <li>
              <a href="config.html" class="footer-link">Home Page</a>
            </li>

            <li>
              <a href="alert.php" class="footer-link">About Us</a>
            </li>

            <li>
              <a href="#" class="footer-link">Blog</a>
            </li>

            <li>
              <a href="#" class="footer-link">Careers</a>
            </li>

            

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom" id="bottom">
      <div class="container">

        <p class="copyright">
          © Copyright <span style="color:  hsl(9, 100%, 62%);">SkillGo </span>Tirunelveli. All Rights Reserved.
        </p>

      </div>
    </div>

  </footer>


      </div>


       

        </div>
    </div>


</div>
<script>

  function click1(element){
    console.log("hello")
     let img = element.children[0] // Get the image element
    img.src = (img.src.includes('like-light.png')) ? 'like-fill.png' : 'like-light.png';
  }
 function unclick(element){
    console.log("hello")
     let img = element.children[0] // Get the image element
    img.src = (img.src.includes('dislike-light.png')) ? 'dislike-fill.png' : 'dislike-light.png';
  }

</script>

 <script>
       
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        });
    </script>
<script>
    let disc=document.getElementById('discuss');
  let parent1=document.getElementById('parent');
  let title1=document.getElementById('title');
  let fram1=document.getElementById('fram');
  let l11=document.getElementById('l1');
  let l22=document.getElementById('l2');
  let l33=document.getElementById('l3');
  let l44=document.getElementById('l4');
  const dict=[
  {
    title:'Javascript Introduction',
    fram:'https://www.youtube.com/embed/PlbupGCBV6w?si=fehoqAvC67D7YhfT',
    l1:'Javascript Scope',
    l2:'Features of Es6',
    l3:'Es6 Engine',
    l4:'Why Javascript'
  },
  {
    title:'Variables in javascript',
    fram:'https://www.youtube.com/embed/TOkU5HxES1o?si=adBiUdlWjSmroSR-',
    l1:'Var keyword',
    l2:'Let and Const',
    l3:'Javascript Identifiers',
    l4:'CamelCase Variables'
  },
  {
    title:'Datatypes in javascript',
    fram:'https://www.youtube.com/embed/nCwQY8inRvU?si=TgW9nBrcDrHAb_V-',
    l1:'Object Datatype',
    l2:'Javascript Booleans',
    l3:'Undefined',
    l4:'Null Value'
  },
   {
    title:'Operators in javascript',
    fram:'https://www.youtube.com/embed/gG0ynX_Sfx4?si=dcqZF6GU9GSrxXFc',
    l1:'Arithmetic operator',
    l2:'Relational operator',
    l3:'Logical Operator',
    l4:'Literals'
  },
  {
    title:'Condition Statement',
    fram:'https://www.youtube.com/embed/o_iO9WuoWaM?si=xBx03Q20n4m92rVD',
    l1:'Template Literal',
    l2:'Switch Statement',
    l3:'Ternary operator',
    l4:'If Else condition'
  }
]
discuss.onclick=()=>{

let rand= Math.floor(Math.random() * dict.length);
let sel;


sel=dict[rand];

console.log(sel)


// dict.forEach(i=>{
   title1.innerHTML=sel.title;
     fram1.src=sel.fram;
     l11.innerHTML=sel.l1;
      l22.innerHTML=sel.l2;
       l33.innerHTML=sel.l3;
        l44.innerHTML=sel.l4;
// })
}

</script>

<script>
 let f=1;
  let parent=document.getElementById('parent');
  let title=document.getElementById('title');
  let fram=document.getElementById('fram');
  let l1=document.getElementById('l1');
  let l2=document.getElementById('l2');
  let l3=document.getElementById('l3');
  let l4=document.getElementById('l4');


  parent.addEventListener("click",function(e){
    if(e.target.id=='one'){
      f=1;
      console.log('one');
    }
    else if(e.target.id=='two'){
      f=2;
     title.innerHTML='Variables in Javascript';
     fram.src='https://www.youtube.com/embed/TOkU5HxES1o?si=adBiUdlWjSmroSR-';
     l1.innerHTML='Var keyword';
      l2.innerHTML='Let and Const';
       l3.innerHTML='Javascript Identifiers';
        l4.innerHTML='CamelCase Variables';

    }
     else if(e.target.id=='three'){
      f=3;
     title.innerHTML='Datatypes in Javascript';
     fram.src='https://www.youtube.com/embed/nCwQY8inRvU?si=TgW9nBrcDrHAb_V-';
     l1.innerHTML='Object Datatype';
      l2.innerHTML='Javascript Booleans';
       l3.innerHTML='Undefined';
        l4.innerHTML='Null Value';
       

    }
    else if(e.target.id=='four'){
      f=4;
     title.innerHTML='Operators in Javascript';
     fram.src='https://www.youtube.com/embed/gG0ynX_Sfx4?si=dcqZF6GU9GSrxXFc';
     l1.innerHTML='Arithmetic operator';
      l2.innerHTML='Relational operator';
       l3.innerHTML='Logical Operator';
        l4.innerHTML='Literals';
       

    }
    else if(e.target.id=='five'){
      f=5;
     title.innerHTML='Condition Statement';
     fram.src='https://www.youtube.com/embed/o_iO9WuoWaM?si=xBx03Q20n4m92rVD';
     l1.innerHTML='If Else condition';
      l2.innerHTML='Ternary operator';
       l3.innerHTML='Switch Statement';
        l4.innerHTML='Template Literal';
       

    }
     else if(e.target.id=='six'){
      f=6;
     title.innerHTML='Loops in Javascript';
     fram.src='https://www.youtube.com/embed/h84MlHv6g4Q?si=1YHekjcTOpriO1US';
     l1.innerHTML='For loop';
      l2.innerHTML='While loop';
       l3.innerHTML='Do While Loop';
        l4.innerHTML='forEach loop';
       

    }
     else if(e.target.id=='seven'){
      f=7;
     title.innerHTML='Objects / Methods';
     fram.src='https://www.youtube.com/embed/S1dWe3f2zm0?si=ZHEEILuez0jqzgqP';
     l1.innerHTML='Constructor Function';
      l2.innerHTML='Complex object Date Property';
       l3.innerHTML='This keyword';
        l4.innerHTML='Callback functions';
       

    }
    else if(e.target.id=='eight'){
      f=8;
     title.innerHTML='Arrow functios in JavaScript';
     fram.src='https://www.youtube.com/embed/tJOJPealurs?si=bMnuEUmtP7Z0KHCk';
     l1.innerHTML='Map';
      l2.innerHTML='Filter';
       l3.innerHTML='Reduce';
        l4.innerHTML='Lambda';
       
    }
    start();
  })


     const question1=[
  {
    question:"Inside which HTML element do we put the JavaScript?",
    answers:[
      {text:"JS",correct:false},
      {text:"Javascript",correct:false},
      {text:"Script",correct:true},
      {text:"Scripted",correct:false},
    ]
  },
  {
    question:"Where is JavaScript executed in a web browser?",
      answers:[
        {text:"server-side",correct:false},
        {text:"HTML file",correct:false},
        {text:"client-side",correct:true},
        {text:"CSS file",correct:false},
      ]
    },
  {
    question:"What feature of JavaScript is commonly used to handle asynchronous operations?",
      answers:[
        {text:"Callbacks",correct:true},
        {text:"For loops",correct:false},
        {text:"Switch Statement",correct:false},
        {text:"None of the above",correct:false},
      ]
    },
  {
    question:"Why is JavaScript commonly used in web development?",
      answers:[
        {text:"database",correct:false},
        {text:"dynamic websites.",correct:true},
        {text:"Layout",correct:false},
        {text:"Framework",correct:false},
      ]
    }
];
  const question2 = [
  {
    question: "How do you declare a constant variable in JavaScript?",
    answers: [
      { text: "let", correct: false },
      { text: "const", correct: true },
      { text: "var", correct: false },
      { text: "variable", correct: false },
    ],
  },
  {
    question: "What happens if you declare a variable without using any keyword?",
    answers: [
      { text: "SyntaxError", correct: true },
      { text: "It becomes a global variable.", correct: false },
      { text: "It becomes a local variable.", correct: false },
      { text: "It throws a runtime error.", correct: false },
    ],
  },
  {
     question: "Which keyword is used for block-scoped variables in JavaScript?",
    answers: [
      { text: "var", correct: false },
      { text: "let", correct: true },
      { text: "const", correct: false },
      { text: "variable", correct: false },
    ],
  },
  {
    question: "Can you redeclare a variable declared using let?",
    answers: [
      { text: "Yes", correct: false },
      { text: "No", correct: true },
      { text: "Only in the same block", correct: false },
      { text: "Only in a different file", correct: false },
    ],
  },
];
const question3 = [
  {
    question: "Which of the following is a falsy value in JavaScript?",
    answers: [
      { text: "true", correct: false },
      { text: "1", correct: false },
      { text: "null", correct: true },
      { text: "\"string\"", correct: false },
    ],
  },
  {
    question: "What is the data type of typeof \"Hello\" in JavaScript?",
    answers: [
      { text: "String", correct: true },
      { text: "Text", correct: false },
      { text: "Character", correct: false },
      { text: "Alphanumeric", correct: false },
    ],
  },
  {
    question: "How do you check if a variable is an array in JavaScript?",
    answers: [
      { text: "isArray()", correct: true },
      { text: "isArr()", correct: false },
      { text: "arrayCheck()", correct: false },
      { text: "checkArray()", correct: false },
    ],
  },
  {
    question: "Which keyword is used to declare an object in JavaScript?",
    answers: [
      { text: "object", correct: false },
      { text: "dict", correct: false },
      { text: "var", correct: false },
      { text: "let", correct: true },
    ],
  },
];
const question4 = [
  {
    question: "What is the remainder when 10 is divided by 3 in JavaScript?",
    answers: [
      { text: "1", correct: false },
      { text: "2", correct: true },
      { text: "3", correct: false },
      { text: "0", correct: false },
    ],
  },
  {
    question: "Which operator is used for exponentiation in JavaScript?",
     answers: [
      { text: "^", correct: false },
      { text: "**", correct: true },
      { text: "^", correct: false },
      { text: "exp", correct: false },
    ],
  },
  {
    question: "What is the result of \"5\" + 2 in JavaScript?",
     answers: [
      { text: "7", correct: false },
      { text: "\"7\"", correct: false },
      { text: "52", correct: true },
      { text: "3", correct: false },
    ],
  },
  {
    question: "Which logical operator represents \"logical AND\" in JavaScript?",
     answers: [
      { text: "&&", correct: true },
      { text: "||", correct: false },
      { text: "!", correct: false },
      { text: "AND", correct: false },
    ],
  },
];

const question5 = [
  {
    question: "Which statement is used for simple if condition in JavaScript?",
    answers: [
      { text: "if", correct: true },
      { text: "switch", correct: false },
      { text: "else", correct: false },
      { text: "for", correct: false },
    ],
  },
  {
    question: "What is the purpose of the else statement in JavaScript?",
   answers: [
      { text: "To handle errors", correct: false },
      { text: "executes when if condition is true", correct: false },
      { text: "executes when if  condition is false", correct: true },
      { text: "To create a loop", correct: false },
    ],
  },
  {
    question: "Which keyword is used to exit a loop in JavaScript?",
    answers: [
      { text: "break", correct: true },
      { text: "exit", correct: false },
      { text: "return", correct: false },
      { text: "stop", correct: false },
    ],
  },
  {
    question: "How many times will a do-while loop execute if the condition is false?",
    answers: [
      { text: "Zero", correct: true },
      { text: "Once", correct: false },
      { text: "Infinite times", correct: false },
      { text: "Depends on the loop body", correct: false },
    ],
  },
];

const question6 = [
  {
    question: "Which loop executes the code at least once in JavaScript?",
    answers: [
      { text: "for", correct: false },
      { text: "while", correct: false },
      { text: "do-while", correct: true },
      { text: "foreach", correct: false },
    ],
  },
  {
    question: "What is the purpose of the continue statement in a loop?",
    answers: [
      { text: "To exit the loop", correct: false },
      { text: "To skip move to next iteration", correct: true },
      { text: "To restart the loop", correct: false },
      { text: "To print the loop variable", correct: false },
    ],
  },
  {
    question: "Which loop is ideal when the number of iterations is known?",
    answers: [
      { text: "for", correct: true },
      { text: "while", correct: false },
      { text: "do-while", correct: false },
      { text: "foreach", correct: false },
    ],
  },
  {
    question: "What does the forEach method do for arrays in JavaScript?",
   answers: [
      { text: "Adds a new element", correct: false },
      { text: "Iterates over each element", correct: true },
      { text: "Removes the last element", correct: false },
      { text: "Sorts the elements", correct: false },
    ],
  },
];
const question7 = [
  {
    question: "How do you access the value of a property in an object?",
     answers: [
      { text: "object.property", correct: false },
      { text: "object->property", correct: false },
      { text: "object[property]", correct: true },
      { text: "object::property", correct: false },
    ],
  },
  {
    question: "What is the purpose of the delete keyword in JavaScript objects?",
    answers: [
      { text: "To remove a property from an object", correct: true },
      { text: "To add a property to an object", correct: false },
      { text: "To modify the value of a property", correct: false },
      { text: "To create a new object", correct: false },
    ],
  },
  {
    question: "How do you check if a property exists in an object?",
    answers: [
      { text: "object.checkProperty()", correct: false },
      { text: "object.existsProperty()", correct: false },
      { text: "property in object", correct: true },
      { text: "object.hasProperty()", correct: false },
    ],
  },
  {
    question: "What is the result of Object.keys(myObject)?",
     answers: [
      { text: "The values of all properties", correct: false },
      { text: "The number of properties", correct: false },
      { text: "An array of property names", correct: true },
      { text: "The sum of all property values", correct: false },
    ],
  },
];
const question8 = [
  {
    question: "Which of the following represents an arrow function in JavaScript?",
    answers: [
      { text: "function() {}", correct: false },
      { text: "() => {}", correct: true },
      { text: "=> function() {}", correct: false },
      { text: "-> function() {}", correct: false },
    ],
  },
  {
    question: "How does an arrow function handle the this keyword?",
   answers: [
      { text: "ignores this.", correct: false },
      { text: "creates new instance", correct: false },
      { text: "binds lexically.", correct: true },
      { text: "raises error", correct: false },
    ],
  },
  {
    question: "What is the  advantage of arrow functions?",
   answers: [
      { text: "shorter syntax.", correct: false },
      { text: "can be named.", correct: false },
      { text: "access to arguments.", correct: false },
      { text: "automatically binds", correct: true },
    ],
  },
  {
    question: "Which keyword  used to return a value implicitly in an arrow function?",
    answers: [
      { text: "return", correct: false },
      { text: "value", correct: false },
      { text: "result", correct: false },
      { text: "No keyword needed", correct: true },
    ],
  },
];



const quest=document.getElementById('quest')
const answer=document.getElementById('answer')
const nextbtn=document.getElementById('next-btn')
let curin=0;
let score=0;

const start=()=>{
   curin=0;
   score=0;

  nextbtn.innerHTML='Next';
  show();
}
function show(){
  reset()
 let curquest;
  if( f==1){
    curquest=question1[curin];
  }
  else if(f==2){
   curquest=question2[curin];
  }
   else if(f==3){
   curquest=question3[curin];
  }
   else if(f==4){
   curquest=question4[curin];
  } else if(f==5){
   curquest=question5[curin];
  } else if(f==6){
   curquest=question6[curin];
  } else if(f==7){
   curquest=question7[curin];
  }
  else if(f==8){
   curquest=question8[curin];
  }
  let questno=curin+1;
  quest.innerHTML=`${questno} .${curquest.question}`;
 
   curquest.answers.forEach(i =>{
    const bt=document.createElement('button');
    
    bt.innerHTML=i.text;
    bt.classList.add('btn');
    answer.appendChild(bt);
     if(i.correct){
       bt.dataset.correct=i.correct;
     }
     bt.addEventListener("click",select);
    
  })
}
const reset=()=>{
  nextbtn.style.display='none';
  while(answer.firstChild){
    answer.removeChild(answer.firstChild);
  }
}

function select(e){
  const selectedbtn=e.target;
  const isc=selectedbtn.dataset.correct==="true";
  if(isc){
    selectedbtn.classList.add('correct');
    selectedbtn.style.backgroundColor='#9aeabc';
    score++;
  }
  else{
    selectedbtn.classList.add('incorrect');
        selectedbtn.style.backgroundColor='#ff9393';
  }
  Array.from(answer.children).forEach(i=>{
    if(i.dataset.correct==="true"){
    i.classList.add('correct');
    }
    i.disabled=true;
  })
  nextbtn.style.display="block";
  
}
function showscore(){
  reset();
  if(score===question1.length){
    const jsConfetti = new JSConfetti();

    // button.addEventListener('click', () => {
        jsConfetti.addConfetti({
            emojis: ['🌈', '⚡️', '💥', '✨', '💫', '🌸'],
          confettiRadius: 6,
          emojiSize: 50,
          confettiNumber: 120,
        }).then(() => jsConfetti.addConfetti())
    // })
    Swal.fire({
      title: "Good job!",
      width: 300,
      text: `Your score is ${score} / ${question1.length}`,
      icon: "success"
    });
     quest.innerHTML=`your score is ${score} / ${question1.length}`;
    nextbtn.innerHTML="Try again";
    nextbtn.style.display="block";
    nextbtn.style.width="75px";
  }
  else{
  quest.innerHTML=`your score is ${score} / ${question1.length}`;
  nextbtn.innerHTML="Try again";
  nextbtn.style.display="block";
  nextbtn.style.width="75px";
  }
}
function handlenext(){
  curin++;
  if(curin<question1.length){
    show();
  }
  else{
    showscore();
  }
}

nextbtn.addEventListener("click",()=>{
  if(curin<question1.length){
    handlenext();
  }
  else{
    start();
  }
});

start();




</script>
<script>

  let p = document.getElementById('post');
  let new1 = document.getElementById('new1');
  let value1 = document.getElementById('value1');

  p.onclick = () => {
    console.log('hello')
    let struct = document.createElement('div');
    struct.classList.add('struct');
    struct.id='four';
    // new1.appendChild(struct);

    let round = document.createElement('div');
    round.classList.add('round');
     let image = document.createElement('img');
     image.classList.add('round1');
     image.src='data:image/jpeg;base64,' + '<?php echo $image; ?>'


//     <?php
// echo "<img src='data:image/jpeg;base64,$image' width='75' height='75' style='clip-path: circle(50%);'>"?>
    // round.innerHTML = 'N';
round.appendChild(image)
    let name = document.createElement('div');
    name.classList.add('name1');

    let span1 = document.createElement('span');
    span1.innerHTML = '<?php  echo "$name";?>'; 

    let span2 = document.createElement('span');
    span2.innerHTML = 'Just Now';
   name.appendChild(span1);
    name.appendChild(span2);
    let head = document.createElement('div');
    let dot=document.createElement('img');
    dot.classList.add('dot');
    dot.src='dot.png'
  
    head.classList.add('head1');
    head.appendChild(round);
    head.appendChild(name);
    head.appendChild(dot)
     
    let para = document.createElement('div');
    let pa = document.createElement('p');
    // let dot=document.createElement('button');
    // dot.classList.add('dot');
    para.classList.add('para');
    pa.innerHTML = value1.value;
    // para.appendChild(dot);
    para.appendChild(pa);
    let like=document.createElement('div');
    like.classList.add('like')
    let head2=document.createElement('div');
    head2.classList.add('head2');
    let span11=document.createElement('img');
    let span22=document.createElement('img');
    span11.classList.add('icon');
    span22.classList.add('icon');
    span11.src='like.png';
    span22.src='dislike.png';
    head2.appendChild(span11);
    head2.appendChild(span22);
    like.appendChild(head2);
    struct.appendChild(head);
    struct.appendChild(para);
    struct.appendChild(like); // Append the 'head' element to 'struct'
     // Append the 'head' element to 'struct'
  new1.appendChild(struct);
    
  };




</script>
<script>
let btn2=document.getElementById('btn2');


  let w=1;
btn2.onclick = () => {
  let par=document.getElementById('par');
let box = document.querySelectorAll('.struct');
  let ar = Array.from(box);
console.log(ar);
  ar.sort((a, b) => {
    let numA = parseInt(a.id.replace(/\D/g, ''));
    let numB = parseInt(b.id.replace(/\D/g, ''));
    return numA - numB;
  });
  if(w){
    for(let i=ar.length-1;i>=0;i--){
    par.appendChild(ar[i]);
    }
    w=0;
  }
  else{
    for(let i=0;i<=ar.length-1;i++){
      par.appendChild(ar[i]);
      }
    w=1;
    }
  
};
</script>
  <!--<script>  
     let m3=document.getElementById('nav-bar1');
     
    let m4=document.getElementById('msg');
   // let initialScroll = window.scrollY || document.documentElement.scrollTop;
   // window.addEventListener('scroll',function(){
   //  let current=window.scrollY || document.documentElement.scrollTop;
   //  let sd=Math.floor(current-initialScroll);
    // Callback function to handle intersection changes
    function handleIntersection(entries, observer) {
    entries.forEach(entry=>{
        if (entry.isIntersecting) {
         m4.style.position='static'
          console.log('intersection')

        } else {
          console.log('not intersection')
           m4.style.position='relative';
       

        }
      });
    }
    const observer = new IntersectionObserver(handleIntersection);
    if (m3 && m4) {
      observer.observe(m3);
      observer.observe(m4);

      
   }
 </script>-->

 <script>
    let k=document.getElementById('close');
   let m=document.getElementById('msg');
    k.onclick=()=>{
        m.style.display='none';
    }
</script>



</body>
</html>
