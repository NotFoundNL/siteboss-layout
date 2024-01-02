<?php

namespace NotFound\Layout\Helpers;

use NotFound\Layout\Elements\LayoutBreadcrumb;
use NotFound\Layout\Elements\LayoutPage;
use NotFound\Layout\Elements\LayoutWidget;
use NotFound\Layout\LayoutResponse;

class LayoutWidgetHelper
{
    public LayoutWidget $widget;

    private LayoutBreadcrumb $breadcrumb;

    public function __construct(
        protected string $pageTitle,
        protected string $widgetTitle
    ) {
        $this->widget = new LayoutWidget($this->widgetTitle);

        $this->breadcrumb = new LayoutBreadcrumb();
        $this->breadcrumb->addHome();
    }

    /**
     * Will return a fully built LayoutResponse object
     */
    public function response(): object
    {
        $this->breadcrumb->addItem($this->widgetTitle);

        $page = new LayoutPage($this->pageTitle);
        $page->addBreadCrumb($this->breadcrumb);
        $page->addWidget($this->widget);

        $response = new LayoutResponse();
        $response->addUIElement($page);

        return $response->build();
    }

    /**
     * Add a Breadcrumb item
     *
     * @param  mixed  $title
     * @param  mixed  $url
     */
    public function addBreadcrumb($title, $url = null): self
    {
        $this->breadcrumb->addItem($title, $url);

        return $this;
    }
}
