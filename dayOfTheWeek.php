<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $dayofweek = date("w");

        switch($dayofweek){
            case 1:
                echo "It is monday";
                break;

            case 2:
                echo "It is tuesday";
                break;

            case 3:
                echo "It is wednesday";
                break;

            case 4:
                echo "It is thursday";
                break;

            case 5:
                echo  "It is friday";
                break;
            
                case 6:
                echo "It is saturday";
                break;

                case 0:
                echo "It is sunday";
                break;
            
        }
     ?>
</body>
</html>