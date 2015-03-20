<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 11:16
 */

namespace Monoku\Http\Controllers\API;


use Monoku\Repositories\Project\ProjectRepo;
use Monoku\Repositories\Sector\SectorRepo;
use Monoku\Repositories\Source\SourceRepo;
use Monoku\Repositories\Unit\UnitRepo;
use Monoku\Vendor\Helpers\FieldX;

class ProjectsController extends CrudController {
    protected $sourceRepo;
    protected $unitRepo;
    protected $sectorRepo;

    protected $rules = array(
        'prog' => 'required',
        'subp' => 'required',
        'proy' => 'required',
        'subp2' => 'required',
        'rec' => 'required',
        'sit' => 'required',
        'description' => 'required',
        'year' => 'required',
        'appropriation_initial' => 'required|numeric|min:0',
        'appropriation_in_force' => 'required|numeric|min:0',
        'liabilities' => 'required|numeric|min:0',
        'liabilities2' => 'required|numeric|min:0',
        'payments' => 'required|numeric|min:0',
        'id_source' => 'required|integer|min:1',
        'id_sector' => 'required|integer|min:1',
        'id_unit' => 'required|integer|min:1',
        'id_user' => 'required|integer|min:1'
    );

    protected $module = '_projects';

    function __construct(ProjectRepo $projectRepo,
                         SectorRepo $sectorRepo,
                         SourceRepo $sourceRepo,
                        UnitRepo $unitRepo)
    {
        parent::__construct();
        $this->repo = $projectRepo;
        $this->sectorRepo = $sectorRepo;
        $this->sourceRepo = $sourceRepo;
        $this->unitRepo = $unitRepo;
    }

    public function fields($data=null)
    {
        $sources = $this->sourceRepo->lists();
        $sectors = $this->sectorRepo->lists();
        $units = $this->unitRepo->lists();
        if($data)
        {

            return FieldX::make()
                ->hidden('id_user',$data->id_user)
                ->input('prog','Programa:','Programa',$data->prog)
                ->input('subp','Subprograma:','Subprograma',$data->subp)
                ->input('proy','Proyecto:','Proyecto',$data->proy)
                ->input('subp2','Subproyecto:','Subproyecto',$data->subp2)
                ->input('rec','Rec:','Rec',$data->rec)
                ->input('sit','Sit:','Sit',$data->sit)
                ->select('id_source','Fuente:',$sources,$data->id_source)
                ->select('id_sector','Sector:',$sectors,$data->id_unit)
                ->select('id_unit','Unidad Ejecutora:',$units,$data->id_unit)
                ->input('description','Descripcion:','Decription',$data->description)
                ->input('year','Año:','Año',$data->year)
                ->input('appropriation_initial','Apropiacion Inicial:','Apropiacion Inicial',$data->appropriation_initial,'number')
                ->input('appropriation_in_force','Apropiacion Vigente:','Apropiacion Vigente',$data->appropriation_in_force,'number')
                ->input('liabilities','Compromisos:','Compromisos',$data->liabilities,'number')
                ->input('liabilities2','Apropiacion Vigente:','Obligaciones',$data->liabilities2,'number')
                ->input('payments','Pagos:','Pagos',$data->payments,'number');
        }
        else
        {
            return FieldX::make()
                ->hidden('id_user',\Auth::id())
                ->input('prog','Programa:','Programa')
                ->input('subp','Subprograma:','Subprograma')
                ->input('proy','Proyecto:','Proyecto')
                ->input('subp2','Subproyecto:','Subproyecto')
                ->input('rec','Rec:','Rec')
                ->input('sit','Sit:','Sit')
                ->select('id_source','Fuente:',$sources)
                ->select('id_sector','Sector:',$sectors)
                ->select('id_unit','Unidad Ejecutora:',$units)
                ->input('description','Descripcion:','Decription')
                ->input('year','Año:','Año')
                ->input('appropriation_initial','Apropiacion Inicial:','Apropiacion Inicial',"0",'number')
                ->input('appropriation_in_force','Apropiacion Vigente:','Apropiacion Vigente',"0",'number')
                ->input('liabilities','Compromisos:','Compromisos',"0",'number')
                ->input('liabilities2','Apropiacion Vigente:','Obligaciones',"0",'number')
                ->input('payments','Pagos:','Pagos',"0",'number');
        }
    }

}