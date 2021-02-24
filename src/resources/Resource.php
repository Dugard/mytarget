<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 12:57
 */

namespace dugard\myTarget\api\resources;

use dugard\myTarget\api\transport\TransportInterface;

/**
 * Class Resource
 * @package dugard\myTarget\api\client
 */
abstract class Resource
{
    /** @var TransportInterface */
    private $transport;

    /**
     * Resource constructor.
     * @param TransportInterface $transport
     */
    public function __construct(TransportInterface $transport)
    {
        $this->transport = $transport;
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $params
     * @param string $pathSuffix
     * @return mixed
     */
    protected function request(string $method, string $path, array $params = [], string $pathSuffix = ".json")
    {
        return $this->transport->request($method, $path, $params, $pathSuffix);
    }
}