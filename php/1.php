<!-- remove last , from string  -->
<?php

$myString = "(‘apple’,’orange’,’banana’),";
echo substr($myString, 0, -1) . ";";
