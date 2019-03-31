<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Constants\ViewConstants;
use AdminPanelGenerator\Helpers\ViewContent\EditViewContent;

class EditView extends ViewGenerator
{

    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    function prepareContent()
    {
        return (new EditViewContent($this->tableName))->generateCode();
    }

    /**
     * Subclasses must assign view's name.
     *
     * @return mixed
     */
    function assignViewName(): string
    {
        return ViewConstants::$EDIT_VIEW_NAME;
    }
}