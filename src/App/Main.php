<?php

namespace App;

use PHP\Math\BigNumber\BigNumber;

class Main
{
    /**
     * Get a really big number
     *
     * @return string A really big number
     */
    public function gimmeABigNumber()
    {
        // make a big number
        $big = new BigNumber('8273467836243255543265432745');

        // double it for fun...
        $big->add($big);

        return $big->getValue();
    }

    public function gimmeALittleNumber()
    {
        // make a little number
        $little = 7;

        // double it so it isn't so little
        $little = \Math\Basic::add($little, $little);

        return $little;
    }
}