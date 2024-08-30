<?php
$config_files = [
    'Camera' => '~/.config/aeroServer-camera/parameters.json',
];

$config = [];

foreach ($config_files as $title => $file) {
    $config[$title] = json_decode($file);
}
echo "OK";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/pico.min.css">
	<title>aeroServer Web Config</title>
</head>
<body>

</body>
</html>
