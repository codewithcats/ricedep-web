<div class="container">
	<h3>ข้อมูลการใช้พลังงานเปรียบเทียบปีงบประมาณ</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">ลำดับที่</th>
				<th rowspan="2">หน่วยงาน</th>
				<th colspan="2" style="text-align:center;">ประจำปี 2554</th>
				<th colspan="2" style="text-align:center;">ประจำปี 2555</th>
				<th colspan="2" style="text-align:center;">สรุปการใช้</th>
				<th rowspan="2">เปอร์เซนเพิ่มลด</th>
			</tr>
			<tr>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
				<th>หน่วย เพิ่ม-ลด</th>
				<th>บาท เพิ่ม-ลด</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; foreach ($names as $n): ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $n->NameIns; ?></td>
			</tr>
			<?php $i++;endforeach; ?>
		</tbody>
	</table>
</div>