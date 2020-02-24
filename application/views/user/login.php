<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('common/header'); ?>

<form class="ui form" action="<?= site_url('User/login') ?>" method="post">
	<div class="field">
		<label>帳號</label>
		<input type="text" name="account" placeholder="account">
	</div>
	<div class="field">
		<label>密碼</label>
		<input type="password" name="password" placeholder="password">
	</div>
	<button class="ui button" type="submit">登入</button>
</form>

<?php $this->load->view('common/footer'); ?>
