<?php 
  //Connection to youtube Data Api:
  include ('apiConn.php');
 

//Function to insert videos'data on the table:
    function insertTable($list, $category){
      
        if(!empty($list->items)){
  
            for($x=0; $x<15; $x++){
                
                  if(isset($list->items[$x]->snippet->resourceId->videoId)){
          
                echo "<tr>";
                echo '<td>'.$list->items[$x]->snippet->publishedAt.'</td>';
                echo '<td>'.$list->items[$x]->snippet->title.'</td>';
                echo '<td>'.$list->items[$x]->snippet->resourceId->videoId.'</td>';
                echo '<td>'.$category.'</td>';

                ?>
                <td class="btn btn-danger">Delete</td>
                </tr>
             <?php   
              }
            }
      
          }else{
            echo '<p class="error">'.$apiError.'</p>';
          }
    }

?>



<!-- main page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>   
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- link icon in head -->
    <link rel="apple-touch-icon" type="image/png" sizes="16x16" href="../assets/ventilateur.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/ventilateur.png">
</head>
<body>

<!-- navbar -->
<div class="topnav">
  <a href="index.php"><img src="./assets/ventilateur.png" width="30" alt="logo"> <b>BesTube</b></a>
  <a href="index.php">Home</a>
  <a href="./shows/movies.php">Movies</a>
  <a href="./shows/tvshows.php">TV Shows</a>
  <div class="dropdown">
  <button class="dropbtn  dropdown-toggle" role="button" id="dropdownMenuLink" aria-expanded="false">
    Dropdown link
</button>
    <ul class="dropdown-content dropdown-menu">
    <li><a class="dropdown-item" href="catalog.php?id=">Sport</a></li>
    <li><a class="dropdown-item" href="#">Music</a></li>
    <li><a class="dropdown-item" href="#">Cooking</a></li>
    <li><a class="dropdown-item" href="#">Movies</a></li>
    </ul>
  </div>
  <div class="dropdown">
    <button class="dropbtn">My account</button>
    <div class="dropdown-content">
      <!-- <a href="sign.php">Log in</a> -->
      <a href="./logout.php">Log out</a>
    </div>
  </div>
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search..." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<div class="container pt-5">
        <div class="row justify-content-center">
        <table class="table table-hover table-dark table-striped">
        <thead>
            <tr>


                <th scope="col">Date</th>
                <th scope="col">Title</th>
                <th scope="col">Video ID</th>
                <th scope="col">Category</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
           <?php
           insertTable($videolist, $category1);
           insertTable($videolistMusic, $category2);
           insertTable($videolistCooking, $category3);
           insertTable($videolistTrailer, $category4);
            ?>
      </table>
    </div>
        </div>





<footer class="footer p-2">
  <p>Any questions? Contact us 1-866-579-7172</p>
  <div class="footer-cols">
    <ul>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Ways To Watch</a></li>
      <li><a href="#">Getflix Originals</a></li>
    </ul>
    <ul>
      <li><a href="#">Help Center</a></li>
      <li><a href="#">Terms Of Use</a></li>
      <li><a href="#">Contact Us</a></li>
    </ul>
    <ul>
      <li><a href="#">Account</a></li>
      <li><a href="#">Privacy</a></li>
      <li><a href="#">Speed Test</a></li>
    </ul>
    <ul>
      <li><a href="#">Media Center</a></li>
      <li><a href="#">Cookie Preferences</a></li>
      <li><a href="#">Legal Notices</a></li>
    </ul>
  </div>
</footer>
<!-- link script js -->
<script src="myscript.js"></script>
</body>
</html>