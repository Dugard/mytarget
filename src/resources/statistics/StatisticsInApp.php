<?php
/**
 * User: Aleksandrov Artem
 * Date: 25.10.2019
 * Time: 20:20
 */

namespace dugard\myTarget\api\resources\statistics;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс возвращает статистику по аттрибуцированным с рекламными показами myTarget событиями мобильных
 * приложений по кампаниям и баннерам в разрешении 1 день
 * Class StatisticsByInApp
 * @package dugard\myTarget\api\methods\statistics
 * @see https://target.my.com/adv/api-marketing/doc/stat-v2
 */
class StatisticsInApp extends Resource
{
    /**
     * Ресурс возвращает статистику по аттрибуцированным с рекламными показами myTarget событиями мобильных
     * приложений по кампаниям и баннерам в разрешении 1 день
     * @param string $resource
     * @param string $date_from
     * @param string $date_to
     * @param string $id
     * @return mixed
     */
    public function get(string $resource, string $id, string $date_from, string $date_to)
    {
        return $this->request(
            'get',
            "statistics/inapp/$resource/day",
            ['query' => ['date_from' => $date_from, 'date_to' => $date_to, 'id' => $id]]
        );
    }
}