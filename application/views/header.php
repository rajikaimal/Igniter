<!DOCTYPE HTML>
<head>
  <link rel="stylesheet" href="<?php echo base_url(); ?>bower_components/material-design-lite/material.min.css">
  <script src="<?php echo base_url(); ?>bower_components/material-design-lite/material.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <title>Igniter</title>
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Igniter</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>stocks/stockindex">Stocks</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>clients">Clients</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>employees">Employees</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>income">Income</a>
        <a class="mdl-navigation__link" href="<?php echo base_url(); ?>expense">Expenses</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Profile</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Logout</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">

    


