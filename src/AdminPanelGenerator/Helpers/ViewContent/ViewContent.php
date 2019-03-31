<?php

namespace AdminPanelGenerator\Helpers\ViewContent;


abstract class ViewContent
{
    private $tableName;
    private $code;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;
    }

    final public function generateViewContent()
    {
        $this->getColumnsFromDatabase();
        $this->code = $this->generateCode();

        return $this->code;
    }

    public function getColumnsFromDatabase()
    {
        $this->columns = []; // DB query here...
    }

    abstract function generateCode();
}