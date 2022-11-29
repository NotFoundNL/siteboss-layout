<?php

namespace NotFound\Layout\Elements;

use NotFound\Layout\LayoutResponse;

/**
 * LayoutPage
 *
 * The page is the root element for most API calls. Do not embed a LayoutPage in other UI elements (except for containers that have no UI)
 */
class LayoutPage extends AbstractContainer
{
    public function __construct(string $title)
    {
        parent::__construct(type: 'Page');

        $this->properties->title = $title;
    }

    public function addWidget(LayoutWidget $widget)
    {
        $this->items->add($widget->build());
    }

    public function addBreadCrumb(LayoutBreadcrumb $breadcrumb)
    {
        $this->items->add($breadcrumb->build());
    }

    public function addTitle(LayoutTitle $title)
    {
        $this->items->add($title->build());
    }

    public function addBar(LayoutBar $bar)
    {
        $this->items->add($bar->build());
    }

    public function addTabs(LayoutTabs $tabs)
    {
        $this->items->add($tabs->build());
    }

    public function build(): object
    {
        return (object) [
            'type' => $this->type,
            'items' => $this->items,
            'properties' => $this->properties,
        ];
    }

    public static function unauthorized()
    {
        $page = new LayoutPage(__('response.error.unauthorized'));

        $widget = new LayoutWidget(__('response.error.unauthorizedDescription'));
        $widget->addText(new LayoutText(__('response.error.askForAdmin')));

        $page->addWidget($widget);

        $response = new LayoutResponse($page);

        return $response->build();
    }
}
