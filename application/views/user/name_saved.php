<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('common/header'); ?>

<div>
	<h1>已經成功存檔囉！恭喜你完成這項考驗～</h1>
	<a class="ui button" href="<?= site_url('User/listSucceed') ?>">查看目前已經完成的名單</a>
</div>

<?php $this->load->view('common/footer'); ?>
