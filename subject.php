<?php include 'partials/_dbcon.php';
  if (isset($_GET["a"])) {
    $article_name = $_GET["a"];
  } else {
    $article_name = "home";
  }

  $id = $_GET['subjectid'];
  $sql = "SELECT * FROM `subjects` WHERE subject_id=$id"; 
  $result = mysqli_query($con, $sql);
  while($row = mysqli_fetch_assoc($result)){
    $subname = $row['subject_name'];
    $suburl = $row['subject_url'];
  }
  
  $ccontent = "articles/".$suburl."/chapters.html";
  $acontent = "articles/".$suburl."/".$article_name."/index.html";
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="style.css?t=<?php echo time() ?>">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <title><?php echo $subname; ?> | <?php echo $article_name; ?></title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <h4 class="text-light">ComputerScienceTutorials</h4>';

    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
      <div class="row mx-2">
        <a href="forum.php" class="btn btn-success mx-2">Discussion Forum</a>
      </div>
    </div>
  </nav>

  <div class="body">
    <div class="left">
      <div class="panel-wrapper">
        <?php if (file_exists($ccontent)) { include $ccontent; } ?>
      </div>
    </div>
    <div class="content">
      <?php
        if (file_exists($acontent)) {
          include $acontent;
        } else {
          include "partials/_404.php";
        }
      ?>
    </div>
  </div>

  <div class="footer bg-dark d-flex justify-content-between">
    <script>
      (function() {
        function escapeRegex(string) {
          return string.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&');
        }

        let links = document.getElementsByTagName("a");
        for (let i = 0; i < links.length; i++) {
          let hrefRegExp = new RegExp(escapeRegex(links[i].getAttribute("href")));
          if (hrefRegExp.test(location.href) && !links[i].classList.contains("selected")) {
            links[i].className += " selected";
          } else {
            links[i].className = links[i].className.replace(/ selected/gi, '');
          }
        }
      })();
    </script>

    <style>
      .selected {
        font-weight: bold;
        color: green;
      }
    </style>
        
    <h1 class="text-light mb-0 mx-4">&copy; Ronak Chawla <?php echo date("Y"); ?></h1>

    <div>
      <a href="/computersciencetutorials/index.php" class="btn btn-success mx-4 mt-1 mb-0 align-right">Home</a>
    </div>
  </div>

  <script>
    (function() {
      var v = document.getElementsByClassName("panel-wrapper")[0];
      v.style.height = (window.innerHeight - 88) + "px";
    })();
  </script>
</body>

</html>