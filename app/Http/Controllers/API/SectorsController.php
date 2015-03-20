<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 11:32
 */

namespace Monoku\Http\Controllers\API;

use Monoku\Repositories\Sector\SectorRepo;
use Monoku\Vendor\Helpers\FieldX;

class SectorsController extends CrudController {
    protected $rules = array(
        'code' => 'required',
        'description' => 'required'
    );

    protected $module = '_sectors';

    function __construct(SectorRepo $sectorRepo)
    {
        parent::__construct();
        $this->repo = $sectorRepo;
    }

    public function fields($data=null)
    {

        if($data)
        {
            return FieldX::make()
                ->input('code','Codigo:','Codigo',$data->code)
                ->input('description','Descripcion:','Descripcion',$data->description);
        }
        else
        {
            return FieldX::make()
                ->input('code','Codigo:','Codigo')
                ->input('description','Descripcion:','Descripcion');
        }
    }
}