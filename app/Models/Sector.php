<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:15
 */

namespace Monoku\Models;


class Sector extends BaseModel {

    public $table ='sectors';
    public $fillable = ['code','description'];

}