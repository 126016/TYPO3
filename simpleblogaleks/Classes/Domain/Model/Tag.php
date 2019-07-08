<?php
namespace Ion2s\Simpleblogaleks\Domain\Model;


/***
 *
 * This file is part of the "Simple Blog Extension Aleksandra" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Aleksandra Fey <aleksandra.fey@ion2s.com>, ion2s.com
 *
 ***/
/**
 * Tags
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{

    /**
     * tagvalue
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $tagvalue = '';

    /**
     * Returns the tagvalue
     * 
     * @return string $tagvalue
     */
    public function getTagvalue()
    {
        return $this->tagvalue;
    }

    /**
     * Sets the tagvalue
     * 
     * @param string $tagvalue
     * @return void
     */
    public function setTagvalue($tagvalue)
    {
        $this->tagvalue = $tagvalue;
    }
}
