<?php
include 'new.php';
 session_start();
if (isset($_GET['username'])) {
    // Get the username from the URL parameter
    $name = $_GET['username'];
    echo "<script>
        // Store the name variable in local storage
        localStorage.setItem('username', '" . addslashes($name) . "');
      </script>";
   

    // Retrieve the email and image based on the username
    $query = "SELECT * FROM base1 WHERE name = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $name);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        $image = $row["image"];
        $ema = $row["email"];
        // Now $image and $ema contain the user's image and email respectively
    } else {
        echo "User not found in the database.";
    }
} else {
    echo "Username not provided in the URL.";
}
?> 




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/d9f0abd257.js" crossorigin="anonymous"></script> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="website icon" type="png" href="logo1.png">
    <script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <style>
    body {
      font-family: 'Arial', sans-serif;
     /* text-align: center;*/
      background-color: #f3f3f3;
    }
    h2{
      font-family: 'Epilogue', sans-serif;
  
  font-size: 28px;
    }

    #certificate {
      width: 600px;
      margin: 50px auto;
      padding: 20px;
      border: 8px solid black;
      background-color: #fff;
       text-align: center;
      position: relative;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }


    #signature {
      position: absolute;
      bottom:10px;
      font-weight: bold;
      right: -55px;
      width: 210px;
      height: auto;
    }
    #pa {
      position: absolute;
      bottom: 40px;
      right: 30px;
      width: 50px;
    }

    #certificate h1 {
      color: black;
    }

    #certificate h2 {
      color: #333;
    }

    #certificate h3 {
      color: #27ae60;
    }

    #certificate p {
      color: #555;
    }

    #downloadBtn {
      margin-top: 4px;
      padding: 10px 20px;
      font-size: 16px;
      margin-left: 29%;
      cursor: pointer;
      background-color: #27ae60;
      color: #fff;
      border: none;
      border-radius: 5px;
    }

    #shareBtn {
      margin-top: 4px;
      padding: 10px 20px;
      font-size: 16px;
      margin-left: 8%;
      cursor: pointer;
      background-color: #27ae60;
      color: #fff;
      border: none;
      border-radius: 5px;
    }
    footer {
  background-color:#85929E;
  padding: 40px 0;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
}

.newsletter {
  max-width: 400px;
}

.newsletter h3 {
  font-size: 24px;
  margin-bottom: 10px;
}

.newsletter p {
  font-size: 16px;
  color:black;
  margin-bottom: 20px;
}

.newsletter form input[type="email"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.newsletter form button {
  padding: 10px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.side-image {
  width:45%;
  height:70%;
}
.back{
  text-decoration: none;
  color: black;
  cursor: pointer;
}

.side-image img {
  width: 100%;
  height: auto;
}

@media only screen and (max-width: 850px){
  #certificate{
      width: 500px;

      padding: 8px;
      border: 8px solid black;
      background-color: #fff;
      position: relative;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

  }
   #downloadBtn {
      
      margin-left: 2%;
}
.footer-content {
    flex-direction: column-reverse;
    text-align: center;
  }

  .newsletter form input[type="email"] {
    width: calc(100% - 20px);
    max-width: 80%;
  }
  </style>
</head>
<body>
<a class="back" href="config3.php"  style="font-size: 20px"><i class="fa-solid fa-lg fa-arrow-left" style="color:black"></i> Back</a>

<div id="certificate">

 
  <h1>Skill Go Certification of Achievement</h1> <i class="fa-solid fa-star fa-2x" style="color: #FFD43B;"></i> <i class="fa-solid  fa-2x fa-star" style="color: #FFD43B;"></i> <i class="fa-solid fa-2x fa-star" style="color: #FFD43B;"></i>
  <p>This is to certify that</p>
  <h2 id="recipientName"> <?php  
           echo "$name";
           ?></h2>
  <p>has successfully completed the course on</p>
  <h3>Advanced Javascript Completion</h3>
  <p>Issued on: <span id="issueDate">February 5, 2024</span></p>
  <p id="pa">Signature</p>
  <p id="signature">Alex S</p>
</div>
<div style="display: flex;">
<button id="downloadBtn" onclick="downloadCertificate()">Download Certificate as PDF</button>
<button id="shareBtn" onclick="twitt()">Share Certificate <i class="fa-brands fa-twitter"></i></button>
</div>
<br>
<br>
<footer>
  <div class="footer-content">
    <div class="newsletter">
      <h3>Subscribe to Our Newsletter</h3>
      <p>Stay up to date with our latest news and promotions.</p>
      <form action="#" method="post">
        <input type="email" name="email" placeholder="Enter your email address" required>
        <button type="submit">Subscribe</button>
      </form>
    </div>
    <div class="side-image">
      <img src="email.jpg" alt="Newsletter Image">
    </div>
  </div>
</footer>

<script>
 function twitt() {
        let pe = document.getElementById("recipientName");
      
        window.open(
          "https://twitter.com/intent/tweet?text=" +"Hello I am "+
            pe.innerText +
            " Completed " +
            "SkillGo Certifications",
          "Tweet Window",
          "width=600,height=400",
        );
      }
    </script>
<script>
  let cur = new Date(); // Set the date to February 5, 2024
let options = {month: 'long', day: 'numeric', year: 'numeric' };
let formattedDate = cur.toLocaleDateString('en-US', options);
 document.getElementById('issueDate').innerText =formattedDate;

console.log(formattedDate); // Output: Tuesday, February 5, 2024

</script>



<script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
<script>
  function downloadCertificate() {
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
      text: `Successfully Completed`,
      icon: "success"
    });
    const certificate = document.getElementById('certificate');
    const recipientName = document.getElementById('recipientName').innerText;
    const issueDate = document.getElementById('issueDate').innerText;

    // Add recipient name and issue date to the certificate
    document.getElementById('recipientName').innerText = 'John Doe';
    document.getElementById('issueDate').innerText =issueDate;

    // Create PDF
    html2pdf(certificate);

    // Restore original values
    document.getElementById('recipientName').innerText = recipientName;
    document.getElementById('issueDate').innerText = issueDate;
  }
</script>


</body>
</html>
