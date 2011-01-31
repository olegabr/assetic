<?php

/*
 * This file is part of the Assetic package.
 *
 * (c) Kris Wallsmith <kris.wallsmith@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Assetic\Test\Filter;

use Assetic\Filter\LessFilter;

class LessFilterTest extends \PHPUnit_Framework_TestCase
{
    public function testInterface()
    {
        $filter = new LessFilter();
        $this->assertInstanceOf('Assetic\\Filter\\FilterInterface', $filter, 'LessFilter implements FilterInterface');
    }
}
