<?php
namespace Monoku\Repositories\Project;

/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:22
 */

use Monoku\Models\Project;
use Monoku\Repositories\Base\BaseRepo;

class ProjectRepo extends BaseRepo{
    public function getModel()
    {
        return new Project();
    }
}