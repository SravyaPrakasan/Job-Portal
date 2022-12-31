<!DOCTYPE html>
<html lang="en">
  <?php include 'config.php'?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style3.css">
    <title>Career Page</title>
</head>
<body style="margin:0; padding:0;">
<div class="row mr=0">
   <div class="col-12 container-fluid">
      <div class="jumbotron jumbotron-fluid" style="background-image:url('images\tyler-franta-iusJ25iYu1c-unsplash.jpg');background-size:cover;">
        <div class="container">
          <h1 class="display-4">Job Portal</h1>
          <p class="lead">Best jobs available matching your skills</p>
        </div>
      </div>
   </div>
</div>

<div class="row m-0">
  <?php
  $sql="SELECT cname,position,Jdesc,CTC,skills from pjobs";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows>0){
    while($rows=$result->fetch_assoc()){
      echo'
      <div class="col-md-4">
         <div class="jobs">
         <h3 style="text-align: center;">' .$rows['position'].'</h3>
         <h4 style="text-align:center;">' .$rows['cname'].'</h4>
         <p style="color:black;text-align:justify;">'.$rows['Jdesc'].'</p>
         <p style="color:black;><b>Skills Required:</b>'.$rows['skills'].'</p>
         <p style="color:black;><b>CTC:</b>'.$rows['CTC'].'</p>
         <a href="apply.php">
         <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Apply Now
         </button>
         </a>
         </div>
      </div>';
    }
  }
  else{
    echo"";
  }
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>