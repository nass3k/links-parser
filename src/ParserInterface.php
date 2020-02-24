<?php

namespace App\Parser;

interface ParserInterface
{
    public function process(string $url, string $tag): array;

}