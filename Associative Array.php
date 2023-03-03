<html>
    <head>
        <title>
            Associative Array
        </title>
<body>
    <?php
    $people = array ("David"=>"27","Amy"=>"21","John"=>"42");
    //or you can try
    $people ['David'] ="27";
    $people ['Amy'] = "21";
    $people ['John'] ="42";
    // loop through the array and print the key-value pairs
    foreach ($people as $name => $age) {
        echo "Name: $name, Age: $age <br>";
    ?>
</body>
    </head>
</html>