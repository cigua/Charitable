<?php

/**
 * 获取文件夹下文件
 * 
 */

class Helper_Dir {
    
    public static function getFilesLimit($dir, $limit=10) {
        $data = self::getFiles($dir);
        if ( ! is_array( $data ) )
            return FALSE;

        $data = Helper_Array::sort($data, 'ctime', 'DESC');
        $files = Helper_Array::page($data, 1, $limit);
        return $files;
    }

    public static function getFiles($dir, $child=FALSE, $files=array()) {
        if ( ! is_dir($dir) )
            return FALSE;

        $dh  = opendir($dir);
        $i   = 0;

        while ( $file = readdir($dh) ) {
            if ( $file == '.' || $file == '..' )
                continue;

            if ( is_dir( $dir . DIRECTORY_SEPARATOR . $file) ) {
                if ( $child === TRUE ) {
                    self::getFiles( $dir . DIRECTORY_SEPARATOR . $file, TRUE, $files );
                } else {
                    continue;
                }
            }

            $path = $dir . DIRECTORY_SEPARATOR . $file;
            $size = filesize($path);
            $files[$i++] = array(
                'file'  => $file,
                'path'  => $path,
                'size'  => $size,
                'size_format' => self::formatFileSize( $size ),
                'ctime' => filemtime($path),
            );
        }
        return $files;
    }


    static function formatFileSize($size) {
        $units = array(' B', ' KB', ' MB', ' GB', ' TB'); 
        for ($i = 0; $size >= 1024 && $i < 4; $i++) 
            $size /= 1024; 
        return round($size, 2).$units[$i]; 
    } 
}