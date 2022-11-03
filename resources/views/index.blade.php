<html>
    <head>
    <link href="bootstrap.min.css"></link>
        <title>My first PHP Website</title>
    </head>
    <style>
    
    </style>

    <body>
        <?php
            echo "<p>Hello World!</p>";
        ?>
        <a href="/login"> Click here to login</a> <br>
        <a href="{{route('rs')}}"> Click here to register </a>
    </body>
</html> 