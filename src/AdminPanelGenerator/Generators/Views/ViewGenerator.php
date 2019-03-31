<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Helpers\File;

abstract class ViewGenerator
{
    protected $tableName;
    private $templatePath;
    private $destinationPath;
    private $file;
    protected $content;
    protected $viewName;

    public function __construct(string $tableName)
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
        $slash = DIRECTORY_SEPARATOR;
        $this->destinationPath = __DIR__ . $slash . '..' . '..' . '..' . '..' . '..' . '..' . '..';
    }

    /**
     * Set path of template file by view name and table name.
     */
    private function setTemplatePath()
    {
        $slash = DIRECTORY_SEPARATOR;
        $this->templatePath = __DIR__ . $slash . '..' . $slash . '..' . $slash . 'Templates' . $slash . 'Views' . $slash . $this->viewName;
    }

    /**
     * Create blade view file for given table name.
     */
    final public function createBladeFile()
    {
        $this->viewName = $this->assignViewName();
        $this->setTemplatePath();
        $this->setDestinationPath();
        $this->copyFile();
        $this->content = $this->prepareContent();
        $this->writeContent();
    }

    /**
     * Copy file from template to destination path.
     */
    private function copyFile()
    {

    }

    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    abstract function prepareContent();

    /**
     * Subclasses must assign view's name.
     *
     * @return mixed
     */
    abstract function assignViewName() : string;

    /**
     * Fill code into copied view.
     */
    private function writeContent()
    {
        $this->file->write($this->destinationPath, 'key', 'key', $this->content);
    }
}