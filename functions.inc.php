
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<?php
/**
 * Created by PhpStorm.
 * User: owner
 * Date: 10/16/2018
 * Time: 10:37 AM
 */
//link bootstrap css...
@ini_set('display_errors',off);
function ViewList()//this function works with the file as an array and displays record of the file as a table
{
    $fil = file('non.csv');

    $rec="";

    foreach ($fil as $index) {
        list($ind, $val, $val2, $val3, $val4, $val5) = explode(',', $index); //seperate values by comma
        global $rec;

        $rec.= "<tr><td scope=row>$ind</td><td>$val</td><td>$val2</td><td>$val3</td><td>$val4</td><td>$val5</td></tr>";


    }
    //rec is the content entire following but not the table yet.
    return $rec;

}



function AddRecord(){
//add record check first if all values exits and then open the non.csv file and put record entered by the user.
$written="";
    if(isset($_POST['val0'],$_POST['val1'], $_POST['val2'],$_POST['val3'], $_POST['val4'],$_POST['val5'] )) {
        $val0 = $_POST['val0'];
        $val1 = $_POST['val1'];
        $val2 = $_POST['val2'];
        $val3 = $_POST['val3'];
        $val4 = $_POST['val4'];
        $val5 = $_POST['val5'];
// we check if those value are not only empty spaces.


            $writ = fopen('non.csv', 'a');

            if ($writ) {

                global $written;
                $written = "$val0,$val1,$val2,$val3,$val4,$val5" . PHP_EOL;

                fputs($writ, "$written");

                fclose($writ);
            }
            //it return those records entered.
            return $written; }


return " ";
}



function ModifyRecord(){

    if(SearchBoolean()){ //modify record and all those function(DeleteRec,SearchRec)checks if SearchBoolean is true if yes it means that the value return from IndexReturn is gonna be valid.
        $index = IndexReturn();


            $temp = file('non.csv');


            //modify
            $temp[$index] = AddRecord();
            //we just add the input entered in the array at the valid row number entered

        if(NonValidValueCheck(AddRecord())){ //we look if the value taken doesn't contain only empty space.

            $fil = fopen('non.csv', 'w'); //then we open the file in write mode which delete everything and we put those values again with one row modified.
            if ($fil) {
                foreach ($temp as $value) {
                    fputs($fil, "$value");


                }
            }
            fclose($fil);
        return true;}

}

return false;}




function DeleteRec()
{

    if(SearchBoolean()){
        $index = IndexReturn();


        $temp = file('non.csv');

        // remove
        $fil = fopen("non.csv", 'w');
        if ($fil) {
            foreach ($temp as $value) {
                if ($temp[$index] != $value) {  //this time when we write the same record in the non.csv file we just make sure the row number entered is not rewrite in the non.csv
                    fputs($fil, $value);       //if this value $temp[rownumber] is not equal to what we have in the file you can write rewrite it.
                }

            }
        }
        fclose($fil);

return true;

    }

   return false; }






function SearchRec(){


if(SearchBoolean()){
    $index = IndexReturn();

    $temp = file('non.csv');
        //search
        foreach ($temp as $value) {
            if ($temp[$index] == $value) {  //It checks if the specific value is equal to what we have in the file display return it.
                $valContainer = explode(',',$value); //the value are not nice presented with commas so we are going to remove them
                $strin = "";
                foreach ($valContainer as $key){
                    $strin .= $key." ";
                }
                return $strin; //and display the value...
            }

        }


   }

return "Please enter a valid number of row";}



function ImportRec(){

    $target_directory = "uploadsAllFiles/";
    if(isset($_FILES['fileName'])){

        $filname = $_FILES['fileName']['name']; //file name
        $filtemp = $_FILES['fileName']['tmp_name'];

        $filextension = strtolower(pathinfo($filname, PATHINFO_EXTENSION)); // we take the extension of the file


        if($filextension !== "csv" ){// if the extension is not a csv file we cannot accept it.
            return "Extension is not valid. Only csv...";
        }

        else if($_FILES['fileName']['size'] > 2303648){// 2.10 MB if the file size is greater than 2.10MB we cannot accept it..
            return "The file size is too large...";
        }

           else if(move_uploaded_file($filtemp ,$target_directory.$filname) ) { //we try to move the file if the file is not move we got an error.
                return "The file $filname uploaded successfully";
            }


    }
    


    return "There is no file uploaded please upload a file.";}


