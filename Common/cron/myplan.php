<?php
use Tools\File;
// 写入文件
$FileOperator = new File();
$FileOperator->writeContent(time());
