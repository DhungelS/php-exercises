<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<form>
<input type="text" name="num1" placeholder="Number 1">
<input type="text" name="num2" placeholder="Number 2">
<select name="operator">
<option>None</option>
<option>Add</option>
<option>Subtract</option>
<option>Multiply</option>
<option>Divide</option>
</select>
<br>
<button type="submit" name="submit" value="submit">Calculate</button>
</form>
    <?php
    if(isset($_GET['submit'])){
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator){
        case "None":
            echo "You must select a method";
            break;
            case "Add":
            echo $result1 + $result2;
            break;
            case "Subtract":
            echo $result1 - $result2;
            break;
            case "Multiply":
            echo $result1 * $result2;
            break;
            case "Divide":
            echo $result1 / $result2;
            break;
        }
    }
    ?>
</body>
</html>