function SearchBoolean()
{
//this function checks if the number corresponding to the row exits

    if (isset($_POST['number'])) {
        $index = $_POST['number'];
        $index++; //we add +1 because in the array the first record start with 0 ;in addition the first row index is 2.
        $temp =file("non.csv");
        if ($index < count($temp) && $index >= 2) { //All input of the user should be between the last row index and the first which is 2
                                                    //we don't want to give the accessibility to user to change the title of the table.
            return true;
        }

    }

return false;}


function IndexReturn(){ //this function returns the valid index if SearchBoolean is true.
    if(SearchBoolean()){ $index = $_POST['number']; $index++;return $index;}


return -1;}

function InformationDisplay($bol){ //the return of those boolean function determine the message displays.
    if($bol){
return"Succefully Executed...";
    }
return"PLEASE ENTER VALID INPUT...";}



function InformationDisplayAddrec(){

    if(AddRecord() !=" "){


        return "New record created";
    }
 return "Please enter a valid input...";}




function NonValidValueCheck($value){
    $arrValue = str_split($value); // split value entered by the user to check every single characters.

    for($x=0;$x<sizeof($arrValue);$x++){
        global $count;
        $count = 1;
        if($arrValue[$x]=== " 
        " ){
            $count++;
        }

        if($count >= sizeof($arrValue)){ //if all characters entered are only spaces it not a valid input.
            return false;
        }


    }

return true;}

/*
code: Main.php

echo include 'header.php';    //The main will hold every link for the features.
echo include 'bodyopening.php';



echo include 'bodyclosingandfooter.php';?>


*/



/*

code: ViewList.php

echo include'header.php';

echo include'bodyOtherSite.php';

include'functions.inc.php';
//it becomes a table now

echo"<table class=\"table table-striped table-dark\">".ViewList()."</table>";


echo include 'bodyclosingOtherSite.php';

*/

/*
code: CreateRecord.php

//<?php


echo include'header.php';

echo include'bodyOtherSite.php';

include'functions.inc.php';
$valDefault ="default";
$val0 = $valDefault;
$val1 = $valDefault;
$val2= $valDefault;
$val3 = $valDefault;
$val4 = $valDefault;
$val5 = $valDefault;
//all those value have default value they are going to take the input of user required in the form does not allow empty to be submitted...

?>

form...


<?php

echo "<h3>".InformationDisplayAddrec()."</h3>";
echo include 'bodyclosingOtherSite.php';
?>



*/





/*
code: ModifyRecord.php

//<?php
echo include'header.php';

echo include'bodyOtherSite.php';

include'functions.inc.php';
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
//?>

form...

//<?php
echo"<h3>".InformationDisplay(ModifyRecord())."</h3>";


echo include 'bodyclosingOtherSite.php';
//?>
*/

/*

code: RemoveRecord.php

  <?php

echo include'header.php';

echo include'bodyOtherSite.php';

include'functions.inc.php';
$valDefault ="default";
$number = $valDefault;

//form to delete...
?>

form...

<?php

echo"<h3>".InformationDisplay(DeleteRec())."</h3>";
echo include 'bodyclosingOtherSite.php';
?>

*/


/*

code: SearchRecord.php

<?php


echo include'header.php';

echo include'bodyOtherSite.php';

include'functions.inc.php';
$valDefault ="default";
$number = $valDefault;

?>

form...


<?php
//display the row value or message "Sorry not found"...
echo "<h3>".SearchRec()."</h3>";
echo include 'bodyclosingOtherSite.php';
?>

*/

/*

code: ImportRecord.php

<?php

echo include 'header.php';

echo include'bodyOtherSite.php';
include 'functions.inc.php';
echo "<h3>".ImportRec()."</h3>";
?>
form...


<?php

echo include 'bodyclosingOtherSite.php';
?>
*/


?>


<a href="/folder_view/vs.php?s=<?php echo __FILE__?>" target="_blank">View Source</a>