<?php
namespace NetDriver\Http;

use NetDriver\Enum\EnumHttpMethod;
use NetDriver\NetDriverInterface;

class HttpGetRequest extends HttpRequest
{
    /**
     * HttpRequest constructor.
     *
     * @param NetDriverInterface $driver
     * @param string $url
     * @param array $options
     */
    public function __construct($driver, $url, array $options = [])
    {
        parent::__construct($driver, EnumHttpMethod::GET, $url, $options);
    }
}