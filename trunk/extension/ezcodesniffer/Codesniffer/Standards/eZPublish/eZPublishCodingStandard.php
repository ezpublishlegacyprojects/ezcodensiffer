<?php
/**
 * PHP_eZPublish Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gaetano Giunta
 * @copyright 2009 G. Giunta
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   $Id$
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

echo "INCLUDED!!!\n";

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * PHP_eZPublish Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Gaetano Giunta
 * @copyright 2008 G. Giunta
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 0.1
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_eZSystems_eZPublishCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The PHP_CodeSniffer standard starts with the PEAR standard
     * but removes some sniffs and modifies some others.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
                'PEAR',
               );

    }//end getIncludedSniffs()


    /**
     * Return a list of external sniffs to exclude from this standard.
     *
     * The PHP_CodeSniffer standard combines the PEAR and Squiz standards
     * but removes some sniffs from the Squiz standard that clash with
     * those in the PEAR standard.
     *
     * @return array
     */
    public function getExcludedSniffs()
    {
        return array(
                'PEAR/Sniffs/Functions/FunctionCallSignatureSniff.php',
               );

    }//end getExcludedSniffs()


}//end class
?>
