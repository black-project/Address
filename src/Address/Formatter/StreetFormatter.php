<?php

namespace Address\Formatter;

use Address\Street;

/**
 * Class StreetFormatter
 *
 * @author Alexandre Balmes <alexandre@lablackroom.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
class StreetFormatter implements FormatterInterface
{
    const STREET_NAME = '%n';

    const STREET_NUMBER = '%u';

    /**
     * @var Street
     */
    protected $street;

    /**
     * @param Street $street
     */
    public function __construct(Street $street)
    {
        $this->street = $street;
    }

    /**
     * @param $format
     * @return string
     */
    public function format($format)
    {
        return strtr($format, [
            self::STREET_NAME => $this->street->getName(),
            self::STREET_NUMBER => $this->street->getNumber()
        ]);
    }
}