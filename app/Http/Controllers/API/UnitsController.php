<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 11:30
 */

namespace Monoku\Http\Controllers\API;

use Monoku\Repositories\Unit\UnitRepo;
use Monoku\Vendor\Helpers\FieldX;

class UnitsController extends CrudController {
    protected $rules = array(
        'description' => 'required'
    );

    protected $module = '_units';

    function __construct(UnitRepo $unitRepo)
    {
        parent::__construct();
        $this->repo = $unitRepo;
    }

    public function fields($data=null)
    {

        if($data)
        {
            return FieldX::make()
                ->input('description','Descripcion:','Descripcion',$data->description);
        }
        else
        {
            return FieldX::make()
                ->input('description','Descripcion:','Descripcion');
        }
    }
}