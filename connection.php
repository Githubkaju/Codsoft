<?php
$l="localhost";
$r="root";
$p="";
$X=new mysqli($l,$r,$p);
if(!$X)
{
    echo "error";
}
else
{
    echo "yes";
}
?>