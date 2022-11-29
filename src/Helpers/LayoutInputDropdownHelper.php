<?php

namespace NotFound\Layout\Helpers;

use App\Models\BaseModel;
use NotFound\Layout\Inputs\LayoutInputDropdown;

class LayoutInputDropdownHelper
{
    public LayoutInputDropdown $dropdown;

    /**
     * Easily create a dropdown based on a model
     *
     * @param $model Model to be queried
     * @param $label Label for the dropdown
     * @param $internal defaults to $model table name + '_id'
     * @param $tableColumnName The column name of site table to get the readable name from
     * @param $value default value for the dropdown
     */
    public function __construct(
        protected BaseModel $model,
        protected string $label = '',
        protected ?string $internal = null,
        protected string $tableColumnName = 'title',
        protected mixed $value = null,
        protected bool $disabled = false,
        protected bool $required = false,
    ) {
        if ($internal === null) {
            $internal = $model->getTable() . '_id';
        }

        $this->dropdown = new LayoutInputDropdown($internal, $label);
        $this->dropdown->setDisabled($disabled);
        $this->dropdown->setRequired($required);

        foreach ($this->model->get() as $modelItem) {
            $this->dropdown->addItem(
                $modelItem->{$this->model->getKeyName()},
                $modelItem->{$tableColumnName}
            );
        }

        if ($value !== null) {
            $this->dropdown->setValue($value);
        }
    }
}
