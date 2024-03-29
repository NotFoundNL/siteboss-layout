<?php

namespace NotFound\Layout\Elements\Table;

use NotFound\Layout\Elements\AbstractLayout;

/**
 * LayoutTable
 *
 * This will create the data needed for displaying a table in the Nuxt Frontend.
 */
class LayoutTable extends AbstractLayout
{
    /**
     * __construct
     *
     * @param  array  $headers  An array of LayoutTableHeader elements.
     * @param  array  $rows  An array of LayoutTableRow elements.
     * @param  bool  $sort  Will we be able to sort rows on the frontend.
     * @param  bool  $delete  Will we be able to delete rows on the frontend.
     * @param  bool  $edit  Will we be able to edit rows on the frontend.
     * @return void
     */
    public function __construct(bool $sort = true, bool $delete = true, bool $edit = true, bool $create = true)
    {
        parent::__construct(type: 'Table');

        $this->properties->headers = [];
        $this->properties->rows = [];
        $this->properties->sort = $sort;
        $this->properties->delete = $delete;
        $this->properties->edit = $edit;
        $this->properties->editIcon = 'edit';
        $this->properties->create = $create;
    }

    public function addHeader(LayoutTableHeader $header): self
    {
        $this->properties->headers[] = $header;

        return $this;
    }

    public function addRow(LayoutTableRow $row): self
    {
        $this->properties->rows[] = $row;

        return $this;
    }

    /**
     * Used for pagination to display the number of pages in total
     *
     * @param  $number  number of items
     */
    public function setTotalItems(int $number)
    {
        $this->properties->totalItems = $number;

        return $this;
    }

    public function setDeleteEndpoint(string $endpoint)
    {
        $this->properties->deleteEndpoint = $endpoint;

        return $this;
    }

    public function setMoveEndpoint(string $endpoint)
    {
        $this->properties->moveEndpoint = $endpoint;

        return $this;
    }

    public function setCustomEditIcon(string $iconName)
    {
        $this->properties->editIcon = $iconName;

        return $this;
    }

    public function build(): object
    {
        return (object) ['type' => $this->type, 'properties' => $this->properties];
    }
}
