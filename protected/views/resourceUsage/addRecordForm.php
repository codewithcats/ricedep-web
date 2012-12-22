<div class="container">
	<h3>บันทึกข้อมูลการใช้พลังงาน</h3>
	<form class="form form-horizontal" 
		action="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/addRecord" method="post">
		<div class="control-group">
			<label class="control-label" for="month">เดือน</label>
			<div class="controls">
				<select name="UsageRecordForm[month]" id="month">
					<option value="1">มกราคม</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="year">ปี</label>
			<div class="controls">
				<select name="UsageRecordForm[year]" id="year">
					<option value="2554">2554</option>
					<option value="2555">2555</option>
					<option value="2556">2556</option>
				</select>
			</div>
		</div>
		<h4>ไฟฟ้า</h4>
		<div class="control-group">
			<label class="control-label" for="uelec">จำนวนหน่วย</label>
			<div class="controls">
				<input type="text" name="UsageRecordForm[uelec]" id="uelec">
			</div>
		</div>
	</form>
</div>