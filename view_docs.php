<head>
<?php require_once("assets/sidebar.php"); ?>
</head>

<?php 
 
// This will return all files in that folder
$files = scandir("uploads");
 
// If you are using windows, first 2 indexes are "." and "..",
// if you are using Mac, you may need to start the loop from 3,
// because the 3rd index in Mac is ".DS_Store" (auto-generated file by Mac)
for ($a = 2; $a < count($files); $a++)
{
    ?>
    <p>
    <div class="moithan">
        <!-- Displaying file name !-->
        <?php echo $files[$a]; ?>
 
        <!-- href should be complete file path !-->
        <!-- download attribute should be the name after it downloads !-->
        
        <a class="moithan" href="uploads/<?php echo $files[$a]; ?>"  download="<?php echo $files[$a]; ?>">
            Download
        </a>
    


    </p>
</div>
    <?php
}
?>

<div  class="moithan">
<a href="upload.php" >Upload Documents</a>
    </div>
