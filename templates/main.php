<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<title>Transportas</title>
		<link rel="stylesheet" type="text/css" href="scripts/datetimepicker/jquery.datetimepicker.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/main.css" media="screen" />
		<script type="text/javascript" src="scripts/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="scripts/datetimepicker/jquery.datetimepicker.full.min.js"></script>
		<script type="text/javascript" src="scripts/main.js"></script>
	</head>
	<body>
		<div id="body">
			<div id="header">
				<h3 id="slogan"><a href="index.php">Transportas</a></h3>
			</div>
			<div id="content">
				<div id="topMenu">
					<ul class="float-left">
						<li><a href="index.php?module=vairuotojai&action=list" title="Vairuotojai"<?php if($module == 'vairuotojai') { echo 'class="active"'; } ?>>Vairuotojai</a></li>
						<li><a href="index.php?module=sunkvezimiai&action=list" title="Sunkvezimiai"<?php if($module == 'sunkvezimiai') { echo 'class="active"'; } ?>>Sunkvezimiai</a></li>
						<li><a href="index.php?module=imones&action=list" title="Imones"<?php if($module == 'imones') { echo 'class="active"'; } ?>>Imones</a></li>
						<li><a href="index.php?module=sutartys&action=list" title="Sutartys"<?php if($module == 'sutartys') { echo 'class="active"'; } ?>>Sutartys</a></li>
						<li><a href="index.php?module=iranga&action=list" title="Iranga"<?php if($module == 'iranga') { echo 'class="active"'; } ?>>Irangos</a></li>
					</ul>
				</div>
				<div id="contentMain">
					<?php
						// įtraukiame veiksmų failą
						if(file_exists($actionFile)) {
							include $actionFile;
						}
					?>
					<div class="float-clear"></div>
				</div>
			</div>
			<div id="footer">

			</div>
		</div>
	</body>
</html>