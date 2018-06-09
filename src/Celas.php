<?php

use bd\Connection;

class Celas
{
    public function novoPrisioneiro()
    {
        $conn = new Connection();
        return json_encode($conn->insert());
    }
}