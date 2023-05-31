<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Dhiraj Jirel">
    <title>Sorting Of Strings || PHP</title>
    <style>
        input:focus{
            outline: none;
        }
        body div{
            display: flex;
            justify-content: center;
        }
        caption{
            padding: 10px;
            border: 1px solid grey;
            border-bottom: none;
            background-color: rgba(4, 55, 6, 0.771);
            color: white;
        }
        div table{
            margin-top: 20px;
            margin-right: 15px;
            width: 20%;
            border: 1px solid grey;
        }
        input[type='submit']{
            width: 90%;
            margin-top: 10px;
            padding: 4px 8px;
            border: none;
            background-color: rgba(4, 55, 6, 0.65);
            color: white;
            border-radius: 5px;
        }
        tr:hover{
            background-color: rgba(4, 55, 6, 0.771);
            color: white;
        }  
        input[type='submit']:hover{
            cursor: pointer;
            background-color: rgba(4, 55, 6, 0.771);
            color: white;
        }
    </style>
</head>
<body>
    <?php
    $name = array();
    for ($i=0; $i < count($name); $i++) { 
        $name[$i]="";
    }
    if(isset($_POST['a'])){
        $name[0] = $_POST['a'];
    }
    if(isset($_POST['b'])){
        $name[1] = $_POST['b'];
    }
    if(isset($_POST['c'])){
        $name[2] = $_POST['c'];
    }
    if(isset($_POST['d'])){
        $name[3] = $_POST['d'];
    }
        //Trying to make it shorter
    // for ($i=0; $i < count($name); $i++) { 
    //     for ($j=0; $j < count($name); $j++) {
    //         if(isset($_POST['a'])){
    //             if($i==$j){
    //                 $name[$i] = $_POST['a'];
    //             }   
    //     }
    //     }
    ?>

    <div>
    <form action="sorting.php" method="post">
        <table>
            <caption>Students Name</caption>
            <tr>
                <td><input type="text" name="a" id=""></td>
            </tr>
            <tr>
                <td><input type="text" name="b" id=""></td>
            </tr>
            <tr>
                <td><input type="text" name="c" id=""></td>
            </tr>
            <tr>
                <td><input type="text" name="d" id=""></td>
            </tr>
        </table>
        <input type="submit" value="submit & sort">
    </form>
    <?php if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d'])){ 
    echo "
    <table>
        <caption>Students Name</caption>";
            for ($i=0; $i < count($name); $i++) { 
               echo '<tr> <td>'. $name[$i] .'</td></tr>';
            }
    "</table>";
    echo "<table>
        <caption>Students Name In Ascending Order</caption>";
            sort($name);
            for ($i=0; $i < count($name); $i++) { 
               echo'<tr> <td>'. $name[$i] .'</td></tr>';
            }
    
    "</table>";
    }?>
    </div>
    
</body>
</html>