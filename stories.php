<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stories website</title>
    <!-- bootstrap cs cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include './nav/connect.php'; ?>
    <?php include './nav/header.php'; ?>

    <!-- php code -->
    <?php
    $id=$_GET['story_id'];
    $sql="select * from `topics` where topic_id=$id";
    $result=mysqli_query($con,$sql);
    while($row=mysqli_fetch_assoc($result)){
              $topic_name=$row['topic_name'];
              $topic_desc=$row['topic_desc'];
           
              $topic_image=$row['topic_image'];
              
    }
    ?>

   <div class="container mt-3 mb-3">
   <div class="jumbotron jumbotron-fluid bg-light rounded">
            <div class="container">
                <h1 class="display-4 text-center"><?php echo $topic_name ?></h1></h1>
                <img class="image-fluid mx-auto d-block" src="<?php echo $topic_image ?>" alt="">
                <p class="lead mt-3"><?php echo $topic_desc ?></p>
                
            </div>
        </div>
   </div>

   <div class="contatiner-fluid">
   <h2 class="text-center display-4 mb-4">Thank You For Your Time ❤</h2>
   </div>

    <?php include './nav/footer.php'; ?>

</body>

</html>