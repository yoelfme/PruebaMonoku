<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 11:16
 */

namespace Monoku\Http\Controllers\API;


use Monoku\Repositories\Source\SourceRepo;
use Monoku\Vendor\Helpers\FieldX;

class SourcesController extends CrudController {

    protected $rules = array(
        'description' => 'required'
    );

    protected $module = '_sources';

    function __construct(SourceRepo $sourceRepo)
    {
        parent::__construct();
        $this->repo = $sourceRepo;
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