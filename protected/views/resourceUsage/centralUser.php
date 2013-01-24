<div class="container">
	<h3><?php echo $institute->NameIns; ?></h3>
	<ul class="nav nav-tabs nav-stacked">
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/centralEnergy">ข้อมูลการใช้พลังงานส่วนกลาง</a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/energyFiscalYear&index=elec">ข้อมูลการใช้ไฟฟ้าเปรียบเทียบปีงบประมาณ</a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/energyFiscalYear&index=water">ข้อมูลการใช้น้ำเปรียบเทียบปีงบประมาณ</a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/energyFiscalYear&index=oil">ข้อมูลการใช้น้ำมันเปรียบเทียบปีงบประมาณ</a></li>
	</ul>
</div>