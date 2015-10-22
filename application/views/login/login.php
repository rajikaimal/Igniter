<style>
.demo-card-wide.mdl-card {
  margin-left: 412px;
  margin-top: 100px;	
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('https://d13yacurqjgara.cloudfront.net/users/397206/screenshots/1961935/material_card_.png') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
</style>

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Welcome</h2>
  </div>
  <div class="mdl-card__supporting-text">
    <?php echo form_open('login'); ?>
	  <div class="mdl-textfield mdl-js-textfield">
	    <input class="mdl-textfield__input" name="username" type="text" id="username" />
	    <label class="mdl-textfield__label" for="username">Username</label>
	  </div>
	
	  <div class="mdl-textfield mdl-js-textfield">
	    <input class="mdl-textfield__input" name="password" type="password" id="password" />
	    <label class="mdl-textfield__label" for="password">Password</label>
	    <span class="mdl-textfield__error"></span>
	  </div>
  </div>
  	<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
  	Login
	</button>
	</form>
	<?php echo validation_errors(); ?>
</div>