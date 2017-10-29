<?php

namespace app\models;

use yii;

class image {
    static public function getImage ($j) {
        include_once('c:\OpenServer\domains\localhost\simplehtmldom_1_5\simple_html_dom.php');
        $html = file_get_html('http://mirsamoletov.info/grazhdanskie-samolety/');
        $pic = array();
        foreach($html->find('img[width="200"]') as $e){
            $pic[] = $e->outertext;
        }
        return $pic[$j];
    }
}