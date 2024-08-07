<?php

namespace Foo;

final class Util
{
    /**
     * Encode the provided object as a JSON and echo it.
     *
     * @param array<mixed>|object $obj
     * @phpstan-param int-mask-of<JSON_FORCE_OBJECT|JSON_HEX_QUOT|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS|JSON_INVALID_UTF8_IGNORE|JSON_INVALID_UTF8_SUBSTITUTE|JSON_NUMERIC_CHECK|JSON_PARTIAL_OUTPUT_ON_ERROR|JSON_PRESERVE_ZERO_FRACTION|JSON_PRETTY_PRINT|JSON_UNESCAPED_LINE_TERMINATORS|JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_THROW_ON_ERROR> $flags
     */
    public static function echoJson($obj, int $flags = JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP): void
    {
        header('Content-Type: application/json; charset=utf-8');
        header('X-Content-Type-Options: nosniff');

        echo json_encode($obj, $flags);
    }
}
