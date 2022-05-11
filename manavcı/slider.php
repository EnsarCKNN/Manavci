<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php
    include("baglantı.php");
    $query = $conn->query("SELECT * FROM slider  ", PDO::FETCH_ASSOC);
  ?>
    <div id="carouselExampleCaptions" class="container carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>

  <?php foreach( $query as $kayit ){ 

if($kayit['id']=='1')
{ ?>
    <div class="carousel-item active">
      <img src="<?php echo $kayit['reim'];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php  echo $kayit['baslık'];?></h5>
        <p><?php  echo $kayit['acıkla'];?></p>
      </div>
    </div>

<?php
}
else {
  ?>
    <div class="carousel-item">
      <img src="<?php echo $kayit['reim'];?>" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php  echo $kayit['baslık'];?></h5>
        <p><?php  echo $kayit['acıkla'];?></p>
      </div>
    </div>


   <?php }  } ?>




  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>