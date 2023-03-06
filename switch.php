<html>
<head>
    <title>The Switch Case</title>
</head>
<body>
    <?php
        $today = "Mon";
        switch($today){
            case "Mon":
                echo "Today is Monday";
                break;
            case "Tue":
                echo "Today is Tuesday";
                break;
            case "Wed":
                echo "Today is Wednesday";
                break;
            case "Thu":
                echo "Today is Thursday";
                break;
            case "Fri":
                echo "Today is Friday";
                break;
            case "Sat":
                echo "Today is Saturday";
                break;
            case "Sun":
                echo "Today is Sunday";
                break;
            default:
                echo "invalid Day";
                break;
        }
    ?>
</body>
</html>
