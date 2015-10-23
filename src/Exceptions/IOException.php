<?php
/**
 * PHP version 5
 *
 * @category Exceptions
 * @package  LayerShifter/TLDExtract/Exceptions
 * @author   Alexander Fedyashov <a@fedyashov.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/layershifter/TLDExtract
 */

namespace LayerShifter\TLDExtract\Exceptions;


/**
 * Exception for filesystem errors
 *
 * @category Exceptions
 * @package  LayerShifter/TLDExtract/Exceptions
 * @author   Alexander Fedyashov <a@fedyashov.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://github.com/layershifter/TLDExtract
 */
class IOException extends \Exception
{
    private $_filename;

    /**
     * Constructor of exception.
     *
     * @param string     $message  Message for exception
     * @param int        $code     Error code
     * @param \Exception $previous Parent exception
     * @param null       $filename Filename
     */
    public function __construct(
        $message, $code = 0, \Exception $previous = null, $filename = null
    ) {
        $this->_filename = $filename;
        parent::__construct($message, $code, $previous);
    }

    /**
     * Gets filename that caused error
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->_filename;
    }
}