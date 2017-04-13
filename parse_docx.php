<?php
include_once 'demoAnswer.php';

$obj=new DocxConversion('files\1General_physician_FAQ.docx');

echo $docText= $obj->convertToText();