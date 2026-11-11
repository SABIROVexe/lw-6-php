<?php

declare(strict_types=1);

namespace PizzaLibrary;

abstract class Pizza
{
    protected string $name;
    protected string $sauce;
    /** @var array<int, string> */
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Началась готовка пиццы {$this->name}" . PHP_EOL;
        echo "Добавлен соус {$this->sauce}" . PHP_EOL;
        echo "Добавлены топики: " . implode(', ', $this->toppings) . PHP_EOL;
    }

    public function cut(): void
    {
        echo "Данную пиццу нарезают по диагонали" . PHP_EOL;
    }
}
