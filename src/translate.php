<?php
/**
 * Created by PhpStorm.
 * User: melihcan
 * Date: 2019-04-17
 * Time: 10:01
 */

namespace TranslateAPI;

class translate implements translateInterface
{

    /**
     * @var string
     */
    public $url = "https://translate.yandex.net/api/v1.5/tr/translate";

    /**
     * translate constructor.
     * @param $apiKey
     * @param $targetLanguage
     */
    public function __construct($apiKey, $targetLanguage)
    {

        $this->url = $this->url."?lang=".$targetLanguage."&key=".$apiKey;

    }

    /**
     * @param $text
     */
    public function translate($text)
    {

        $text = "text=".$text;
        echo $this->HTTPPoster($this->url, $text);

    }

    /**
     * @param $address
     * @param $data
     * @return bool|string
     */
    public function HTTPPoster($address, $data)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $address);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT,30);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);

        return $result;


    }
}