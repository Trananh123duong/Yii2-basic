<?php
/**
 * User: TheCodeholic
 * Date: 8/29/2019
 * Time: 9:12 AM
 */

namespace app\resource;


/**
 * Class Comment
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\resource
 */
class Comment extends \app\models\Comment
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {
        return ['post'];
    }
}
