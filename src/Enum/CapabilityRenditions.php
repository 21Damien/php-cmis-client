<?php
namespace Dkd\PhpCmis\Enum;

/*
 * This file is part of php-cmis-client.
 *
 * (c) Sascha Egerer <sascha.egerer@dkd.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Dkd\Enumeration\Enumeration;

/**
 * Capability Enum: Rendition.
 */
final class CapabilityRenditions extends Enumeration
{
    const __DEFAULT = self::NONE;
    const NONE = 'none';
    const READ = 'read';
}
