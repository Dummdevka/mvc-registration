<?php
namespace application\models;

use application\core\Model;
class News extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function readFiles(){
        $path = BASEDIR . '\\public\\news\\';
        $files = scandir($path);
        $res = [];
        foreach($files as $file){
            if($file != '.' && $file != '..'){
                $text = file_get_contents($path . $file);
                array_push($res, $text);
            }
        }
        return $res;
    }
    public function getFacts(){
        $link = "https://uselessfacts.jsph.pl/random.json";

        $params = [
            'category' => 'programming',
        ];

        $url = $link . '?' . implode($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $link);

        $res = curl_exec($ch);
        $fact = json_decode($res);
        return $fact->text;
    }
}