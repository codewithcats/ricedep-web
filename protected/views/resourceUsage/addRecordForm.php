<div class="container">
	<h3>บันทึกข้อมูลการใช้พลังงาน</h3>
	<?php $form = $this->beginWidget('CActiveForm', array(
	    'id'=>'resourceUsageForm',
	    'enableAjaxValidation'=>false,
	    'enableClientValidation'=>false,
	    'focus'=>array($model,'month'),
	    'method'=>'post',
	    'htmlOptions'=>array(
	    	'class'=>'form form-horizontal',
	    	'novalidate'=>'novalidate'),
	)); ?>
	<div class="control-group">
			<label class="control-label" for="ResourceUsageForm_month">เดือน</label>
			<div class="controls">
				<select name="ResourceUsageForm[month]" id="ResourceUsageForm_month">
					<option value="1">มกราคม</option>
					<option value="2">กุมภาพันธ์</option>
					<option value="3">มีนาคม</option>
					<option value="4">เมษายน</option>
					<option value="5">พฤษภาคม</option>
					<option value="6">มิถุนายน</option>
					<option value="7">กรกฎาคม</option>
					<option value="8">สิงหาคม</option>
					<option value="9">กันยายน</option>
					<option value="10">ตุลาคม</option>
					<option value="11">พฤศจิกายน</option>
					<option value="12">ธันวาคม</option>
				</select>
				<?php echo $form->error($model, 'month', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'year', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'year', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'year', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<h4>ไฟฟ้า</h4>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'uelec', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'uelec', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'uelec', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'pelec', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'pelec', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'pelec', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<h4>น้ำ</h4>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'uwater', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'uwater', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'uwater', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'pwater', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'pwater', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'pwater', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<h4>น้ำมัน</h4>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'uoil', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'uoil', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'uoil', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<div class="control-group">
			<?php echo $form->labelEx($model, 'poil', array('class'=>'control-label')); ?>
			<div class="controls">
				<?php echo $form->textField($model, 'poil', array('required'=>'required')); ?>
				<?php echo $form->error($model, 'poil', array('class'=>'help-inline error')); ?>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<button class="btn btn-primary"><i class="icon icon-white icon-ok"></i>&nbsp;เพิ่มข้อมูล</button>
				<a href="<?php echo Yii::app()->request->baseUrl; ?>" class="btn"><i class="icon icon-remove"></i>&nbsp;ยกเลิก</a>
			</div>
		</div>
	<?php $this->endWidget(); ?>
</div>