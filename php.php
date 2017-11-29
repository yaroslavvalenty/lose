<?php
$re=`git log`;
$rest=substr($re,7,40);
$rest2=substr($re, 152, 40);
$rest3=substr($re, 297, 40);
echo "<pre>$rest</pre>";
echo "<pre>$rest2</pre>";
echo "<pre>$rest3</pre>";
echo "<pre>$re</pre>";



?>



