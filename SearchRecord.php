<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 10/22/2018
 * Time: 7:52 PM
 */



echo include'header.php';

echo include'bodyOtherSite.php';

include 'functions.inc.php';
$valDefault ="default";
$number = $valDefault;

?>

    <form method="post" >
        <div class="form-group">
            <label for="exampleInput">Search </label>
            <input type="text" class="form-control" name="number" placeholder="User should put a row number to search..." required>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <h3><a href="ViewList.php" target="_blank">Check Table</a></h3>

<?php
//display the row value or message "Sorry not found"...
echo "<h3>".SearchRec()."</h3>";
echo include 'bodyclosingOtherSite.php';
?>

<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
