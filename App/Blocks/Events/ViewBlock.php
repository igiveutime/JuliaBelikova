<?php

namespace App\Blocks\Events;

use App\Blocks\View;

class ViewBlock extends View
{
    public function __construct(
        \App\Blocks\BlockFactory $blockFactory,
        \App\Models\EntityModels\ModelFactory $modelFactory
    ) {
        parent::__construct($blockFactory, $modelFactory);

        $this->stylesUrl = '/assets/css/event.css';
    }
}
