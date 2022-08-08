<?php


if($_POST['username'] ==  "coordinador")
{
    header("Location: index-cr.php");
    die();
}
else if($_POST['username'] ==  "tutor")
{
    header("Location: index-tt.php");
    die();
}
else
{
    header("Location: index-st.php");
    die();
}

?>