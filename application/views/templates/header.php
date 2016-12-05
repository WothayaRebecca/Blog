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

  	background-color: white;
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
  <script type="text/javascript">
    function validate_register_form()
    {
     var email= document.register_form.email;
     var username=document.register_form.username;
     var password=document.register_form.password;
     var confirm_password=document.register_form.confirm_password;
     var usertype=document.register_form.usertype;
     if(username.value=="")
       {
        window.alert("please enter your name");
        username.focus();
        return false;
       } 

     if(email.value.indexOf("@",0)<0)
     {
       window.alert("please enter a valid email address");
       email.focus();
       return false;

     }
     if(email.value.indexOf(".",0)<0)
     {
       window.alert("please enter a valid email address");
       email.focus();
       return false;

     }
     if(email.value.indexOf("com",0)<0)
     {
       window.alert("please enter a valid email address");
       email.focus();
       return false;

     }

     if(password.value!=confirm_password.value)
     {
       window.alert("the passwords entered do not match");
       password.focus();
       return false;

     }
     if(password.value.length<5)
     {
       window.alert("the password must be 5 digits in length");
       password.focus();
       return false;

     }
     return true;


    }
    function validate_login_form()
    {
      var username=document.login_form.username;
      var password=document.login_form.password;
      if (username.value=='')
      {
        window.alert("please enter your username");
        username.focus();
        return false;
      }
      if (password.value=='')
      {
        window.alert("please enter yoir username");
        password.focus();
        return false;
      }
      return true;

    }
    function validate_create_form()
    {
      var title=document.create_form.title;
      var textarea=document.create_form.text;
      if (title.value=="") 
      {
        window.alert("please enter the title of the post");
        title.focus();
        return false;
      } 
      if ($.trim(textarea.value)=="") 
       { 
        window.alert("please enter the text of the post");
        textarea.focus();
        return false;
       }
       
      return true;

    }


  </script>
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
 <ul class="nav nav-tabs" style="color: blue;">
 <?php
 if(!$uname)
  {
  ?>

   <li role="presentation" style="float: right;"><a href="<?php echo site_url('pages/register'); ?>"><b>Register</b></a></li>
   <li role="presentation" style="float: right;" ><a href="<?php echo site_url('pages/login'); ?>"><b>Login</b></a></li>   
   <li role="presentation"><a href="<?php echo site_url('news/index'); ?>"><b>View News</b></a></li>   
   

  <?php
  }
  else
  { 
    if($uname!='admin')
    {
      
    ?>     
      <li role="presentation"><a href="<?php echo site_url('news/create'); ?>"><b>Create Post</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('news/index'); ?>"><b>View News</b></a></li>
      <li role="presentation" style="float: right;"><a href="<?php echo site_url('pages/logout'); ?>"><b>Logout</b></a></li>
      

      <?php }
    
    else
     {
      
      ?>
      <li role="presentation"><a href="<?php echo site_url('news/create'); ?>"><b>Create Post</b></a></li>
      <li role="presentation"><a href="<?php echo site_url('news/index'); ?>"><b>View News</b></a></li>
      <!-- <li role="presentation"><a href="<?php echo site_url('pages/delete_blogger');?>"><b>Delete blogger</b></a --><!-- </li> -->
      <li role="presentation" style="float: right;"><a href="<?php echo site_url('pages/logout'); ?>"><b>Logout</b></a></li>
       
      <?php
      }?>
  <?php }?>

 </ul>
   
 </div>
</div>
  
