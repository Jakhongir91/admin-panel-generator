<?php

namespace AdminPanelGenerator;


use AdminPanelGenerator\Generators\Views\CreateView;
use AdminPanelGenerator\Generators\Views\EditView;
use AdminPanelGenerator\Generators\Views\LayoutView;
use AdminPanelGenerator\Generators\Views\ListView;

class LCED
{
    private $layout;
    private $listView;
    private $createView;
    private $editView;
    private $tableName;

    public function __construct(string $tableName)
    {
        $this->tableName = $tableName;

        $this->layout = new LayoutView($this->tableName);
        $this->listView = new ListView($this->tableName);
        $this->createView = new CreateView($this->tableName);
        $this->editView = new EditView($this->tableName);
    }

    public function __generateCRUD()
    {
        $this->layout->createBladeFile();
        $this->listView->createBladeFile();
        $this->createView->createBladeFile();
        $this->editView->createBladeFile();
    }
}