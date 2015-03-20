<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:17
 */

namespace Monoku\Models;


class Project extends BaseModel {
    public $table ='projects';
    public $fillable = ['prog','subp','proy','subp2','rec','sit','description','year','appropriation_initial',
                        'appropriation_in_force','liabilities','liabilities2','payments','id_source','id_sector','id_unit','id_user'];

    public function source()
    {
        return $this->hasOne('Monoku\Models\Source','id','id_source');
    }

    public function sector()
    {
        return $this->hasOne('Monoku\Models\Sector','id','id_sector');
    }

    public function unit()
    {
        return $this->hasOne('Monoku\Models\Unit','id','id_unit');
    }
}