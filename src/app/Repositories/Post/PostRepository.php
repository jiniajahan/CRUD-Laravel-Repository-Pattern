<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 09-Jan-18
 * Time: 10:07 PM
 */

interface PostRepository
{

    public function getAll();

    public function getById($id);

    public function create(array $attributes);

    public function update($id, array $attributes);

    public function delete($id);

    public function store(Request $request,$id);
}