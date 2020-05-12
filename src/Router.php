<?php
declare(strict_types=1);

namespace Azonmedia\OptimizedRouting;

/**
 * Optimizes the order of the routes in memory based on the number of requests.
 * This is possible only in persistent memory model like Swoole
 */
class Router extends \Azonmedia\Routing\Router
{

}
