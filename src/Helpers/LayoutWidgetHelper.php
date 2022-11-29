<?php

namespace App\Services\AutoLayout\Helpers;

use App\Services\AutoLayout\Elements\LayoutBreadcrumb;
use App\Services\AutoLayout\Elements\LayoutPage;
use App\Services\AutoLayout\Elements\LayoutWidget;
use App\Services\AutoLayout\LayoutResponse;

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
     *
     * @return object
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
     * @return void
     */
    public function addBreadcrumb($title, $url = null): void
    {
        $this->breadcrumb->addItem($title, $url);
    }
}
