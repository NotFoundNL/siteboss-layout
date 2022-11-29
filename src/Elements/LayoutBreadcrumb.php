<?php

namespace App\Services\AutoLayout\Elements;

/**
 * LayoutBreadcrumb
 *
 * Create data required for breadcrumbs on the UI
 */
class LayoutBreadcrumb extends AbstractLayout
{
    public function __construct()
    {
        parent::__construct(type: 'Breadcrumb');

        $this->properties->items = [];
    }

    /**
     * This will add a home element including icon to the breadcrumb.
     *
     * @return void
     */
    public function addHome()
    {
        $this->properties->items[] = (object) ['title' => __('ui.breadcrumb.home'), 'link' => '/'];
    }

    /**
     * Add an item to the breadcrumbs.
     *
     * @param  mixed  $title     Title displayed on the UI
     * @param  mixed  $link      Link (optional) Last item should always be the current path en should not link anywhere.
     * @return void
     */
    public function addItem(string $title, ?string $link = null)
    {
        $this->properties->items[] = (object) ['title' => $title, 'link' => $link];
    }
}
