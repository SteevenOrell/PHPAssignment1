<?php
/**
 * Created by PhpStorm.
 * User: 101091788
 * Date: 10/17/2018
 * Time: 1:28 PM
 */



echo include'header.php';

echo include'bodyOtherSite.php';

include 'functions.inc.php';
//it becomes a table now

echo"<table class=\"table table-striped table-dark\">".ViewList()."</table>";


echo include 'bodyclosingOtherSite.php';

?>


<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>


