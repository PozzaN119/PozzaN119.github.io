<?php
  $current_page = "home"
?>
<html>
  <head>
    <link href="CSS/html.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="CSS/hero.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="CSS/main.css" rel="stylesheet" type="text/css" media="screen"/>
  </head>
  <body>
    <div class="herobg">
      <div class="herotext">
        <h1>I am Noé Pozza</h1>
        <p>And I'm a Developer</p>
        <a href="#main">my career</a>
      </div>
    </div>
    <div id="main">
      <h1>Test</h1>
      <?
        $json = file_get_contents('https://www.instagram.com/noepozza/?__a=1');
        $json = json_decode($json);
        $pictureURL = $json->graphq1->user->edge_owner_to_timeline_media->edges->0->nodes->display_url;
        echo '<img src="'+$pictureURL+'">'
      ?>
    </div>
  </body>
</html>
