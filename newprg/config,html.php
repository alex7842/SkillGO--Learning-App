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
       echo "Welcome, $name!";
      
        echo " $ema";
      
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
	<title>welcome page</title>
    <link rel="stylesheet" href="welcome.css">
    <link rel="website icon" type="png" href="logo1.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d9f0abd257.js" crossorigin="anonymous"></script>
     <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
   
    <link href='https://fonts.googleapis.com/css?family=Alkalami' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Akaya Telivigala' rel='stylesheet'>    
    <link href='https://fonts.googleapis.com/css?family=Bakbak One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.5.0-beta4/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'  type='text/css'>


    
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

   
</head>
<body>
  

	
  
      <!--  <div  class="nav1">  -->
      <nav class="navbar navbar-expand-lg    navbar-light bg-secondry navbar-custom">
        <img  class="logo"src="skill2.png">
        <br>
  <a class="navbar-brand" href="#" style="font-family: 'Alkalami';font-size: 22px;">Navbar</a>
  <button class="alex22 navbar-toggler" type="button"data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
     
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="new.html">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item active">
        <a class="nav-link disabled" href="">Disabled</a>
      </li>
    </ul>
    <div class="sea">
    <form class="form-inline my-2 my-lg-0">
      <input  id="searchbar"class="form-control mr-sm-2 py-2 rounded-pill mr-1 pr-5 btn-outline-light" type="search" placeholder="Learn Something New " onkeyup="search_course()" aria-label="Search">
      <ul id='list' class="se"style="display: none;">
         <div class="seic" style="display: flex; justify-content: flex-end;">
         
        </div> 
        <div class="li">
        <li class="course"><a style="color:white" href="indexlog.html">C</a></li>
        <li class="course">Java</li>
        <li class="course">C++</li>
        <li class="course">Python</li>
        <li class="course">Python 3.3x</li>
        <li class="course">Mongodb</li>
        <li class="course">React</li>
        <li class="course">Node js</li>
        <li class="course">Javascript</li>
        <li class="course">Django</li>
        <li class="course">Mysql</li>
        <li class="course">Php</li>
        <li class="course">R programming</li>
      </div>
    </ul>
      
       <script src="search.js"></script>
    </form>
  </div>
  <div class="butbox">
    <form class="form-inline my-2 my-lg-0" action="regout.php">
       <button class="btn btn-outline-dark my-2 my-sm-0 " type="submit" style="color:white;font-size:18px; font-family:'Acme'; ">Sign up</button>
     </form>
     <form class="form-inline my-2 my-lg-0" action="logout.php">
     <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" style="color:white;font-size:18px;font-family:'Acme';">Logout</button>
    </form>
  </div>
  <div class="pro">
   <li class="nav-item active">
      <button class="nav-link" data-bs-toggle="modal" data-bs-target="#myModal">Profile</button>
    </li>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Title</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="pr" id="al">
        <?php
echo "<img src='data:image/jpeg;base64,$image' width='100' height='100' style='clip-path: circle(50%);'>";
?>
  echo "Welcome, $name!";
       </div>
       <Lorem>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
       proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</Lorem>
     
      </div>
    </div>
  </div>
</div>
</div>
  <!-- </div> -->
</nav>


<script type="text/javascript">
  window.addEventListener("load", function () {
  document.body.classList.add("loaded");

  // After the loader animation completes, add the 'hidden' class to the loader container
  const loaderWrapper = document.querySelector(".loading-wrapper");
  const loader = document.querySelector(".loading");
  const loaderAnimationDuration = parseFloat(getComputedStyle(loader).animationDuration);
  setTimeout(function () {
    loaderWrapper.classList.add("hidden");
  }, loaderAnimationDuration * 4000); // Hide the loader container after 3 iterations
});
</script>
  
  <div id="back12">
    <div class="des">
      <p style="font-size: 2.3rem;"><span>S</span>kill <span>G</span>o</p>
    </div>

    <div class="last">
    <div class="tex">
    <p class="animate-charcter" id="h2"> Hi <span style="color:#DFFF00"><?php echo $name; ?></span>  welcome to Skill Go learn with us</p>
  </div>

<div class="cent">
  <button class="btn123">Get Started</button>
  </div>

<div class="sep">
  <p class="joinpar">Join the more than 100,000 creators who use Teachable to share their knowledge</p>
 
</div>

  </div>
</div>

<div>
 <!-- <img src="show_image.php?column=image_name&value=image_name_value" alt="Image Name"> -->
 
</div>
<div class="loading-wrapper">
 <div class="loading">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
</div>
  <br>
  
  

  
  
  <h1 style="font-family:'Alkalami';">Welcome<em class="typed-text"> <?php echo $name;?> !</em></h1>

  <br>


