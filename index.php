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
    <!-- <h1 class="text-center">hello</h1> -->
    <div class="container-fluid slider">
        <?php include './nav/header.php'; ?>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/banner1.jpg" class="d-block w-100" alt="...">
                </div>
                
            </div>
         
        </div>
    </div>


    <!-- cards -->
    <div class="container">
        <h1 class="text-center Feature mb-5" id="story">Features stories</h1>
        <div class="row">
            <?php
          $sql="select * from `topics`";
          $result=mysqli_query($con,$sql);
          if($result){
            while($row=mysqli_fetch_assoc($result)){
              $id=$row['topic_id'];
              $topic_image=$row['topic_image'];
              $topic_name=$row['topic_name'];
              $topic_desc=$row['topic_desc'];
              echo '<div class="col-md-3 col-sm-6 mb-3">
              <div class="card" style="width: 18rem;">
                  <img src='.$topic_image.' class="card-img-top" alt="...">
                  <div class="card-body">
                      <h5 class="card-title">'.$topic_name.'</h5>
                      <p class="card-text">'.substr($topic_desc,0,50).'.......</p>
                      <a href="stories.php?story_id='.$id.'" class="btn btn-primary">Continue reading</a>
                  </div>
              </div>
          </div>';
            }
          }
          ?>
          
    
        </div>
    </div>
    <?php include './nav/footer.php'; ?>
</body>

</html>