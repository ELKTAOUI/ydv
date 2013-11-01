<?php
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>YDV videos PHP class</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://getbootstrap.com/assets/js/html5shiv.jsjs"></script>
      <script src="http://getbootstrap.com/assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="#">Download on Github</a></li>
          <!--
          <li><a href="#">About</a></li>
          <li><a href="#">Contact</a></li>
          -->
        </ul>
        <h3 class="text-muted">YDV</h3>
      </div>

      <div class="jumbotron">

        <h1>YDV documentation</h1>
        <p class="lead"> get Youtube , Dailymotion , Vimeo videos with the YDV php class </p>
        <p style="text-align: left">
        <span>Example : </span><br>
        <code>
               require 'ydv.php'; <br>
               $video = new ydv('VIDEO_ID','VIDEO_TYPE');<br>
               echo $video->getTitle();<br>
               echo $video->getUrl();<br>
               echo $video->getPic();<br>
               echo $video->getDescription();<br>
               echo $video->getUploadDate();<br>
               echo $video->getDuration();<br>
               echo $video->getViews();<br>
               echo $video->getLikes();<br>
               echo $video->getUser();
        </code>
        </p>


          <?php

            require 'ydv.php';

         ?>

      </div>

      <div class="row marketing">
        <div class="col-lg-4">
          <h4>Youtube</h4>
          <code>
          $youtube = new ydv('Vkw_8u0UgOU');<br>
          echo $youtube->getTitle();
          </code>
          <br><span>Result</span><br>
          <p>
              <?php
                 $youtube = new ydv('Vkw_8u0UgOU');
                 echo $youtube->getTitle();
              ?>
          </p>
        </div>

        <div class="col-lg-4">
          <h4>Dailymotion</h4>
          <code>
          $dailymotion = new ydv('x16diey','dailymotion');<br>
          echo $dailymotion->getTitle();
          </code>
          <br><span>Result</span><br>
          <p>
             <?php
                $dailymotion = new ydv('x16diey','dailymotion');
                echo $dailymotion->getTitle();
             ?>
          </p>
        </div>

        <div class="col-lg-4">
          <h4>Vimeo</h4>
          <code>
          $vimeo = new ydv('77700547','vimeo'); <br>
          echo $vimeo->getTitle();
          </code>
          <br><span>Result</span><br>
          <p>
            <?php
               $vimeo = new ydv('77700547','vimeo');
               echo $vimeo->getTitle();
            ?>
          </p>
        </div>

         <div class="col-lg-12">
             <h3>Functions : </h3>
             <div>
                <?php

                echo "<h4>getUrl()</h4>";
                echo $youtube->getUrl()."<br>";
                echo $dailymotion->getUrl()."<br>";
                echo $vimeo->getUrl()."<br>";

                echo "<h4>getPic()</h4>";
                echo $youtube->getPic()."<br>";
                echo $dailymotion->getPic()."<br>";
                echo $vimeo->getPic()."<br>";

                echo "<h4>getDescription()</h4>";
                echo $youtube->getDescription()."<br>";
                echo $dailymotion->getDescription()."<br>";
                echo $vimeo->getDescription()."<br>";

                echo "<h4>getUploadDate()</h4>";
                echo $youtube->getUploadDate()."<br>";
                echo $dailymotion->getUploadDate()."<br>";
                echo $vimeo->getUploadDate()."<br>";

                echo "<h4>getDuration()</h4>";
                echo $youtube->getDuration()."<br>";
                echo $dailymotion->getDuration()."<br>";
                echo $vimeo->getDuration()."<br>";

                echo "<h4>getViews()</h4>";
                echo $youtube->getViews()."<br>";
                echo $dailymotion->getViews()."<br>";
                echo $vimeo->getViews()."<br>";

                echo "<h4>getLikes()</h4>";
                echo $youtube->getLikes()."<br>";
                echo $dailymotion->getLikes()."<br>";
                echo $vimeo->getLikes()."<br>";

                echo "<h4>getUser()</h4>";
                echo $youtube->getUser()."<br>";
                echo $dailymotion->getUser()."<br>";
                echo $vimeo->getUser()."<br>";


                ?>
             </div>
         </div>
      </div>


      <div class="footer">
        <p>&copy; <a href="http://www.najih.info">N@JIH</a> 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
