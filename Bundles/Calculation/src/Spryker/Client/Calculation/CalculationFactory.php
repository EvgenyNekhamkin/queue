<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\Calculation;

use Spryker\Client\Calculation\Zed\CalculationStub;
use Spryker\Client\Kernel\AbstractFactory;

class CalculationFactory extends AbstractFactory
{

    /**
     * @return \Spryker\Client\Calculation\Zed\CalculationStub
     */
    public function createZedStub()
    {
        return new CalculationStub($this->createZedRequestClient());
    }

}
