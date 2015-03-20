<?php
namespace Monoku\Repositories\Sector;
use Monoku\Models\Sector;
use Monoku\Repositories\Base\BaseRepo;

/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:25
 */

class SectorRepo extends BaseRepo {

    public function getModel()
    {
        return new Sector();
    }

}