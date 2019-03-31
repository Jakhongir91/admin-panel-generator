<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Constants\ViewConstants;
use AdminPanelGenerator\Helpers\ViewContent\ListViewContent;

class ListView extends ViewGenerator
{
    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    function prepareContent()
    {
        return (new ListViewContent($this->tableName))->generateCode();
    }

    /**
     * Subclasses must assign view's name.
     *
     * @return mixed
     */
    function assignViewName(): string
    {
        return ViewConstants::$LIST_VIEW_NAME;
    }
}