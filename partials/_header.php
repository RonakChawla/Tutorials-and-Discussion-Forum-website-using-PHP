<?php
session_start();

echo 
'<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h4 class="text-light">ComputerScienceTutorials</h4>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
        <div class="row mx-2">';
            if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
                echo 
                '<form class="form-inline my-2 my-lg-0" method="get" action="search.php">
                    <input class="form-control mr-sm-2" name="search" type="search" actiion="search.php" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                    <p class="text-light my-0 mx-2">Welcome '. $_SESSION['useremail']. ' </p>
                    <a href="partials/_logout.php" class="btn btn-outline-success ml-2">Logout</a>
                </form>';
            } else{ 
                echo 
                '<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
                <button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
            }
echo 
        '</div>
    </div>
</nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

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