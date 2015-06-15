<?php require('./sys/wp-load.php'); ?>
<!doctype html>
<html><!-- InstanceBegin template="/Templates/main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta charset="UTF-8">
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="robots" content="ALL" />
<meta name="author" content="STELLA HOUSE" />
<meta name="keywords" content="モデル,タレント,芸能人,歌手,STELLA,ステラ" />
<meta name="description" content="" />
<meta name="copyright" content="Copyright (C) 2015 STELLA HOUSE All Rights Reserved." />
<!-- InstanceBeginEditable name="doctitle" -->
<title>ステラハウス</title>
<link href="css/top.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/responsiveslides.css" type="text/css" media="screen" />
<!-- InstanceEndEditable -->
<link href="css/common.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="js/smartRollover.js"></script>
<script src="js/top.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>
<div class="mainbox"><!-- InstanceBeginEditable name="EditRegion1" -->
 <script src="js/responsiveslides.min.js"></script>
 <script src="js/slider.js"></script>
<header>
    <h1><a href="index.php"><img src="images/logo.png" width="172" height="96" alt=""/></a></h1>
    <ul class="sns">
      <li><a href="#"><img src="images/twitter.png" width="20" height="22" alt=""/></a></li>
      <li><a href="#"><img src="images/facebook.png" width="13" height="22" alt=""/></a></li>
    </ul>
    <div class="slidebox">
      <ul class="rslides" id="slider1">
            <li> <a href="model/klusenruika.html"><img src="model/images/klusenruika/01.jpg" /></a>
  	    		</li>
  	    		<li> <a href="model/mewyoshioka.html"><img src="model/images/mewyoshioka/01.jpg" /></a>
  	    		</li>
  	    		
                <li> <a href="model/chiharuhimeno.html"><img src="model/images/chiharuhimeno/01.jpg" /></a>
  	    		</li>
                 <li> <a href="model/jibikiharuna.html"><img src="model/images/jibikiharuna/01.jpg" /></a>
    		    </li>
                <li> <a href="#"><img src="model/images/ryoko/01.jpg" /></a>
    		    </li>
                <li> <a href="model/ikedamomoka.html"><img src="model/images/ikedamomoka/01.png" /></a>
    		    </li>
                <li> <a href="model/airinikaidoh.html"><img src="model/images/airinikaidoh/01.jpg" /></a>
    		    </li>
                     <li> <a href="#"><img src="model/images/moeenohara/01.jpg" /></a>
    		    </li>
                <li> <a href="model/amenomorihanako.html"><img src="model/images/amenomorihanako/01.jpg" /></a>
    		    </li>
    </ul>
       </div>
    <div class="clear"><img src="images/none.png" width="2" height="1" alt=""/></div>
  </header>
  <ul class="topmenu">
    <li><a href="index.php">HOME</a></li>
    <li><a href="audition/index.html">AUDITION</a></li>
    <li><a href="model/index.html">MODEL / TALENT</a></li>
    <li><a href="offer/index.html">OFFER</a></li>
    <li><a href="contact/index.html">CONTACT US</a></li>
    <li><a href="recruit/index.html">RECRUITMENT </a></li>
    <li><a href="company/index.html">COMPANY</a></li>
  </ul>
  <div class="clear"><img src="images/none.png" width="2" height="1" alt=""/></div>
  </header>
  <div class="newsbox">
    <h3>NEWS</h3>
    <dl class="news">
    
    
    
   
              <?php
$paged = get_query_var( 'paged' );
query_posts('post_type=news&posts_per_page=6&paged='.$paged);
if( have_posts() ) : while(have_posts()) : the_post();
?>
              <dt>
                <?php the_time('Y年m月d日'); ?>
              </dt>
              <dd>
                <?php the_title(); ?>
              </dd>
              <dd>
                <?php the_content(); ?>
              </dd>
              <?php endwhile; endif; ?>
            
    
    
    
   
   
    </dl>
  </div>
 
<!-- InstanceEndEditable -->
   <footer>
   <div class="privacy"> <a href="http://stellaentertainment.jp/" target="_blank"><img src="images/enter.png" width="254" height="20" alt=""/></a>
    </div>
    <div class="privacy2">
   
 <a href="privacy/index.html"><img src="images/privacy.png" width="168" height="25" alt=""/></a></div>
    <div class="info">
      <p>株式会社ステラハウス<br>
        〒107-0062 東京都港区南青山6-10-9 レグノラフィネ南青山1301<br>
        TEL：03-5766-9550 / FAX：03-6433-5023</p>
    </div>
  </footer>
  <address>
  Copyright &copy; 2015 STELLA HOUSE All rights reserved.
  </address>
</div>
 <p id="page-top"><a href="#wrap">PAGE TOP</a></p>
</body>
<!-- InstanceEnd --></html>
