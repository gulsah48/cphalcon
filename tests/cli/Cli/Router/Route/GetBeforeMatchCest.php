<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalcon.io>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Phalcon\Test\Cli\Cli\Router\Route;

use CliTester;

class GetBeforeMatchCest
{
    /**
     * Tests Phalcon\Cli\Router\Route :: getBeforeMatch()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function cliRouterRouteGetBeforeMatch(CliTester $I)
    {
        $I->wantToTest('Cli\Router\Route - getBeforeMatch()');
        $I->skipTest('Need implementation');
    }
}
