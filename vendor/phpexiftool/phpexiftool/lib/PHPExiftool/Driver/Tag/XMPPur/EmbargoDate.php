<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPPur;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class EmbargoDate extends AbstractTag
{

    protected $Id = 'embargoDate';

    protected $Name = 'EmbargoDate';

    protected $FullName = 'XMP::pur';

    protected $GroupName = 'XMP-pur';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-pur';

    protected $g2 = 'Document';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Embargo Date';

    protected $local_g2 = 'Time';

    protected $flag_Avoid = true;

    protected $flag_List = true;

    protected $flag_Bag = true;

}
