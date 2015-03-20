<?php
/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 10:16
 */

namespace Monoku\Models;


class Source extends BaseModel {

    public $table ='sources';
    public $fillable = ['description'];
}