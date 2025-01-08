
<html>
    <body>
        <form method="post">
            Enter number <input type="text" name="number"> <br>
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
            if(isset($_POST['submit']))
            {
                $num=$_POST['number'];
                $temp=$num;
                $sum=0;

                while($temp != 0){
                    $rem=$temp % 10;
                    $sum+=$rem*$rem*$rem;
                    $temp=(int)($temp / 10);
                }
                if($num == $sum){
                    echo $num . "is an Amstrong number";
                }
                else{
                    echo $num . "is not an Amstrong number.";
                }
            }
        ?>
    </body>
</html>
