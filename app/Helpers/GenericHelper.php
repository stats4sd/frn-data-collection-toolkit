<?php

namespace App\Helpers;

use GuzzleHttp\Client;

class GenericHelper
{

    public static function fileSizeToHuman($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB' ,'PB'];

        for($i = 0; $bytes > 1024; $i++){
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

    public static function validateRecaptcha ($recaptchaResponse)
    {
        // validate recaptcha vs google
        $client = new Client();

        $postObject = [
        'form_params' => [
                'secret' => config('services.recaptcha.secret'),
                'response' => $_POST["g-recaptcha-response"],
            ]
        ];

        $res = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', $postObject);

        $response = json_decode($res->getBody(true));

        return $response->success;
    }

    public static function slugify_filename ($original, $prepends)
    {
        $fileNameNoExt = explode(".",$original->getClientOriginalName());
        $fileExt = array_last($fileNameNoExt);
        array_pop($fileNameNoExt);
        $fileNameNoExt = implode("",$fileNameNoExt);

        $new_file_name = $prepends . "_" . str_slug($fileNameNoExt) . "." . $original->getClientOriginalExtension();

        return $new_file_name;

    }
}