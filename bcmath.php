<?php

// Start of bcmath v.7.0.4-7ubuntu2

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Add two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bcadd.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string The sum of the two operands, as a string.
 */
function bcadd(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Subtract one arbitrary precision number from another
 * @link http://php.net/manual/en/function.bcsub.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string The result of the subtraction, as a string.
 */
function bcsub(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Multiply two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bcmul.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result as a string.
 */
function bcmul(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Divide two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bcdiv.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result of the division as a string, or <b>NULL</b> if
 * <i>right_operand</i> is 0.
 */
function bcdiv(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get modulus of an arbitrary precision number
 * @link http://php.net/manual/en/function.bcmod.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $modulus <p>
 * The modulus, as a string.
 * </p>
 * @return string the modulus as a string, or <b>NULL</b> if
 * <i>modulus</i> is 0.
 */
function bcmod(string $left_operand, string $modulus): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Raise an arbitrary precision number to another
 * @link http://php.net/manual/en/function.bcpow.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result as a string.
 */
function bcpow(string $left_operand, string $right_operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Get the square root of an arbitrary precision number
 * @link http://php.net/manual/en/function.bcsqrt.php
 * @param string $operand <p>
 * The operand, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the square root as a string, or <b>NULL</b> if
 * <i>operand</i> is negative.
 */
function bcsqrt(string $operand, int $scale = 0): string {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Set default scale parameter for all bc math functions
 * @link http://php.net/manual/en/function.bcscale.php
 * @param int $scale <p>
 * The scale factor.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function bcscale(int $scale): bool {}

/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * Compare two arbitrary precision numbers
 * @link http://php.net/manual/en/function.bccomp.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param int $scale [optional] <p>
 * The optional <i>scale</i> parameter is used to set the
 * number of digits after the decimal place which will be used in the
 * comparison.
 * </p>
 * @return int 0 if the two operands are equal, 1 if the
 * <i>left_operand</i> is larger than the
 * <i>right_operand</i>, -1 otherwise.
 */
function bccomp(string $left_operand, string $right_operand, int $scale = 0): int {}

/**
 * (PHP 5, PHP 7)<br/>
 * Raise an arbitrary precision number to another, reduced by a specified modulus
 * @link http://php.net/manual/en/function.bcpowmod.php
 * @param string $left_operand <p>
 * The left operand, as a string.
 * </p>
 * @param string $right_operand <p>
 * The right operand, as a string.
 * </p>
 * @param string $modulus <p>
 * The modulus, as a string.
 * </p>
 * @param int $scale [optional]
 * @return string the result as a string, or <b>NULL</b> if <i>modulus</i>
 * is 0.
 */
function bcpowmod(string $left_operand, string $right_operand, string $modulus, int $scale = 0): string {}

// End of bcmath v.7.0.4-7ubuntu2
?>
