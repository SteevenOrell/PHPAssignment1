<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 10/22/2018
 * Time: 8:38 PM
 */


echo include 'header.php';

echo include'bodyOtherSite.php';
include 'functions.inc.php';
echo "<h3>".ImportRec()."</h3>";
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="fileName"> <br>
    <input type="submit" >


</form>

    <h3><a href="ViewList.php" target="_blank">Check Table</a></h3>
<?php

echo include 'bodyclosingOtherSite.php';
?>
<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
