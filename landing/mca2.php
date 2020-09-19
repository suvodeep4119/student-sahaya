<?php
$file='pdf/2NDSEM.pdf';
$filename='2NDSEM.pdf';
header('Content-type:application/pdf');

header('Content-Disposition:inline;filename="'.$file1.'"');
header('Content-Transfer-Encoding:binary');
header('Accept-Ranges:bytes');
@readfile($file)

?>