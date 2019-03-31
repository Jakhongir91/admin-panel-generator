<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Constants\ViewConstants;

class LayoutView extends ViewGenerator
{

    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    function prepareContent()
    {
        // TODO: Implement setContentType() method.
    }

    /**
     * Subclasses must assign view's name.
     *
     * @return mixed
     */
    function assignViewName(): string
    {
        return ViewConstants::$LAYOUT_VIEW_NAME;
    }
}