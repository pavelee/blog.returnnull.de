<?php

namespace Returnnull;

interface Page
{
    public function run(Request $request): Response;

    public function getSupportedUrlRegexes(): array;

    public function isUrlSupported(Request $request): bool;

    public function isProtected(): bool;
}