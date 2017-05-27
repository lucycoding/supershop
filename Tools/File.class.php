<?php
namespace Tools;

/**
 * Description of File
 *
 * @author ebeitech_lucy
 */
class File {
    const PATH = '../Public/file';

    public function getNoteFilterContent() {
        $filePath = './Public/file/NoteFilterContent.txt';
        $file = fopen($filePath, "r") or die("file not found!");
        $content = fread($file, filesize($filePath));
        return explode("\n",$content);
//        echo fread($file, filesize($filePath));
//        fclose($file);
    }
    
    public function writeContent($content = "", $filePath = "") {
        if($filePath === "") $filePath = "./Public/file/test";
        $file = fopen($filePath, "a+") or die("file not found!");
        echo fwrite($file, $content."\r\n");
        fclose($file);
    }
        
    public function readContent($filePath = "", $readSize = "") {
        if($filePath === "" || !is_string($filePath)) $filePath = "./Public/file/test";
        $file = fopen($filePath, "r") or die("file not found!");
        if($readSize === "" || !is_int($readSize)) $readSize = filesize($filePath);
        echo fread($file, $readSize);
        fclose($file);
    }
}
