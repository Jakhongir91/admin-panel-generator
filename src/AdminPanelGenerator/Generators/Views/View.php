<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Helpers\File;

abstract class View
{
    protected $tableName;
    private $templatePath;
    private $destinationPath;
    private $file;
    protected $content;

    public function __construct(string $viewName, string $tableName)
    {
        $this->tableName = $tableName;
        $this->templatePath = '';
        $this->destinationPath = '';

        $this->file = new File();
    }

    /**
     * Set destination path by view name and table name.
     */
    private function setDestinationPath()
    {

    }

    /**
     * Set path of template file by view name and table name.
     */
    private function setTemplatePath()
    {

    }

    /**
     * Create blade view file for given table name.
     */
    final public function createView()
    {
        $this->copyFile();
        $this->setContentType();
        $this->writeContent();
    }

    /**
     * Copy file from template to destination path.
     */
    public function copyFile()
    {

    }

    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    abstract function setContentType();

    /**
     * Fill code into copied view.
     */
    public function writeContent()
    {

    }
}