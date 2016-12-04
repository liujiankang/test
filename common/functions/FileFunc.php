<?php
namespace common\functions;
class FileFunc
{
    static function getFiles($dir, $number = 99999, $isRecursion = false)
    {
        if (!file_exists($dir) && is_dir($dir)) {
            return false;
        }
        $handler = opendir($dir);
        $files = [];
        while (($filename = readdir($handler)) !== false) {
            if ($filename != "." && $filename != "..") {
                if ($isRecursion && is_dir($filename)) {
                    $files[] = static::getFiles($filename, 0, $isRecursion);
                } else {
                    $files[] = $filename;
                }
            }
            if ($number > 1 and count($files) >= $number) {
                return $files;
            }
        }
        closedir($handler);
        return $files;
    }
}