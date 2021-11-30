<?php
      $photos = scandir("images/small-images");
?>

<!DOCTYPE html>
<html lang="ru">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Галерея</title>
      <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
</head>

<body>

      <div class="photo-gallery">
            <div class="container">
                  <div class="row photos">
                        <?php 
                              for($i = 2; $i < count($photos); $i++):?>
                                    <div class="col-sm-6 col-md-4 col-lg-3 item">
                                          <a href="images/big-images/<?= $photos[$i] ?>" data-lightbox="photos">
                                                <img class="img-fluid" src="images/small-images/<?= $photos[$i] ?>">
                                          </a>
                                    </div>
                        <?php
                              endfor;
                        ?>

                        <div class="col-sm-6 col-md-4 col-lg-3 item">
                              <form action="send.php" method="POST" enctype="multipart/form-data">
                                    <div class="custom-file mb-2">
                                          <input type="file" name="photo" class="custom-file-input" id="customFile"
                                                accept="image/*" require>
                                          <label class="custom-file-label" for="customFile">Выбрать файл</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Загрузить</button>
                              </form>
                        </div>


                  </div>
            </div>
      </div>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>