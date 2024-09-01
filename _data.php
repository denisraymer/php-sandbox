<?php
//$start = microtime(true);
//echo time()."<br />";
//echo $start."<br />";

echo date('Y,m,d H:i:s')."<br />";
echo date('d')."<br />";

echo getdate(time())['year']."<br />";
echo checkdate(7,9,1998);
