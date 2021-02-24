<?php
/**
 * User: Aleksandrov Artem
 * Date: 20.10.2019
 * Time: 21:23
 */

namespace dugard\myTarget\api\resources\users;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий собрать основную информацию о пользователе
 * Class User
 * @package dugard\myTarget\api\methods\users
 * @see https://target.my.com/doc/api/ru/resource/User
 */
class User extends Resource
{
    /**
     * @param string $fields
     * @return mixed
     */
    public function get(string $fields = "")
    {
        $params = $fields ? ['fields' => $fields] : [];
        return $this->request('get', 'user', ['query' => $params]);
    }

    /**
     * @param array $params
     * @return mixed
     */
    public function post(array $params)
    {
        return $this->request('post', 'user', ['json' => $params]);
    }
}