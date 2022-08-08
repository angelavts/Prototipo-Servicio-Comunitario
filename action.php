<?php


if($_POST['username'] ==  "coordinador")
{
    header("Location: index-cr.php");
    die();
}
else
{
    header("Location: index-st.php");
    die();
}

?>