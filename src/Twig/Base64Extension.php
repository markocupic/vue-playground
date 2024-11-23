<?php

declare(strict_types=1);

/*
 * This file is part of Vue Playground.
 *
 * (c) Marko Cupic <m.cupic@gmx.ch>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/vue-playground
 */

namespace Markocupic\VuePlayground\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Base64Extension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('base64_encode', [$this, 'encode']),
            new TwigFilter('base64_decode', [$this, 'decode']),
        ];
    }

    public function encode(string $data): string
    {
        return base64_encode($data);
    }

    public function decode(string $data): string
    {
        return base64_decode($data, true);
    }
}
