<html>
    <body>
        <form action="" method="post">
            Name:
            <input type=text name="t1">
            <br>
            <br>
            <input type=submit name="s">
            <?php
if(isset($_POST['s']))
{
    $a=$_POST['t1']; //accessing value from the text field
    echo "The name of the person is:-".$a; //displaying result
}
            ?>
        </form>
    </body>
</html>