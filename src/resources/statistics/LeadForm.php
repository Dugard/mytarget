<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 8:45
 */

namespace dugard\myTarget\api\resources\statistics;

use dugard\myTarget\api\resources\Resource;

/**
 * Информация доступна только по связям с кампаниями и баннерами, которые привели к успешному
 * созданию хотя бы одной лид-заявки.
 * Class LeadForm
 * @package dugard\myTarget\api\methods\statistics
 * @see https://target.my.com/doc/api/ru/resource/LeadForm
 */
class LeadForm extends Resource
{
    /**
     * @param array $filters
     * @return mixed
     */
    public function get(array $filters = [])
    {
        return $this->request('get', 'ok/lead_ads/forms', ['query' => $filters]);
    }
}