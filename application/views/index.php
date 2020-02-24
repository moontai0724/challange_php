<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('common/header'); ?>

<img src="<?= base_url('resources/images/index.jpg') ?>">
<div>
	<h1>提示：</h1>
	<ul class="ui list large">
		<li>透過 git 資料夾找到原始碼放的地方 (keyword: git remote address file)</li>
		<li>查看原始碼，試圖找出漏洞</li>
		<li>找到登入頁面，透過 sql injection 登入，以及找到密碼</li>
	</ul>
</div>

<?php $this->load->view('common/footer'); ?>
