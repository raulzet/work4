<?php

namespace Repository;

interface InterfaceRepository {
    
    public function load($id);
    public function save($entity);
    public function loadAll();
    public function search($id);
    public function saveToFile();
    
}