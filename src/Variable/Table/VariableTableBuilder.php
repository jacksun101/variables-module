<?php namespace Anomaly\VariablesModule\Variable\Table;

use Anomaly\Streams\Platform\Stream\Table\StreamTableBuilder;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class VariableTableBuilder
 *
 * @link          http://pyrocms.com/
 * @author        PyroCMS, Inc. <support@pyrocms.com>
 * @author        Ryan Thompson <ryan@pyrocms.com>
 * @package       Anomaly\VariablesModule\Variable\Table
 */
class VariableTableBuilder extends StreamTableBuilder
{

    /**
     * The streams namespace.
     *
     * @var string
     */
    protected $namespace = 'variables';

    /**
     * The table columns.
     *
     * @var array
     */
    protected $columns = [
        [
            'heading' => 'module::field.group.name',
            'value'   => 'entry.name'
        ],
        [
            'heading' => 'module::field.slug.name',
            'value'   => 'entry.slug'
        ],
        [
            'heading' => 'streams::field.description.name',
            'value'   => 'entry.description'
        ]
    ];

    /**
     * The table buttons.
     *
     * @var array
     */
    protected $buttons = [
        'edit' => [
            'text' => 'module::button.manage'
        ]
    ];
}
