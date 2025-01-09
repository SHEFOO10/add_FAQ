<?php

namespace Aquadic\AddFAQ\Traits;

use Spatie\Translatable\HasTranslations;

trait HasTranslatableWithJsonEscape
{
    use HasTranslations;

    /**
     * Encode the given value as JSON.
     */
    protected function asJson(mixed $value): string
    {
        return json_encode($value, JSON_UNESCAPED_UNICODE);
    }
}
