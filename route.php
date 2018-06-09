<?php

class Route
{
    private $uri = [];
 
    public function add($uri, $class = null, $method = null)
    {
        $this->uri[$uri] = [
            'class' => $class,
            'method' => $method
        ];
    }

    public function submit()
    {
        $url = isset($_GET['uri']) ? $_GET['uri'] : '/';

        if ($this->uri[$url]) {
            if ($this->uri[$url]['class']) {
                $class = $this->uri[$url]['class'];
                $obj = new $class();
            }
            if ($this->uri[$url]['method']) {
                $method = $this->uri[$url]['method'];
                return $obj->$method();
            }
        }
    }
}