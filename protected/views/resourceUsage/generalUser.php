<div class="container">
	<h3>ข้อมูลการใช้พลังงาน <?php echo $institute->NameIns; ?></h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">เดือน</th>
				<th rowspan="2">ปี</th>
				<th colspan="2" style="text-align:center;">น้ำมันเชื้อเพลิง</th>
				<th colspan="2" style="text-align:center;">ไฟฟ้า</th>
				<th colspan="2" style="text-align:center;">น้ำ</th>
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
				<td><?php echo $r->ins_month; ?></td>
				<td><?php echo $r->ins_year; ?></td>
				<td><?php echo $r->Uoil; ?></td>
				<td><?php echo $r->Poil; ?></td>
				<td><?php echo $r->Uelec; ?></td>
				<td><?php echo $r->Pelec; ?></td>
				<td><?php echo $r->Uwater; ?></td>
				<td><?php echo $r->Pwater; ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>