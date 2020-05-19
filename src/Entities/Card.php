<?php
/**
 * Class Card
 * @author andrecosta
 */

namespace CardValitador\Entities;

use CardValitador\Entities\Contracts\CardInterface;

/**
 * Class Card
 * @package CardValitador\Entities
 */
class Card implements CardInterface
{

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $cvv;

    /**
     * @var string
     */
    private $date;

    /**
     * @inheritDoc
     * @param string $number
     * @param string $cvv
     * @param string $date
     */
    public function __construct(string $number, string $cvv, string $date)
    {
        $this->number = $number;
        $this->cvv = $cvv;
        $this->date = $date;
    }

    /**
     * @inheritDoc
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * @inheritDoc
     */
    public function getCvv(): string
    {
        return $this->cvv;
    }

    /**
     * @inheritDoc
     */
    public function getDate(): string
    {
        return $this->date;
    }

}