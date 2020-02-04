<!DOCTYPE html>
<html>
<head>
	<title><?= $title ?? 'Page' ?></title>
	<link rel="stylesheet" type="text/css" href="./css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="/">
      <img src="./imgs/logo.png" >
    </a>

    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  
  <div id="navbarBasicExample" class="navbar-menu">
    <?php

         $paginas = array(
          array('name' => 'Page 1', 'link' => "/page_1.php",'children' => false),
          array('name' => 'Page 2', 'link' => "/page_2.php",'children' => false),
          array('name' => 'More','children' => true,'chil' => array('name' => 'Page 3', 'link' => "/page_3.php",'name' => 'Page 4', 'link' => "/page_4.php")),
          array('name' => 'mas','children' => true),
        );
  ?>
    <div class="navbar-start">
        <?php foreach ($paginas as $page) {?>
            <?php if($page['children']==true){ ?>
              <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link">
                          <?php echo $page['name'] ?>
                        </a>
              <?php foreach ($page['chil'] as $a) {?>
                <ul class="navbar-item"><?php echo $a['name'] ?></ul>
                        <div class="navbar-dropdown">
                          <a class="navbar-item" href="<?php echo $a ?>">
                            <?php echo $a ?>
                          </a>
                          <a class="navbar-item" href="/page_4.php">
                            Page 4
                          </a>
                          <a class="navbar-item" href="/page_5.php">
                            Page 5
                          </a>
                        </div>
                </div>
                <?php } ?>      
            <?php }else{ ?>
                <a class="navbar-item" href="<?php echo $page['link'] ?>"> <?php echo $page['name'] ?></a>
            <?php } ?> 
        <?php } ?>
    </div>

    <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div>
  </div>
</nav>