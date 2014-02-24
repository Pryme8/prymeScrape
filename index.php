<!DOCTYPE html>
<!--
2014 web scrapper Designed for use with yellowpages.com
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-2.0.3.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <script>
        $.post("http://yellowpages.com", function (data) {
                
                alert(data);
            
        });
        </script>
    </body>
</html>
