<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class File {
    public function getCsv($filePath) {
        $return = array();
        if(file_exists($filePath)) {
            $file = fopen($filePath,'r');
            while ($data = fgetcsv($file)) {
                    $return[] = $data;
                }
                fclose($file);
        }
        return $return;
    }
    
}