<?php
/**
 * Created by PhpStorm.
 * User: melihcan
 * Date: 2019-04-17
 * Time: 10:04
 */

namespace TranslateAPI;

Interface translateInterface
{
    /**
     * translateInterface constructor.
     * @param $apiKey
     * @param $targetLanguage
     */
    public function __construct($apiKey, $targetLanguage);

    /**
     * @param $text
     * @return mixed
     */
    public function translate($text);

    /**
     * @param $address
     * @param $data
     * @return mixed
     */
    public function HTTPPoster($address, $data);
}