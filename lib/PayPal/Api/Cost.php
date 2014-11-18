<?php

namespace PayPal\Api;

use PayPal\Common\PPModel;

/**
 * Class Cost
 *
 * Cost as a percent. For example, 10% should be entered as 10. Alternatively, cost as an amount. For example, an amount of 5 should be entered as 5.
 *
 * @package PayPal\Api
 *
 * @property \PayPal\Api\number percent
 * @property \PayPal\Api\Currency amount
 */
class Cost extends PPModel
{
    /**
     * Cost in percent. Range of 0 to 100.
     *
     * @param \PayPal\Api\number $percent
     * 
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;
        return $this;
    }

    /**
     * Cost in percent. Range of 0 to 100.
     *
     * @return \PayPal\Api\number
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Cost in amount. Range of 0 to 999999.99.
     *
     * @param \PayPal\Api\Currency $amount
     * 
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Cost in amount. Range of 0 to 999999.99.
     *
     * @return \PayPal\Api\Currency
     */
    public function getAmount()
    {
        return $this->amount;
    }

}
