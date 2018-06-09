<?php

class Request
{
    public function test()
    {
        $url = 'http://localhost/bd-api/celas/novo';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        $res = curl_exec($ch);
        curl_close($ch);

        return $res;
    }
}