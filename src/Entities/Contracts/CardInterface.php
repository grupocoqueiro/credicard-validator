<?php
/**
 * Class CardInterface
 * @author andrecosta
 */

namespace CardValitador\Entities\Contracts;

/**
 * Interface CardInterface
 * @package CardValitador\Entities\Contracts
 */
interface CardInterface
{

    /**
     * CardInterface constructor.
     * @param string $number
     * @param string $cvv
     * @param string $date
     */
    public function __construct(string $number, string $cvv, string $date);

    /**
     * @return string
     */
    public function getNumber(): string;

    /**
     * @return string
     */
    public function getCvv(): string;

    /**
     * @return string
     */
    public function getDate(): string;

}