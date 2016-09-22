<html>
<head>
    <script src="../../js/prototype.js" type="text/javascript"></script>
    <script src="../../js/buttonGoClicked.js"></script>

    <title>My good app</title>
    <link href="../../css/index.css" rel="stylesheet" type = "text/css">
</head>
<body>

<div id ="mainlable">
    My good app
</div>

<div id ="browser">
</div>

<div id = "url">
    <input type="url" id="inptUrl" title="Start with http://">
    <input type="button" value="Go!" id = "btnGo" onclick="buttonClicked();addNewUrl()">
    <div id="list_urls">

        <?php include 'list_view.php'; ?>

    </div>
</div>

</body>
</html>