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
    public function __construct($apiKey, $targetLanguage);

    public function translate($text);

    public function HTTPPoster($address, $data);
}