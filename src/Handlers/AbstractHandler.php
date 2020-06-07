<?php
/**
 * @copyright Copyright (c) 2020 Joshua Smith
 * @license   See LICENSE file
 */

namespace phpWhois\Handlers;

require_once __DIR__ . '/../whois.parser.php';

/**
 * AbstractHandler
 */
abstract class AbstractHandler implements HandlerInterface
{
    /**
     * @param string[] $lines
     *
     * @return string[]
     */
    protected function removeBlankLines(array $lines): array
    {
        return array_filter(
            $lines,
            static function ($s) {
                return !empty($s);
            }
        );
    }

    protected function easy_parser(
        $data_str,
        $items,
        $date_format,
        $translate = [],
        $has_org = false,
        $partial_match = false,
        $def_block = false
    ) {
        return easy_parser(
            $data_str,
            $items,
            $date_format,
            $translate,
            $has_org,
            $partial_match,
            $def_block
        );
    }
}
