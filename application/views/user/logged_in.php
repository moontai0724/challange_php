<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('common/header'); ?>

<div>
	<h1>你成功登入了！！</h1>
	<h2>不過輸入下方的資訊，送出後看到成功畫面，才算是成功哦！</h2>
	<form class="ui form" action="<?= site_url('User/logSuccess') ?>" method="post">
		<div class="field">
			<label>請輸入你的姓名：</label>
			<input type="text" name="name" placeholder="王曉明">
		</div>
		<div class="field">
			<label>請輸入管理員密碼：（不知道可以嘗試獲取看看，但也可以直接送交，在結果會顯示是否有找出密碼）</label>
			<input type="password" name="password" placeholder="Password">
		</div>
		<button class="ui positive button" type="submit">送出</button>
		<a class="ui negative button" href="<?= site_url('User/logout') ?>">登出</a>
	</form>
</div>

<?php $this->load->view('common/footer'); ?>
