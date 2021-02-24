<?php
/**
 * User: Aleksandrov Artem
 * Date: 21.10.2019
 * Time: 8:21
 */

namespace dugard\myTarget\api\resources\advert_objects;

use dugard\myTarget\api\resources\Resource;

/**
 * Ресурс, позволяющий собрать информацию о пакетах. Пакет — это набор характеристик услуг, предоставляемых
 * пользователю в рамках рекламных кампаний. Например, пакет определяет список доступных таргетингов и набор
 * площадок, на которых будут показываться объявления. Идентификатор пакета необходим для создания рекламной кампании.
 * Class Packages
 * @package dugard\myTarget\api\methods\advert_objects
 * @see https://target.my.com/doc/api/ru/resource/Packages
 */
class Packages extends Resource
{
    /**
     * @return mixed
     */
    public function get()
    {
        return $this->request('get', 'packages');
    }
}