<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 10/20/2018
 * Time: 8:51 PM
 */



echo include'header.php';

echo include'bodyOtherSite.php';

include 'functions.inc.php';
$valDefault ="default";
$number = $valDefault;
$val0 = $valDefault;
$val1 = $valDefault;
$val2= $valDefault;
$val3 = $valDefault;
$val4 = $valDefault;
$val5 = $valDefault;
//User puts the row number between 1 and 29 or more which facilitates user task. Those other values will be return by the Add function record(of what has been entered)
// in the specified row...

?>

    <form method="post" >
        <div class="form-group">
            <label for="exampleInput">Number of row</label>
            <input type="text" class="form-control" name="number" placeholder="Row number 1 to..." required>
        </div>
        <div class="form-group">
            <label for="exampleInput1">Enter the first value (city)</label>
            <input type="text" class="form-control"  name="val0" placeholder="city" required>
            <small id="Instruction" class="form-text text-muted">The city should be a canadian city.</small>
        </div>
        <div class="form-group">
            <label for="exampleInput2">Crime Statistic number1</label>
            <input type="text" class="form-control" name="val1" placeholder="Crime Statistic for 2008" required>
        </div>

        <div class="form-group">
            <label for="exampleInput3">Crime Statistic number2</label>
            <input type="text" class="form-control"  name="val2"    placeholder="Crime Statistic for 2009" required>
        </div>

        <div class="form-group">
            <label for="exampleInput4">Crime Statistic number3</label>
            <input type="text" class="form-control" name="val3" placeholder="Crime Statistic for 2010" required>
        </div>


        <div class="form-group">
            <label for="exampleInput5">Crime Statistic number4</label>
            <input type="text" class="form-control"  name="val4"   placeholder="Crime Statistic for 2011" required>
        </div>

        <div class="form-group">
            <label for="exampleInput6">Crime Statistic number5</label>
            <input type="text" class="form-control" name="val5" placeholder="Crime Statistic for 2012" required>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h3><a href="ViewList.php" target="_blank">Check Table</a></h3>

<?php

echo"<h3>".InformationDisplay(ModifyRecord())."</h3>";


echo include 'bodyclosingOtherSite.php';
?>

<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>
