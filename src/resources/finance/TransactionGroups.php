<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 9:14
 */

namespace dugard\myTarget\api\resources\finance;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс позволяет получить данные о группах транзакций пользователя
 * Class TransactionGroups
 * @package dugard\myTarget\api\methods\finance
 * @see https://target.my.com/doc/api/ru/resource/TransactionGroups
 */
class TransactionGroups extends Resource
{
    /**
     * Запрос возвращает данные о группах транзакций пользователя
     * @param array $params
     * @return mixed
     */
    public function get(array $params = [])
    {
        return $this->request('get', 'billing/transaction_groups', ['query' => $params]);
    }
}