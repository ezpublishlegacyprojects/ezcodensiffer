<?php
/**
 * eZPublish Coding Standard.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Guillaume Kulakowski <guillaume@llaumgui.com>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   $Id$
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_Standards_CodingStandard', true) === false) {
    throw new PHP_CodeSniffer_Exception('Class PHP_CodeSniffer_Standards_CodingStandard not found');
}

/**
 * eZPublish Coding Standard.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Guillaume Kulakowski <guillaume@llaumgui.com>
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 1.2.0
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class PHP_CodeSniffer_Standards_eZPublish_eZPublishCodingStandard extends PHP_CodeSniffer_Standards_CodingStandard
{


    /**
     * Return a list of external sniffs to include with this standard.
     *
     * The eZPublish standard uses some generic and PEAR sniffs.
     *
     * @return array
     */
    public function getIncludedSniffs()
    {
        return array(
                'PEAR',
                'Generic/Sniffs/NamingConventions/UpperCaseConstantNameSniff.php',
                'Generic/Sniffs/PHP/LowerCaseConstantSniff.php',
                'Generic/Sniffs/PHP/DisallowShortOpenTagSniff.php',
                'Generic/Sniffs/WhiteSpace/DisallowTabIndentSniff.php',
               );

    }//end getIncludedSniffs()


    /**
     * Return a list of external sniffs to exclude with this standard.
     *
     * @return array
     */
    public function getExcludedSniffs()
    {
        return array(
                'PEAR/Sniffs/ControlStructures',
                'PEAR/Sniffs/Commenting',
                'PEAR/Sniffs/Files/LineLengthSniff.php',
                'PEAR/Sniffs/Functions/FunctionCallSignatureSniff.php',
                'PEAR/Sniffs/NamingConventions/ValidClassNameSniff.php',

            /* tempory exclude */
                'PEAR/Sniffs/WhiteSpace/ScopeIndentSniff.php',
                'PEAR/Sniffs/WhiteSpace/ScopeClosingBraceSniff.php'
               );

    }//end getExcludedSniffs()


}//end class

?>