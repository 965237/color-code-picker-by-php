<?php
if(isset($_GET['submit'])){
    $color = $_GET['color'];
    echo $color;
}
?>

<html>
    <body>
        <form action="" method="GET">
            <h2 style="text-align:center;">Select the color</h2>
            <div style="margin-left:45vw;">
            Color :<input type="color" name="color"> <br> <br>
            <input type="submit" name="submit">
            </div>
</form>
</body>
</html>