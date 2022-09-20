<?php

namespace MichaelRubel\Formatters\Collection;

use MichaelRubel\Formatters\Formatter;

class FullNameFormatter implements Formatter
{
    /**
     * @param  string|null  $name
     */
    public function __construct(public ?string $name)
    {
        //
    }

    /**
     * Format the date.
     *
     * @return string
     */
    public function format(): string
    {
        return str($this->name)
            ->squish()
            ->headline()
            ->value();
    }
}
