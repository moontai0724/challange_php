<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php $this->load->view('common/header'); ?>

<div>
	<a class="ui button" href="<?= site_url('') ?>">返回首頁</a>

	<table class="ui celled table">
		<thead>
			<tr>
				<th>序號</th>
				<th>名稱</th>
				<th>時間</th>
				<th>獲取管理員密碼</th>
			</tr>
		</thead>
		<tbody>
			<?php
			for ($i = 0; $i < count($succeed_users); $i++) {
				$result = '<tr style="background-color: ' . ($succeed_users[$i]["pwnedPassword"] ? "cornflowerblue; color: white" : "aliceblue") . ';">';
				$result = $result . '<td data-label="id">' . $succeed_users[$i]["id"] . '</td>';
				$result = $result . '<td data-label="name">' . $succeed_users[$i]["name"] . '</td>';
				$result = $result . '<td data-label="time">' . $succeed_users[$i]["time"] . '</td>';
				$result = $result . '<td data-label="time">' . ($succeed_users[$i]["pwnedPassword"] ? "是" : "否") . '</td>';
				$result = $result . '</tr>';
				echo $result;
			}
			?>
		</tbody>
	</table>
</div>

<?php $this->load->view('common/footer'); ?>
