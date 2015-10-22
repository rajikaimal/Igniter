<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="bower_components/material-design-lite/material.min.css">
	<script src="/bower_components/material-design-lite/material.min.js"></script>
	<style type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>
	<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored">
	  <i class="material-icons">add</i>
	</button>
	<div class="demo-card-wide mdl-card mdl-shadow--2dp">
	  <div class="mdl-card__title">
	    <h2 class="mdl-card__title-text">Welcome</h2>
	  </div>
	  <div class="mdl-card__supporting-text">
	    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
	    Mauris sagittis pellentesque lacus eleifend lacinia...
	  </div>
	  <div class="mdl-card__actions mdl-card--border">
	    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
	      Get Started
	    </a>
	  </div>
	  <div class="mdl-card__menu">
	    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
	      <i class="material-icons">share</i>
	    </button>
	  </div>
	</div>
	<script src="bower_components/material-design-lite/material.min.js"></script>
</body>
</html>