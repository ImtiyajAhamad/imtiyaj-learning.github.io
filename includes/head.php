<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <?php include "links.html";

  ?>

  <title><?php echo $pagetitle; ?></title>
</head>

<body>
  <?php

  // 

  // user logged in checking

  $login = '';
  $name = '';
  $role = 0;
  
  session_start();
  


  if (isset($_SESSION['usern']))  {
    $name = $_SESSION['usern']; 
  }

  if (isset( $_SESSION['userrole'])) {
    $role =  $_SESSION['userrole'];
  }

  if (isset( $_SESSION['userid'] )) {
    $session_id =  $_SESSION['userid'] ;
  }









  if (!isset($_SESSION['loginsts'])  || $_SESSION['loginsts'] == !true) { ?>

    <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light breadcrumb">
    <a class="navbar-brand" href="index.php">
    <i class="d-inline-block align-top fas fa-book-reader"> </i>
    E-learning
  </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>

          <li class="nav-item">
          <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="login.php">Login</a></li>
                <li class="breadcrumb-item"><a href="signup.php">Signup</a></li>
              </ol>
          </li>

         
          


         


        </ul>

      </div>
    </nav>
   <?php  }

    else{

    if($role == 2){
    ?>

    <nav class="navbar navbar-expand-lg  navbar-light fixed-top bg-light breadcrumb">
    <a class="navbar-brand" href="index.php">
    <i class="d-inline-block align-top fas fa-book-reader"> </i>
    E-learning
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="courses.php">Courses</a>
          </li>

        

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Us</a>
          </li>

          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <a class="dropdown-item" href="useraccount.php?fetchuid=<?php echo $_SESSION['userid']; ?>">Your Account</a>
              <a class="dropdown-item" href="useraccount.php?fetchuid=<?php echo $_SESSION['userid']; ?>"><P><h4><?php echo  $_SESSION['usern'] ?></h4></P></a>


              <div class="dropdown-divider"></div>
              
             
              

                <a class="dropdown-item btn btn-info" href="http://localhost/e-learning/logout.php">logout</a>
              
              </a>
           </div>
          </li>



        </ul>

      </div>
    </nav>
  <?php  }elseif($role == 1){ ?>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light breadcrumb mb-10">
<a class="navbar-brand" href="index.php">
    <i class="d-inline-block align-top fas fa-book-reader"> </i>
    E-learning
  </a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="courses.php">Courses</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="adminpage.php">Admin Panel</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="messegepanel.php">Messeges</a>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Account
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        

        <a class="btn btn-info dropdown-item" href="http://localhost/e-learning/logout.php">logout</a>
      
        <a class="dropdown-item" href="useraccount.php?fetchuid=<?php echo $_SESSION['userid']; ?>">Your Account</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="useraccount.php?fetchuid=<?php echo $_SESSION['userid']; ?>" class="text-capitalize">
         <p> <?php  
           print_r($_SESSION['usern'] )  ;  ?></p>
        </a>
      </div>
    </li>

  

    



  </ul>

</div>
</nav>




 <?php } 
  
  }  ?>
