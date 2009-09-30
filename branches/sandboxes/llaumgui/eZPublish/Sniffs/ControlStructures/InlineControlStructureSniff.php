<?php
/**
 * eZPublish_Sniffs_ControlStructures_InlineControlStructureSniff.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Guillaume Kulakowski <guillaume@llaumgui.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   $Id$
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('Generic_Sniffs_ControlStructures_InlineControlStructureSniff', true) === false) {
    $error = 'Class Generic_Sniffs_ControlStructures_InlineControlStructureSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

/**
 * eZPublish_Sniffs_ControlStructures_InlineControlStructureSniff.
 *
 * Verifies that inline control statements are not present.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Guillaume Kulakowski <guillaume@llaumgui.com>
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.2.0
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class eZPublish_Sniffs_ControlStructures_InlineControlStructureSniff extends Generic_Sniffs_ControlStructures_InlineControlStructureSniff
{

    /**
     * If true, an error will be thrown; otherwise a warning.
     *
     * @var bool
     */
    protected $error = false;

}//end class

?>
