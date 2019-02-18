<?php
include_once ('Classes/PHPExcel.php');

$excel=new PHPExcel();

$excel->setActiveSheetIndex(0)
->setCellvalue('A1','Hello')
->setCellvalue('B1','Aniket');

$file=PHPExcel_IOFactory::createWriter($excel,'Excel2007');
if($file->save('Code/CodeTest.xlsx')){echo "Not";}
else
{echo "File Created Successfully...";}
	
?>