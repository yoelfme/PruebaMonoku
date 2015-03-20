<?php
namespace Monoku\Repositories\Base;

/**
 * Created by PhpStorm.
 * User: YOEL
 * Date: 20/03/15
 * Time: 9:22
 */

interface BaseInterface {

    public function findOrFail($id);

    public function findWithRelations($id);

    public function findByField($field, $value,$comparator = '=');

    // Functions for CRUD
    public function create(array $data);

    public function update($entity, array $data);

    public function delete($entity);

    public function getAll();

    public function getWithRelations();
}