<?php

namespace ProductImporter\Utils;

class Utility {

    public function readJsonFile($filePath) {
        $jsonData = "";
        $data = fopen($filePath,"r")or die("Unable to open file!");

        while(!feof($data)) {
            $jsonData .= fgets($data);
        }

        fclose($data);

        return json_decode($jsonData);
    }
}