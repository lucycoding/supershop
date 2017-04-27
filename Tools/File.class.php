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
}
