<div class="container">
	<?php if($msg): ?>
	<div class="alert alert-<?php echo $msgType; ?>">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong><?php echo $msg; ?></strong>
	</div>
	<?php endif; ?>
	<h3>ข้อมูลการใช้พลังงาน <?php echo $institute->NameIns; ?></h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">เดือน</th>
				<th rowspan="2">ปี</th>
				<th rowspan="2">ปีงบประมาณ</th>
				<th colspan="2" style="text-align:center;">น้ำมันเชื้อเพลิง</th>
				<th colspan="2" style="text-align:center;">ไฟฟ้า</th>
				<th colspan="2" style="text-align:center;">น้ำ</th>
				<th rowspan="2"></th>
			</tr>
			<tr>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($records as $r): ?>
			<tr>
				<td><?php echo $r->monthName; ?></td>
				<td class="r"><?php echo $r->ins_year; ?></td>
				<td class="r"><?php echo $r->budget_year; ?></td>
				<td class="r"><?php echo $r->Uoil; ?></td>
				<td class="r"><?php echo $r->Poil; ?></td>
				<td class="r"><?php echo $r->Uelec; ?></td>
				<td class="r"><?php echo $r->Pelec; ?></td>
				<td class="r"><?php echo $r->Uwater; ?></td>
				<td class="r"><?php echo $r->Pwater; ?></td>
				<td>
					<a href="<?php echo Yii::app()->request->baseUrl; ?>/?r=resourceUsage/deleteRecord&id=<?php echo $r->UID; ?>"><i class="icon icon-trash"></i>&nbsp;ลบ</a>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/js/bootstrap.min.js"></script>
