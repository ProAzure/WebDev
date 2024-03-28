<?php  
$conn=mysqli_connect('localhost','root','','notes');
if($conn){
  echo "the connection done successfully";
}else{
  echo "something went wrong";
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes --Notes taking Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-white">
   <header class="mt-2 mx-4">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Notes</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   </header>
   <!-- header ends here  -->
   <?php 
   $title=$_GET['noteTitle'];
    $desc=$_GET['noteDesc'];
    $Sql="INSERT INTO `user`(`title`, `description`) VALUES ('$title','$desc')";
    $result=mysqli_query($conn,$Sql);
    if($result){
      echo "The query is inserted successfully";
    }
   ?>
    <div class="container text-white">
        <form method="GET">
            <div class="mb-3">
              <label for="notesTitle" class="form-label">Title</label>
              <input type="text" class="form-control" name="noteTitle" id="notesTitle" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="noteDesc" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
            <button type="submit" class="btn btn-primary">Add note</button>
          </form>
    </div>
    <div class="container text-white mt-3">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Note</th>
      <th scope="col">Description </th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * FROM `user`";
    $result=mysqli_query($conn,$sql);
    $sno=1;
    while($data=mysqli_fetch_assoc($result)){

      echo "<tr>
      <th>".$sno."</th>
      <td>".$data['title']."</td>
      <td>".$data['description']."</td>
      <td><button>Edit</button> <button>Delete</button></td>
    </tr>";
    $sno=$sno+1;
;
    }
    ?>
  
  </tbody>
</table>
    </div>

  
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>