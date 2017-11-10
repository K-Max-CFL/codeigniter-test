<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

   	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/stylesheets/style.css">
	
</head>
<body>

<nav class="navbar navbar-expand-lg">
   <a class="navbar-brand navbar-light" href="http://ignitertest.dev/index.php/">Pick 'Em</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <?php if ($this->ion_auth->logged_in()): ?>
	      <li class="nav-item">
	        <a class="nav-link" href="logout">Logout</a>
	      </li>
      <?php endif ?>
    </ul>
    <span class="navbar-text">
      <p>Welcome <?php echo $this->session->userdata('identity'); ?><p>
    </span>
  </div>
</nav>

<div class="container-fluid">
