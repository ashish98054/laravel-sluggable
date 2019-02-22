<?php

namespace Artisan\LaravelSluggable;

final class SlugBuilder
{
    private $source =  [];
    private $destination;

    public static function make(): self
    {
        return new static();
    }

    public function source(string ...$field): self
    {
        $this->source = array_merge($this->source, $field);

        return $this;
    }

    public function destination(string $field): self
    {
        $this->destination = $field;
    }
}