<?php

declare(strict_types=1);

namespace Abryb\ENadawca\Type;

/**
 * Class representing PotwierdzenieOdbioruType
 *
 * XSD Type: potwierdzenieOdbioruType
 */
class PotwierdzenieOdbioruType
{
    /**
     * @var int $ilosc
     */
    protected $ilosc;

    /**
     * @var string $sposob
     */
    protected $sposob;

    /**
     * Gets as ilosc
     *
     * @return int
     */
    public function getIlosc()
    {
        return $this->ilosc;
    }

    /**
     * Sets a new ilosc
     *
     * @param int $ilosc
     *
     * @return self
     */
    public function setIlosc($ilosc)
    {
        $this->ilosc = $ilosc;

        return $this;
    }

    /**
     * Gets as sposob
     *
     * @return string
     */
    public function getSposob()
    {
        return $this->sposob;
    }

    /**
     * Sets a new sposob
     *
     * @param string $sposob
     *
     * @return self
     */
    public function setSposob($sposob)
    {
        $this->sposob = $sposob;

        return $this;
    }
}
