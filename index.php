<html>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>
<body>
<?php
require('parse.php');
require('view.php');
$jsonString = file_get_contents("application.json");
$arrayJson = json_decode($jsonString, true);
$tableName = $arrayJson[application_name] . ", " . $arrayJson[country] . ", " . $arrayJson[city] . ", " . $arrayJson[app_id];
$arrEvents = parse::parseJson($arrayJson);
view::viewJson($arrEvents, $tableName);
?>
</body>
</html>
