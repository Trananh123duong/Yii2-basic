<?php
/**
 * User: TheCodeholic
 * Date: 8/29/2019
 * Time: 9:12 AM
 */

namespace app\resource;


/**
 * Class Post
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\resource
 */
class Post extends \app\models\Post
{
    public function fields()
    {
        return ['id', 'title', 'body'];
    }

    public function extraFields()
    {
        return ['created_at', 'updated_at', 'created_by', 'comments'];
    }
}
