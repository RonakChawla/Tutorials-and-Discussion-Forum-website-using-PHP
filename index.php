<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>ComputerScienceTutorials | Home</title>

    <style>
        a:hover{
            text-decoration: none;
        }
    </style>
</head>

<body style="height: 100vh;">
    <?php 
        include 'partials/_dbcon.php';
        include 'partials/_navbar.php';
    ?>
    
    <div class="container my-4" id="ques">
        <h2 class="text-center my-4">ComputerScienceTutorials | Subjects</h2>
        <div class="row my-4">

         <?php 
         $sql = "SELECT * FROM `subjects`"; 
         $result = mysqli_query($con, $sql);
         while($row = mysqli_fetch_assoc($result)){
          $id = $row['subject_id'];
          $sub = $row['subject_name'];
          echo 
            '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="images/'. $sub .'.png" height="200px" width="50px" class="card-img-top" alt="image for this category">
                    <div class="card-body">
                        <h5 class="card-title"><a class="text-dark" href="subject.php?subjectid=' . $id . '">' . $sub . '</a></h5>
                    </div>
                </div>
            </div>';
         } 
         ?>

        </div>
    </div>

    <div class="footer bg-dark">
        <h1 class="text-light mx-4 mb-0">&copy; Ronak Chawla <?php echo date("Y"); ?></h1>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>