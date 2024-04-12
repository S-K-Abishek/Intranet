
<head>
<?php require_once("assets/sidebar.php"); ?>
</head>
</style>
<body>

<div class="moithan">
<form method="POST" action="upload_docs.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>
<br>
<a href="view_docs.php" >View Documents</a>

</div>
</body>
