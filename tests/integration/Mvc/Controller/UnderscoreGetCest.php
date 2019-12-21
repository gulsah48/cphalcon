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

namespace Phalcon\Test\Integration\Mvc\Controller;

use IntegrationTester;

/**
 * Class UnderscoreGetCest
 */
class UnderscoreGetCest
{
    /**
     * Tests Phalcon\Mvc\Controller :: __get()
     *
     * @author Phalcon Team <team@phalcon.io>
     * @since  2018-11-13
     */
    public function mvcControllerUnderscoreGet(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\Controller - __get()');
        $I->skipTest('Need implementation');
    }
}
