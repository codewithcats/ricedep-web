<div class="login-form-outer">
	<div class="login-form hero-unit">

		<form action="<?php echo Yii::app()->request->baseUrl; ?>/?r=site/login" method="post">
			<fieldset>
				<legend>เข้าสู่ระบบ</legend>
				<label>ผู้ใช้งาน</label>
				<input type="text" name="LoginForm[username]">
				<label>รหัสผ่าน</label>
				<input type="password" name="LoginForm[password]">
				<div>
					<button type="submit" class="btn btn-primary">
						<i class="icon icon-white icon-lock"></i>&nbsp;เข้าสู่ระบบ</button>
				</div>
			</fieldset>
		</form>
	</div>
	<?php if($model->hasErrors()): ?>
	<div class="alert alert-block alert-error login-form-alert">
		<h4>ไม่สามารถเข้าสู่ระบบได้</h4>
		กรุณาตรวจสอบชื่อผู้ใช้งานและรหัสผ่านอีกครั้ง
	</div>
	<?php endif; ?>
</div>
