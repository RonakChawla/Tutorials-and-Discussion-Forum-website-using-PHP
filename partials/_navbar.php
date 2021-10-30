<?php
session_start();

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <h4 class="text-light">ComputerScienceTutorials</h4>';
        
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo 
                '<div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                    <div class="row mx-2">
                        <a href="forum.php" class="btn btn-success mx-2">Discussion Forum</a>
                        <p class="text-light mx-2" style="margin-top: 7px; margin-bottom: 0;">Welcome '. $_SESSION['useremail']. ' </p>
                        <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
                    </div>
                </div>';
            } else{ 
                echo 
                '<div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
                    <div class="row mx-2">
                        <a href="forum.php" class="btn btn-success mx-2">Discussion Forum</a>
                        <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
                        <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>
                    </div>
                </div>';
            }
    echo '</nav>';

    if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
        echo 
        '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
            <strong>You have successfully registered!</strong> You can now login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>';
    }
?>
