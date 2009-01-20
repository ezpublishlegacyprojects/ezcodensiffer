<?php
/**
 * eZPublish_Sniffs_Functions_FunctionCallSignatureSniff.
 * based on the PEAR_Sniffs_Functions_FunctionCallSignatureSniff 
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @author    Gaetano Giunta
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   CVS: $Id$
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

/**
 *  eZPublish_Sniffs_Functions_FunctionCallSignatureSniff.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @author    Gaetano Giunta
 * @copyright 2006 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   http://matrix.squiz.net/developer/tools/php_cs/licence BSD Licence
 * @version   Release: 0.1
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class  eZPublish_Sniffs_Functions_FunctionCallSignatureSniff implements PHP_CodeSniffer_Sniff
{


    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register()
    {
        return array(T_STRING);

    }//end register()


    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param PHP_CodeSniffer_File $phpcsFile The file being scanned.
     * @param int                  $stackPtr  The position of the current token in the
     *                                        stack passed in $tokens.
     *
     * @return void
     */
    public function process(PHP_CodeSniffer_File $phpcsFile, $stackPtr)
    {
        $tokens = $phpcsFile->getTokens();

        // Find the next non-empty token.
        $next = $phpcsFile->findNext(PHP_CodeSniffer_Tokens::$emptyTokens, ($stackPtr + 1), null, true);

        if ($tokens[$next]['code'] !== T_OPEN_PARENTHESIS) {
            // Not a function call.
            return;
        }

        if (isset($tokens[$next]['parenthesis_closer']) === false) {
            // Not a function call.
            return;
        }

        // Find the previous non-empty token.
        $previous = $phpcsFile->findPrevious(PHP_CodeSniffer_Tokens::$emptyTokens, ($stackPtr - 1), null, true);
        if ($tokens[$previous]['code'] === T_FUNCTION) {
            // It's a function definition, not a function call.
            return;
        }

        if ($tokens[$previous]['code'] === T_NEW) {
            // We are creating an object, not calling a function.
            return;
        }

        if (($stackPtr + 1) !== $next) {
            // Checking this: $value = my_function[*](...).
            $error = 'Space before opening parenthesis of function call prohibited';
            $phpcsFile->addError($error, $stackPtr);
        }

        if ($tokens[($next + 1)]['code'] !== T_WHITESPACE && $tokens[($next + 1)]['code'] !== T_CLOSE_PARENTHESIS) {
            // Checking this: $value = my_function([^ ]...).
            $error = 'Space after opening parenthesis of function call missing';
            $phpcsFile->addError($error, $stackPtr);
        }

        $closer = $tokens[$next]['parenthesis_closer'];

        if ($tokens[($closer - 1)]['code'] !== T_WHITESPACE && $tokens[($closer - 1)]['code'] !== T_OPEN_PARENTHESIS) {
            // Checking this: $value = my_function(...[^ ]).
            $error = 'Space before closing parenthesis of function call prohibited';
            $phpcsFile->addError($error, $closer);
        }

        $next = $phpcsFile->findNext(T_WHITESPACE, ($closer + 1), null, true);

        if ($tokens[$next]['code'] === T_SEMICOLON) {
            if (in_array($tokens[($closer + 1)]['code'], PHP_CodeSniffer_Tokens::$emptyTokens) === true) {
                $error = 'Space after closing parenthesis of function call prohibited';
                $phpcsFile->addError($error, $closer);
            }
        }

    }//end process()


}//end class
?>
