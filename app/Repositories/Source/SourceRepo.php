<?php
namespace Monoku\Repositories\Source;
use Monoku\Repositories\Base\BaseRepo;
use Monoku\Models\Source;

/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:26
 */

class SourceRepo extends BaseRepo  {

    public function getModel()
    {
        return new Source();
    }

}