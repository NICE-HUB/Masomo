<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
 
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "masomoproject";

 $data = mysqli_connect($host, $user, $password, $db);

 $sql = "SELECT * FROM course";
 $result2 = mysqli_query ($data,$sql);
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul class="grid-list">
            <?php
            while($info = $result2 -> fetch_assoc())
            {
            ?>

            <li>
              <div class="course-card">

                <figure class="card-banner img-holder" style="--width: 370; --height: 220;">
                  <img src="<?php echo "{$info['image']}" ?>" width="370" height="220" loading="lazy"
                    alt="Build Responsive Real- World Websites with HTML and CSS" class="img-cover">
                </figure>

                <div class="abs-badge">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <span class="span"><?php echo "{$info['weeks']}" ?></span>
                </div>

                <div class="card-content">

                  <span class="badge"><?php echo "{$info['level']}" ?></span>

                  <h3 class="h3">
                    <a href="#" class="card-title"><?php echo "{$info['description']}" ?></a>
                  </h3>

                  <div class="wrapper">

                    <div class="rating-wrapper">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                    <p class="rating-text">(5.0/7 Rating)</p>

                  </div>

                  <data class="price" value="29"><?php echo "{$info['cost']}" ?></data>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <ion-icon name="library-outline" aria-hidden="true"></ion-icon>

                      <span class="span">8 Lessons</span>
                    </li>

                    <li class="card-meta-item">
                      <ion-icon name="people-outline" aria-hidden="true"></ion-icon>

                      <span class="span">20 Students</span>
                    </li>

                  </ul>

                </div>

              </div>
            </li>
            <?php
            }
            ?>
          </ul>
</body>
</html>