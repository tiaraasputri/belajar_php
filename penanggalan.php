<?php
echo date("l, d-m-Y");
echo "<br/>";
echo date("l, d M Y");
echo "<br/>";
echo time();
echo "<br/>";
echo date("l", time()+60*60*24*2); //tambah 2 hari kedepan karena ada kali 2
echo "<br/>";
echo date("l", time()-60*60*24*2); //kurang 2 hari kedepan karena ada kali 2
?>