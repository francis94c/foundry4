<?php

namespace CodeIgniter\Database;

interface Forge {
    public function addField();
    public function addKey();
    public function createTable();
    public function dropColumn();
    public function modifyColumn();
    public function addColumn();
}