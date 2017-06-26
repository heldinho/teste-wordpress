<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<title>Layout Simples</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes" name='viewport'>
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/teste-psd/css/font-cardo.css">
<link rel="stylesheet" type="text/css" href="<?php echo home_url(); ?>/wp-content/themes/teste-psd/css/estilo.css">
</head>
<body id="home" <?php body_class(isset($class) ? $class : ''); ?>>

<div class="navbar">
  <a href="<?php echo home_url(); ?>">Home</a>
  <a href="#introducao">Introdução</a>
  <div class="navbar-2">
    <a href="#historia">História</a>
    <a href="#sobre">Sobre</a>
    <a href="#contato">Contato</a>
  </div>
  <div class="dropdown">
    <button class="dropbtn" onclick="myFunction()" style="background-color: #555;">&nbsp;&nbsp;▼&nbsp;&nbsp;</button>
    <div class="dropdown-content" id="myDropdown">
      <a href="#historia">História</a>
      <a href="#sobre">Sobre</a>
      <a href="#contato">Contato</a>
    </div>
  </div> 
</div>