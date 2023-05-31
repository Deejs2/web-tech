
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
    <style>
        body{
            display: flex;
            justify-content: center;
        }
        form{
            border: 1px solid rgba(0, 0, 0, 0.399);
            padding: 12px 18px;
            border-radius: 10px;
        }
        caption{
            font-size: larger;
            border-bottom: 1px solid gray;
            margin-bottom: 8px;
        }
        input[type='submit']{
            margin-top: 8px;
        }
        input:focus{
            outline: none;
        }
        tr{
            margin: 10px 0px;
        }
    </style>
</head>
<body>

<?php
$p=$t=$r=$SI=$a="";
if ((isset($_POST['p']))||(isset($_POST['t']))||(isset($_POST['r']))){
    $p = $_POST['p'];
    $t = $_POST['t'];
    $r = $_POST['r'];
    $SI = ($p*$t*$r)/100;
    $a = $p + $SI;
}

?>


    <form action="SI-calculator.php" method="post" autocomplete="off">
        <table>
            <caption>Interest Calculator</caption>
            <tr>
                <td><label for="">Principal</label></td>
                <td><input type="text" name="p" value="<?php echo $p; ?>" id="" required></td>
            </tr>
            <tr>
                <td><label for="">Time</label></td>
                <td><input type="text" name="t" value="<?php echo $t; ?>" id="" required></td>
            </tr>
            <tr>
                <td><label for="">Rate</label></td>
                <td><select name="r" id="" value="">
                    <option value="<?php echo $r; ?>"><?php echo $r; ?>%</option>
                    <option value="8">8%</option>
                    <option value="9">9%</option>
                    <option value="10">10%</option>
                    <option value="12">12%</option>
                    <option value="13">13%</option>
                    <option value="16">16%</option>
                </select></td>
            </tr>
            <tr>
                <td><label for="">Amount</label></td>
                <td><input type="text" name="a" value="<?php echo $a; ?>" id="" disabled></td>
            </tr>
            <tr>
                <td><label for="">Interest</label></td>
                <td><input type="text" name="i" value="<?php echo $SI; ?>" id="" disabled></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>