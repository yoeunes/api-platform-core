<?php

/*
 * This file is part of the API Platform project.
 *
 * (c) Kévin Dunglas <dunglas@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter;

class_exists(\ApiPlatform\Elasticsearch\Filter\AbstractSearchFilter::class);

if (false) {
    class AbstractSearchFilter extends \ApiPlatform\Elasticsearch\Filter\AbstractSearchFilter
    {
    }
}