<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>กรมการข้าว</title>
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/egstyle.css">
</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>">กรมการข้าว</a>
			<?php if(!Yii::app()->user->isGuest): ?>
			<ul class="nav pull-left">
				<?php if(Yii::app()->user->username !== 'admin'): ?>
				<li><a href="<?php echo Yii::app()->request->baseUrl; ?>?r=resourceUsage/addRecord"><i class="icon icon-white icon-plus"></i>&nbsp;เพิ่มข้อมูล</a></li>
				<?php endif; ?>
			</ul>
			<ul class="nav pull-right">
				<li>
					<a href="<?php echo Yii::app()->request->baseUrl; ?>?r=site/logout">
						<i class="icon icon-white icon-lock"></i>&nbsp;ออกจากระบบ</a>
				</li>
			</ul>
			<?php endif; ?>
		</div>
	</div>
	<?php echo $content; ?>
</body>
</html>