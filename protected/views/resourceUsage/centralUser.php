<div class="container">
	<h3><?php echo $institute->NameIns; ?></h3>
	<ul class="nav nav-tabs nav-stacked">
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/centralEnergy">ข้อมูลการใช้พลังงานส่วนกลาง</a></li>
		<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/energyFiscalYear">ข้อมูลการใช้พลังงานเปรียบเทียบปีงบประมาณ</a></li>
	</ul>
</div>