<html>
<head>
    <title>The Switch Case</title>
</head>
<body>
    <?php
        $today = date('D');
        switch($today){
            case "Mon":
                echo "Today is Monday";
                break;
            case "Tue":
                echo "Today is Tuesday";
                break;
