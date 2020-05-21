<?php

namespace Twig\Extra\TwigExtraBundle\Tests;

use Twig\Error\SyntaxError;
use Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor;
use PHPUnit\Framework\TestCase;

/**
 * Class MissingExtensionSuggestorTest.
 */
class MissingExtensionSuggestorTest extends TestCase
{
    /**
     * @dataProvider filterProvider
     */
    public function testSuggestFilter(string $filter, string $extension, string $package)
    {
        $this->expectException(SyntaxError::class);
        $this->expectExceptionMessage(sprintf(
            'The "%s" filter is part of the %s, which is not installed/enabled; try running "composer require %s".',
            $filter,
            $extension,
            $package
        ));
        (new MissingExtensionSuggestor())->suggestFilter($filter);
    }

    /**
     * @dataProvider functionProvider
     */
    public function testSuggestFunction(string $function, string $extension, string $package)
    {
        $this->expectException(SyntaxError::class);
        $this->expectExceptionMessage(sprintf(
            'The "%s" function is part of the %s, which is not installed/enabled; try running "composer require %s".',
            $function,
            $extension,
            $package
        ));
        (new MissingExtensionSuggestor())->suggestFunction($function);
    }

    public function filterProvider(): array
    {
        return [
            'data_uri' => [
                'data_uri',
                'HtmlExtension',
                'twig/html-extra',
            ],
            'html_to_markdown' => [
                'html_to_markdown',
                'MarkdownExtension',
                'twig/markdown-extra',
            ],
            'markdown_to_html' => [
                'markdown_to_html',
                'MarkdownExtension',
                'twig/markdown-extra',
            ],
            'country_name' => [
                'country_name',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'currency_name' => [
                'currency_name',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'currency_symbol' => [
                'currency_symbol',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'language_name' => [
                'language_name',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'locale_name' => [
                'locale_name',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'timezone_name' => [
                'timezone_name',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_currency' => [
                'format_currency',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_number' => [
                'format_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_decimal_number' => [
                'format_decimal_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_currency_number' => [
                'format_currency_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_percent_number' => [
                'format_percent_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_scientific_number' => [
                'format_scientific_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_spellout_number' => [
                'format_spellout_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_ordinal_number' => [
                'format_ordinal_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_duration_number' => [
                'format_duration_number',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_date' => [
                'format_date',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_datetime' => [
                'format_datetime',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'format_time' => [
                'format_time',
                'IntlExtension',
                'twig/intl-extra',
            ],
            'inline_css' => [
                'inline_css',
                'CssInlinerExtension',
                'twig/cssinliner-extra',
            ],
            'inky_to_html' => [
                'inky_to_html',
                'InkyExtension',
                'twig/inky-extra',
            ],
            'u' => [
                'u',
                'StringExtension',
                'twig/string-extra',
            ],
            'time_diff' => [
                'time_diff',
                'DateExtension',
                'kick-the-bucket/date-extra',
            ],
        ];
    }

    public function functionProvider(): array
    {
        return [
            'html_classes' => [
                'html_classes',
                'HtmlExtension',
                'twig/html-extra',
            ],
            'country_timezones' => [
                'country_timezones',
                'IntlExtension',
                'twig/intl-extra',
            ],
        ];
    }
}
