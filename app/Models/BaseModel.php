<?php
namespace Monoku\Models;
use Illuminate\Database\Eloquent\Model;

/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 9:24
 */

class BaseModel extends Model {
    public $timestamps = true;
    public $relations = [];
}