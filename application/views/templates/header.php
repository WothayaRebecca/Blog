<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
   <title>Code igniter training </title>
   <link rel="stylesheet" href="<?php echo base_url('Bootstrap/css/bootstrap.min.css');?>"> 

   <style type="text/css">
   #body
   {

    /*background-image: url('Images/blog.jpg');
    background-color: greenYellow;*/
    color: red;


   }
   #txtinput
   {
    color: blue;
    font-size: 18px;
    background-color: ;

   }
   #row1
   {
    background-color:green !important;
    text-align: center;

   }
   #row2 
   {

   /*	background-color:#fff !important;*/
   }
  #row3
  {

  	background-color: GreenYellow;
    text-align: center;
  }
  #container
  {
   height: 700px;
   width: 700px;

  }
  .paragraph
  {

    margin-left: 30px;

  }
  .vcenter
  {

    display: inline-block;
    vertical-align: middle;
    float: none;
  }

  </style>
</head>
<body> 
<div class="container">
<div class="row">
  <div id="row1" class="col-md-12">
  <h2>

      <?php echo $title;?>
  </h2>

  </div>
</div>
<div class="row">
 <div id="row3" class="col-md-12" style="text-align: center;">
 <ul class="nav nav-tabs">
 <?php
 if(!$uname)
  {
    echo $uname;
    ?>

   <li role="presentation"><a href="<?php echo site_url('pages/register'); ?>"><b>Register</b></a></li>
   <li role="presentation"><a href="<?php echo site_url('pages/login'); ?>"><b>Login</b></a></li>   
   <li role="presentation"><a href="<?php echo site_url('news/index'); ?>"><b>View News</b></a></li>   
   

  <?php
  }
  else
  { 
    if($uname!='admin')
    {
      echo $uname;
      ?>     
      <li role="presentation"><a href="<?php echo site_url('news/create'); ?>"><b>Create Post</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('news/index'); ?>"><b>View News</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('pages/logout'); ?>"><b>Logout</b></a></li>
      

      <?php }
    
    else
     {
      
      ?>
      <li role="presentation"><a href="<?php echo site_url('news/create'); ?>"><b>Create Post</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('news/index'); ?>"><b>View News</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('pages/logout'); ?>"><b>Logout</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('pages/delete_blogger'); ?>"><b>Delete blogger</b></a></li> 
      <?php
      }?>
  <?php }?>

 </ul>
   
 </div>
</div>
  
