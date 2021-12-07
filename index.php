<?php

$a = array("HTML", "CSS", "PHP");

if (is_array($a)) {
    echo('<pre>');
    print_r ($a);
    echo('</pre>');
}

echo "<br>";



$b = array("Pete"=>"31", "Paul"=>"24", "Julia"=>"20");
if (is_array($b)) {
    echo('<pre>');
    print_r ($b);
    echo('</pre>');
}

?>