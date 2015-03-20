<?php namespace Monoku\Repositories\User;
use Monoku\Models\User;
use Monoku\Repositories\Base\BaseRepo;
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:27
 */

class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User();
    }

}