<?php
$db=new PDO('mysql:host=localhost;dbname=my_mini_project' ,'root','');
if($db)
{
    echo "Connect" ;

}

else
{
    echo "Not Connect";
}
?>