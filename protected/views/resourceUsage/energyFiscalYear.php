<?php
	$indexValue; $uKey; $pKey;
	if($index === 'elec')
	{
		$indexValue = 'ไฟฟ้า';
		$uKey = 'sum_uelec_';
		$pKey = 'sum_pelec_';
	}
	else if($index === 'water') $indexValue = 'น้ำ';
	else $indexValue = 'น้ำมัน';

?>
<div class="container">
	<h3>ข้อมูลการใช้<?php echo $indexValue; ?>เปรียบเทียบปีงบประมาณ</h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th rowspan="2">ลำดับที่</th>
				<th rowspan="2">หน่วยงาน</th>
				<th colspan="2" style="text-align:center;">ประจำปี 2554</th>
				<th colspan="2" style="text-align:center;">ประจำปี 2555</th>
				<th colspan="4" style="text-align:center;">สรุปการใช้</th>
			</tr>
			<tr>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
				<th>จำนวนหน่วย</th>
				<th>จำนวนบาท</th>
				<th>หน่วย เพิ่ม-ลด</th>
				<th class="center">%</th>
				<th>บาท เพิ่ม-ลด</th>
				<th class="center">%</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; foreach ($rows as $r): ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $r['NameIns']; ?></td>
				<td class="center"><?php echo $r[$uKey.'2554']==null? '-': $r[$uKey.'2554']; ?></td>
				<td class="center"><?php echo $r[$pKey.'2554']==null? '-': $r[$pKey.'2554']; ?></td>
				<td class="center"><?php echo $r[$uKey.'2555']==null? '-': $r[$uKey.'2555']; ?></td>
				<td class="center"><?php echo $r[$pKey.'2555']==null? '-': $r[$pKey.'2555']; ?></td>
				<?php
					$uInc = ($r[$uKey.'2555']==null || $r[$uKey.'2554']==null)? '-': $r[$uKey.'2555'] - $r[$uKey.'2554'];
					$uIncPercent = $uInc==='-'? '-': round($uInc/$r[$uKey.'2554']*100, 2).'%';
				?>
				<td class="center"><?php echo $uInc; ?></td>
				<td class="center"><?php echo $uIncPercent; ?></td>
				<?php
					$pInc = ($r[$pKey.'2555']==null || $r[$pKey.'2554']==null)? '-': $r[$pKey.'2555'] - $r[$pKey.'2554'];
					$pIncPercent = $pInc==='-'? '-': round($pInc/$r[$pKey.'2554']*100, 2).'%';
				?>
				<td class="center"><?php echo $pInc; ?></td>
				<td class="center"><?php echo $pIncPercent; ?></td>
			</tr>
			<?php $i++;endforeach; ?>
		</tbody>
	</table>
</div>