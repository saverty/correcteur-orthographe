<?php

namespace Saverty\LanguageCorrector;


class LanguageCorrector
{
    protected $text;
    protected $lang;
    protected $response;

    public function __construct($text, $lang)
    {
        $this->text = $text;
        $this->lang = $lang;


        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://languagetool.org/api/v2/check', [
            'form_params' => [
                'text' => $this->text,
                'language' => $this->lang
            ]
        ]);

       $this->response = json_decode($response->getBody());

    }

    public function numberOfErrors(){
        return count($this->response->matches);
    }

    public function suggestions(){
        $errors = [];

        foreach($this->response->matches as $error){
           $errors[substr($this->text, $error->offset, $error->length)] = $error->replacements;
        }

        return $errors;
    }
}
