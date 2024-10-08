<?php
declare(strict_types=1);

namespace Jadob\Typed\Geo;

class Latitude
{
    public function __construct(
        protected string|float $value
    ) {
    }

    public function getValue(): float
    {
        return $this->value;
    }
}