<div class="try1">
<div id="paracon1">
  
  
<h2>Upskill your team with <span>Skill Go</span> Business</h2>
<ul id="ul1">
 

<li>Interactive and engaging learning experience.Our platform provides an interactive learning  and assessments to reinforce your learning.</li>
</ul>


<form class="form-inline my-2 my-lg-0">

       <button class="btu1 my-2 my-sm-0" type="submit">Learn More</button>
    

      
       <button class=" btu2 my-2 my-sm-0" type="submit">Get Started</button>
       </form>
     </div>
    
<div class="img1">
   <img  src="https://th.bing.com/th/id/OIP.L--ejAMtEYclobboenz2FgHaE8?w=302&h=201&c=7&r=0&o=5&dpr=1.5&pid=1.7"> 
 
</div>
</div>
<br>
<br>



<div class="try">
  <div class="img2">
    <img src="https://th.bing.com/th/id/OIP.xdJBAgH86B5FFcVp_cBxlgHaE8?w=279&h=187&c=7&r=0&o=5&dpr=1.5&pid=1.7">
</div>
<div id="paracon">
  <h2>Teachers Who 
Lead the Way with <span>Skill Go</span> Business</h2>
<ul id="ul1">
  <br>
 
<li>Learn with Emily Henderson, Kelis, Marques Brownlee, Jessica Kobeissi, and thousands of acclaimed creators eager to share their knowledge with you.</li>
</ul>



<form class="form-inline my-2 my-lg-0">

       <button class="btu1 my-2 my-sm-0" type="submit">Learn More</button>
    

      
       <button class=" btu2 my-2 my-sm-0" type="submit">Get Started</button>
       </form>
     </div>

  </div>
  <br>

  <a class="chat1" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasRight">
    <div class="chat1">
    <img src="chat.jpeg">
  </div></a>

 
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
  <div class="offcanvas-header">
    <h5 id="offcanvasRightLabel">Offcanvas right</h5>
    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
   <p>Still have doubts?<br>Ask any doubts to your personal AI chat bot Doby</p>
     <div id="chat"></div>
    <input type="text" id="userInput" placeholder="Enter your message..." />
    <button onclick="sendMessage()">Send</button>

    <script>
        
           async function sendMessage() {
            const apiKey = "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";
            const modelEngine = "text-davinci-003";
            const chatContainer = document.getElementById("chat");
            const userInput = document.getElementById("userInput");

            const userMessage = userInput.value;
            chatContainer.innerHTML += `<div>User: ${userMessage}</div>`;
            userInput.value = ""; // Clear input field

            const response = await fetch("https://api.openai.com/v1/engines/" + modelEngine + "/completions", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer " + apiKey,
                },
                body: JSON.stringify({
                    prompt: userMessage,
                    max_tokens: 50,
                }),
            });

            const responseData = await response.json();
            const botMessage = responseData.choices[0].text;
            chatContainer.innerHTML += `<div>Bot: ${botMessage}</div>`;
        }
    </script>
  
</div>

 
<h2>Why join Skillgo ?</h2>
<br>
<div class="box1" id="box">
  <h2 class="typed-text">Trusted by over 14,400 great Leading companies </h2>
  <br>
  <br>
<div class="boxf1">
  <div class="child1">
    <img src="icon1.jpeg">
    <p>Why Students Love SkillGo.We here to support you on every step of your creative journey.</p>
  </div>
  <div class="child1">
    <img src="icon2.jpeg">
    <p>And the reason why I'm on SkillGo is to develop a skill. I feel learning.</p>
</div>
</div>
<br>
<div class="boxf2">
  <div class="child2">
   <img src="icon3.jpeg">
    <p>Learn from Creative Experts classes are taught by industry techniques, and professionals.</p>
  </div>
  <div class="child2">
    <img    src="icon4.jpeg">
    <p>Connect with a global community of curious professional idea creatives.800K+
MEMBERS</p>
</div>
</div>
</div>

<!-- <svg width="400" height="400">
   <circle cx="200" cy="200" r="150" fill="#f2f2f2" />
  <path d="M200,200 L200,50 A150,150 0 0,1 330,170 Z" fill="#FF7F00" />
  <path d="M200,200 L330,170 A150,150 0 0,1 334,242 Z" fill="#1F77B4" />
  <path d="M200,200 L334,242 A150,150 0 0,1 200,350 Z" fill="#AEC7E8" />
  <path d="M200,200 L200,350 A150,150 0 0,1 65,240 Z" fill="#FFC500" />
  <path d="M200,200 L65,240 A150,150 0 0,1 200,50 Z" fill="#E377C2" />
</svg> --> 
<br>
<br>
<h3>Performance Tracking</h3>

