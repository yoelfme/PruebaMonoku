<?php
namespace Monoku\Repositories\Unit;
use Monoku\Repositories\Base\BaseRepo;
use Monoku\Models\Unit;

/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:24
 */

class UnitRepo extends BaseRepo {

    public function getModel()
    {
        return new Unit();
    }
}