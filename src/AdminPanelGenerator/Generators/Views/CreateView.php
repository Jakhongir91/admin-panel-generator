<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Constants\ViewConstants;
use AdminPanelGenerator\Helpers\ViewContent\CreateViewContent;

class CreateView extends ViewGenerator
{

    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    function prepareContent()
    {
        return (new CreateViewContent($this->tableName))->generateCode();
    }

    /**
     * Subclasses must assign view's name.
     *
     * @return mixed
     */
    function assignViewName(): string
    {
        return ViewConstants::$CREATE_VIEW_NAME;
    }
}