<br>
<div>
  <div class="bars">
    <div class="barcon">
      <div class="imgtr">
        <img src="cust.jpeg">
      </div>
      <div class="tepa">
     <p style="font-size: 1.7rem;">Tracking the Performance of the Student 24 hours by using Smart Technology for thier endless <strong class="grow"> GROWTH</strong>  learning with us.  </p>
   </div>

    </div>
   
    <div class="barflex">
     
    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>
    <div class="bar4"></div>
   <div class="bar5">
    <div style="display: flex; align-items: flex-start; width:100%; height: 17%; background-color: white; border-radius: 4%; box-shadow: none;">
      <img src="award.png" style="object-fit: contain; width:100%; height: 100%;">
    </div>
  </div>
  
</div>
  </div>
</div>
<br>
<br>
<br>

<h4>Explore our courses? <span class="badge rounded-pill bg-info text-dark badge-custom">New</span></h4>
<br>
 <script>
/*let isYellowBorder = false;

function colo() {
  const heart = document.getElementById('heart');
  
  if (isYellowBorder) {
    heart.classList.remove('yellow-border');
    heart.classList.add('red-border');
  } else {
    heart.classList.remove('red-border');
    heart.classList.add('yellow-border');
  }
  
  isYellowBorder = !isYellowBorder;
}*/
let heartStates = {};
let isYellowBorder = false;
function colo(heartId) {
const heart = document.getElementById(heartId);
  
   if (isYellowBorder) {
    heart.classList.remove('yellow-border');
    heart.classList.add('red-border');
  } else {
    heart.classList.remove('red-border');
    heart.classList.add('yellow-border');
  }
  
  isYellowBorder = !isYellowBorder;
 }
</script>
 
<div class="scroll">

 <!--  <div class="s1">
   <img src="award.png" class="s2">
  </div>
  -->
  <section>
  <div class="s1">
    <div class="card " style="width: 18rem;height: 29rem;">
  <img src="html.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title" id="pyfor"style="font-family: ">Build Responsive Websites with HTML and CSS</p>
    <bold style="font-family:verdana;">Instructor:Jose Portilla</bold>
   <p style="font-family: verdana; font-size:15px;">Total hours:16 </p>
    <img src="stars.jpg" style="width:43%; height: 8%; object-fit: contain;">
   <p style="font-family: verdana;font-size:15px;">8043 students</p>

 
   <button href="#" class="btn button  btn-primary btn-group-toggle position-relative">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    JOIN
  </div> 
 
     <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"> 
    Free
    <span class="visually-hidden">unread messages</span>
  </span>
   </button>

  <button class="hi" onclick="colo('heart41-inner')">
    <div id="heart41" class="heart1">

    <div id="heart41-inner" class="heart" style="">
      
    </div>
  </div>
  
 </button>
 

  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="java.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    
    <p class="card-title" id="pyfor"style="font-family: ">Java Core Programming with Data Structures</p>
    <bold style="font-family:verdana;">Instructor:Alex S</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:19 </small></p>
   <p style="font-family:verdana; font-size:15px;"><bold style="background-color: yellow;">₹1900</bold> <small class="smdis"style="text-decoration: line-through solid red; font-weight: bold;">₹3,199</small>   86% off</p>
   <br>
   <button href="#" class="btn button btn-primary btn-group-toggle">
    
   <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    BUY
  </div> 
   </button>
  <button class="hi" onclick="colo('heart31-inner')">
    <div id="heart31" class="heart1">

    <div id="heart31-inner" class="heart" style="">
      
    </div>
  </div>
  </button> 
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="php1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
     <p class="card-title" id="pyfor"style="font-family: ">PHP for Beginners - Become Master at PHP</p>
    <bold style="font-family:verdana;">Instructor:Dev Narain</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:12 </small></p>
   <img src="stars.jpg" style="width:35%; height: 6%; object-fit: contain;">
   <p style="font-family:verdana;font-size:15px;">7000 students</p>
   <button href="#" class="btn button btn-primary position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    JOIN
  </div> 
     <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    Free
    <span class="visually-hidden">unread messages</span>
  </span>
   </button>
  <button class="hi" onclick="colo('heart1-inner')">
    <div id="heart1" class="heart1">

    <div id="heart1-inner" class="heart" style="">
      
    </div>
  </div>
  </button> 
    
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="python1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title" id="pyfor"style="font-family: ">Automate the Boring Stuff with Python Programming</p>
    <bold style="font-family:verdana;">Instructor:Akhil Alan</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:22 </small></p>
   <p style="font-family:verdana; font-size:15px;"><bold style="background-color: yellow;">₹1199</bold> <small class="smdis"style="text-decoration: line-through solid red; font-weight: bold;">₹2,000</small>   46% off</p>
   <br>
   <button href="#" class="btn  button btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    BUY
  </div> 
   </button>
  <button class="hi" onclick="colo('heart2-inner')">
    <div id="heart2" class="heart1">

    <div id="heart2-inner" class="heart" style="">
      
    </div>
  </div>
  </button> 
 
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="javascr.jpeg" class="card-img-top" alt="...">
  <div class="card-body">

   <p class="card-title" id="pyfor"style="font-family: ">The Complete JavaScript From Zero to Expert!</p>
    <bold style="font-family:verdana;">Instructor:Dr Angela</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:11 </small></p>
   <p style="font-family:verdana; font-size:15px;"><bold style="background-color: yellow;">₹2000</bold> <small class="smdis"style="text-decoration: line-through solid red; font-weight: bold;">₹4,799</small>   52% off</p>
   <br>
   <button href="#" class="btn button btn-primary">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    BUY
  </div> 
   </button>

  <button class="hi" onclick="colo('heart3-inner')">
    <div id="heart3" class="heart1">

    <div id="heart3-inner" class="heart" style="">
      
    </div>
  </div>
  </button> 
  </div>
