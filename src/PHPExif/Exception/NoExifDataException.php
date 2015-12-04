<?php
/**
 * NoExifDataException implementation
 *
 * @link        http://github.com/miljar/PHPExif for the canonical source repository
 * @copyright   Copyright (c) 2013 Tom Van Herreweghe <tom@theanalogguy.be>
 * @license     http://github.com/miljar/PHPExif/blob/master/LICENSE MIT License
 * @category    PHPExif
 * @package     Exif
 */

namespace PHPExif\Exception;

/**
 * Reader class
 *
 * @category    PHPExif
 * @package     Exif
 */
class NoExifDataException extends \Exception
{
    /**
     * Could not read EXIF data from given path
     *
     * @param string $path
     * @return NoExifDataException
     */
    public static function fromFile($path)
    {
        return new self(
            sprintf(
                'Could not read EXIF data from file %1$s',
                $path
            )
        );
    }
}
