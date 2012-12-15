<div class="login-form-outer">
	<div class="login-form hero-unit">
		<form action="<?php echo Yii::app()->request->baseUrl; ?>/?r=site/login" method="post">
			<fieldset>
				<legend>Sign In</legend>
				<label>Username</label>
				<input type="text" name="LoginForm[username]">
				<label>Password</label>
				<input type="password" name="LoginForm[password]">
				<div>
					<button type="submit" class="btn btn-primary"><i class="icon icon-white icon-lock"></i>&nbsp;Sign In</button>
				</div>
			</fieldset>
		</form>
	</div>
</div>
