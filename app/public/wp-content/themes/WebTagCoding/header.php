<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WordPressDemo</title>
    <?php wp_head();?>

  </head>
  <body>
      <div id="slideout-menu">
        <ul>
          <li>
            <a href="<?php echo site_url('');?>">Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('/blog');?>">Blog</a>
          </li>
          <li>
            <a href="<?php echo site_url('/projects');?>">Projects</a>
          </li>
          <li>
            <a href="<?php echo site_url('/about');?>">About</a>
          </li>
          <li>
            <input type="text" placeholder="Search Here">
          </li>
        </ul>
      </div>
      <nav>
        <div id="logo-img">
          <a href="<?php echo site_url('');?>">
            <img src="<?php echo get_template_directory_uri();?>/img/logo.jpg" alt="logo">
          </a>
        </div>

        <div id="menu-icon">
          <i class="fa fa-bars"></i>
        </div>
        <ul>
          <li>
            <a href="<?php echo site_url('');?>"
              <?php if(is_front_page()) echo 'class="active"' ?>
              >Home</a>
          </li>
          <li>
            <a href="<?php echo site_url('/blog');?>"
              <?php if(get_post_type()=='post') echo 'class="active"' ?>
              >Blog</a>
          </li>
          <li>
            <a href="<?php echo site_url('/projects');?>"
              <?php if(get_post_type()=='project') echo 'class="active"' ?>
              >Projects</a>
          </li>
          <li>
            <a href="<?php echo site_url('/about');?>"
              <?php if(is_page('about')) echo 'class="active"' ?>
              >About</a>
          </li>
          <li>
            <div id="search-icon">
              <i class="fa fa-search"></i>
            </div>
          </li>
        </ul>
      </nav>
      <div id="searchbox">
        <input type="text" placeholder="Search Here">
      </div>

      <?php if(!is_front_page()){?>

        <main>

        <?php }  ?>
