<?php

namespace AdminPanelGenerator\Helpers\ViewContent;


use \Illuminate\Support\Facades\DB;

abstract class ViewContent
{
    private $tableName;
    private $code;
    protected $columns;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;

        $this->generateViewContent();
    }

    final public function generateViewContent()
    {
        $this->columns = $this->getColumnsFromDatabase();
        $this->code = $this->generateCode();

        return $this->code;
    }

    public function getColumnsFromDatabase()
    {
        return DB::connection()->select('describe users');

//        dd(DB::connection()->select('describe users'));
    }

    abstract function generateCode();
}