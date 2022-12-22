<?php

namespace App\Helpers;

class MonetaryValue
{
    public function __construct(protected int|float $value)
    {
    }

    public function getAmount(): int|float
    {
        return $this->value;
    }

    public function toCents(): self
    {
        $this->value = (int)round($this->value * 100);

        return $this;
    }

    public function toDecimal(): self
    {
        $this->value = (float)round($this->value / 100, 2);

        return $this;
    }

    public function formatted($autoConvert = true): string
    {
        $config = config('currencies.currencies')[config('currencies.default')];

        return $config['symbol'] . ' ' . number_format($autoConvert ? $this->toDecimal()->getAmount() : $this->value, 2, $config['decimal_separator'], $config['thousands_separator']);
    }
}
