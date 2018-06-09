<?php

include "route.php";
include "bd/Connection.php";
include "src/Celas.php";

include "request.php";

$route = new Route();
$route->add('/', null, null);
$route->add('test', 'Request', 'test');
$route->add('celas/novo', 'Celas', 'novoPrisioneiro');
$result = $route->submit();

echo "<pre>";
print_r($result);