</div>
</div>
</section>
<section>
<div class="s1">
<div class="card" style="width: 18rem; height: 29rem;">
  <img src="game.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-title" id="pyfor"style="font-family: ">Ultimate Guide to Game Development with Unity</p>
    <bold style="font-family:verdana;">Instructor:Jose Portilla</bold>
   <p> <small style="font-family: verdana; font-size:15px;">Total hours:8 </small></p>
 
   <img src="stars.jpg" style="width:43%; height: 8%; object-fit: contain;">
   <p style="font-family: verdana;font-size:15px;">2170 students</p>
 
   <button href="#" class="btn  button btn-primary position-relative">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
  </svg>
   <div class="text">
    Join
  </div> 
     <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
    Free
    <span class="visually-hidden">unread messages</span>
  </span>
   </button>
   <button class="hi" onclick="colo('heart4-inner')">
    <div id="heart4" class="heart1">

    <div id="heart4-inner" class="heart" >
      
    </div>
  </div>
  </button> 
  </div>
</div>
</div>
 
</div>
</section>
<br>
<br>
<section>
  <h3>Free Resources</h3>
  <br>
  <div class="video1">
    <div class="vid">
     <p style="font-size: 34px;">Check Out Our latest Demo  <i class="fa fa-brands fa-youtube fa-fade hii" style="color: #fd0808;"></i> video for an No code development which covers from scratch to advance by Mr.Alan</p>
   </div>
    <div class="vid1" style="margin-left: 5%;">
      
    <iframe width="400" height="300"
src="https://www.youtube.com/embed/yFAshHZX6jE">

</iframe>


    </div>
  </div>
  <div id="je">
    
    <img src="https://th.bing.com/th/id/OIP.xdJBAgH86B5FFcVp_cBxlgHaE8?w=279&h=187&c=7&r=0&o=5&dpr=1.5&pid=1.7">
  </div>
  <button onclick="gen()">click</button>
</section>



 <script>
  function gen(){
    const el=document.getElementById('je');


    html2pdf()
    .from(el)
    .save();
  }
</script>
 
 



 
<a href="alex.pdf" download="alex.pdf">
  Click here to download the image
</a>
  <!--  <h1>Live Increasing Input Value:</h1>
  <label for="startValue">Starting Value:</label>
  <input type="number" id="startValue" value="0">
  <p id="counter">0</p>

  <script>
    let currentValue = 0;
    const counterElement = document.getElementById("counter");
    const startValueInput = document.getElementById("startValue");

    function updateCounter() {
      // Increase the value by 1 on each update
      currentValue++;
      // Update the content of the HTML element
      counterElement.textContent = currentValue;
    }

    // Update the counter every 1000ms (1 second)
    setInterval(updateCounter, 200);

    // Listen for changes in the input value
    startValueInput.addEventListener("input", function() {
      // Update the currentValue based on the input value
      currentValue = parseInt(startValueInput.value) || 0;
      // Update the content of the HTML element
      counterElement.textContent = currentValue;
    });
  </script>  -->


   <h5>Made with <i class="fa fa-heart fa-bounce" style="color: #f91521;"></i> in India</h5> 
   <br>
 
     <footer class="footer">

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

        <div class="footer-link-box hello">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Community</p>
            </li>

            <li>
              <a href="#" class="footer-link">About</a>
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
              <a href="#" class="footer-link">Home Page</a>
            </li>

            <li>
              <a href="home.html" class="footer-link">About Us</a>
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

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          © Copyright <span style="color:  hsl(9, 100%, 62%);">SkillGo </span>Tirunelveli. All Rights Reserved.
        </p>

      </div>
    </div>

  </footer>
 <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 260"> 
<path fill="#0099ff" fill-opacity="1" d="M0,64L1440,224L1440,320L0,320Z"></path>
</svg>  -->



	

</div> 


</body>
</html>