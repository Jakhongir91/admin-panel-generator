<?php

namespace AdminPanelGenerator\Generators\Views;


use AdminPanelGenerator\Helpers\ViewContent\ListViewContent;

class ListView extends View
{

    /**
     * Subclasses must decide which content type would be used.
     *
     * @return mixed
     */
    function setContentType()
    {
        $this->content = new ListViewContent($this->tableName);
    }
}