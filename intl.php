<?php

// Start of intl v.1.1.0

class Collator  {
	const DEFAULT_VALUE = -1;
	const PRIMARY = 0;
	const SECONDARY = 1;
	const TERTIARY = 2;
	const DEFAULT_STRENGTH = 2;
	const QUATERNARY = 3;
	const IDENTICAL = 15;
	const OFF = 16;
	const ON = 17;
	const SHIFTED = 20;
	const NON_IGNORABLE = 21;
	const LOWER_FIRST = 24;
	const UPPER_FIRST = 25;

	/**
	 * <p>
	 * Sort strings with different accents from the back of the string. This
	 * attribute is automatically set to
	 * On
	 * for the French locales and a few others. Users normally would not need
	 * to explicitly set this attribute. There is a string comparison
	 * performance cost when it is set On,
	 * but sort key length is unaffected. Possible values are:
	 * <b>Collator::ON</b>
	 * <b>Collator::OFF</b)<default)
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * <p>
	 * FRENCH_COLLATION rules
	 * <p>
	 * F=OFF cote &lt; coté &lt; côte &lt; côté
	 * F=ON cote &lt; côte &lt; coté &lt; côté
	 * </p>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const FRENCH_COLLATION = 0;

	/**
	 * <p>
	 * The Alternate attribute is used to control the handling of the so called
	 * variable characters in the UCA: whitespace, punctuation and symbols. If
	 * Alternate is set to NonIgnorable
	 * (N), then differences among these characters are of the same importance
	 * as differences among letters. If Alternate is set to
	 * Shifted
	 * (S), then these characters are of only minor importance. The
	 * Shifted value is often used in combination with
	 * Strength
	 * set to Quaternary. In such a case, whitespace, punctuation, and symbols
	 * are considered when comparing strings, but only if all other aspects of
	 * the strings (base letters, accents, and case) are identical. If
	 * Alternate is not set to Shifted, then there is no difference between a
	 * Strength of 3 and a Strength of 4. For more information and examples,
	 * see Variable_Weighting in the
	 * UCA.
	 * The reason the Alternate values are not simply
	 * On and Off
	 * is that additional Alternate values may be added in the future. The UCA
	 * option Blanked is expressed with Strength set to 3, and Alternate set to
	 * Shifted. The default for most locales is NonIgnorable. If Shifted is
	 * selected, it may be slower if there are many strings that are the same
	 * except for punctuation; sort key length will not be affected unless the
	 * strength level is also increased.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::NON_IGNORABLE</b)<default)
	 * <b>Collator::SHIFTED</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * <p>
	 * ALTERNATE_HANDLING rules
	 * <p>
	 * S=3, A=N di Silva &lt; Di Silva &lt; diSilva &lt; U.S.A. &lt; USA
	 * S=3, A=S di Silva = diSilva &lt; Di Silva &lt; U.S.A. = USA
	 * S=4, A=S di Silva &lt; diSilva &lt; Di Silva &lt; U.S.A. &lt; USA
	 * </p>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const ALTERNATE_HANDLING = 1;

	/**
	 * <p>
	 * The Case_First attribute is used to control whether uppercase letters
	 * come before lowercase letters or vice versa, in the absence of other
	 * differences in the strings. The possible values are
	 * Uppercase_First
	 * (U) and Lowercase_First
	 * (L), plus the standard Default
	 * and Off.
	 * There is almost no difference between the Off and Lowercase_First
	 * options in terms of results, so typically users will not use
	 * Lowercase_First: only Off or Uppercase_First. (People interested in the
	 * detailed differences between X and L should consult the Collation
	 * Customization). Specifying either L or U won't affect string comparison
	 * performance, but will affect the sort key length.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::OFF</b)<default)
	 * <b>Collator::LOWER_FIRST</b>
	 * <b>Collator::UPPER_FIRST</b>
	 * <b>Collator:DEFAULT</b>
	 * </p>
	 * <p>
	 * CASE_FIRST rules
	 * <p>
	 * C=X or C=L "china" &lt; "China" &lt; "denmark" &lt; "Denmark"
	 * C=U "China" &lt; "china" &lt; "Denmark" &lt; "denmark"
	 * </p>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const CASE_FIRST = 2;

	/**
	 * <p>
	 * The Case_Level attribute is used when ignoring accents but not case. In
	 * such a situation, set Strength to be Primary,
	 * and Case_Level to be On.
	 * In most locales, this setting is Off by default. There is a small
	 * string comparison performance and sort key impact if this attribute is
	 * set to be On.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::OFF</b)<default)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * <p>
	 * CASE_LEVEL rules
	 * <p>
	 * S=1, E=X role = Role = rôle
	 * S=1, E=O role = rôle &lt; Role
	 * </p>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const CASE_LEVEL = 3;

	/**
	 * <p>
	 * The Normalization setting determines whether text is thoroughly
	 * normalized or not in comparison. Even if the setting is off (which is
	 * the default for many locales), text as represented in common usage will
	 * compare correctly (for details, see UTN #5). Only if the accent marks
	 * are in noncanonical order will there be a problem. If the setting is
	 * On,
	 * then the best results are guaranteed for all possible text input.
	 * There is a medium string comparison performance cost if this attribute
	 * is On,
	 * depending on the frequency of sequences that require normalization.
	 * There is no significant effect on sort key length. If the input text is
	 * known to be in NFD or NFKD normalization forms, there is no need to
	 * enable this Normalization option.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::OFF</b)<default)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const NORMALIZATION_MODE = 4;

	/**
	 * <p>
	 * The ICU Collation Service supports many levels of comparison (named
	 * "Levels", but also known as "Strengths"). Having these categories
	 * enables ICU to sort strings precisely according to local conventions.
	 * However, by allowing the levels to be selectively employed, searching
	 * for a string in text can be performed with various matching conditions.
	 * For more detailed information, see
	 * <b>collator_set_strength</b> chapter.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::PRIMARY</b>
	 * <b>Collator::SECONDARY</b>
	 * <b>Collator::TERTIARY</b)<default)
	 * <b>Collator::QUATERNARY</b>
	 * <b>Collator::IDENTICAL</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const STRENGTH = 5;

	/**
	 * <p>
	 * Compatibility with JIS x 4061 requires the introduction of an additional
	 * level to distinguish Hiragana and Katakana characters. If compatibility
	 * with that standard is required, then this attribute should be set
	 * On,
	 * and the strength set to Quaternary. This will affect sort key length
	 * and string comparison string comparison performance.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::OFF</b)<default)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const HIRAGANA_QUATERNARY_MODE = 6;

	/**
	 * <p>
	 * When turned on, this attribute generates a collation key for the numeric
	 * value of substrings of digits. This is a way to get '100' to sort AFTER
	 * '2'.
	 * </p>
	 * <p>
	 * Possible values are:
	 * <b>Collator::OFF</b)<default)
	 * <b>Collator::ON</b>
	 * <b>Collator::DEFAULT_VALUE</b>
	 * </p>
	 * @link http://php.net/manual/en/intl.collator-constants.php
	 */
	const NUMERIC_COLLATION = 7;
	const SORT_REGULAR = 0;
	const SORT_STRING = 1;
	const SORT_NUMERIC = 2;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Create a collator
	 * @link http://php.net/manual/en/collator.construct.php
	 * @param string $locale <p>
	 * The locale whose collation rules should be used. Special values for
	 * locales can be passed in - if null is passed for the locale, the
	 * default locale's collation rules will be used. If "root" is passed,
	 * UCA rules will be used.
	 * </p>
	 * <p>
	 * The Locale attribute is typically the most important attribute for
	 * correct sorting and matching, according to the user expectations in
	 * different countries and regions. The default
	 * UCA
	 * ordering will only sort a few languages such as Dutch and Portuguese
	 * correctly ("correctly" meaning according to the normal expectations for
	 * users of the languages). Otherwise, you need to supply the locale to
	 * UCA in order to properly collate text for a given language. Thus a
	 * locale needs to be supplied so as to choose a collator that is
	 * correctly tailored for that locale. The choice of a locale will
	 * automatically preset the values for all of the attributes to something
	 * that is reasonable for that locale. Thus most of the time the other
	 * attributes do not need to be explicitly set. In some cases, the choice
	 * of locale will make a difference in string comparison performance
	 * and/or sort key length.
	 * </p>
	 */
	public function __construct(string $locale) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Create a collator
	 * @link http://php.net/manual/en/collator.create.php
	 * @param string $locale <p>
	 * The locale containing the required collation rules. Special values for
	 * locales can be passed in - if null is passed for the locale, the
	 * default locale collation rules will be used. If empty string ("") or
	 * "root" are passed, UCA rules will be used.
	 * </p>
	 * @return Collator Return new instance of <b>Collator</b> object, or <b>NULL</b>
	 * on error.
	 */
	public static function create(string $locale): Collator {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Compare two Unicode strings
	 * @link http://php.net/manual/en/collator.compare.php
	 * @param string $str1 <p>
	 * The first string to compare.
	 * </p>
	 * @param string $str2 <p>
	 * The second string to compare.
	 * </p>
	 * @return int Return comparison result:</p>
	 * <p>
	 * <p>
	 * 1 if <i>str1</i> is greater than
	 * <i>str2</i> ;
	 * </p>
	 * <p>
	 * 0 if <i>str1</i> is equal to
	 * <i>str2</i>;
	 * </p>
	 * <p>
	 * -1 if <i>str1</i> is less than
	 * <i>str2</i> .
	 * </p>
	 * On error
	 * boolean
	 * <b>FALSE</b>
	 * is returned.
	 */
	public function compare(string $str1, string $str2): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Sort array using specified collator
	 * @link http://php.net/manual/en/collator.sort.php
	 * @param array $arr <p>
	 * Array of strings to sort.
	 * </p>
	 * @param int $sort_flag [optional] <p>
	 * Optional sorting type, one of the following:
	 * </p>
	 * <p>
	 * <p>
	 * <b>Collator::SORT_REGULAR</b>
	 * - compare items normally (don't change types)
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function sort(array &$arr, int $sort_flag = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Sort array using specified collator and sort keys
	 * @link http://php.net/manual/en/collator.sortwithsortkeys.php
	 * @param array $arr <p>Array of strings to sort</p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function sortWithSortKeys(array &$arr): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Sort array maintaining index association
	 * @link http://php.net/manual/en/collator.asort.php
	 * @param array $arr <p>Array of strings to sort.</p>
	 * @param int $sort_flag [optional] <p>
	 * Optional sorting type, one of the following:
	 * <p>
	 * <b>Collator::SORT_REGULAR</b>
	 * - compare items normally (don't change types)
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function asort(array &$arr, int $sort_flag = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get collation attribute value
	 * @link http://php.net/manual/en/collator.getattribute.php
	 * @param int $attr <p>
	 * Attribute to get value for.
	 * </p>
	 * @return int Attribute value, or boolean <b>FALSE</b> on error.
	 */
	public function getAttribute(int $attr): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set collation attribute
	 * @link http://php.net/manual/en/collator.setattribute.php
	 * @param int $attr <p>Attribute.</p>
	 * @param int $val <p>
	 * Attribute value.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setAttribute(int $attr, int $val): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get current collation strength
	 * @link http://php.net/manual/en/collator.getstrength.php
	 * @return int current collation strength, or boolean <b>FALSE</b> on error.
	 */
	public function getStrength(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set collation strength
	 * @link http://php.net/manual/en/collator.setstrength.php
	 * @param int $strength <p>Strength to set.</p>
	 * <p>
	 * Possible values are:
	 * <p>
	 * <b>Collator::PRIMARY</b>
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setStrength(int $strength): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the locale name of the collator
	 * @link http://php.net/manual/en/collator.getlocale.php
	 * @param int $type <p>
	 * You can choose between valid and actual locale (
	 * <b>Locale::VALID_LOCALE</b> and
	 * <b>Locale::ACTUAL_LOCALE</b>,
	 * respectively).
	 * </p>
	 * @return string Real locale name from which the collation data comes. If the collator was
	 * instantiated from rules or an error occurred, returns
	 * boolean <b>FALSE</b>.
	 */
	public function getLocale(int $type): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get collator's last error code
	 * @link http://php.net/manual/en/collator.geterrorcode.php
	 * @return int Error code returned by the last Collator API function call.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get text for collator's last error code
	 * @link http://php.net/manual/en/collator.geterrormessage.php
	 * @return string Description of an error occurred in the last Collator API function call.
	 */
	public function getErrorMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.11, PHP 7, PECL intl &gt;= 1.0.3)<br/>
	 * Get sorting key for a string
	 * @link http://php.net/manual/en/collator.getsortkey.php
	 * @param string $str <p>
	 * The string to produce the key from.
	 * </p>
	 * @return string the collation key for the string. Collation keys can be compared directly instead of strings.
	 */
	public function getSortKey(string $str): string {}

}

class NumberFormatter  {

	/**
	 * Decimal format defined by pattern
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PATTERN_DECIMAL = 0;

	/**
	 * Decimal format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DECIMAL = 1;

	/**
	 * Currency format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const CURRENCY = 2;

	/**
	 * Percent format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PERCENT = 3;

	/**
	 * Scientific format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const SCIENTIFIC = 4;

	/**
	 * Spellout rule-based format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const SPELLOUT = 5;

	/**
	 * Ordinal rule-based format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ORDINAL = 6;

	/**
	 * Duration rule-based format
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DURATION = 7;

	/**
	 * Rule-based format defined by pattern
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PATTERN_RULEBASED = 9;

	/**
	 * Alias for PATTERN_DECIMAL
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const IGNORE = 0;

	/**
	 * Default format for the locale
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DEFAULT_STYLE = 1;

	/**
	 * Rounding mode to round towards positive infinity.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_CEILING = 0;

	/**
	 * Rounding mode to round towards negative infinity.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_FLOOR = 1;

	/**
	 * Rounding mode to round towards zero.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_DOWN = 2;

	/**
	 * Rounding mode to round away from zero.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_UP = 3;

	/**
	 * Rounding mode to round towards the "nearest neighbor" unless both
	 * neighbors are equidistant, in which case, round towards the even
	 * neighbor.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_HALFEVEN = 4;

	/**
	 * Rounding mode to round towards "nearest neighbor" unless both neighbors
	 * are equidistant, in which case round down.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_HALFDOWN = 5;

	/**
	 * Rounding mode to round towards "nearest neighbor" unless both neighbors
	 * are equidistant, in which case round up.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUND_HALFUP = 6;

	/**
	 * Pad characters inserted before the prefix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PAD_BEFORE_PREFIX = 0;

	/**
	 * Pad characters inserted after the prefix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PAD_AFTER_PREFIX = 1;

	/**
	 * Pad characters inserted before the suffix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PAD_BEFORE_SUFFIX = 2;

	/**
	 * Pad characters inserted after the suffix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PAD_AFTER_SUFFIX = 3;

	/**
	 * Parse integers only.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PARSE_INT_ONLY = 0;

	/**
	 * Use grouping separator.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const GROUPING_USED = 1;

	/**
	 * Always show decimal point.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DECIMAL_ALWAYS_SHOWN = 2;

	/**
	 * Maximum integer digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MAX_INTEGER_DIGITS = 3;

	/**
	 * Minimum integer digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MIN_INTEGER_DIGITS = 4;

	/**
	 * Integer digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const INTEGER_DIGITS = 5;

	/**
	 * Maximum fraction digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MAX_FRACTION_DIGITS = 6;

	/**
	 * Minimum fraction digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MIN_FRACTION_DIGITS = 7;

	/**
	 * Fraction digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const FRACTION_DIGITS = 8;

	/**
	 * Multiplier.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MULTIPLIER = 9;

	/**
	 * Grouping size.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const GROUPING_SIZE = 10;

	/**
	 * Rounding Mode.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUNDING_MODE = 11;

	/**
	 * Rounding increment.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ROUNDING_INCREMENT = 12;

	/**
	 * The width to which the output of format() is padded.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const FORMAT_WIDTH = 13;

	/**
	 * The position at which padding will take place. See pad position
	 * constants for possible argument values.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PADDING_POSITION = 14;

	/**
	 * Secondary grouping size.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const SECONDARY_GROUPING_SIZE = 15;

	/**
	 * Use significant digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const SIGNIFICANT_DIGITS_USED = 16;

	/**
	 * Minimum significant digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MIN_SIGNIFICANT_DIGITS = 17;

	/**
	 * Maximum significant digits.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MAX_SIGNIFICANT_DIGITS = 18;

	/**
	 * Lenient parse mode used by rule-based formats.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const LENIENT_PARSE = 19;

	/**
	 * Positive prefix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const POSITIVE_PREFIX = 0;

	/**
	 * Positive suffix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const POSITIVE_SUFFIX = 1;

	/**
	 * Negative prefix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const NEGATIVE_PREFIX = 2;

	/**
	 * Negative suffix.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const NEGATIVE_SUFFIX = 3;

	/**
	 * The character used to pad to the format width.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PADDING_CHARACTER = 4;

	/**
	 * The ISO currency code.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const CURRENCY_CODE = 5;

	/**
	 * The default rule set. This is only available with rule-based
	 * formatters.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DEFAULT_RULESET = 6;

	/**
	 * The public rule sets. This is only available with rule-based
	 * formatters. This is a read-only attribute. The public rulesets are
	 * returned as a single string, with each ruleset name delimited by ';'
	 * (semicolon).
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PUBLIC_RULESETS = 7;

	/**
	 * The decimal separator.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DECIMAL_SEPARATOR_SYMBOL = 0;

	/**
	 * The grouping separator.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const GROUPING_SEPARATOR_SYMBOL = 1;

	/**
	 * The pattern separator.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PATTERN_SEPARATOR_SYMBOL = 2;

	/**
	 * The percent sign.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PERCENT_SYMBOL = 3;

	/**
	 * Zero.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const ZERO_DIGIT_SYMBOL = 4;

	/**
	 * Character representing a digit in the pattern.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const DIGIT_SYMBOL = 5;

	/**
	 * The minus sign.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MINUS_SIGN_SYMBOL = 6;

	/**
	 * The plus sign.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PLUS_SIGN_SYMBOL = 7;

	/**
	 * The currency symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const CURRENCY_SYMBOL = 8;

	/**
	 * The international currency symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const INTL_CURRENCY_SYMBOL = 9;

	/**
	 * The monetary separator.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MONETARY_SEPARATOR_SYMBOL = 10;

	/**
	 * The exponential symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const EXPONENTIAL_SYMBOL = 11;

	/**
	 * Per mill symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PERMILL_SYMBOL = 12;

	/**
	 * Escape padding character.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const PAD_ESCAPE_SYMBOL = 13;

	/**
	 * Infinity symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const INFINITY_SYMBOL = 14;

	/**
	 * Not-a-number symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const NAN_SYMBOL = 15;

	/**
	 * Significant digit symbol.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const SIGNIFICANT_DIGIT_SYMBOL = 16;

	/**
	 * The monetary grouping separator.
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const MONETARY_GROUPING_SEPARATOR_SYMBOL = 17;

	/**
	 * Derive the type from variable type
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const TYPE_DEFAULT = 0;

	/**
	 * Format/parse as 32-bit integer
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const TYPE_INT32 = 1;

	/**
	 * Format/parse as 64-bit integer
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const TYPE_INT64 = 2;

	/**
	 * Format/parse as floating point value
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const TYPE_DOUBLE = 3;

	/**
	 * Format/parse as currency value
	 * @link http://php.net/manual/en/intl.numberformatter-constants.php
	 */
	const TYPE_CURRENCY = 4;


	/**
	 * @param $locale
	 * @param $style
	 * @param $pattern [optional]
	 */
	public function __construct($locale, $style, $pattern) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Create a number formatter
	 * @link http://php.net/manual/en/numberformatter.create.php
	 * @param string $locale <p>
	 * Locale in which the number would be formatted (locale name, e.g. en_CA).
	 * </p>
	 * @param int $style <p>
	 * Style of the formatting, one of the
	 * format style constants. If
	 * <b>NumberFormatter::PATTERN_DECIMAL</b>
	 * or <b>NumberFormatter::PATTERN_RULEBASED</b>
	 * is passed then the number format is opened using the given pattern,
	 * which must conform to the syntax described in
	 * ICU DecimalFormat
	 * documentation or
	 * ICU RuleBasedNumberFormat
	 * documentation, respectively.
	 * </p>
	 * @param string $pattern [optional] <p>
	 * Pattern string if the chosen style requires a pattern.
	 * </p>
	 * @return NumberFormatter <b>NumberFormatter</b> object or <b>FALSE</b> on error.
	 */
	public static function create(string $locale, int $style, string $pattern = null): NumberFormatter {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Format a number
	 * @link http://php.net/manual/en/numberformatter.format.php
	 * @param number $value <p>
	 * The value to format. Can be integer or float,
	 * other values will be converted to a numeric value.
	 * </p>
	 * @param int $type [optional] <p>
	 * The
	 * formatting type to use.
	 * </p>
	 * @return string the string containing formatted value, or <b>FALSE</b> on error.
	 */
	public function format($value, int $type = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Parse a number
	 * @link http://php.net/manual/en/numberformatter.parse.php
	 * @param string $value
	 * @param int $type [optional] <p>
	 * The
	 * formatting type to use. By default,
	 * <b>NumberFormatter::TYPE_DOUBLE</b> is used.
	 * </p>
	 * @param int $position [optional] <p>
	 * Offset in the string at which to begin parsing. On return, this value
	 * will hold the offset at which parsing ended.
	 * </p>
	 * @return mixed The value of the parsed number or <b>FALSE</b> on error.
	 */
	public function parse(string $value, int $type = null, int &$position = null) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Format a currency value
	 * @link http://php.net/manual/en/numberformatter.formatcurrency.php
	 * @param float $value <p>
	 * The numeric currency value.
	 * </p>
	 * @param string $currency <p>
	 * The 3-letter ISO 4217 currency code indicating the currency to use.
	 * </p>
	 * @return string String representing the formatted currency value.
	 */
	public function formatCurrency(float $value, string $currency): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Parse a currency number
	 * @link http://php.net/manual/en/numberformatter.parsecurrency.php
	 * @param string $value
	 * @param string $currency <p>
	 * Parameter to receive the currency name (3-letter ISO 4217 currency
	 * code).
	 * </p>
	 * @param int $position [optional] <p>
	 * Offset in the string at which to begin parsing. On return, this value
	 * will hold the offset at which parsing ended.
	 * </p>
	 * @return float The parsed numeric value or <b>FALSE</b> on error.
	 */
	public function parseCurrency(string $value, string &$currency, int &$position = null): float {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set an attribute
	 * @link http://php.net/manual/en/numberformatter.setattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * numeric attribute constants.
	 * </p>
	 * @param int $value <p>
	 * The attribute value.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setAttribute(int $attr, int $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get an attribute
	 * @link http://php.net/manual/en/numberformatter.getattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * numeric attribute constants.
	 * </p>
	 * @return int Return attribute value on success, or <b>FALSE</b> on error.
	 */
	public function getAttribute(int $attr): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set a text attribute
	 * @link http://php.net/manual/en/numberformatter.settextattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * text attribute
	 * constants.
	 * </p>
	 * @param string $value <p>
	 * Text for the attribute value.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setTextAttribute(int $attr, string $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get a text attribute
	 * @link http://php.net/manual/en/numberformatter.gettextattribute.php
	 * @param int $attr <p>
	 * Attribute specifier - one of the
	 * text attribute constants.
	 * </p>
	 * @return string Return attribute value on success, or <b>FALSE</b> on error.
	 */
	public function getTextAttribute(int $attr): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set a symbol value
	 * @link http://php.net/manual/en/numberformatter.setsymbol.php
	 * @param int $attr <p>
	 * Symbol specifier, one of the
	 * format symbol constants.
	 * </p>
	 * @param string $value <p>
	 * Text for the symbol.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setSymbol(int $attr, string $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get a symbol value
	 * @link http://php.net/manual/en/numberformatter.getsymbol.php
	 * @param int $attr <p>
	 * Symbol specifier, one of the
	 * format symbol constants.
	 * </p>
	 * @return string The symbol string or <b>FALSE</b> on error.
	 */
	public function getSymbol(int $attr): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set formatter pattern
	 * @link http://php.net/manual/en/numberformatter.setpattern.php
	 * @param string $pattern <p>
	 * Pattern in syntax described in
	 * ICU DecimalFormat
	 * documentation.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get formatter pattern
	 * @link http://php.net/manual/en/numberformatter.getpattern.php
	 * @return string Pattern string that is used by the formatter, or <b>FALSE</b> if an error happens.
	 */
	public function getPattern(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get formatter locale
	 * @link http://php.net/manual/en/numberformatter.getlocale.php
	 * @param int $type [optional] <p>
	 * You can choose between valid and actual locale (
	 * <b>Locale::VALID_LOCALE</b>,
	 * <b>Locale::ACTUAL_LOCALE</b>,
	 * respectively). The default is the actual locale.
	 * </p>
	 * @return string The locale name used to create the formatter.
	 */
	public function getLocale(int $type = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get formatter's last error code.
	 * @link http://php.net/manual/en/numberformatter.geterrorcode.php
	 * @return int error code from last formatter call.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get formatter's last error message.
	 * @link http://php.net/manual/en/numberformatter.geterrormessage.php
	 * @return string error message from last formatter call.
	 */
	public function getErrorMessage(): string {}

}

class Normalizer  {

	/**
	 * No decomposition/composition
	 * @link http://php.net/manual/en/intl.normalizer-constants.php
	 */
	const NONE = 1;

	/**
	 * Normalization Form D (NFD) - Canonical Decomposition
	 * @link http://php.net/manual/en/intl.normalizer-constants.php
	 */
	const FORM_D = 2;
	const NFD = 2;

	/**
	 * Normalization Form KD (NFKD) - Compatibility Decomposition
	 * @link http://php.net/manual/en/intl.normalizer-constants.php
	 */
	const FORM_KD = 3;
	const NFKD = 3;

	/**
	 * Normalization Form C (NFC) - Canonical Decomposition followed by
	 * Canonical Composition
	 * @link http://php.net/manual/en/intl.normalizer-constants.php
	 */
	const FORM_C = 4;
	const NFC = 4;

	/**
	 * Normalization Form KC (NFKC) - Compatibility Decomposition, followed by
	 * Canonical Composition
	 * @link http://php.net/manual/en/intl.normalizer-constants.php
	 */
	const FORM_KC = 5;
	const NFKC = 5;


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Normalizes the input provided and returns the normalized string
	 * @link http://php.net/manual/en/normalizer.normalize.php
	 * @param string $input <p>The input string to normalize</p>
	 * @param int $form [optional] <p>One of the normalization forms.</p>
	 * @return string The normalized string or <b>FALSE</b> if an error occurred.
	 */
	public static function normalize(string $input, int $form = Normalizer::FORM_C): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Checks if the provided string is already in the specified normalization
form.
	 * @link http://php.net/manual/en/normalizer.isnormalized.php
	 * @param string $input <p>The input string to normalize</p>
	 * @param int $form [optional] <p>
	 * One of the normalization forms.
	 * </p>
	 * @return bool <b>TRUE</b> if normalized, <b>FALSE</b> otherwise or if there an error
	 */
	public static function isNormalized(string $input, int $form = Normalizer::FORM_C): bool {}

}

class Locale  {

	/**
	 * This is locale the data actually comes from.
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const ACTUAL_LOCALE = 0;

	/**
	 * This is the most specific locale supported by ICU.
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const VALID_LOCALE = 1;

	/**
	 * Used as locale parameter with the methods of the various locale affected classes,
	 * such as NumberFormatter. This constant would make the methods to use default
	 * locale.
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const DEFAULT_LOCALE = null;

	/**
	 * Language subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const LANG_TAG = "language";

	/**
	 * Extended language subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const EXTLANG_TAG = "extlang";

	/**
	 * Script subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const SCRIPT_TAG = "script";

	/**
	 * Region subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const REGION_TAG = "region";

	/**
	 * Variant subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const VARIANT_TAG = "variant";

	/**
	 * Grandfathered Language subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const GRANDFATHERED_LANG_TAG = "grandfathered";

	/**
	 * Private subtag
	 * @link http://php.net/manual/en/intl.locale-constants.php
	 */
	const PRIVATE_TAG = "private";


	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Gets the default locale value from the INTL global 'default_locale'
	 * @link http://php.net/manual/en/locale.getdefault.php
	 * @return string The current runtime locale
	 */
	public static function getDefault(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * sets the default runtime locale
	 * @link http://php.net/manual/en/locale.setdefault.php
	 * @param string $locale <p>
	 * Is a BCP 47 compliant language tag.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public static function setDefault(string $locale): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Gets the primary language for the input locale
	 * @link http://php.net/manual/en/locale.getprimarylanguage.php
	 * @param string $locale <p>
	 * The locale to extract the primary language code from
	 * </p>
	 * @return string The language code associated with the language or <b>NULL</b> in case of error.
	 */
	public static function getPrimaryLanguage(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Gets the script for the input locale
	 * @link http://php.net/manual/en/locale.getscript.php
	 * @param string $locale <p>
	 * The locale to extract the script code from
	 * </p>
	 * @return string The script subtag for the locale or <b>NULL</b> if not present
	 */
	public static function getScript(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Gets the region for the input locale
	 * @link http://php.net/manual/en/locale.getregion.php
	 * @param string $locale <p>
	 * The locale to extract the region code from
	 * </p>
	 * @return string The region subtag for the locale or <b>NULL</b> if not present
	 */
	public static function getRegion(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Gets the keywords for the input locale
	 * @link http://php.net/manual/en/locale.getkeywords.php
	 * @param string $locale <p>
	 * The locale to extract the keywords from
	 * </p>
	 * @return array Associative array containing the keyword-value pairs for this locale
	 */
	public static function getKeywords(string $locale): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns an appropriately localized display name for script of the input locale
	 * @link http://php.net/manual/en/locale.getdisplayscript.php
	 * @param string $locale <p>
	 * The locale to return a display script for
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the script name
	 * </p>
	 * @return string Display name of the script for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayScript(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns an appropriately localized display name for region of the input locale
	 * @link http://php.net/manual/en/locale.getdisplayregion.php
	 * @param string $locale <p>
	 * The locale to return a display region for.
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the region name
	 * </p>
	 * @return string display name of the region for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayRegion(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns an appropriately localized display name for the input locale
	 * @link http://php.net/manual/en/locale.getdisplayname.php
	 * @param string $locale <p>
	 * The locale to return a display name for.
	 * </p>
	 * @param string $in_locale [optional] <p>optional format locale</p>
	 * @return string Display name of the locale in the format appropriate for $in_locale.
	 */
	public static function getDisplayName(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns an appropriately localized display name for language of the inputlocale
	 * @link http://php.net/manual/en/locale.getdisplaylanguage.php
	 * @param string $locale <p>
	 * The locale to return a display language for
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the language name
	 * </p>
	 * @return string display name of the language for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayLanguage(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns an appropriately localized display name for variants of the input locale
	 * @link http://php.net/manual/en/locale.getdisplayvariant.php
	 * @param string $locale <p>
	 * The locale to return a display variant for
	 * </p>
	 * @param string $in_locale [optional] <p>
	 * Optional format locale to use to display the variant name
	 * </p>
	 * @return string Display name of the variant for the $locale in the format appropriate for
	 * $in_locale.
	 */
	public static function getDisplayVariant(string $locale, string $in_locale = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns a correctly ordered and delimited locale ID
	 * @link http://php.net/manual/en/locale.composelocale.php
	 * @param array $subtags <p>
	 * an array containing a list of key-value pairs, where the keys identify
	 * the particular locale ID subtags, and the values are the associated
	 * subtag values.
	 * <p>
	 * The 'variant' and 'private' subtags can take maximum 15 values
	 * whereas 'extlang' can take maximum 3 values.e.g. Variants are allowed
	 * with the suffix ranging from 0-14. Hence the keys for the input array
	 * can be variant0, variant1, ...,variant14. In the returned locale id,
	 * the subtag is ordered by suffix resulting in variant0 followed by
	 * variant1 followed by variant2 and so on.
	 * </p>
	 * <p>
	 * The 'variant', 'private' and 'extlang' multiple values can be specified both
	 * as array under specific key (e.g. 'variant') and as multiple numbered keys
	 * (e.g. 'variant0', 'variant1', etc.).
	 * </p>
	 * </p>
	 * @return string The corresponding locale identifier.
	 */
	public static function composeLocale(array $subtags): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Returns a key-value array of locale ID subtag elements.
	 * @link http://php.net/manual/en/locale.parselocale.php
	 * @param string $locale <p>
	 * The locale to extract the subtag array from. Note: The 'variant' and
	 * 'private' subtags can take maximum 15 values whereas 'extlang' can take
	 * maximum 3 values.
	 * </p>
	 * @return array an array containing a list of key-value pairs, where the keys
	 * identify the particular locale ID subtags, and the values are the
	 * associated subtag values. The array will be ordered as the locale id
	 * subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the
	 * returned array will have variant0=&gt;varX , variant1=&gt;varY ,
	 * variant2=&gt;varZ
	 */
	public static function parseLocale(string $locale): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Gets the variants for the input locale
	 * @link http://php.net/manual/en/locale.getallvariants.php
	 * @param string $locale <p>
	 * The locale to extract the variants from
	 * </p>
	 * @return array The array containing the list of all variants subtag for the locale
	 * or <b>NULL</b> if not present
	 */
	public static function getAllVariants(string $locale): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Checks if a language tag filter matches with locale
	 * @link http://php.net/manual/en/locale.filtermatches.php
	 * @param string $langtag <p>
	 * The language tag to check
	 * </p>
	 * @param string $locale <p>
	 * The language range to check against
	 * </p>
	 * @param bool $canonicalize [optional] <p>
	 * If true, the arguments will be converted to canonical form before
	 * matching.
	 * </p>
	 * @return bool <b>TRUE</b> if $locale matches $langtag <b>FALSE</b> otherwise.
	 */
	public static function filterMatches(string $langtag, string $locale, bool $canonicalize = false): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Searches the language tag list for the best match to the language
	 * @link http://php.net/manual/en/locale.lookup.php
	 * @param array $langtag <p>
	 * An array containing a list of language tags to compare to
	 * <i>locale</i>. Maximum 100 items allowed.
	 * </p>
	 * @param string $locale <p>
	 * The locale to use as the language range when matching.
	 * </p>
	 * @param bool $canonicalize [optional] <p>
	 * If true, the arguments will be converted to canonical form before
	 * matching.
	 * </p>
	 * @param string $default [optional] <p>
	 * The locale to use if no match is found.
	 * </p>
	 * @return string The closest matching language tag or default value.
	 */
	public static function lookup(array $langtag, string $locale, bool $canonicalize = false, string $default = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Canonicalize the locale string
	 * @link http://php.net/manual/en/locale.canonicalize.php
	 * @param string $locale <p>
	 * </p>
	 * @return string
	 */
	public static function canonicalize(string $locale): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Tries to find out best available locale based on HTTP "Accept-Language" header
	 * @link http://php.net/manual/en/locale.acceptfromhttp.php
	 * @param string $header <p>
	 * The string containing the "Accept-Language" header according to format in RFC 2616.
	 * </p>
	 * @return string The corresponding locale identifier.
	 */
	public static function acceptFromHttp(string $header): string {}

}

class MessageFormatter  {

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Constructs a new Message Formatter
	 * @link http://php.net/manual/en/messageformatter.create.php
	 * @param string $locale <p>
	 * The locale to use when formatting arguments
	 * </p>
	 * @param string $pattern <p>
	 * The pattern string to stick arguments into.
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe
	 * before being interpreted.
	 * </p>
	 */
	public function __construct(string $locale, string $pattern) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Constructs a new Message Formatter
	 * @link http://php.net/manual/en/messageformatter.create.php
	 * @param string $locale <p>
	 * The locale to use when formatting arguments
	 * </p>
	 * @param string $pattern <p>
	 * The pattern string to stick arguments into.
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe
	 * before being interpreted.
	 * </p>
	 * @return MessageFormatter The formatter object
	 */
	public static function create(string $locale, string $pattern): MessageFormatter {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Format the message
	 * @link http://php.net/manual/en/messageformatter.format.php
	 * @param array $args <p>
	 * Arguments to insert into the format string
	 * </p>
	 * @return string The formatted string, or <b>FALSE</b> if an error occurred
	 */
	public function format(array $args): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Quick format message
	 * @link http://php.net/manual/en/messageformatter.formatmessage.php
	 * @param string $locale <p>
	 * The locale to use for formatting locale-dependent parts
	 * </p>
	 * @param string $pattern <p>
	 * The pattern string to insert things into.
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe
	 * before being interpreted.
	 * </p>
	 * @param array $args <p>
	 * The array of values to insert into the format string
	 * </p>
	 * @return string The formatted pattern string or <b>FALSE</b> if an error occurred
	 */
	public static function formatMessage(string $locale, string $pattern, array $args): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Parse input string according to pattern
	 * @link http://php.net/manual/en/messageformatter.parse.php
	 * @param string $value <p>
	 * The string to parse
	 * </p>
	 * @return array An array containing the items extracted, or <b>FALSE</b> on error
	 */
	public function parse(string $value): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Quick parse input string
	 * @link http://php.net/manual/en/messageformatter.parsemessage.php
	 * @param string $locale <p>
	 * The locale to use for parsing locale-dependent parts
	 * </p>
	 * @param string $pattern <p>
	 * The pattern with which to parse the <i>value</i>.
	 * </p>
	 * @param string $source <p>
	 * The string to parse, conforming to the <i>pattern</i>.
	 * </p>
	 * @return array An array containing items extracted, or <b>FALSE</b> on error
	 */
	public static function parseMessage(string $locale, string $pattern, string $source): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set the pattern used by the formatter
	 * @link http://php.net/manual/en/messageformatter.setpattern.php
	 * @param string $pattern <p>
	 * The pattern string to use in this message formatter.
	 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
	 * umsg_autoQuoteApostrophe
	 * before being interpreted.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the pattern used by the formatter
	 * @link http://php.net/manual/en/messageformatter.getpattern.php
	 * @return string The pattern string for this message formatter
	 */
	public function getPattern(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the locale for which the formatter was created.
	 * @link http://php.net/manual/en/messageformatter.getlocale.php
	 * @return string The locale name
	 */
	public function getLocale(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the error code from last operation
	 * @link http://php.net/manual/en/messageformatter.geterrorcode.php
	 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the error text from the last operation
	 * @link http://php.net/manual/en/messageformatter.geterrormessage.php
	 * @return string Description of the last error.
	 */
	public function getErrorMessage(): string {}

}

class IntlDateFormatter  {

	/**
	 * Completely specified style (Tuesday, April 12, 1952 AD or 3:30:42pm PST)
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const FULL = 0;

	/**
	 * Long style (January 12, 1952 or 3:30:32pm)
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const LONG = 1;

	/**
	 * Medium style (Jan 12, 1952)
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const MEDIUM = 2;

	/**
	 * Most abbreviated style, only essential data (12/13/52 or 3:30pm)
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const SHORT = 3;

	/**
	 * Do not include this element
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const NONE = -1;

	/**
	 * Gregorian Calendar
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const GREGORIAN = 1;

	/**
	 * Non-Gregorian Calendar
	 * @link http://php.net/manual/en/intl.intldateformatter-constants.php
	 */
	const TRADITIONAL = 0;


	/**
	 * @param $locale
	 * @param $datetype
	 * @param $timetype
	 * @param $timezone [optional]
	 * @param $calendar [optional]
	 * @param $pattern [optional]
	 */
	public function __construct($locale, $datetype, $timetype, $timezone, $calendar, $pattern) {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Create a date formatter
	 * @link http://php.net/manual/en/intldateformatter.create.php
	 * @param string $locale <p>
	 * Locale to use when formatting or parsing or <b>NULL</b> to use the value
	 * specified in the ini setting intl.default_locale.
	 * </p>
	 * @param int $datetype <p>
	 * Date type to use (<b>none</b>, <b>short</b>,
	 * <b>medium</b>, <b>long</b>,
	 * <b>full</b>). This is one of the IntlDateFormatter
	 * constants. It can also be <b>NULL</b>, in which case ICUʼs default
	 * date type will be used.
	 * </p>
	 * @param int $timetype <p>
	 * Time type to use (<b>none</b>, <b>short</b>,
	 * <b>medium</b>, <b>long</b>,
	 * <b>full</b>). This is one of the IntlDateFormatter
	 * constants. It can also be <b>NULL</b>, in which case ICUʼs default
	 * time type will be used.
	 * </p>
	 * @param mixed $timezone [optional] <p>
	 * Time zone ID. The default (and the one used if <b>NULL</b> is given) is the
	 * one returned by <b>date_default_timezone_get</b> or, if
	 * applicable, that of the <b>IntlCalendar</b> object passed
	 * for the <i>calendar</i> parameter. This ID must be a
	 * valid identifier on ICUʼs database or an ID representing an
	 * explicit offset, such as GMT-05:30.
	 * </p>
	 * <p>
	 * This can also be an <b>IntlTimeZone</b> or a
	 * <b>DateTimeZone</b> object.
	 * </p>
	 * @param mixed $calendar [optional] <p>
	 * Calendar to use for formatting or parsing. The default value is <b>NULL</b>,
	 * which corresponds to <b>IntlDateFormatter::GREGORIAN</b>.
	 * This can either be one of the
	 * IntlDateFormatter
	 * calendar constants or an <b>IntlCalendar</b>. Any
	 * <b>IntlCalendar</b> object passed will be clone; it will
	 * not be changed by the <b>IntlDateFormatter</b>. This will
	 * determine the calendar type used (gregorian, islamic, persian, etc.) and,
	 * if <b>NULL</b> is given for the <i>timezone</i> parameter,
	 * also the timezone used.
	 * </p>
	 * @param string $pattern [optional] <p>
	 * Optional pattern to use when formatting or parsing.
	 * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
	 * </p>
	 * @return IntlDateFormatter The created <b>IntlDateFormatter</b> or <b>FALSE</b> in case of
	 * failure.
	 */
	public static function create(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = ""): IntlDateFormatter {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the datetype used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.getdatetype.php
	 * @return int The current date type value of the formatter.
	 */
	public function getDateType(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the timetype used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.gettimetype.php
	 * @return int The current date type value of the formatter.
	 */
	public function getTimeType(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the calendar type used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.getcalendar.php
	 * @return int The calendar
	 * type being used by the formatter. Either
	 * <b>IntlDateFormatter::TRADITIONAL</b> or
	 * <b>IntlDateFormatter::GREGORIAN</b>.
	 */
	public function getCalendar(): int {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * Get copy of formatterʼs calendar object
	 * @link http://php.net/manual/en/intldateformatter.getcalendarobject.php
	 * @return IntlCalendar A copy of the internal calendar object used by this formatter.
	 */
	public function getCalendarObject(): IntlCalendar {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Sets the calendar type used by the formatter
	 * @link http://php.net/manual/en/intldateformatter.setcalendar.php
	 * @param mixed $which <p>
	 * This can either be: the calendar
	 * type to use (default is
	 * <b>IntlDateFormatter::GREGORIAN</b>, which is also used if
	 * <b>NULL</b> is specified) or an
	 * <b>IntlCalendar</b> object.
	 * </p>
	 * <p>
	 * Any <b>IntlCalendar</b> object passed in will be cloned;
	 * no modifications will be made to the argument object.
	 * </p>
	 * <p>
	 * The timezone of the formatter will only be kept if an
	 * <b>IntlCalendar</b> object is not passed, otherwise the
	 * new timezone will be that of the passed object.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setCalendar($which): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the timezone-id used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.gettimezoneid.php
	 * @return string ID string for the time zone used by this formatter.
	 */
	public function getTimeZoneId(): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * Get formatterʼs timezone
	 * @link http://php.net/manual/en/intldateformatter.gettimezone.php
	 * @return IntlTimeZone The associated <b>IntlTimeZone</b>
	 * object or <b>FALSE</b> on failure.
	 */
	public function getTimeZone(): IntlTimeZone {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * Sets formatterʼs timezone
	 * @link http://php.net/manual/en/intldateformatter.settimezone.php
	 * @param mixed $zone <p>
	 * The timezone to use for this formatter. This can be specified in the
	 * following forms:
	 * </p>
	 * @return boolean <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTimeZone($zone): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set the pattern used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.setpattern.php
	 * @param string $pattern <p>
	 * New pattern string to use.
	 * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * Bad formatstrings are usually the cause of the failure.
	 */
	public function setPattern(string $pattern): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the pattern used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.getpattern.php
	 * @return string The pattern string being used to format/parse.
	 */
	public function getPattern(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the locale used by formatter
	 * @link http://php.net/manual/en/intldateformatter.getlocale.php
	 * @param int $which [optional]
	 * @return string the locale of this formatter or 'false' if error
	 */
	public function getLocale(int $which = null): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Set the leniency of the parser
	 * @link http://php.net/manual/en/intldateformatter.setlenient.php
	 * @param bool $lenient <p>
	 * Sets whether the parser is lenient or not, default is <b>TRUE</b> (lenient).
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setLenient(bool $lenient): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the lenient used for the IntlDateFormatter
	 * @link http://php.net/manual/en/intldateformatter.islenient.php
	 * @return bool <b>TRUE</b> if parser is lenient, <b>FALSE</b> if parser is strict. By default the parser is lenient.
	 */
	public function isLenient(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Format the date/time value as a string
	 * @link http://php.net/manual/en/intldateformatter.format.php
	 * @param mixed $value <p>
	 * Value to format. This may be a <b>DateTime</b> object, an
	 * <b>IntlCalendar</b> object, a numeric type
	 * representing a (possibly fractional) number of seconds since epoch or an
	 * array in the format output by
	 * <b>localtime</b>.
	 * </p>
	 * <p>
	 * If a <b>DateTime</b> or an
	 * <b>IntlCalendar</b> object is passed, its timezone is not
	 * considered. The object will be formatted using the formaterʼs configured
	 * timezone. If one wants to use the timezone of the object to be formatted,
	 * <b>IntlDateFormatter::setTimeZone</b> must be called before
	 * with the objectʼs timezone. Alternatively, the static function
	 * <b>IntlDateFormatter::formatObject</b> may be used instead.
	 * </p>
	 * @return string The formatted string or, if an error occurred, <b>FALSE</b>.
	 */
	public function format($value): string {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
	 * Formats an object
	 * @link http://php.net/manual/en/intldateformatter.formatobject.php
	 * @param object $object <p>
	 * An object of type <b>IntlCalendar</b> or
	 * <b>DateTime</b>. The timezone information in the object
	 * will be used.
	 * </p>
	 * @param mixed $format [optional] <p>
	 * How to format the date/time. This can either be an array with
	 * two elements (first the date style, then the time style, these being one
	 * of the constants <b>IntlDateFormatter::NONE</b>,
	 * <b>IntlDateFormatter::SHORT</b>,
	 * <b>IntlDateFormatter::MEDIUM</b>,
	 * <b>IntlDateFormatter::LONG</b>,
	 * <b>IntlDateFormatter::FULL</b>), a long with
	 * the value of one of these constants (in which case it will be used both
	 * for the time and the date) or a string with the format
	 * described in the ICU
	 * documentation. If <b>NULL</b>, the default style will be used.
	 * </p>
	 * @param string $locale [optional] <p>
	 * The locale to use, or <b>NULL</b> to use the default one.
	 * </p>
	 * @return string A string with result or <b>FALSE</b> on failure.
	 */
	public static function formatObject($object, $format = NULL, string $locale = NULL): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Parse string to a timestamp value
	 * @link http://php.net/manual/en/intldateformatter.parse.php
	 * @param string $value <p>
	 * string to convert to a time
	 * </p>
	 * @param int $position [optional] <p>
	 * Position at which to start the parsing in $value (zero-based).
	 * If no error occurs before $value is consumed, $parse_pos will contain -1
	 * otherwise it will contain the position at which parsing ended (and the error occurred).
	 * This variable will contain the end position if the parse fails.
	 * If $parse_pos > strlen($value), the parse fails immediately.
	 * </p>
	 * @return int timestamp parsed value, or <b>FALSE</b> if value can't be parsed.
	 */
	public function parse(string $value, int &$position = null): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Parse string to a field-based time value
	 * @link http://php.net/manual/en/intldateformatter.localtime.php
	 * @param string $value <p>
	 * string to convert to a time
	 * </p>
	 * @param int $position [optional] <p>
	 * Position at which to start the parsing in $value (zero-based).
	 * If no error occurs before $value is consumed, $parse_pos will contain -1
	 * otherwise it will contain the position at which parsing ended .
	 * If $parse_pos > strlen($value), the parse fails immediately.
	 * </p>
	 * @return array Localtime compatible array of integers : contains 24 hour clock value in tm_hour field
	 */
	public function localtime(string $value, int &$position = null): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the error code from last operation
	 * @link http://php.net/manual/en/intldateformatter.geterrorcode.php
	 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get the error text from the last operation.
	 * @link http://php.net/manual/en/intldateformatter.geterrormessage.php
	 * @return string Description of the last error.
	 */
	public function getErrorMessage(): string {}

}

class ResourceBundle implements Traversable {

	/**
	 * @param $locale
	 * @param $bundlename
	 * @param $fallback [optional]
	 */
	public function __construct($locale, $bundlename, $fallback) {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * Create a resource bundle
	 * @link http://php.net/manual/en/resourcebundle.create.php
	 * @param string $locale <p>
	 * Locale for which the resources should be loaded (locale name, e.g. en_CA).
	 * </p>
	 * @param string $bundlename <p>
	 * The directory where the data is stored or the name of the .dat file.
	 * </p>
	 * @param bool $fallback [optional] <p>
	 * Whether locale should match exactly or fallback to parent locale is allowed.
	 * </p>
	 * @return ResourceBundle <b>ResourceBundle</b> object or <b>NULL</b> on error.
	 */
	public static function create(string $locale, string $bundlename, bool $fallback = null): ResourceBundle {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * Get data from the bundle
	 * @link http://php.net/manual/en/resourcebundle.get.php
	 * @param string|int $index <p>
	 * Data index, must be string or integer.
	 * </p>
	 * @return mixed the data located at the index or <b>NULL</b> on error. Strings, integers and binary data strings
	 * are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are
	 * returned as <b>ResourceBundle</b> object.
	 */
	public function get($index) {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * Get number of elements in the bundle
	 * @link http://php.net/manual/en/resourcebundle.count.php
	 * @return int number of elements in the bundle.
	 */
	public function count(): int {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * Get supported locales
	 * @link http://php.net/manual/en/resourcebundle.locales.php
	 * @param string $bundlename <p>
	 * Path of ResourceBundle for which to get available locales, or
	 * empty string for default locales list.
	 * </p>
	 * @return array the list of locales supported by the bundle.
	 */
	public static function getLocales(string $bundlename): array {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * Get bundle's last error code.
	 * @link http://php.net/manual/en/resourcebundle.geterrorcode.php
	 * @return int error code from last bundle object call.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
	 * Get bundle's last error message.
	 * @link http://php.net/manual/en/resourcebundle.geterrormessage.php
	 * @return string error message from last bundle object's call.
	 */
	public function getErrorMessage(): string {}

}

class Transliterator  {
	const FORWARD = 0;
	const REVERSE = 1;

	public $id;


	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Private constructor to deny instantiation
	 * @link http://php.net/manual/en/transliterator.construct.php
	 */
	final private function __construct() {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Create a transliterator
	 * @link http://php.net/manual/en/transliterator.create.php
	 * @param string $id <p>
	 * The id.
	 * </p>
	 * @param int $direction [optional] <p>
	 * The direction, defaults to
	 * >Transliterator::FORWARD.
	 * May also be set to
	 * Transliterator::REVERSE.
	 * </p>
	 * @return Transliterator a <b>Transliterator</b> object on success,
	 * or <b>NULL</b> on failure.
	 */
	public static function create(string $id, int $direction = null): Transliterator {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Create transliterator from rules
	 * @link http://php.net/manual/en/transliterator.createfromrules.php
	 * @param string $rules <p>
	 * The rules.
	 * </p>
	 * @param string $direction [optional] <p>
	 * The direction, defaults to
	 * >Transliterator::FORWARD.
	 * May also be set to
	 * Transliterator::REVERSE.
	 * </p>
	 * @return Transliterator a <b>Transliterator</b> object on success,
	 * or <b>NULL</b> on failure.
	 */
	public static function createFromRules(string $rules, string $direction = null): Transliterator {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Create an inverse transliterator
	 * @link http://php.net/manual/en/transliterator.createinverse.php
	 * @return Transliterator a <b>Transliterator</b> object on success,
	 * or <b>NULL</b> on failure
	 */
	public function createInverse(): Transliterator {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Get transliterator IDs
	 * @link http://php.net/manual/en/transliterator.listids.php
	 * @return array An array of registered transliterator IDs on success,
	 * or <b>FALSE</b> on failure.
	 */
	public static function listIDs(): array {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Transliterate a string
	 * @link http://php.net/manual/en/transliterator.transliterate.php
	 * @param string $subject <p>
	 * The string to be transformed.
	 * </p>
	 * @param int $start [optional] <p>
	 * The start index (in UTF-16 code units) from which the string will start
	 * to be transformed, inclusive. Indexing starts at 0. The text before will
	 * be left as is.
	 * </p>
	 * @param int $end [optional] <p>
	 * The end index (in UTF-16 code units) until which the string will be
	 * transformed, exclusive. Indexing starts at 0. The text after will be
	 * left as is.
	 * </p>
	 * @return string The transfomed string on success, or <b>FALSE</b> on failure.
	 */
	public function transliterate(string $subject, int $start = null, int $end = null): string {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Get last error code
	 * @link http://php.net/manual/en/transliterator.geterrorcode.php
	 * @return int The error code on success,
	 * or <b>FALSE</b> if none exists, or on failure.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Get last error message
	 * @link http://php.net/manual/en/transliterator.geterrormessage.php
	 * @return string The error code on success,
	 * or <b>FALSE</b> if none exists, or on failure.
	 */
	public function getErrorMessage(): string {}

}

/**
 * @link http://php.net/manual/en/class.intltimezone.php
 */
class IntlTimeZone  {
	const DISPLAY_SHORT = 1;
	const DISPLAY_LONG = 2;
	const DISPLAY_SHORT_GENERIC = 3;
	const DISPLAY_LONG_GENERIC = 4;
	const DISPLAY_SHORT_GMT = 5;
	const DISPLAY_LONG_GMT = 6;
	const DISPLAY_SHORT_COMMONLY_USED = 7;
	const DISPLAY_GENERIC_LOCATION = 8;
	const TYPE_ANY = 0;
	const TYPE_CANONICAL = 1;
	const TYPE_CANONICAL_LOCATION = 2;


	private function __construct() {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a timezone object for the given ID
	 * @link http://php.net/manual/en/intltimezone.createtimezone.php
	 * @param string $zoneId <p>
	 * </p>
	 * @return IntlTimeZone
	 */
	public static function createTimeZone(string $zoneId): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a timezone object from DateTimeZone
	 * @link http://php.net/manual/en/intltimezone.fromdatetimezone.php
	 * @param DateTimeZone $zoneId <p>
	 * </p>
	 * @return IntlTimeZone
	 */
	public static function fromDateTimeZone(DateTimeZone $zoneId): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a new copy of the default timezone for this host
	 * @link http://php.net/manual/en/intltimezone.createdefault.php
	 * @return IntlTimeZone
	 */
	public static function createDefault(): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create GMT (UTC) timezone
	 * @link http://php.net/manual/en/intltimezone.getgmt.php
	 * @return IntlTimeZone
	 */
	public static function getGMT(): IntlTimeZone {}

	public static function getUnknown() {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get an enumeration over time zone IDs associated with the
given country or offset
	 * @link http://php.net/manual/en/intltimezone.createenumeration.php
	 * @param mixed $countryOrRawOffset [optional] <p>
	 * </p>
	 * @return IntlIterator
	 */
	public static function createEnumeration($countryOrRawOffset = null): IntlIterator {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the number of IDs in the equivalency group that includes the given ID
	 * @link http://php.net/manual/en/intltimezone.countequivalentids.php
	 * @param string $zoneId <p>
	 * </p>
	 * @return integer
	 */
	public static function countEquivalentIDs(string $zoneId): integer {}

	/**
	 * @param $zoneType
	 * @param $region [optional]
	 * @param $rawOffset [optional]
	 */
	public static function createTimeZoneIDEnumeration($zoneType, $region, $rawOffset) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the canonical system timezone ID or the normalized custom time zone ID for the given time zone ID
	 * @link http://php.net/manual/en/intltimezone.getcanonicalid.php
	 * @param string $zoneId <p>
	 * </p>
	 * @param bool $isSystemID [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function getCanonicalID(string $zoneId, bool &$isSystemID = null): string {}

	/**
	 * @param $zoneId
	 */
	public static function getRegion($zoneId) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the timezone data version currently used by ICU
	 * @link http://php.net/manual/en/intltimezone.gettzdataversion.php
	 * @return string
	 */
	public static function getTZDataVersion(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get an ID in the equivalency group that includes the given ID
	 * @link http://php.net/manual/en/intltimezone.getequivalentid.php
	 * @param string $zoneId <p>
	 * </p>
	 * @param integer $index <p>
	 * </p>
	 * @return string
	 */
	public static function getEquivalentID(string $zoneId, integer $index): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get timezone ID
	 * @link http://php.net/manual/en/intltimezone.getid.php
	 * @return string
	 */
	public function getID(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Check if this time zone uses daylight savings time
	 * @link http://php.net/manual/en/intltimezone.usedaylighttime.php
	 * @return bool
	 */
	public function useDaylightTime(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the time zone raw and GMT offset for the given moment in time
	 * @link http://php.net/manual/en/intltimezone.getoffset.php
	 * @param float $date <p>
	 * </p>
	 * @param bool $local <p>
	 * </p>
	 * @param integer $rawOffset <p>
	 * </p>
	 * @param integer $dstOffset <p>
	 * </p>
	 * @return integer
	 */
	public function getOffset(float $date, bool $local, integer &$rawOffset, integer &$dstOffset): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the raw GMT offset (before taking daylight savings time into account
	 * @link http://php.net/manual/en/intltimezone.getrawoffset.php
	 * @return integer
	 */
	public function getRawOffset(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Check if this zone has the same rules and offset as another zone
	 * @link http://php.net/manual/en/intltimezone.hassamerules.php
	 * @param IntlTimeZone $otherTimeZone <p>
	 * </p>
	 * @return bool
	 */
	public function hasSameRules(IntlTimeZone $otherTimeZone): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get a name of this time zone suitable for presentation to the user
	 * @link http://php.net/manual/en/intltimezone.getdisplayname.php
	 * @param bool $isDaylight [optional] <p>
	 * </p>
	 * @param integer $style [optional] <p>
	 * </p>
	 * @param string $locale [optional] <p>
	 * </p>
	 * @return string
	 */
	public function getDisplayName(bool $isDaylight = null, integer $style = null, string $locale = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the amount of time to be added to local standard time to get local wall clock time
	 * @link http://php.net/manual/en/intltimezone.getdstsavings.php
	 * @return integer
	 */
	public function getDSTSavings(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Convert to DateTimeZone object
	 * @link http://php.net/manual/en/intltimezone.todatetimezone.php
	 * @return DateTimeZone
	 */
	public function toDateTimeZone(): DateTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/intltimezone.geterrorcode.php
	 * @return integer
	 */
	public function getErrorCode(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/intltimezone.geterrormessage.php
	 * @return string
	 */
	public function getErrorMessage(): string {}

}

/**
 * @method bool isSet(int $field) (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>Whether a field is set
 * @link http://php.net/manual/en/class.intlcalendar.php
 */
class IntlCalendar  {
	const FIELD_ERA = 0;
	const FIELD_YEAR = 1;
	const FIELD_MONTH = 2;
	const FIELD_WEEK_OF_YEAR = 3;
	const FIELD_WEEK_OF_MONTH = 4;
	const FIELD_DATE = 5;
	const FIELD_DAY_OF_YEAR = 6;
	const FIELD_DAY_OF_WEEK = 7;
	const FIELD_DAY_OF_WEEK_IN_MONTH = 8;
	const FIELD_AM_PM = 9;
	const FIELD_HOUR = 10;
	const FIELD_HOUR_OF_DAY = 11;
	const FIELD_MINUTE = 12;
	const FIELD_SECOND = 13;
	const FIELD_MILLISECOND = 14;
	const FIELD_ZONE_OFFSET = 15;
	const FIELD_DST_OFFSET = 16;
	const FIELD_YEAR_WOY = 17;
	const FIELD_DOW_LOCAL = 18;
	const FIELD_EXTENDED_YEAR = 19;
	const FIELD_JULIAN_DAY = 20;
	const FIELD_MILLISECONDS_IN_DAY = 21;
	const FIELD_IS_LEAP_MONTH = 22;
	const FIELD_FIELD_COUNT = 23;
	const FIELD_DAY_OF_MONTH = 5;
	const DOW_SUNDAY = 1;
	const DOW_MONDAY = 2;
	const DOW_TUESDAY = 3;
	const DOW_WEDNESDAY = 4;
	const DOW_THURSDAY = 5;
	const DOW_FRIDAY = 6;
	const DOW_SATURDAY = 7;
	const DOW_TYPE_WEEKDAY = 0;
	const DOW_TYPE_WEEKEND = 1;
	const DOW_TYPE_WEEKEND_OFFSET = 2;
	const DOW_TYPE_WEEKEND_CEASE = 3;
	const WALLTIME_FIRST = 1;
	const WALLTIME_LAST = 0;
	const WALLTIME_NEXT_VALID = 2;


	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Private constructor for disallowing instantiation
	 * @link http://php.net/manual/en/intlcalendar.construct.php
	 */
	private function __construct() {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a new IntlCalendar
	 * @link http://php.net/manual/en/intlcalendar.createinstance.php
	 * @param mixed $timeZone [optional] <p>
	 * The timezone to use.
	 * </p>
	 * @param string $locale [optional] <p>
	 * A locale to use or <b>NULL</b> to use the default locale.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> instance or <b>NULL</b> on
	 * failure.
	 */
	public static function createInstance($timeZone = NULL, string $locale = ""): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get set of locale keyword values
	 * @link http://php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
	 * @param string $key <p>
	 * The locale keyword for which relevant values are to be queried. Only
	 * 'calendar' is supported.
	 * </p>
	 * @param string $locale <p>
	 * The locale onto which the keyword/value pair are to be appended.
	 * </p>
	 * @param boolean $commonlyUsed <p>
	 * Whether to show only the values commonly used for the specified locale.
	 * </p>
	 * @return Iterator An iterator that yields strings with the locale keyword
	 * values or <b>FALSE</b> on failure.
	 */
	public static function getKeywordValuesForLocale(string $key, string $locale, bool $commonlyUsed): Iterator {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get number representing the current time
	 * @link http://php.net/manual/en/intlcalendar.getnow.php
	 * @return float A float representing a number of milliseconds since the epoch,
	 * not counting leap seconds.
	 */
	public static function getNow(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get array of locales for which there is data
	 * @link http://php.net/manual/en/intlcalendar.getavailablelocales.php
	 * @return array An array of strings, one for which locale.
	 */
	public static function getAvailableLocales(): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the value for a field
	 * @link http://php.net/manual/en/intlcalendar.get.php
	 * @param int $field
	 * @return int An integer with the value of the time field.
	 */
	public function get(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time currently represented by the object
	 * @link http://php.net/manual/en/intlcalendar.gettime.php
	 * @return float A float representing the number of milliseconds elapsed since the
	 * reference time (1 Jan 1970 00:00:00 UTC).
	 */
	public function getTime(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the calendar time in milliseconds since the epoch
	 * @link http://php.net/manual/en/intlcalendar.settime.php
	 * @param float $date <p>
	 * An instant represented by the number of number of milliseconds between
	 * such instant and the epoch, ignoring leap seconds.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTime(float $date): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add a (signed) amount of time to a field
	 * @link http://php.net/manual/en/intlcalendar.add.php
	 * @param int $field
	 * @param int $amount <p>
	 * The signed amount to add to the current field. If the amount is positive,
	 * the instant will be moved forward; if it is negative, the instant wil be
	 * moved into the past. The unit is implicit to the field type. For instance,
	 * hours for <b>IntlCalendar::FIELD_HOUR_OF_DAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function add(int $field, int $amount): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the timezone used by this calendar
	 * @link http://php.net/manual/en/intlcalendar.settimezone.php
	 * @param mixed $timeZone <p>
	 * The new timezone to be used by this calendar. It can be specified in the
	 * following ways:
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTimeZone($timeZone): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is after that of the passed object
	 * @link http://php.net/manual/en/intlcalendar.after.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is after that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function after(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is before that of the passed object
	 * @link http://php.net/manual/en/intlcalendar.before.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is before that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function before(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set a time field or several common fields at once
	 * @link http://php.net/manual/en/intlcalendar.set.php
	 * @param int $field
	 * @param int $value <p>
	 * The new value of the given field.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function set(int $field, int $value): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add value to field without carrying into more significant fields
	 * @link http://php.net/manual/en/intlcalendar.roll.php
	 * @param int $field
	 * @param mixed $amountOrUpOrDown <p>
	 * The (signed) amount to add to the field, <b>TRUE</b> for rolling up (adding
	 * 1), or <b>FALSE</b> for rolling down (subtracting
	 * 1).
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function roll(int $field, $amountOrUpOrDown): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Clear a field or all fields
	 * @link http://php.net/manual/en/intlcalendar.clear.php
	 * @param int $field [optional]
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. Failure can only occur is
	 * invalid arguments are provided.
	 */
	public function clear(int $field = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Calculate difference between given time and this objectʼs time
	 * @link http://php.net/manual/en/intlcalendar.fielddifference.php
	 * @param float $when <p>
	 * The time against which to compare the quantity represented by the
	 * <i>field</i>. For the result to be positive, the time
	 * given for this parameter must be ahead of the time of the object the
	 * method is being invoked on.
	 * </p>
	 * @param int $field <p>
	 * The field that represents the quantity being compared.
	 * </p>
	 * @return int a (signed) difference of time in the unit associated with the
	 * specified field or <b>FALSE</b> on failure.
	 */
	public function fieldDifference(float $when, int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The maximum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/en/intlcalendar.getactualmaximum.php
	 * @param int $field
	 * @return int An int representing the maximum value in the units associated
	 * with the given <i>field</i> or <b>FALSE</b> on failure.
	 */
	public function getActualMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The minimum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/en/intlcalendar.getactualminimum.php
	 * @param int $field
	 * @return int An int representing the minimum value in the fieldʼs
	 * unit or <b>FALSE</b> on failure.
	 */
	public function getActualMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * @link http://php.net/manual/en/intlcalendar.getdayofweektype.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int one of the constants
	 * <b>IntlCalendar::DOW_TYPE_WEEKDAY</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</b> or
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</b> or <b>FALSE</b> on failure.
	 */
	public function getDayOfWeekType(int $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the first day of the week for the calendarʼs locale
	 * @link http://php.net/manual/en/intlcalendar.getfirstdayofweek.php
	 * @return int One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b> or <b>FALSE</b> on failure.
	 */
	public function getFirstDayOfWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the largest local minimum value for a field
	 * @link http://php.net/manual/en/intlcalendar.getgreatestminimum.php
	 * @param int $field
	 * @return int An int representing a field value, in the fieldʼs
	 * unit, or <b>FALSE</b> on failure.
	 */
	public function getGreatestMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the smallest local maximum for a field
	 * @link http://php.net/manual/en/intlcalendar.getleastmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit or <b>FALSE</b> on failure.
	 */
	public function getLeastMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/en/intlcalendar.getlocale.php
	 * @param int $localeType <p>
	 * Whether to fetch the actual locale (the locale from which the calendar
	 * data originates, with <b>Locale::ACTUAL_LOCALE</b>) or the
	 * valid locale, i.e., the most specific locale supported by ICU relatively
	 * to the requested locale – see <b>Locale::VALID_LOCALE</b>.
	 * From the most general to the most specific, the locales are ordered in
	 * this fashion – actual locale, valid locale, requested locale.
	 * </p>
	 * @return string A locale string or <b>FALSE</b> on failure.
	 */
	public function getLocale(int $localeType): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global maximum value for a field
	 * @link http://php.net/manual/en/intlcalendar.getmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit or <b>FALSE</b> on failure.
	 */
	public function getMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
	 * @return int An int representing a number of days or <b>FALSE</b> on failure.
	 */
	public function getMinimalDaysInFirstWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global minimum value for a field
	 * @link http://php.net/manual/en/intlcalendar.getminimum.php
	 * @param int $field
	 * @return int An int representing a value for the given
	 * field in the fieldʼs unit or <b>FALSE</b> on failure.
	 */
	public function getMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the objectʼs timezone
	 * @link http://php.net/manual/en/intlcalendar.gettimezone.php
	 * @return IntlTimeZone An <b>IntlTimeZone</b> object corresponding to the one used
	 * internally in this object.
	 */
	public function getTimeZone(): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the calendar type
	 * @link http://php.net/manual/en/intlcalendar.gettype.php
	 * @return string A string representing the calendar type, such as
	 * 'gregorian', 'islamic', etc.
	 */
	public function getType(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time of the day at which weekend begins or ends
	 * @link http://php.net/manual/en/intlcalendar.getweekendtransition.php
	 * @param string $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int The number of milliseconds into the day at which the weekend begins or
	 * ends or <b>FALSE</b> on failure.
	 */
	public function getWeekendTransition(string $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether the objectʼs time is in Daylight Savings Time
	 * @link http://php.net/manual/en/intlcalendar.indaylighttime.php
	 * @return bool <b>TRUE</b> if the date is in Daylight Savings Time, <b>FALSE</b> otherwise.
	 * The value <b>FALSE</b> may also be returned on failure, for instance after
	 * specifying invalid field values on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function inDaylightTime(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether another calendar is equal but for a different time
	 * @link http://php.net/manual/en/intlcalendar.isequivalentto.php
	 * @param IntlCalendar $other <p>
	 * The other calendar against which the comparison is to be made.
	 * </p>
	 * @return bool Assuming there are no argument errors, returns <b>TRUE</b> iif the calendars are
	 * equivalent except possibly for their set time.
	 */
	public function isEquivalentTo(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether date/time interpretation is in lenient mode
	 * @link http://php.net/manual/en/intlcalendar.islenient.php
	 * @return bool A bool representing whether the calendar is set to lenient mode.
	 */
	public function isLenient(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether a certain date/time is in the weekend
	 * @link http://php.net/manual/en/intlcalendar.isweekend.php
	 * @param float $date [optional] <p>
	 * An optional timestamp representing the number of milliseconds since the
	 * epoch, excluding leap seconds. If <b>NULL</b>, this objectʼs current time is
	 * used instead.
	 * </p>
	 * @return bool A bool indicating whether the given or this objectʼs time occurs
	 * in a weekend.
	 * </p>
	 * <p>
	 * The value <b>FALSE</b> may also be returned on failure, for instance after giving
	 * a date out of bounds on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function isWeekend(float $date = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the day on which the week is deemed to start
	 * @link http://php.net/manual/en/intlcalendar.setfirstdayofweek.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setFirstDayOfWeek(int $dayOfWeek): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set whether date/time interpretation is to be lenient
	 * @link http://php.net/manual/en/intlcalendar.setlenient.php
	 * @param string $isLenient <p>
	 * Use <b>TRUE</b> to activate the lenient mode; <b>FALSE</b> otherwise.
	 * </p>
	 * @return ReturnType <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setLenient(string $isLenient): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
	 * @param int $minimalDays <p>
	 * The number of minimal days to set.
	 * </p>
	 * @return bool <b>TRUE</b> on success, <b>FALSE</b> on failure.
	 */
	public function setMinimalDaysInFirstWeek(int $minimalDays): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Compare time of two IntlCalendar objects for equality
	 * @link http://php.net/manual/en/intlcalendar.equals.php
	 * @param IntlCalendar $other <p>
	 * The calendar to compare with the primary object.
	 * </p>
	 * @return bool <b>TRUE</b> if the current time of both this and the passed in
	 * <b>IntlCalendar</b> object are the same, or <b>FALSE</b>
	 * otherwise. The value <b>FALSE</b> can also be returned on failure. This can only
	 * happen if bad arguments are passed in. In any case, the two cases can be
	 * distinguished by calling <b>intl_get_error_code</b>.
	 */
	public function equals(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling repeating wall time
	 * @link http://php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 */
	public function getRepeatedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling skipped wall time
	 * @link http://php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 */
	public function getSkippedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * @link http://php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setRepeatedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * @link http://php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setSkippedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Create an IntlCalendar from a DateTime object or string
	 * @link http://php.net/manual/en/intlcalendar.fromdatetime.php
	 * @param mixed $dateTime <p>
	 * A <b>DateTime</b> object or a string that
	 * can be passed to <b>DateTime::__construct</b>.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> object or <b>NULL</b> in case of
	 * failure. If a string is passed, any exception that occurs
	 * inside the <b>DateTime</b> constructor is propagated.
	 */
	public static function fromDateTime($dateTime): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Convert an IntlCalendar into a DateTime object
	 * @link http://php.net/manual/en/intlcalendar.todatetime.php
	 * @return DateTime A <b>DateTime</b> object with the same timezone as this
	 * object (though using PHPʼs database instead of ICUʼs) and the same time,
	 * except for the smaller precision (second precision instead of millisecond).
	 * Returns <b>FALSE</b> on failure.
	 */
	public function toDateTime(): DateTime {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/intlcalendar.geterrorcode.php
	 * @return int An ICU error code indicating either success, failure or a warning.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/intlcalendar.geterrormessage.php
	 * @return string The error message associated with last error that occurred in a function call
	 * on this object, or a string indicating the non-existance of an error.
	 */
	public function getErrorMessage(): string {}

}

class IntlGregorianCalendar extends IntlCalendar  {

	/**
	 * @param $timeZoneOrYear [optional]
	 * @param $localeOrMonth [optional]
	 * @param $dayOfMonth [optional]
	 * @param $hour [optional]
	 * @param $minute [optional]
	 * @param $second [optional]
	 */
	public function __construct($timeZoneOrYear, $localeOrMonth, $dayOfMonth, $hour, $minute, $second) {}

	/**
	 * @param $date
	 */
	public function setGregorianChange($date) {}

	public function getGregorianChange() {}

	/**
	 * @param $year
	 */
	public function isLeapYear($year) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create a new IntlCalendar
	 * @link http://php.net/manual/en/intlcalendar.createinstance.php
	 * @param mixed $timeZone [optional] <p>
	 * The timezone to use.
	 * </p>
	 * @param string $locale [optional] <p>
	 * A locale to use or <b>NULL</b> to use the default locale.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> instance or <b>NULL</b> on
	 * failure.
	 */
	public static function createInstance($timeZone = NULL, string $locale = ""): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get set of locale keyword values
	 * @link http://php.net/manual/en/intlcalendar.getkeywordvaluesforlocale.php
	 * @param string $key <p>
	 * The locale keyword for which relevant values are to be queried. Only
	 * 'calendar' is supported.
	 * </p>
	 * @param string $locale <p>
	 * The locale onto which the keyword/value pair are to be appended.
	 * </p>
	 * @param boolean $commonlyUsed <p>
	 * Whether to show only the values commonly used for the specified locale.
	 * </p>
	 * @return Iterator An iterator that yields strings with the locale keyword
	 * values or <b>FALSE</b> on failure.
	 */
	public static function getKeywordValuesForLocale(string $key, string $locale, bool $commonlyUsed): Iterator {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get number representing the current time
	 * @link http://php.net/manual/en/intlcalendar.getnow.php
	 * @return float A float representing a number of milliseconds since the epoch,
	 * not counting leap seconds.
	 */
	public static function getNow(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get array of locales for which there is data
	 * @link http://php.net/manual/en/intlcalendar.getavailablelocales.php
	 * @return array An array of strings, one for which locale.
	 */
	public static function getAvailableLocales(): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the value for a field
	 * @link http://php.net/manual/en/intlcalendar.get.php
	 * @param int $field
	 * @return int An integer with the value of the time field.
	 */
	public function get(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time currently represented by the object
	 * @link http://php.net/manual/en/intlcalendar.gettime.php
	 * @return float A float representing the number of milliseconds elapsed since the
	 * reference time (1 Jan 1970 00:00:00 UTC).
	 */
	public function getTime(): float {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the calendar time in milliseconds since the epoch
	 * @link http://php.net/manual/en/intlcalendar.settime.php
	 * @param float $date <p>
	 * An instant represented by the number of number of milliseconds between
	 * such instant and the epoch, ignoring leap seconds.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTime(float $date): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add a (signed) amount of time to a field
	 * @link http://php.net/manual/en/intlcalendar.add.php
	 * @param int $field
	 * @param int $amount <p>
	 * The signed amount to add to the current field. If the amount is positive,
	 * the instant will be moved forward; if it is negative, the instant wil be
	 * moved into the past. The unit is implicit to the field type. For instance,
	 * hours for <b>IntlCalendar::FIELD_HOUR_OF_DAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function add(int $field, int $amount): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the timezone used by this calendar
	 * @link http://php.net/manual/en/intlcalendar.settimezone.php
	 * @param mixed $timeZone <p>
	 * The new timezone to be used by this calendar. It can be specified in the
	 * following ways:
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function setTimeZone($timeZone): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is after that of the passed object
	 * @link http://php.net/manual/en/intlcalendar.after.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is after that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function after(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether this objectʼs time is before that of the passed object
	 * @link http://php.net/manual/en/intlcalendar.before.php
	 * @param IntlCalendar $other <p>
	 * The calendar whose time will be checked against the primary objectʼs time.
	 * </p>
	 * @return bool <b>TRUE</b> if this objectʼs current time is before that of the
	 * <i>calendar</i> argumentʼs time. Returns <b>FALSE</b> otherwise.
	 * Also returns <b>FALSE</b> on failure. You can use exceptions or
	 * <b>intl_get_error_code</b> to detect error conditions.
	 */
	public function before(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set a time field or several common fields at once
	 * @link http://php.net/manual/en/intlcalendar.set.php
	 * @param int $field
	 * @param int $value <p>
	 * The new value of the given field.
	 * </p>
	 * @return bool <b>TRUE</b> on success and <b>FALSE</b> on failure.
	 */
	public function set(int $field, int $value): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Add value to field without carrying into more significant fields
	 * @link http://php.net/manual/en/intlcalendar.roll.php
	 * @param int $field
	 * @param mixed $amountOrUpOrDown <p>
	 * The (signed) amount to add to the field, <b>TRUE</b> for rolling up (adding
	 * 1), or <b>FALSE</b> for rolling down (subtracting
	 * 1).
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function roll(int $field, $amountOrUpOrDown): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Clear a field or all fields
	 * @link http://php.net/manual/en/intlcalendar.clear.php
	 * @param int $field [optional]
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure. Failure can only occur is
	 * invalid arguments are provided.
	 */
	public function clear(int $field = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Calculate difference between given time and this objectʼs time
	 * @link http://php.net/manual/en/intlcalendar.fielddifference.php
	 * @param float $when <p>
	 * The time against which to compare the quantity represented by the
	 * <i>field</i>. For the result to be positive, the time
	 * given for this parameter must be ahead of the time of the object the
	 * method is being invoked on.
	 * </p>
	 * @param int $field <p>
	 * The field that represents the quantity being compared.
	 * </p>
	 * @return int a (signed) difference of time in the unit associated with the
	 * specified field or <b>FALSE</b> on failure.
	 */
	public function fieldDifference(float $when, int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The maximum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/en/intlcalendar.getactualmaximum.php
	 * @param int $field
	 * @return int An int representing the maximum value in the units associated
	 * with the given <i>field</i> or <b>FALSE</b> on failure.
	 */
	public function getActualMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * The minimum value for a field, considering the objectʼs current time
	 * @link http://php.net/manual/en/intlcalendar.getactualminimum.php
	 * @param int $field
	 * @return int An int representing the minimum value in the fieldʼs
	 * unit or <b>FALSE</b> on failure.
	 */
	public function getActualMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Tell whether a day is a weekday, weekend or a day that has a transition between the two
	 * @link http://php.net/manual/en/intlcalendar.getdayofweektype.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int one of the constants
	 * <b>IntlCalendar::DOW_TYPE_WEEKDAY</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND</b>,
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_OFFSET</b> or
	 * <b>IntlCalendar::DOW_TYPE_WEEKEND_CEASE</b> or <b>FALSE</b> on failure.
	 */
	public function getDayOfWeekType(int $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the first day of the week for the calendarʼs locale
	 * @link http://php.net/manual/en/intlcalendar.getfirstdayofweek.php
	 * @return int One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b> or <b>FALSE</b> on failure.
	 */
	public function getFirstDayOfWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the largest local minimum value for a field
	 * @link http://php.net/manual/en/intlcalendar.getgreatestminimum.php
	 * @param int $field
	 * @return int An int representing a field value, in the fieldʼs
	 * unit, or <b>FALSE</b> on failure.
	 */
	public function getGreatestMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the smallest local maximum for a field
	 * @link http://php.net/manual/en/intlcalendar.getleastmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit or <b>FALSE</b> on failure.
	 */
	public function getLeastMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/en/intlcalendar.getlocale.php
	 * @param int $localeType <p>
	 * Whether to fetch the actual locale (the locale from which the calendar
	 * data originates, with <b>Locale::ACTUAL_LOCALE</b>) or the
	 * valid locale, i.e., the most specific locale supported by ICU relatively
	 * to the requested locale – see <b>Locale::VALID_LOCALE</b>.
	 * From the most general to the most specific, the locales are ordered in
	 * this fashion – actual locale, valid locale, requested locale.
	 * </p>
	 * @return string A locale string or <b>FALSE</b> on failure.
	 */
	public function getLocale(int $localeType): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global maximum value for a field
	 * @link http://php.net/manual/en/intlcalendar.getmaximum.php
	 * @param int $field
	 * @return int An int representing a field value in the fieldʼs
	 * unit or <b>FALSE</b> on failure.
	 */
	public function getMaximum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/en/intlcalendar.getminimaldaysinfirstweek.php
	 * @return int An int representing a number of days or <b>FALSE</b> on failure.
	 */
	public function getMinimalDaysInFirstWeek(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the global minimum value for a field
	 * @link http://php.net/manual/en/intlcalendar.getminimum.php
	 * @param int $field
	 * @return int An int representing a value for the given
	 * field in the fieldʼs unit or <b>FALSE</b> on failure.
	 */
	public function getMinimum(int $field): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the objectʼs timezone
	 * @link http://php.net/manual/en/intlcalendar.gettimezone.php
	 * @return IntlTimeZone An <b>IntlTimeZone</b> object corresponding to the one used
	 * internally in this object.
	 */
	public function getTimeZone(): IntlTimeZone {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the calendar type
	 * @link http://php.net/manual/en/intlcalendar.gettype.php
	 * @return string A string representing the calendar type, such as
	 * 'gregorian', 'islamic', etc.
	 */
	public function getType(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get time of the day at which weekend begins or ends
	 * @link http://php.net/manual/en/intlcalendar.getweekendtransition.php
	 * @param string $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return int The number of milliseconds into the day at which the weekend begins or
	 * ends or <b>FALSE</b> on failure.
	 */
	public function getWeekendTransition(string $dayOfWeek): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether the objectʼs time is in Daylight Savings Time
	 * @link http://php.net/manual/en/intlcalendar.indaylighttime.php
	 * @return bool <b>TRUE</b> if the date is in Daylight Savings Time, <b>FALSE</b> otherwise.
	 * The value <b>FALSE</b> may also be returned on failure, for instance after
	 * specifying invalid field values on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function inDaylightTime(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether another calendar is equal but for a different time
	 * @link http://php.net/manual/en/intlcalendar.isequivalentto.php
	 * @param IntlCalendar $other <p>
	 * The other calendar against which the comparison is to be made.
	 * </p>
	 * @return bool Assuming there are no argument errors, returns <b>TRUE</b> iif the calendars are
	 * equivalent except possibly for their set time.
	 */
	public function isEquivalentTo(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether date/time interpretation is in lenient mode
	 * @link http://php.net/manual/en/intlcalendar.islenient.php
	 * @return bool A bool representing whether the calendar is set to lenient mode.
	 */
	public function isLenient(): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Whether a certain date/time is in the weekend
	 * @link http://php.net/manual/en/intlcalendar.isweekend.php
	 * @param float $date [optional] <p>
	 * An optional timestamp representing the number of milliseconds since the
	 * epoch, excluding leap seconds. If <b>NULL</b>, this objectʼs current time is
	 * used instead.
	 * </p>
	 * @return bool A bool indicating whether the given or this objectʼs time occurs
	 * in a weekend.
	 * </p>
	 * <p>
	 * The value <b>FALSE</b> may also be returned on failure, for instance after giving
	 * a date out of bounds on non-lenient mode; use exceptions or query
	 * <b>intl_get_error_code</b> to disambiguate.
	 */
	public function isWeekend(float $date = NULL): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the day on which the week is deemed to start
	 * @link http://php.net/manual/en/intlcalendar.setfirstdayofweek.php
	 * @param int $dayOfWeek <p>
	 * One of the constants <b>IntlCalendar::DOW_SUNDAY</b>,
	 * <b>IntlCalendar::DOW_MONDAY</b>, …,
	 * <b>IntlCalendar::DOW_SATURDAY</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setFirstDayOfWeek(int $dayOfWeek): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set whether date/time interpretation is to be lenient
	 * @link http://php.net/manual/en/intlcalendar.setlenient.php
	 * @param string $isLenient <p>
	 * Use <b>TRUE</b> to activate the lenient mode; <b>FALSE</b> otherwise.
	 * </p>
	 * @return ReturnType <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setLenient(string $isLenient): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set minimal number of days the first week in a year or month can have
	 * @link http://php.net/manual/en/intlcalendar.setminimaldaysinfirstweek.php
	 * @param int $minimalDays <p>
	 * The number of minimal days to set.
	 * </p>
	 * @return bool <b>TRUE</b> on success, <b>FALSE</b> on failure.
	 */
	public function setMinimalDaysInFirstWeek(int $minimalDays): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Compare time of two IntlCalendar objects for equality
	 * @link http://php.net/manual/en/intlcalendar.equals.php
	 * @param IntlCalendar $other <p>
	 * The calendar to compare with the primary object.
	 * </p>
	 * @return bool <b>TRUE</b> if the current time of both this and the passed in
	 * <b>IntlCalendar</b> object are the same, or <b>FALSE</b>
	 * otherwise. The value <b>FALSE</b> can also be returned on failure. This can only
	 * happen if bad arguments are passed in. In any case, the two cases can be
	 * distinguished by calling <b>intl_get_error_code</b>.
	 */
	public function equals(IntlCalendar $other): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling repeating wall time
	 * @link http://php.net/manual/en/intlcalendar.getrepeatedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 */
	public function getRepeatedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get behavior for handling skipped wall time
	 * @link http://php.net/manual/en/intlcalendar.getskippedwalltimeoption.php
	 * @return int One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 */
	public function getSkippedWallTimeOption(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling repeating wall times at negative timezone offset transitions
	 * @link http://php.net/manual/en/intlcalendar.setrepeatedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b> or
	 * <b>IntlCalendar::WALLTIME_LAST</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setRepeatedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set behavior for handling skipped wall times at positive timezone offset transitions
	 * @link http://php.net/manual/en/intlcalendar.setskippedwalltimeoption.php
	 * @param int $wallTimeOption <p>
	 * One of the constants <b>IntlCalendar::WALLTIME_FIRST</b>,
	 * <b>IntlCalendar::WALLTIME_LAST</b> or
	 * <b>IntlCalendar::WALLTIME_NEXT_VALID</b>.
	 * </p>
	 * @return bool <b>TRUE</b> on success. Failure can only happen due to invalid parameters.
	 */
	public function setSkippedWallTimeOption(int $wallTimeOption): bool {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Create an IntlCalendar from a DateTime object or string
	 * @link http://php.net/manual/en/intlcalendar.fromdatetime.php
	 * @param mixed $dateTime <p>
	 * A <b>DateTime</b> object or a string that
	 * can be passed to <b>DateTime::__construct</b>.
	 * </p>
	 * @return IntlCalendar The created <b>IntlCalendar</b> object or <b>NULL</b> in case of
	 * failure. If a string is passed, any exception that occurs
	 * inside the <b>DateTime</b> constructor is propagated.
	 */
	public static function fromDateTime($dateTime): IntlCalendar {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a2)<br/>
	 * Convert an IntlCalendar into a DateTime object
	 * @link http://php.net/manual/en/intlcalendar.todatetime.php
	 * @return DateTime A <b>DateTime</b> object with the same timezone as this
	 * object (though using PHPʼs database instead of ICUʼs) and the same time,
	 * except for the smaller precision (second precision instead of millisecond).
	 * Returns <b>FALSE</b> on failure.
	 */
	public function toDateTime(): DateTime {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/intlcalendar.geterrorcode.php
	 * @return int An ICU error code indicating either success, failure or a warning.
	 */
	public function getErrorCode(): int {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/intlcalendar.geterrormessage.php
	 * @return string The error message associated with last error that occurred in a function call
	 * on this object, or a string indicating the non-existance of an error.
	 */
	public function getErrorMessage(): string {}

}

/**
 * @link http://php.net/manual/en/class.spoofchecker.php
 */
class Spoofchecker  {
	const SINGLE_SCRIPT_CONFUSABLE = 1;
	const MIXED_SCRIPT_CONFUSABLE = 2;
	const WHOLE_SCRIPT_CONFUSABLE = 4;
	const ANY_CASE = 8;
	const SINGLE_SCRIPT = 16;
	const INVISIBLE = 32;
	const CHAR_LIMIT = 64;


	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Constructor
	 * @link http://php.net/manual/en/spoofchecker.construct.php
	 */
	public function __construct() {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Checks if a given text contains any suspicious characters
	 * @link http://php.net/manual/en/spoofchecker.issuspicious.php
	 * @param string $text <p>
	 * </p>
	 * @param string $error [optional] <p>
	 * </p>
	 * @return bool
	 */
	public function isSuspicious(string $text, string &$error = null): bool {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Checks if a given text contains any confusable characters
	 * @link http://php.net/manual/en/spoofchecker.areconfusable.php
	 * @param string $s1 <p>
	 * </p>
	 * @param string $s2 <p>
	 * </p>
	 * @param string $error [optional] <p>
	 * </p>
	 * @return bool
	 */
	public function areConfusable(string $s1, string $s2, string &$error = null): bool {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Locales to use when running checks
	 * @link http://php.net/manual/en/spoofchecker.setallowedlocales.php
	 * @param string $locale_list <p>
	 * </p>
	 * @return void
	 */
	public function setAllowedLocales(string $locale_list) {}

	/**
	 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
	 * Set the checks to run
	 * @link http://php.net/manual/en/spoofchecker.setchecks.php
	 * @param long $checks <p>
	 * </p>
	 * @return void
	 */
	public function setChecks(long $checks) {}

}

/**
 * This class is used for generating exceptions when errors occur inside intl
 * functions. Such exceptions are only generated when intl.use_exceptions is enabled.
 * @link http://php.net/manual/en/class.intlexception.php
 */
class IntlException extends Exception implements Throwable {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Clone the exception
	 * @link http://php.net/manual/en/exception.clone.php
	 * @return void No value is returned.
	 */
	final private function __clone() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Construct the exception
	 * @link http://php.net/manual/en/exception.construct.php
	 * @param string $message [optional] <p>
	 * The Exception message to throw.
	 * </p>
	 * @param int $code [optional] <p>
	 * The Exception code.
	 * </p>
	 * @param Throwable $previous [optional] <p>
	 * The previous exception used for the exception chaining.
	 * </p>
	 */
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null) {}

	public function __wakeup() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the Exception message
	 * @link http://php.net/manual/en/exception.getmessage.php
	 * @return string the Exception message as a string.
	 */
	final public function getMessage(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the Exception code
	 * @link http://php.net/manual/en/exception.getcode.php
	 * @return mixed the exception code as integer in
	 * <b>Exception</b> but possibly as other type in
	 * <b>Exception</b> descendants (for example as
	 * string in <b>PDOException</b>).
	 */
	final public function getCode() {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the file in which the exception occurred
	 * @link http://php.net/manual/en/exception.getfile.php
	 * @return string the filename in which the exception was created.
	 */
	final public function getFile(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the line in which the exception occurred
	 * @link http://php.net/manual/en/exception.getline.php
	 * @return int the line number where the exception was created.
	 */
	final public function getLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/en/exception.gettrace.php
	 * @return array the Exception stack trace as an array.
	 */
	final public function getTrace(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Returns previous Exception
	 * @link http://php.net/manual/en/exception.getprevious.php
	 * @return Exception the previous <b>Exception</b> if available
	 * or <b>NULL</b> otherwise.
	 */
	final public function getPrevious(): Exception {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/en/exception.gettraceasstring.php
	 * @return string the Exception stack trace as a string.
	 */
	final public function getTraceAsString(): string {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * String representation of the exception
	 * @link http://php.net/manual/en/exception.tostring.php
	 * @return string the string representation of the exception.
	 */
	public function __toString(): string {}

}

/**
 * This class represents iterator objects throughout the intl extension
 * whenever the iterator cannot be identified with any other object provided
 * by the extension. The distinct iterator object used internally by the
 * foreach
 * construct can only be obtained (in the relevant part here) from
 * objects, so objects of this class serve the purpose of providing the hook
 * through which this internal object can be obtained. As a convenience, this
 * class also implements the <b>Iterator</b> interface,
 * allowing the collection of values to be navigated using the methods
 * defined in that interface. Both these methods and the internal iterator
 * objects provided to foreach are backed by the same
 * state (e.g. the position of the iterator and its current value).
 * @link http://php.net/manual/en/class.intliterator.php
 */
class IntlIterator implements Iterator, Traversable {

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the current element
	 * @link http://php.net/manual/en/intliterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/intliterator.key.php
	 * @return ReturnType
	 */
	public function key(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Move forward to the next element
	 * @link http://php.net/manual/en/intliterator.next.php
	 * @return ReturnType
	 */
	public function next(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Rewind the iterator to the first element
	 * @link http://php.net/manual/en/intliterator.rewind.php
	 * @return ReturnType
	 */
	public function rewind(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Check if current position is valid
	 * @link http://php.net/manual/en/intliterator.valid.php
	 * @return ReturnType
	 */
	public function valid(): ReturnType {}

}

/**
 * A &quot;break iterator&quot; is an ICU object that exposes methods for locating
 * boundaries in text (e.g. word or sentence boundaries).
 * The PHP <b>IntlBreakIterator</b> serves as the base class
 * for all types of ICU break iterators. Where extra functionality is
 * available, the intl extension may expose the ICU break iterator with
 * suitable subclasses, such as
 * <b>IntlRuleBasedBreakIterator</b> or
 * <b>IntlCodePointBreaIterator</b>.
 * @link http://php.net/manual/en/class.intlbreakiterator.php
 */
class IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * (No version information available, might only be in Git)<br/>
	 * Private constructor for disallowing instantiation
	 * @link http://php.net/manual/en/intlbreakiterator.construct.php
	 */
	private function __construct() {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for word breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createWordInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for logically possible line breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createLineInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for boundaries of combining character sequences
	 * @link http://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createCharacterInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for sentence breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createSentenceInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for title-casing breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createTitleInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for boundaries of code points
	 * @link http://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType
	 */
	public static function createCodePointInstance(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the text being scanned
	 * @link http://php.net/manual/en/intlbreakiterator.gettext.php
	 * @return ReturnType
	 */
	public function getText(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the text being scanned
	 * @link http://php.net/manual/en/intlbreakiterator.settext.php
	 * @param string $_text_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function setText(string $_text_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set position to the first character in the text
	 * @link http://php.net/manual/en/intlbreakiterator.first.php
	 * @return ReturnType
	 */
	public function first(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to index beyond the last character
	 * @link http://php.net/manual/en/intlbreakiterator.last.php
	 * @return ReturnType
	 */
	public function last(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to the boundary immediately before the current
	 * @link http://php.net/manual/en/intlbreakiterator.previous.php
	 * @return ReturnType
	 */
	public function previous(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Advance the iterator the next boundary
	 * @link http://php.net/manual/en/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function next(string $_offset_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get index of current position
	 * @link http://php.net/manual/en/intlbreakiterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Advance the iterator to the first boundary following specified offset
	 * @link http://php.net/manual/en/intlbreakiterator.following.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function following(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to the first boundary before an offset
	 * @link http://php.net/manual/en/intlbreakiterator.preceding.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function preceding(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Tell whether an offset is a boundaryʼs offset
	 * @link http://php.net/manual/en/intlbreakiterator.isboundary.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function isBoundary(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/en/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getLocale(string $_locale_type_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create iterator for navigating fragments between boundaries
	 * @link http://php.net/manual/en/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getPartsIterator(string $_key_type_ = null): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @return ReturnType
	 */
	public function getErrorCode(): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @return ReturnType
	 */
	public function getErrorMessage(): ReturnType {}

}

/**
 * A subclass of <b>IntlBreakIterator</b> that encapsulates
 * ICU break iterators whose behavior is specified using a set of rules. This
 * is the most common kind of break iterators.
 * @link http://php.net/manual/en/class.intlrulebasedbreakiterator.php
 */
class IntlRuleBasedBreakIterator extends IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create iterator from ruleset
	 * @link http://php.net/manual/en/intlrulebasedbreakiterator.construct.php
	 * @param string $rules
	 * @param string $areCompiled [optional]
	 */
	public function __construct(string $rules, string $areCompiled = null) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the rule set used to create this object
	 * @link http://php.net/manual/en/intlrulebasedbreakiterator.getrules.php
	 * @return ReturnType
	 */
	public function getRules(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the largest status value from the break rules that determined the current break position
	 * @link http://php.net/manual/en/intlrulebasedbreakiterator.getrulestatus.php
	 * @return ReturnType
	 */
	public function getRuleStatus(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the status values from the break rules that determined the current break position
	 * @link http://php.net/manual/en/intlrulebasedbreakiterator.getrulestatusvec.php
	 * @return ReturnType
	 */
	public function getRuleStatusVec(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the binary form of compiled rules
	 * @link http://php.net/manual/en/intlrulebasedbreakiterator.getbinaryrules.php
	 * @return ReturnType
	 */
	public function getBinaryRules(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for word breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createWordInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for logically possible line breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createLineInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for boundaries of combining character sequences
	 * @link http://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createCharacterInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for sentence breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createSentenceInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for title-casing breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createTitleInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for boundaries of code points
	 * @link http://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType
	 */
	public static function createCodePointInstance(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the text being scanned
	 * @link http://php.net/manual/en/intlbreakiterator.gettext.php
	 * @return ReturnType
	 */
	public function getText(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the text being scanned
	 * @link http://php.net/manual/en/intlbreakiterator.settext.php
	 * @param string $_text_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function setText(string $_text_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set position to the first character in the text
	 * @link http://php.net/manual/en/intlbreakiterator.first.php
	 * @return ReturnType
	 */
	public function first(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to index beyond the last character
	 * @link http://php.net/manual/en/intlbreakiterator.last.php
	 * @return ReturnType
	 */
	public function last(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to the boundary immediately before the current
	 * @link http://php.net/manual/en/intlbreakiterator.previous.php
	 * @return ReturnType
	 */
	public function previous(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Advance the iterator the next boundary
	 * @link http://php.net/manual/en/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function next(string $_offset_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get index of current position
	 * @link http://php.net/manual/en/intlbreakiterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Advance the iterator to the first boundary following specified offset
	 * @link http://php.net/manual/en/intlbreakiterator.following.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function following(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to the first boundary before an offset
	 * @link http://php.net/manual/en/intlbreakiterator.preceding.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function preceding(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Tell whether an offset is a boundaryʼs offset
	 * @link http://php.net/manual/en/intlbreakiterator.isboundary.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function isBoundary(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/en/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getLocale(string $_locale_type_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create iterator for navigating fragments between boundaries
	 * @link http://php.net/manual/en/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getPartsIterator(string $_key_type_ = null): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @return ReturnType
	 */
	public function getErrorCode(): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @return ReturnType
	 */
	public function getErrorMessage(): ReturnType {}

}

/**
 * This break iterator
 * identifies the boundaries between UTF-8 code points.
 * @link http://php.net/manual/en/class.intlcodepointbreakiterator.php
 */
class IntlCodePointBreakIterator extends IntlBreakIterator implements Traversable {
	const DONE = -1;
	const WORD_NONE = 0;
	const WORD_NONE_LIMIT = 100;
	const WORD_NUMBER = 100;
	const WORD_NUMBER_LIMIT = 200;
	const WORD_LETTER = 200;
	const WORD_LETTER_LIMIT = 300;
	const WORD_KANA = 300;
	const WORD_KANA_LIMIT = 400;
	const WORD_IDEO = 400;
	const WORD_IDEO_LIMIT = 500;
	const LINE_SOFT = 0;
	const LINE_SOFT_LIMIT = 100;
	const LINE_HARD = 100;
	const LINE_HARD_LIMIT = 200;
	const SENTENCE_TERM = 0;
	const SENTENCE_TERM_LIMIT = 100;
	const SENTENCE_SEP = 100;
	const SENTENCE_SEP_LIMIT = 200;


	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get last code point passed over after advancing or receding the iterator
	 * @link http://php.net/manual/en/intlcodepointbreakiterator.getlastcodepoint.php
	 * @return ReturnType
	 */
	public function getLastCodePoint(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Private constructor for disallowing instantiation
	 * @link http://php.net/manual/en/intlbreakiterator.construct.php
	 */
	private function __construct() {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for word breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createwordinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createWordInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for logically possible line breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createlineinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createLineInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for boundaries of combining character sequences
	 * @link http://php.net/manual/en/intlbreakiterator.createcharacterinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createCharacterInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for sentence breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createsentenceinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createSentenceInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for title-casing breaks
	 * @link http://php.net/manual/en/intlbreakiterator.createtitleinstance.php
	 * @param string $_locale_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public static function createTitleInstance(string $_locale_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create break iterator for boundaries of code points
	 * @link http://php.net/manual/en/intlbreakiterator.createcodepointinstance.php
	 * @return ReturnType
	 */
	public static function createCodePointInstance(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the text being scanned
	 * @link http://php.net/manual/en/intlbreakiterator.gettext.php
	 * @return ReturnType
	 */
	public function getText(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the text being scanned
	 * @link http://php.net/manual/en/intlbreakiterator.settext.php
	 * @param string $_text_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function setText(string $_text_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set position to the first character in the text
	 * @link http://php.net/manual/en/intlbreakiterator.first.php
	 * @return ReturnType
	 */
	public function first(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to index beyond the last character
	 * @link http://php.net/manual/en/intlbreakiterator.last.php
	 * @return ReturnType
	 */
	public function last(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to the boundary immediately before the current
	 * @link http://php.net/manual/en/intlbreakiterator.previous.php
	 * @return ReturnType
	 */
	public function previous(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Advance the iterator the next boundary
	 * @link http://php.net/manual/en/intlbreakiterator.next.php
	 * @param string $_offset_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function next(string $_offset_ = null): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get index of current position
	 * @link http://php.net/manual/en/intlbreakiterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Advance the iterator to the first boundary following specified offset
	 * @link http://php.net/manual/en/intlbreakiterator.following.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function following(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set the iterator position to the first boundary before an offset
	 * @link http://php.net/manual/en/intlbreakiterator.preceding.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function preceding(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Tell whether an offset is a boundaryʼs offset
	 * @link http://php.net/manual/en/intlbreakiterator.isboundary.php
	 * @param string $_offset_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function isBoundary(string $_offset_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the locale associated with the object
	 * @link http://php.net/manual/en/intlbreakiterator.getlocale.php
	 * @param string $_locale_type_ <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getLocale(string $_locale_type_): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Create iterator for navigating fragments between boundaries
	 * @link http://php.net/manual/en/intlbreakiterator.getpartsiterator.php
	 * @param string $_key_type_ [optional] <p>
	 * </p>
	 * @return ReturnType
	 */
	public function getPartsIterator(string $_key_type_ = null): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/intlbreakiterator.geterrorcode.php
	 * @return ReturnType
	 */
	public function getErrorCode(): ReturnType {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/intlbreakiterator.geterrormessage.php
	 * @return ReturnType
	 */
	public function getErrorMessage(): ReturnType {}

}

/**
 * Objects of this class can be obtained from
 * <b>IntlBreakIterator</b> objects. While the break
 * iterators provide a sequence of boundary positions when iterated,
 * <b>IntlPartsIterator</b> objects provide, as a
 * convenience, the text fragments comprehended between two successive
 * boundaries.
 * @link http://php.net/manual/en/class.intlpartsiterator.php
 */
class IntlPartsIterator extends IntlIterator implements Traversable, Iterator {
	const KEY_SEQUENTIAL = 0;
	const KEY_LEFT = 1;
	const KEY_RIGHT = 2;


	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get IntlBreakIterator backing this parts iterator
	 * @link http://php.net/manual/en/intlpartsiterator.getbreakiterator.php
	 * @return ReturnType
	 */
	public function getBreakIterator(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the current element
	 * @link http://php.net/manual/en/intliterator.current.php
	 * @return ReturnType
	 */
	public function current(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/intliterator.key.php
	 * @return ReturnType
	 */
	public function key(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Move forward to the next element
	 * @link http://php.net/manual/en/intliterator.next.php
	 * @return ReturnType
	 */
	public function next(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Rewind the iterator to the first element
	 * @link http://php.net/manual/en/intliterator.rewind.php
	 * @return ReturnType
	 */
	public function rewind(): ReturnType {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Check if current position is valid
	 * @link http://php.net/manual/en/intliterator.valid.php
	 * @return ReturnType
	 */
	public function valid(): ReturnType {}

}

/**
 * @link http://php.net/manual/en/class.uconverter.php
 */
class UConverter  {
	const REASON_UNASSIGNED = 0;
	const REASON_ILLEGAL = 1;
	const REASON_IRREGULAR = 2;
	const REASON_RESET = 3;
	const REASON_CLOSE = 4;
	const REASON_CLONE = 5;
	const UNSUPPORTED_CONVERTER = -1;
	const SBCS = 0;
	const DBCS = 1;
	const MBCS = 2;
	const LATIN_1 = 3;
	const UTF8 = 4;
	const UTF16_BigEndian = 5;
	const UTF16_LittleEndian = 6;
	const UTF32_BigEndian = 7;
	const UTF32_LittleEndian = 8;
	const EBCDIC_STATEFUL = 9;
	const ISO_2022 = 10;
	const LMBCS_1 = 11;
	const LMBCS_2 = 12;
	const LMBCS_3 = 13;
	const LMBCS_4 = 14;
	const LMBCS_5 = 15;
	const LMBCS_6 = 16;
	const LMBCS_8 = 17;
	const LMBCS_11 = 18;
	const LMBCS_16 = 19;
	const LMBCS_17 = 20;
	const LMBCS_18 = 21;
	const LMBCS_19 = 22;
	const LMBCS_LAST = 22;
	const HZ = 23;
	const SCSU = 24;
	const ISCII = 25;
	const US_ASCII = 26;
	const UTF7 = 27;
	const BOCU1 = 28;
	const UTF16 = 29;
	const UTF32 = 30;
	const CESU8 = 31;
	const IMAP_MAILBOX = 32;


	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Create UConverter object
	 * @link http://php.net/manual/en/uconverter.construct.php
	 * @param string $destination_encoding [optional] <p>
	 * </p>
	 * @param string $source_encoding [optional] <p>
	 * </p>
	 */
	public function __construct(string $destination_encoding = null, string $source_encoding = null) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the source encoding
	 * @link http://php.net/manual/en/uconverter.setsourceencoding.php
	 * @param string $encoding <p>
	 * </p>
	 * @return void
	 */
	public function setSourceEncoding(string $encoding) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the destination encoding
	 * @link http://php.net/manual/en/uconverter.setdestinationencoding.php
	 * @param string $encoding <p>
	 * </p>
	 * @return void
	 */
	public function setDestinationEncoding(string $encoding) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the source encoding
	 * @link http://php.net/manual/en/uconverter.getsourceencoding.php
	 * @return string
	 */
	public function getSourceEncoding(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the destination encoding
	 * @link http://php.net/manual/en/uconverter.getdestinationencoding.php
	 * @return string
	 */
	public function getDestinationEncoding(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the source convertor type
	 * @link http://php.net/manual/en/uconverter.getsourcetype.php
	 * @return integer
	 */
	public function getSourceType(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the destination converter type
	 * @link http://php.net/manual/en/uconverter.getdestinationtype.php
	 * @return integer
	 */
	public function getDestinationType(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get substitution chars
	 * @link http://php.net/manual/en/uconverter.getsubstchars.php
	 * @return string
	 */
	public function getSubstChars(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Set the substitution chars
	 * @link http://php.net/manual/en/uconverter.setsubstchars.php
	 * @param string $chars <p>
	 * </p>
	 * @return void
	 */
	public function setSubstChars(string $chars) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Default "to" callback function
	 * @link http://php.net/manual/en/uconverter.toucallback.php
	 * @param integer $reason <p>
	 * </p>
	 * @param string $source <p>
	 * </p>
	 * @param string $codeUnits <p>
	 * </p>
	 * @param integer $error <p>
	 * </p>
	 * @return mixed
	 */
	public function toUCallback(integer $reason, string $source, string $codeUnits, integer &$error) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Default "from" callback function
	 * @link http://php.net/manual/en/uconverter.fromucallback.php
	 * @param integer $reason <p>
	 * </p>
	 * @param string $source <p>
	 * </p>
	 * @param string $codePoint <p>
	 * </p>
	 * @param integer $error <p>
	 * </p>
	 * @return mixed
	 */
	public function fromUCallback(integer $reason, string $source, string $codePoint, integer &$error) {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Convert string from one charset to another
	 * @link http://php.net/manual/en/uconverter.convert.php
	 * @param string $str <p>
	 * </p>
	 * @param bool $reverse [optional] <p>
	 * </p>
	 * @return string
	 */
	public function convert(string $str, bool $reverse = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Convert string from one charset to another
	 * @link http://php.net/manual/en/uconverter.transcode.php
	 * @param string $str <p>
	 * </p>
	 * @param string $toEncoding <p>
	 * </p>
	 * @param string $fromEncoding <p>
	 * </p>
	 * @param array $options [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function transcode(string $str, string $toEncoding, string $fromEncoding, array $options = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error code on the object
	 * @link http://php.net/manual/en/uconverter.geterrorcode.php
	 * @return integer
	 */
	public function getErrorCode(): integer {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get last error message on the object
	 * @link http://php.net/manual/en/uconverter.geterrormessage.php
	 * @return string
	 */
	public function getErrorMessage(): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get string representation of the callback reason
	 * @link http://php.net/manual/en/uconverter.reasontext.php
	 * @param integer $reason [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function reasonText(integer $reason = null): string {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the available canonical converter names
	 * @link http://php.net/manual/en/uconverter.getavailable.php
	 * @return array
	 */
	public static function getAvailable(): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get the aliases of the given name
	 * @link http://php.net/manual/en/uconverter.getaliases.php
	 * @param string $name [optional] <p>
	 * </p>
	 * @return array
	 */
	public static function getAliases(string $name = null): array {}

	/**
	 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
	 * Get standards associated to converter names
	 * @link http://php.net/manual/en/uconverter.getstandards.php
	 * @return array
	 */
	public static function getStandards(): array {}

}

/**
 * <b>IntlChar</b> provides access to a number of utility
 * methods that can be used to access information about Unicode characters.
 * @link http://php.net/manual/en/class.intlchar.php
 */
class IntlChar  {
	const UNICODE_VERSION = 7.0;
	const CODEPOINT_MIN = 0;
	const CODEPOINT_MAX = 1114111;
	const FOLD_CASE_DEFAULT = 0;
	const FOLD_CASE_EXCLUDE_SPECIAL_I = 1;
	const PROPERTY_ALPHABETIC = 0;
	const PROPERTY_BINARY_START = 0;
	const PROPERTY_ASCII_HEX_DIGIT = 1;
	const PROPERTY_BIDI_CONTROL = 2;
	const PROPERTY_BIDI_MIRRORED = 3;
	const PROPERTY_DASH = 4;
	const PROPERTY_DEFAULT_IGNORABLE_CODE_POINT = 5;
	const PROPERTY_DEPRECATED = 6;
	const PROPERTY_DIACRITIC = 7;
	const PROPERTY_EXTENDER = 8;
	const PROPERTY_FULL_COMPOSITION_EXCLUSION = 9;
	const PROPERTY_GRAPHEME_BASE = 10;
	const PROPERTY_GRAPHEME_EXTEND = 11;
	const PROPERTY_GRAPHEME_LINK = 12;
	const PROPERTY_HEX_DIGIT = 13;
	const PROPERTY_HYPHEN = 14;
	const PROPERTY_ID_CONTINUE = 15;
	const PROPERTY_ID_START = 16;
	const PROPERTY_IDEOGRAPHIC = 17;
	const PROPERTY_IDS_BINARY_OPERATOR = 18;
	const PROPERTY_IDS_TRINARY_OPERATOR = 19;
	const PROPERTY_JOIN_CONTROL = 20;
	const PROPERTY_LOGICAL_ORDER_EXCEPTION = 21;
	const PROPERTY_LOWERCASE = 22;
	const PROPERTY_MATH = 23;
	const PROPERTY_NONCHARACTER_CODE_POINT = 24;
	const PROPERTY_QUOTATION_MARK = 25;
	const PROPERTY_RADICAL = 26;
	const PROPERTY_SOFT_DOTTED = 27;
	const PROPERTY_TERMINAL_PUNCTUATION = 28;
	const PROPERTY_UNIFIED_IDEOGRAPH = 29;
	const PROPERTY_UPPERCASE = 30;
	const PROPERTY_WHITE_SPACE = 31;
	const PROPERTY_XID_CONTINUE = 32;
	const PROPERTY_XID_START = 33;
	const PROPERTY_CASE_SENSITIVE = 34;
	const PROPERTY_S_TERM = 35;
	const PROPERTY_VARIATION_SELECTOR = 36;
	const PROPERTY_NFD_INERT = 37;
	const PROPERTY_NFKD_INERT = 38;
	const PROPERTY_NFC_INERT = 39;
	const PROPERTY_NFKC_INERT = 40;
	const PROPERTY_SEGMENT_STARTER = 41;
	const PROPERTY_PATTERN_SYNTAX = 42;
	const PROPERTY_PATTERN_WHITE_SPACE = 43;
	const PROPERTY_POSIX_ALNUM = 44;
	const PROPERTY_POSIX_BLANK = 45;
	const PROPERTY_POSIX_GRAPH = 46;
	const PROPERTY_POSIX_PRINT = 47;
	const PROPERTY_POSIX_XDIGIT = 48;
	const PROPERTY_CASED = 49;
	const PROPERTY_CASE_IGNORABLE = 50;
	const PROPERTY_CHANGES_WHEN_LOWERCASED = 51;
	const PROPERTY_CHANGES_WHEN_UPPERCASED = 52;
	const PROPERTY_CHANGES_WHEN_TITLECASED = 53;
	const PROPERTY_CHANGES_WHEN_CASEFOLDED = 54;
	const PROPERTY_CHANGES_WHEN_CASEMAPPED = 55;
	const PROPERTY_CHANGES_WHEN_NFKC_CASEFOLDED = 56;
	const PROPERTY_BINARY_LIMIT = 57;
	const PROPERTY_BIDI_CLASS = 4096;
	const PROPERTY_INT_START = 4096;
	const PROPERTY_BLOCK = 4097;
	const PROPERTY_CANONICAL_COMBINING_CLASS = 4098;
	const PROPERTY_DECOMPOSITION_TYPE = 4099;
	const PROPERTY_EAST_ASIAN_WIDTH = 4100;
	const PROPERTY_GENERAL_CATEGORY = 4101;
	const PROPERTY_JOINING_GROUP = 4102;
	const PROPERTY_JOINING_TYPE = 4103;
	const PROPERTY_LINE_BREAK = 4104;
	const PROPERTY_NUMERIC_TYPE = 4105;
	const PROPERTY_SCRIPT = 4106;
	const PROPERTY_HANGUL_SYLLABLE_TYPE = 4107;
	const PROPERTY_NFD_QUICK_CHECK = 4108;
	const PROPERTY_NFKD_QUICK_CHECK = 4109;
	const PROPERTY_NFC_QUICK_CHECK = 4110;
	const PROPERTY_NFKC_QUICK_CHECK = 4111;
	const PROPERTY_LEAD_CANONICAL_COMBINING_CLASS = 4112;
	const PROPERTY_TRAIL_CANONICAL_COMBINING_CLASS = 4113;
	const PROPERTY_GRAPHEME_CLUSTER_BREAK = 4114;
	const PROPERTY_SENTENCE_BREAK = 4115;
	const PROPERTY_WORD_BREAK = 4116;
	const PROPERTY_BIDI_PAIRED_BRACKET_TYPE = 4117;
	const PROPERTY_INT_LIMIT = 4118;
	const PROPERTY_GENERAL_CATEGORY_MASK = 8192;
	const PROPERTY_MASK_START = 8192;
	const PROPERTY_MASK_LIMIT = 8193;
	const PROPERTY_NUMERIC_VALUE = 12288;
	const PROPERTY_DOUBLE_START = 12288;
	const PROPERTY_DOUBLE_LIMIT = 12289;
	const PROPERTY_AGE = 16384;
	const PROPERTY_STRING_START = 16384;
	const PROPERTY_BIDI_MIRRORING_GLYPH = 16385;
	const PROPERTY_CASE_FOLDING = 16386;
	const PROPERTY_ISO_COMMENT = 16387;
	const PROPERTY_LOWERCASE_MAPPING = 16388;
	const PROPERTY_NAME = 16389;
	const PROPERTY_SIMPLE_CASE_FOLDING = 16390;
	const PROPERTY_SIMPLE_LOWERCASE_MAPPING = 16391;
	const PROPERTY_SIMPLE_TITLECASE_MAPPING = 16392;
	const PROPERTY_SIMPLE_UPPERCASE_MAPPING = 16393;
	const PROPERTY_TITLECASE_MAPPING = 16394;
	const PROPERTY_UNICODE_1_NAME = 16395;
	const PROPERTY_UPPERCASE_MAPPING = 16396;
	const PROPERTY_BIDI_PAIRED_BRACKET = 16397;
	const PROPERTY_STRING_LIMIT = 16398;
	const PROPERTY_SCRIPT_EXTENSIONS = 28672;
	const PROPERTY_OTHER_PROPERTY_START = 28672;
	const PROPERTY_OTHER_PROPERTY_LIMIT = 28673;
	const PROPERTY_INVALID_CODE = -1;
	const CHAR_CATEGORY_UNASSIGNED = 0;
	const CHAR_CATEGORY_GENERAL_OTHER_TYPES = 0;
	const CHAR_CATEGORY_UPPERCASE_LETTER = 1;
	const CHAR_CATEGORY_LOWERCASE_LETTER = 2;
	const CHAR_CATEGORY_TITLECASE_LETTER = 3;
	const CHAR_CATEGORY_MODIFIER_LETTER = 4;
	const CHAR_CATEGORY_OTHER_LETTER = 5;
	const CHAR_CATEGORY_NON_SPACING_MARK = 6;
	const CHAR_CATEGORY_ENCLOSING_MARK = 7;
	const CHAR_CATEGORY_COMBINING_SPACING_MARK = 8;
	const CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER = 9;
	const CHAR_CATEGORY_LETTER_NUMBER = 10;
	const CHAR_CATEGORY_OTHER_NUMBER = 11;
	const CHAR_CATEGORY_SPACE_SEPARATOR = 12;
	const CHAR_CATEGORY_LINE_SEPARATOR = 13;
	const CHAR_CATEGORY_PARAGRAPH_SEPARATOR = 14;
	const CHAR_CATEGORY_CONTROL_CHAR = 15;
	const CHAR_CATEGORY_FORMAT_CHAR = 16;
	const CHAR_CATEGORY_PRIVATE_USE_CHAR = 17;
	const CHAR_CATEGORY_SURROGATE = 18;
	const CHAR_CATEGORY_DASH_PUNCTUATION = 19;
	const CHAR_CATEGORY_START_PUNCTUATION = 20;
	const CHAR_CATEGORY_END_PUNCTUATION = 21;
	const CHAR_CATEGORY_CONNECTOR_PUNCTUATION = 22;
	const CHAR_CATEGORY_OTHER_PUNCTUATION = 23;
	const CHAR_CATEGORY_MATH_SYMBOL = 24;
	const CHAR_CATEGORY_CURRENCY_SYMBOL = 25;
	const CHAR_CATEGORY_MODIFIER_SYMBOL = 26;
	const CHAR_CATEGORY_OTHER_SYMBOL = 27;
	const CHAR_CATEGORY_INITIAL_PUNCTUATION = 28;
	const CHAR_CATEGORY_FINAL_PUNCTUATION = 29;
	const CHAR_CATEGORY_CHAR_CATEGORY_COUNT = 30;
	const CHAR_DIRECTION_LEFT_TO_RIGHT = 0;
	const CHAR_DIRECTION_RIGHT_TO_LEFT = 1;
	const CHAR_DIRECTION_EUROPEAN_NUMBER = 2;
	const CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR = 3;
	const CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR = 4;
	const CHAR_DIRECTION_ARABIC_NUMBER = 5;
	const CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR = 6;
	const CHAR_DIRECTION_BLOCK_SEPARATOR = 7;
	const CHAR_DIRECTION_SEGMENT_SEPARATOR = 8;
	const CHAR_DIRECTION_WHITE_SPACE_NEUTRAL = 9;
	const CHAR_DIRECTION_OTHER_NEUTRAL = 10;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING = 11;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE = 12;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC = 13;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING = 14;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE = 15;
	const CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT = 16;
	const CHAR_DIRECTION_DIR_NON_SPACING_MARK = 17;
	const CHAR_DIRECTION_BOUNDARY_NEUTRAL = 18;
	const CHAR_DIRECTION_FIRST_STRONG_ISOLATE = 19;
	const CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE = 20;
	const CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE = 21;
	const CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE = 22;
	const CHAR_DIRECTION_CHAR_DIRECTION_COUNT = 23;
	const BLOCK_CODE_NO_BLOCK = 0;
	const BLOCK_CODE_BASIC_LATIN = 1;
	const BLOCK_CODE_LATIN_1_SUPPLEMENT = 2;
	const BLOCK_CODE_LATIN_EXTENDED_A = 3;
	const BLOCK_CODE_LATIN_EXTENDED_B = 4;
	const BLOCK_CODE_IPA_EXTENSIONS = 5;
	const BLOCK_CODE_SPACING_MODIFIER_LETTERS = 6;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS = 7;
	const BLOCK_CODE_GREEK = 8;
	const BLOCK_CODE_CYRILLIC = 9;
	const BLOCK_CODE_ARMENIAN = 10;
	const BLOCK_CODE_HEBREW = 11;
	const BLOCK_CODE_ARABIC = 12;
	const BLOCK_CODE_SYRIAC = 13;
	const BLOCK_CODE_THAANA = 14;
	const BLOCK_CODE_DEVANAGARI = 15;
	const BLOCK_CODE_BENGALI = 16;
	const BLOCK_CODE_GURMUKHI = 17;
	const BLOCK_CODE_GUJARATI = 18;
	const BLOCK_CODE_ORIYA = 19;
	const BLOCK_CODE_TAMIL = 20;
	const BLOCK_CODE_TELUGU = 21;
	const BLOCK_CODE_KANNADA = 22;
	const BLOCK_CODE_MALAYALAM = 23;
	const BLOCK_CODE_SINHALA = 24;
	const BLOCK_CODE_THAI = 25;
	const BLOCK_CODE_LAO = 26;
	const BLOCK_CODE_TIBETAN = 27;
	const BLOCK_CODE_MYANMAR = 28;
	const BLOCK_CODE_GEORGIAN = 29;
	const BLOCK_CODE_HANGUL_JAMO = 30;
	const BLOCK_CODE_ETHIOPIC = 31;
	const BLOCK_CODE_CHEROKEE = 32;
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS = 33;
	const BLOCK_CODE_OGHAM = 34;
	const BLOCK_CODE_RUNIC = 35;
	const BLOCK_CODE_KHMER = 36;
	const BLOCK_CODE_MONGOLIAN = 37;
	const BLOCK_CODE_LATIN_EXTENDED_ADDITIONAL = 38;
	const BLOCK_CODE_GREEK_EXTENDED = 39;
	const BLOCK_CODE_GENERAL_PUNCTUATION = 40;
	const BLOCK_CODE_SUPERSCRIPTS_AND_SUBSCRIPTS = 41;
	const BLOCK_CODE_CURRENCY_SYMBOLS = 42;
	const BLOCK_CODE_COMBINING_MARKS_FOR_SYMBOLS = 43;
	const BLOCK_CODE_LETTERLIKE_SYMBOLS = 44;
	const BLOCK_CODE_NUMBER_FORMS = 45;
	const BLOCK_CODE_ARROWS = 46;
	const BLOCK_CODE_MATHEMATICAL_OPERATORS = 47;
	const BLOCK_CODE_MISCELLANEOUS_TECHNICAL = 48;
	const BLOCK_CODE_CONTROL_PICTURES = 49;
	const BLOCK_CODE_OPTICAL_CHARACTER_RECOGNITION = 50;
	const BLOCK_CODE_ENCLOSED_ALPHANUMERICS = 51;
	const BLOCK_CODE_BOX_DRAWING = 52;
	const BLOCK_CODE_BLOCK_ELEMENTS = 53;
	const BLOCK_CODE_GEOMETRIC_SHAPES = 54;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS = 55;
	const BLOCK_CODE_DINGBATS = 56;
	const BLOCK_CODE_BRAILLE_PATTERNS = 57;
	const BLOCK_CODE_CJK_RADICALS_SUPPLEMENT = 58;
	const BLOCK_CODE_KANGXI_RADICALS = 59;
	const BLOCK_CODE_IDEOGRAPHIC_DESCRIPTION_CHARACTERS = 60;
	const BLOCK_CODE_CJK_SYMBOLS_AND_PUNCTUATION = 61;
	const BLOCK_CODE_HIRAGANA = 62;
	const BLOCK_CODE_KATAKANA = 63;
	const BLOCK_CODE_BOPOMOFO = 64;
	const BLOCK_CODE_HANGUL_COMPATIBILITY_JAMO = 65;
	const BLOCK_CODE_KANBUN = 66;
	const BLOCK_CODE_BOPOMOFO_EXTENDED = 67;
	const BLOCK_CODE_ENCLOSED_CJK_LETTERS_AND_MONTHS = 68;
	const BLOCK_CODE_CJK_COMPATIBILITY = 69;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_A = 70;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS = 71;
	const BLOCK_CODE_YI_SYLLABLES = 72;
	const BLOCK_CODE_YI_RADICALS = 73;
	const BLOCK_CODE_HANGUL_SYLLABLES = 74;
	const BLOCK_CODE_HIGH_SURROGATES = 75;
	const BLOCK_CODE_HIGH_PRIVATE_USE_SURROGATES = 76;
	const BLOCK_CODE_LOW_SURROGATES = 77;
	const BLOCK_CODE_PRIVATE_USE_AREA = 78;
	const BLOCK_CODE_PRIVATE_USE = 78;
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS = 79;
	const BLOCK_CODE_ALPHABETIC_PRESENTATION_FORMS = 80;
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_A = 81;
	const BLOCK_CODE_COMBINING_HALF_MARKS = 82;
	const BLOCK_CODE_CJK_COMPATIBILITY_FORMS = 83;
	const BLOCK_CODE_SMALL_FORM_VARIANTS = 84;
	const BLOCK_CODE_ARABIC_PRESENTATION_FORMS_B = 85;
	const BLOCK_CODE_SPECIALS = 86;
	const BLOCK_CODE_HALFWIDTH_AND_FULLWIDTH_FORMS = 87;
	const BLOCK_CODE_OLD_ITALIC = 88;
	const BLOCK_CODE_GOTHIC = 89;
	const BLOCK_CODE_DESERET = 90;
	const BLOCK_CODE_BYZANTINE_MUSICAL_SYMBOLS = 91;
	const BLOCK_CODE_MUSICAL_SYMBOLS = 92;
	const BLOCK_CODE_MATHEMATICAL_ALPHANUMERIC_SYMBOLS = 93;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_B = 94;
	const BLOCK_CODE_CJK_COMPATIBILITY_IDEOGRAPHS_SUPPLEMENT = 95;
	const BLOCK_CODE_TAGS = 96;
	const BLOCK_CODE_CYRILLIC_SUPPLEMENT = 97;
	const BLOCK_CODE_CYRILLIC_SUPPLEMENTARY = 97;
	const BLOCK_CODE_TAGALOG = 98;
	const BLOCK_CODE_HANUNOO = 99;
	const BLOCK_CODE_BUHID = 100;
	const BLOCK_CODE_TAGBANWA = 101;
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_A = 102;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_A = 103;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_B = 104;
	const BLOCK_CODE_MISCELLANEOUS_MATHEMATICAL_SYMBOLS_B = 105;
	const BLOCK_CODE_SUPPLEMENTAL_MATHEMATICAL_OPERATORS = 106;
	const BLOCK_CODE_KATAKANA_PHONETIC_EXTENSIONS = 107;
	const BLOCK_CODE_VARIATION_SELECTORS = 108;
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_A = 109;
	const BLOCK_CODE_SUPPLEMENTARY_PRIVATE_USE_AREA_B = 110;
	const BLOCK_CODE_LIMBU = 111;
	const BLOCK_CODE_TAI_LE = 112;
	const BLOCK_CODE_KHMER_SYMBOLS = 113;
	const BLOCK_CODE_PHONETIC_EXTENSIONS = 114;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_ARROWS = 115;
	const BLOCK_CODE_YIJING_HEXAGRAM_SYMBOLS = 116;
	const BLOCK_CODE_LINEAR_B_SYLLABARY = 117;
	const BLOCK_CODE_LINEAR_B_IDEOGRAMS = 118;
	const BLOCK_CODE_AEGEAN_NUMBERS = 119;
	const BLOCK_CODE_UGARITIC = 120;
	const BLOCK_CODE_SHAVIAN = 121;
	const BLOCK_CODE_OSMANYA = 122;
	const BLOCK_CODE_CYPRIOT_SYLLABARY = 123;
	const BLOCK_CODE_TAI_XUAN_JING_SYMBOLS = 124;
	const BLOCK_CODE_VARIATION_SELECTORS_SUPPLEMENT = 125;
	const BLOCK_CODE_ANCIENT_GREEK_MUSICAL_NOTATION = 126;
	const BLOCK_CODE_ANCIENT_GREEK_NUMBERS = 127;
	const BLOCK_CODE_ARABIC_SUPPLEMENT = 128;
	const BLOCK_CODE_BUGINESE = 129;
	const BLOCK_CODE_CJK_STROKES = 130;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_SUPPLEMENT = 131;
	const BLOCK_CODE_COPTIC = 132;
	const BLOCK_CODE_ETHIOPIC_EXTENDED = 133;
	const BLOCK_CODE_ETHIOPIC_SUPPLEMENT = 134;
	const BLOCK_CODE_GEORGIAN_SUPPLEMENT = 135;
	const BLOCK_CODE_GLAGOLITIC = 136;
	const BLOCK_CODE_KHAROSHTHI = 137;
	const BLOCK_CODE_MODIFIER_TONE_LETTERS = 138;
	const BLOCK_CODE_NEW_TAI_LUE = 139;
	const BLOCK_CODE_OLD_PERSIAN = 140;
	const BLOCK_CODE_PHONETIC_EXTENSIONS_SUPPLEMENT = 141;
	const BLOCK_CODE_SUPPLEMENTAL_PUNCTUATION = 142;
	const BLOCK_CODE_SYLOTI_NAGRI = 143;
	const BLOCK_CODE_TIFINAGH = 144;
	const BLOCK_CODE_VERTICAL_FORMS = 145;
	const BLOCK_CODE_NKO = 146;
	const BLOCK_CODE_BALINESE = 147;
	const BLOCK_CODE_LATIN_EXTENDED_C = 148;
	const BLOCK_CODE_LATIN_EXTENDED_D = 149;
	const BLOCK_CODE_PHAGS_PA = 150;
	const BLOCK_CODE_PHOENICIAN = 151;
	const BLOCK_CODE_CUNEIFORM = 152;
	const BLOCK_CODE_CUNEIFORM_NUMBERS_AND_PUNCTUATION = 153;
	const BLOCK_CODE_COUNTING_ROD_NUMERALS = 154;
	const BLOCK_CODE_SUNDANESE = 155;
	const BLOCK_CODE_LEPCHA = 156;
	const BLOCK_CODE_OL_CHIKI = 157;
	const BLOCK_CODE_CYRILLIC_EXTENDED_A = 158;
	const BLOCK_CODE_VAI = 159;
	const BLOCK_CODE_CYRILLIC_EXTENDED_B = 160;
	const BLOCK_CODE_SAURASHTRA = 161;
	const BLOCK_CODE_KAYAH_LI = 162;
	const BLOCK_CODE_REJANG = 163;
	const BLOCK_CODE_CHAM = 164;
	const BLOCK_CODE_ANCIENT_SYMBOLS = 165;
	const BLOCK_CODE_PHAISTOS_DISC = 166;
	const BLOCK_CODE_LYCIAN = 167;
	const BLOCK_CODE_CARIAN = 168;
	const BLOCK_CODE_LYDIAN = 169;
	const BLOCK_CODE_MAHJONG_TILES = 170;
	const BLOCK_CODE_DOMINO_TILES = 171;
	const BLOCK_CODE_SAMARITAN = 172;
	const BLOCK_CODE_UNIFIED_CANADIAN_ABORIGINAL_SYLLABICS_EXTENDED = 173;
	const BLOCK_CODE_TAI_THAM = 174;
	const BLOCK_CODE_VEDIC_EXTENSIONS = 175;
	const BLOCK_CODE_LISU = 176;
	const BLOCK_CODE_BAMUM = 177;
	const BLOCK_CODE_COMMON_INDIC_NUMBER_FORMS = 178;
	const BLOCK_CODE_DEVANAGARI_EXTENDED = 179;
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_A = 180;
	const BLOCK_CODE_JAVANESE = 181;
	const BLOCK_CODE_MYANMAR_EXTENDED_A = 182;
	const BLOCK_CODE_TAI_VIET = 183;
	const BLOCK_CODE_MEETEI_MAYEK = 184;
	const BLOCK_CODE_HANGUL_JAMO_EXTENDED_B = 185;
	const BLOCK_CODE_IMPERIAL_ARAMAIC = 186;
	const BLOCK_CODE_OLD_SOUTH_ARABIAN = 187;
	const BLOCK_CODE_AVESTAN = 188;
	const BLOCK_CODE_INSCRIPTIONAL_PARTHIAN = 189;
	const BLOCK_CODE_INSCRIPTIONAL_PAHLAVI = 190;
	const BLOCK_CODE_OLD_TURKIC = 191;
	const BLOCK_CODE_RUMI_NUMERAL_SYMBOLS = 192;
	const BLOCK_CODE_KAITHI = 193;
	const BLOCK_CODE_EGYPTIAN_HIEROGLYPHS = 194;
	const BLOCK_CODE_ENCLOSED_ALPHANUMERIC_SUPPLEMENT = 195;
	const BLOCK_CODE_ENCLOSED_IDEOGRAPHIC_SUPPLEMENT = 196;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_C = 197;
	const BLOCK_CODE_MANDAIC = 198;
	const BLOCK_CODE_BATAK = 199;
	const BLOCK_CODE_ETHIOPIC_EXTENDED_A = 200;
	const BLOCK_CODE_BRAHMI = 201;
	const BLOCK_CODE_BAMUM_SUPPLEMENT = 202;
	const BLOCK_CODE_KANA_SUPPLEMENT = 203;
	const BLOCK_CODE_PLAYING_CARDS = 204;
	const BLOCK_CODE_MISCELLANEOUS_SYMBOLS_AND_PICTOGRAPHS = 205;
	const BLOCK_CODE_EMOTICONS = 206;
	const BLOCK_CODE_TRANSPORT_AND_MAP_SYMBOLS = 207;
	const BLOCK_CODE_ALCHEMICAL_SYMBOLS = 208;
	const BLOCK_CODE_CJK_UNIFIED_IDEOGRAPHS_EXTENSION_D = 209;
	const BLOCK_CODE_ARABIC_EXTENDED_A = 210;
	const BLOCK_CODE_ARABIC_MATHEMATICAL_ALPHABETIC_SYMBOLS = 211;
	const BLOCK_CODE_CHAKMA = 212;
	const BLOCK_CODE_MEETEI_MAYEK_EXTENSIONS = 213;
	const BLOCK_CODE_MEROITIC_CURSIVE = 214;
	const BLOCK_CODE_MEROITIC_HIEROGLYPHS = 215;
	const BLOCK_CODE_MIAO = 216;
	const BLOCK_CODE_SHARADA = 217;
	const BLOCK_CODE_SORA_SOMPENG = 218;
	const BLOCK_CODE_SUNDANESE_SUPPLEMENT = 219;
	const BLOCK_CODE_TAKRI = 220;
	const BLOCK_CODE_BASSA_VAH = 221;
	const BLOCK_CODE_CAUCASIAN_ALBANIAN = 222;
	const BLOCK_CODE_COPTIC_EPACT_NUMBERS = 223;
	const BLOCK_CODE_COMBINING_DIACRITICAL_MARKS_EXTENDED = 224;
	const BLOCK_CODE_DUPLOYAN = 225;
	const BLOCK_CODE_ELBASAN = 226;
	const BLOCK_CODE_GEOMETRIC_SHAPES_EXTENDED = 227;
	const BLOCK_CODE_GRANTHA = 228;
	const BLOCK_CODE_KHOJKI = 229;
	const BLOCK_CODE_KHUDAWADI = 230;
	const BLOCK_CODE_LATIN_EXTENDED_E = 231;
	const BLOCK_CODE_LINEAR_A = 232;
	const BLOCK_CODE_MAHAJANI = 233;
	const BLOCK_CODE_MANICHAEAN = 234;
	const BLOCK_CODE_MENDE_KIKAKUI = 235;
	const BLOCK_CODE_MODI = 236;
	const BLOCK_CODE_MRO = 237;
	const BLOCK_CODE_MYANMAR_EXTENDED_B = 238;
	const BLOCK_CODE_NABATAEAN = 239;
	const BLOCK_CODE_OLD_NORTH_ARABIAN = 240;
	const BLOCK_CODE_OLD_PERMIC = 241;
	const BLOCK_CODE_ORNAMENTAL_DINGBATS = 242;
	const BLOCK_CODE_PAHAWH_HMONG = 243;
	const BLOCK_CODE_PALMYRENE = 244;
	const BLOCK_CODE_PAU_CIN_HAU = 245;
	const BLOCK_CODE_PSALTER_PAHLAVI = 246;
	const BLOCK_CODE_SHORTHAND_FORMAT_CONTROLS = 247;
	const BLOCK_CODE_SIDDHAM = 248;
	const BLOCK_CODE_SINHALA_ARCHAIC_NUMBERS = 249;
	const BLOCK_CODE_SUPPLEMENTAL_ARROWS_C = 250;
	const BLOCK_CODE_TIRHUTA = 251;
	const BLOCK_CODE_WARANG_CITI = 252;
	const BLOCK_CODE_COUNT = 253;
	const BLOCK_CODE_INVALID_CODE = -1;
	const BPT_NONE = 0;
	const BPT_OPEN = 1;
	const BPT_CLOSE = 2;
	const BPT_COUNT = 3;
	const EA_NEUTRAL = 0;
	const EA_AMBIGUOUS = 1;
	const EA_HALFWIDTH = 2;
	const EA_FULLWIDTH = 3;
	const EA_NARROW = 4;
	const EA_WIDE = 5;
	const EA_COUNT = 6;
	const UNICODE_CHAR_NAME = 0;
	const UNICODE_10_CHAR_NAME = 1;
	const EXTENDED_CHAR_NAME = 2;
	const CHAR_NAME_ALIAS = 3;
	const CHAR_NAME_CHOICE_COUNT = 4;
	const SHORT_PROPERTY_NAME = 0;
	const LONG_PROPERTY_NAME = 1;
	const PROPERTY_NAME_CHOICE_COUNT = 2;
	const DT_NONE = 0;
	const DT_CANONICAL = 1;
	const DT_COMPAT = 2;
	const DT_CIRCLE = 3;
	const DT_FINAL = 4;
	const DT_FONT = 5;
	const DT_FRACTION = 6;
	const DT_INITIAL = 7;
	const DT_ISOLATED = 8;
	const DT_MEDIAL = 9;
	const DT_NARROW = 10;
	const DT_NOBREAK = 11;
	const DT_SMALL = 12;
	const DT_SQUARE = 13;
	const DT_SUB = 14;
	const DT_SUPER = 15;
	const DT_VERTICAL = 16;
	const DT_WIDE = 17;
	const DT_COUNT = 18;
	const JT_NON_JOINING = 0;
	const JT_JOIN_CAUSING = 1;
	const JT_DUAL_JOINING = 2;
	const JT_LEFT_JOINING = 3;
	const JT_RIGHT_JOINING = 4;
	const JT_TRANSPARENT = 5;
	const JT_COUNT = 6;
	const JG_NO_JOINING_GROUP = 0;
	const JG_AIN = 1;
	const JG_ALAPH = 2;
	const JG_ALEF = 3;
	const JG_BEH = 4;
	const JG_BETH = 5;
	const JG_DAL = 6;
	const JG_DALATH_RISH = 7;
	const JG_E = 8;
	const JG_FEH = 9;
	const JG_FINAL_SEMKATH = 10;
	const JG_GAF = 11;
	const JG_GAMAL = 12;
	const JG_HAH = 13;
	const JG_TEH_MARBUTA_GOAL = 14;
	const JG_HAMZA_ON_HEH_GOAL = 14;
	const JG_HE = 15;
	const JG_HEH = 16;
	const JG_HEH_GOAL = 17;
	const JG_HETH = 18;
	const JG_KAF = 19;
	const JG_KAPH = 20;
	const JG_KNOTTED_HEH = 21;
	const JG_LAM = 22;
	const JG_LAMADH = 23;
	const JG_MEEM = 24;
	const JG_MIM = 25;
	const JG_NOON = 26;
	const JG_NUN = 27;
	const JG_PE = 28;
	const JG_QAF = 29;
	const JG_QAPH = 30;
	const JG_REH = 31;
	const JG_REVERSED_PE = 32;
	const JG_SAD = 33;
	const JG_SADHE = 34;
	const JG_SEEN = 35;
	const JG_SEMKATH = 36;
	const JG_SHIN = 37;
	const JG_SWASH_KAF = 38;
	const JG_SYRIAC_WAW = 39;
	const JG_TAH = 40;
	const JG_TAW = 41;
	const JG_TEH_MARBUTA = 42;
	const JG_TETH = 43;
	const JG_WAW = 44;
	const JG_YEH = 45;
	const JG_YEH_BARREE = 46;
	const JG_YEH_WITH_TAIL = 47;
	const JG_YUDH = 48;
	const JG_YUDH_HE = 49;
	const JG_ZAIN = 50;
	const JG_FE = 51;
	const JG_KHAPH = 52;
	const JG_ZHAIN = 53;
	const JG_BURUSHASKI_YEH_BARREE = 54;
	const JG_FARSI_YEH = 55;
	const JG_NYA = 56;
	const JG_ROHINGYA_YEH = 57;
	const JG_MANICHAEAN_ALEPH = 58;
	const JG_MANICHAEAN_AYIN = 59;
	const JG_MANICHAEAN_BETH = 60;
	const JG_MANICHAEAN_DALETH = 61;
	const JG_MANICHAEAN_DHAMEDH = 62;
	const JG_MANICHAEAN_FIVE = 63;
	const JG_MANICHAEAN_GIMEL = 64;
	const JG_MANICHAEAN_HETH = 65;
	const JG_MANICHAEAN_HUNDRED = 66;
	const JG_MANICHAEAN_KAPH = 67;
	const JG_MANICHAEAN_LAMEDH = 68;
	const JG_MANICHAEAN_MEM = 69;
	const JG_MANICHAEAN_NUN = 70;
	const JG_MANICHAEAN_ONE = 71;
	const JG_MANICHAEAN_PE = 72;
	const JG_MANICHAEAN_QOPH = 73;
	const JG_MANICHAEAN_RESH = 74;
	const JG_MANICHAEAN_SADHE = 75;
	const JG_MANICHAEAN_SAMEKH = 76;
	const JG_MANICHAEAN_TAW = 77;
	const JG_MANICHAEAN_TEN = 78;
	const JG_MANICHAEAN_TETH = 79;
	const JG_MANICHAEAN_THAMEDH = 80;
	const JG_MANICHAEAN_TWENTY = 81;
	const JG_MANICHAEAN_WAW = 82;
	const JG_MANICHAEAN_YODH = 83;
	const JG_MANICHAEAN_ZAYIN = 84;
	const JG_STRAIGHT_WAW = 85;
	const JG_COUNT = 86;
	const GCB_OTHER = 0;
	const GCB_CONTROL = 1;
	const GCB_CR = 2;
	const GCB_EXTEND = 3;
	const GCB_L = 4;
	const GCB_LF = 5;
	const GCB_LV = 6;
	const GCB_LVT = 7;
	const GCB_T = 8;
	const GCB_V = 9;
	const GCB_SPACING_MARK = 10;
	const GCB_PREPEND = 11;
	const GCB_REGIONAL_INDICATOR = 12;
	const GCB_COUNT = 13;
	const WB_OTHER = 0;
	const WB_ALETTER = 1;
	const WB_FORMAT = 2;
	const WB_KATAKANA = 3;
	const WB_MIDLETTER = 4;
	const WB_MIDNUM = 5;
	const WB_NUMERIC = 6;
	const WB_EXTENDNUMLET = 7;
	const WB_CR = 8;
	const WB_EXTEND = 9;
	const WB_LF = 10;
	const WB_MIDNUMLET = 11;
	const WB_NEWLINE = 12;
	const WB_REGIONAL_INDICATOR = 13;
	const WB_HEBREW_LETTER = 14;
	const WB_SINGLE_QUOTE = 15;
	const WB_DOUBLE_QUOTE = 16;
	const WB_COUNT = 17;
	const SB_OTHER = 0;
	const SB_ATERM = 1;
	const SB_CLOSE = 2;
	const SB_FORMAT = 3;
	const SB_LOWER = 4;
	const SB_NUMERIC = 5;
	const SB_OLETTER = 6;
	const SB_SEP = 7;
	const SB_SP = 8;
	const SB_STERM = 9;
	const SB_UPPER = 10;
	const SB_CR = 11;
	const SB_EXTEND = 12;
	const SB_LF = 13;
	const SB_SCONTINUE = 14;
	const SB_COUNT = 15;
	const LB_UNKNOWN = 0;
	const LB_AMBIGUOUS = 1;
	const LB_ALPHABETIC = 2;
	const LB_BREAK_BOTH = 3;
	const LB_BREAK_AFTER = 4;
	const LB_BREAK_BEFORE = 5;
	const LB_MANDATORY_BREAK = 6;
	const LB_CONTINGENT_BREAK = 7;
	const LB_CLOSE_PUNCTUATION = 8;
	const LB_COMBINING_MARK = 9;
	const LB_CARRIAGE_RETURN = 10;
	const LB_EXCLAMATION = 11;
	const LB_GLUE = 12;
	const LB_HYPHEN = 13;
	const LB_IDEOGRAPHIC = 14;
	const LB_INSEPARABLE = 15;
	const LB_INSEPERABLE = 15;
	const LB_INFIX_NUMERIC = 16;
	const LB_LINE_FEED = 17;
	const LB_NONSTARTER = 18;
	const LB_NUMERIC = 19;
	const LB_OPEN_PUNCTUATION = 20;
	const LB_POSTFIX_NUMERIC = 21;
	const LB_PREFIX_NUMERIC = 22;
	const LB_QUOTATION = 23;
	const LB_COMPLEX_CONTEXT = 24;
	const LB_SURROGATE = 25;
	const LB_SPACE = 26;
	const LB_BREAK_SYMBOLS = 27;
	const LB_ZWSPACE = 28;
	const LB_NEXT_LINE = 29;
	const LB_WORD_JOINER = 30;
	const LB_H2 = 31;
	const LB_H3 = 32;
	const LB_JL = 33;
	const LB_JT = 34;
	const LB_JV = 35;
	const LB_CLOSE_PARENTHESIS = 36;
	const LB_CONDITIONAL_JAPANESE_STARTER = 37;
	const LB_HEBREW_LETTER = 38;
	const LB_REGIONAL_INDICATOR = 39;
	const LB_COUNT = 40;
	const NT_NONE = 0;
	const NT_DECIMAL = 1;
	const NT_DIGIT = 2;
	const NT_NUMERIC = 3;
	const NT_COUNT = 4;
	const HST_NOT_APPLICABLE = 0;
	const HST_LEADING_JAMO = 1;
	const HST_VOWEL_JAMO = 2;
	const HST_TRAILING_JAMO = 3;
	const HST_LV_SYLLABLE = 4;
	const HST_LVT_SYLLABLE = 5;
	const HST_COUNT = 6;


	/**
	 * (PHP 7)<br/>
	 * Return Unicode character by code point value
	 * @link http://php.net/manual/en/intlchar.chr.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return string A string containing the single character specified by the Unicode code point value.
	 */
	public static function chr($codepoint): string {}

	/**
	 * (PHP 7)<br/>
	 * Return Unicode code point value of character
	 * @link http://php.net/manual/en/intlchar.ord.php
	 * @param mixed $character <p>
	 * A Unicode character.
	 * </p>
	 * @return int the Unicode code point value as an integer.
	 */
	public static function ord($character): int {}

	/**
	 * (PHP 7)<br/>
	 * Check a binary Unicode property for a code point
	 * @link http://php.net/manual/en/intlchar.hasbinaryproperty.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * @return bool <b>TRUE</b> or <b>FALSE</b> according to the binary Unicode property value for <i>codepoint</i>.
	 * Also <b>FALSE</b> if <i>property</i> is out of bounds or if the Unicode version does not have data for
	 * the property at all, or not for this code point.
	 */
	public static function hasBinaryProperty($codepoint, int $property): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Alphabetic Unicode property
	 * @link http://php.net/manual/en/intlchar.isualphabetic.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Alphabetic Unicode property, <b>FALSE</b> if not.
	 */
	public static function isUAlphabetic($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Lowercase Unicode property
	 * @link http://php.net/manual/en/intlchar.isulowercase.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Lowercase Unicode property, <b>FALSE</b> if not.
	 */
	public static function isULowercase($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Uppercase Unicode property
	 * @link http://php.net/manual/en/intlchar.isuuppercase.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Uppercase Unicode property, <b>FALSE</b> if not.
	 */
	public static function isUUppercase($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the White_Space Unicode property
	 * @link http://php.net/manual/en/intlchar.isuwhitespace.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the White_Space Unicode property, <b>FALSE</b> if not.
	 */
	public static function isUWhiteSpace($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Get the value for a Unicode property for a code point
	 * @link http://php.net/manual/en/intlchar.getintpropertyvalue.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * @return int the numeric value that is directly the property value or, for enumerated properties, corresponds to the
	 * numeric value of the enumerated constant of the respective property value enumeration type.
	 * </p>
	 * <p>
	 * Returns 0 or 1 (for <b>FALSE</b>/<b>TRUE</b>) for binary Unicode properties.
	 * </p>
	 * <p>
	 * Returns a bit-mask for mask properties.
	 * </p>
	 * <p>
	 * Returns 0 if <i>property</i> is out of bounds or if the Unicode version does not
	 * have data for the property at all, or not for this code point.
	 */
	public static function getIntPropertyValue($codepoint, int $property): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the min value for a Unicode property
	 * @link http://php.net/manual/en/intlchar.getintpropertyminvalue.php
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * @return int The maximum value returned by <b>IntlChar::getIntPropertyValue</b> for a Unicode property.
	 * 0 if the property selector is out of range.
	 */
	public static function getIntPropertyMinValue(int $property): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the max value for a Unicode property
	 * @link http://php.net/manual/en/intlchar.getintpropertymaxvalue.php
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * @return int The maximum value returned by <b>IntlChar::getIntPropertyValue</b> for a Unicode property.
	 * &lt;=0 if the property selector is out of range.
	 */
	public static function getIntPropertyMaxValue(int $property): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the numeric value for a Unicode code point
	 * @link http://php.net/manual/en/intlchar.getnumericvalue.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return float Numeric value of <i>codepoint</i>,
	 * or float(-123456789) if none is defined.
	 */
	public static function getNumericValue($codepoint): float {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a lowercase letter
	 * @link http://php.net/manual/en/intlchar.islower.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an Ll lowercase letter, <b>FALSE</b> if not.
	 */
	public static function islower($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the general category "Lu" (uppercase letter)
	 * @link http://php.net/manual/en/intlchar.isupper.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an Lu uppercase letter, <b>FALSE</b> if not.
	 */
	public static function isupper($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a titlecase letter
	 * @link http://php.net/manual/en/intlchar.istitle.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a titlecase letter, <b>FALSE</b> if not.
	 */
	public static function istitle($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a digit character
	 * @link http://php.net/manual/en/intlchar.isdigit.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a digit character, <b>FALSE</b> if not.
	 */
	public static function isdigit($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a letter character
	 * @link http://php.net/manual/en/intlchar.isalpha.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a letter character, <b>FALSE</b> if not.
	 */
	public static function isalpha($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is an alphanumeric character
	 * @link http://php.net/manual/en/intlchar.isalnum.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an alphanumeric character, <b>FALSE</b> if not.
	 */
	public static function isalnum($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a hexadecimal digit
	 * @link http://php.net/manual/en/intlchar.isxdigit.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a hexadecimal character, <b>FALSE</b> if not.
	 */
	public static function isxdigit($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is punctuation character
	 * @link http://php.net/manual/en/intlchar.ispunct.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a punctuation character, <b>FALSE</b> if not.
	 */
	public static function ispunct($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a graphic character
	 * @link http://php.net/manual/en/intlchar.isgraph.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a "graphic" character, <b>FALSE</b> if not.
	 */
	public static function isgraph($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a "blank" or "horizontal space" character
	 * @link http://php.net/manual/en/intlchar.isblank.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is either a "blank" or "horizontal space" character, <b>FALSE</b> if not.
	 */
	public static function isblank($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check whether the code point is defined
	 * @link http://php.net/manual/en/intlchar.isdefined.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a defined character, <b>FALSE</b> if not.
	 */
	public static function isdefined($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a space character
	 * @link http://php.net/manual/en/intlchar.isspace.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a space character, <b>FALSE</b> if not.
	 */
	public static function isspace($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a space character according to Java
	 * @link http://php.net/manual/en/intlchar.isjavaspacechar.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a space character according to Java, <b>FALSE</b> if not.
	 */
	public static function isJavaSpaceChar($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a whitespace character according to ICU
	 * @link http://php.net/manual/en/intlchar.iswhitespace.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a whitespace character according to ICU, <b>FALSE</b> if not.
	 */
	public static function isWhitespace($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a control character
	 * @link http://php.net/manual/en/intlchar.iscntrl.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a control character, <b>FALSE</b> if not.
	 */
	public static function iscntrl($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is an ISO control code
	 * @link http://php.net/manual/en/intlchar.isisocontrol.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is an ISO control code, <b>FALSE</b> if not.
	 */
	public static function isISOControl($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a printable character
	 * @link http://php.net/manual/en/intlchar.isprint.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a printable character, <b>FALSE</b> if not.
	 */
	public static function isprint($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is a base character
	 * @link http://php.net/manual/en/intlchar.isbase.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is a base character, <b>FALSE</b> if not.
	 */
	public static function isbase($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Get bidirectional category value for a code point
	 * @link http://php.net/manual/en/intlchar.chardirection.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return int The bidirectional category value; one of the following constants:
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT</b>
	 * <b>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER</b>
	 * <b>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_EUROPEAN_NUMBER_TERMINATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_ARABIC_NUMBER</b>
	 * <b>IntlChar::CHAR_DIRECTION_COMMON_NUMBER_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_BLOCK_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_SEGMENT_SEPARATOR</b>
	 * <b>IntlChar::CHAR_DIRECTION_WHITE_SPACE_NEUTRAL</b>
	 * <b>IntlChar::CHAR_DIRECTION_OTHER_NEUTRAL</b>
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_EMBEDDING</b>
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_OVERRIDE</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ARABIC</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_EMBEDDING</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_OVERRIDE</b>
	 * <b>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_FORMAT</b>
	 * <b>IntlChar::CHAR_DIRECTION_DIR_NON_SPACING_MARK</b>
	 * <b>IntlChar::CHAR_DIRECTION_BOUNDARY_NEUTRAL</b>
	 * <b>IntlChar::CHAR_DIRECTION_FIRST_STRONG_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_LEFT_TO_RIGHT_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_RIGHT_TO_LEFT_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_POP_DIRECTIONAL_ISOLATE</b>
	 * <b>IntlChar::CHAR_DIRECTION_CHAR_DIRECTION_COUNT</b>
	 */
	public static function charDirection($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point has the Bidi_Mirrored property
	 * @link http://php.net/manual/en/intlchar.ismirrored.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> has the Bidi_Mirrored property, <b>FALSE</b> if not.
	 */
	public static function isMirrored($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Get the "mirror-image" character for a code point
	 * @link http://php.net/manual/en/intlchar.charmirror.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return mixed another Unicode code point that may serve as a mirror-image substitute, or <i>codepoint</i>
	 * itself if there is no such mapping or <i>codepoint</i> does not have the
	 * Bidi_Mirrored property.
	 */
	public static function charMirror($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Get the paired bracket character for a code point
	 * @link http://php.net/manual/en/intlchar.getbidipairedbracket.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return mixed the paired bracket code point, or <i>codepoint</i> itself if there is no such mapping.
	 */
	public static function getBidiPairedBracket($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Get the general category value for a code point
	 * @link http://php.net/manual/en/intlchar.chartype.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return int the general category type, which may be one of the following constants:
	 * <b>IntlChar::CHAR_CATEGORY_UNASSIGNED</b>
	 * <b>IntlChar::CHAR_CATEGORY_GENERAL_OTHER_TYPES</b>
	 * <b>IntlChar::CHAR_CATEGORY_UPPERCASE_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_LOWERCASE_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_TITLECASE_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_MODIFIER_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_LETTER</b>
	 * <b>IntlChar::CHAR_CATEGORY_NON_SPACING_MARK</b>
	 * <b>IntlChar::CHAR_CATEGORY_ENCLOSING_MARK</b>
	 * <b>IntlChar::CHAR_CATEGORY_COMBINING_SPACING_MARK</b>
	 * <b>IntlChar::CHAR_CATEGORY_DECIMAL_DIGIT_NUMBER</b>
	 * <b>IntlChar::CHAR_CATEGORY_LETTER_NUMBER</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_NUMBER</b>
	 * <b>IntlChar::CHAR_CATEGORY_SPACE_SEPARATOR</b>
	 * <b>IntlChar::CHAR_CATEGORY_LINE_SEPARATOR</b>
	 * <b>IntlChar::CHAR_CATEGORY_PARAGRAPH_SEPARATOR</b>
	 * <b>IntlChar::CHAR_CATEGORY_CONTROL_CHAR</b>
	 * <b>IntlChar::CHAR_CATEGORY_FORMAT_CHAR</b>
	 * <b>IntlChar::CHAR_CATEGORY_PRIVATE_USE_CHAR</b>
	 * <b>IntlChar::CHAR_CATEGORY_SURROGATE</b>
	 * <b>IntlChar::CHAR_CATEGORY_DASH_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_START_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_END_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_CONNECTOR_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_MATH_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_CURRENCY_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_MODIFIER_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_OTHER_SYMBOL</b>
	 * <b>IntlChar::CHAR_CATEGORY_INITIAL_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_FINAL_PUNCTUATION</b>
	 * <b>IntlChar::CHAR_CATEGORY_CHAR_CATEGORY_COUNT</b>
	 */
	public static function charType($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Enumerate all code points with their Unicode general categories
	 * @link http://php.net/manual/en/intlchar.enumchartypes.php
	 * @param callable $callback <p>
	 * The function that is to be called for each contiguous range of code points with the same general category.
	 * The following three arguments will be passed into it:
	 * integer $start - The starting code point of the range
	 * integer $end - The ending code point of the range
	 * integer $name - The category type (one of the IntlChar::CHAR_CATEGORY_* constants)
	 * </p>
	 * @return void No value is returned.
	 */
	public static function enumCharTypes(callable $callback) {}

	/**
	 * (PHP 7)<br/>
	 * Get the combining class of a code point
	 * @link http://php.net/manual/en/intlchar.getcombiningclass.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return int the combining class of the character.
	 */
	public static function getCombiningClass($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the decimal digit value of a decimal digit character
	 * @link http://php.net/manual/en/intlchar.chardigitvalue.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return int The decimal digit value of <i>codepoint</i>,
	 * or -1 if it is not a decimal digit character.
	 */
	public static function charDigitValue($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode allocation block containing a code point
	 * @link http://php.net/manual/en/intlchar.getblockcode.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return int the block value for <i>codepoint</i>.
	 * See the IntlChar::BLOCK_CODE_* constants for possible return values.
	 */
	public static function getBlockCode($codepoint): int {}

	/**
	 * (PHP 7)<br/>
	 * Retrieve the name of a Unicode character
	 * @link http://php.net/manual/en/intlchar.charname.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @param int $nameChoice [optional] <p>
	 * Which set of names to use for the lookup. Can be any of these constants:
	 * <b>IntlChar::UNICODE_CHAR_NAME</b> (default)
	 * <b>IntlChar::UNICODE_10_CHAR_NAME</b>
	 * <b>IntlChar::EXTENDED_CHAR_NAME</b>
	 * <b>IntlChar::CHAR_NAME_ALIAS</b>
	 * <b>IntlChar::CHAR_NAME_CHOICE_COUNT</b>
	 * </p>
	 * @return string The corresponding name, or an empty string if there is no name for this character.
	 */
	public static function charName($codepoint, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): string {}

	/**
	 * (PHP 7)<br/>
	 * Find Unicode character by name and return its code point value
	 * @link http://php.net/manual/en/intlchar.charfromname.php
	 * @param string $characterName <p>
	 * Full name of the Unicode character.
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Which set of names to use for the lookup. Can be any of these constants:
	 * <b>IntlChar::UNICODE_CHAR_NAME</b> (default)
	 * <b>IntlChar::UNICODE_10_CHAR_NAME</b>
	 * <b>IntlChar::EXTENDED_CHAR_NAME</b>
	 * <b>IntlChar::CHAR_NAME_ALIAS</b>
	 * <b>IntlChar::CHAR_NAME_CHOICE_COUNT</b>
	 * </p>
	 * @return int The Unicode value of the code point with the given name (as an integer), or <b>FALSE</b> if there is no such code point.
	 */
	public static function charFromName(string $characterName, int $nameChoice = IntlChar::UNICODE_CHAR_NAME): int {}

	/**
	 * (PHP 7)<br/>
	 * Enumerate all assigned Unicode characters within a range
	 * @link http://php.net/manual/en/intlchar.enumcharnames.php
	 * @param mixed $start <p>
	 * The first code point in the enumeration range.
	 * </p>
	 * @param mixed $limit <p>
	 * One more than the last code point in the enumeration range (the first one after the range).
	 * </p>
	 * @param callable $callback <p>
	 * The function that is to be called for each character name. The following three arguments will be passed into it:
	 * integer $codepoint - The numeric code point value
	 * integer $nameChoice - The same value as the <i>nameChoice</i> parameter below
	 * string $name - The name of the character
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Selector for which kind of names to enumerate. Can be any of these constants:
	 * <b>IntlChar::UNICODE_CHAR_NAME</b> (default)
	 * <b>IntlChar::UNICODE_10_CHAR_NAME</b>
	 * <b>IntlChar::EXTENDED_CHAR_NAME</b>
	 * <b>IntlChar::CHAR_NAME_ALIAS</b>
	 * <b>IntlChar::CHAR_NAME_CHOICE_COUNT</b>
	 * </p>
	 * @return void No value is returned.
	 */
	public static function enumCharNames($start, $limit, callable $callback, int $nameChoice = IntlChar::UNICODE_CHAR_NAME) {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode name for a property
	 * @link http://php.net/manual/en/intlchar.getpropertyname.php
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * <p>
	 * <b>IntlChar::PROPERTY_INVALID_CODE</b> should not be used.
	 * Also, if <i>property</i> is out of range, <b>FALSE</b> is returned.
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Selector for which name to get. If out of range, <b>FALSE</b> is returned.
	 * </p>
	 * <p>
	 * All properties have a long name. Most have a short name, but some do not. Unicode allows for additional names;
	 * if present these will be returned by adding 1, 2, etc. to <b>IntlChar::LONG_PROPERTY_NAME</b>.
	 * </p>
	 * @return string the name, or <b>FALSE</b> if either the <i>property</i> or the <i>nameChoice</i>
	 * is out of range.
	 * </p>
	 * <p>
	 * If a given <i>nameChoice</i> returns <b>FALSE</b>, then all larger values of
	 * <i>nameChoice</i> will return <b>FALSE</b>, with one exception: if <b>FALSE</b> is returned for
	 * <b>IntlChar::SHORT_PROPERTY_NAME</b>, then <b>IntlChar::LONG_PROPERTY_NAME</b>
	 * (and higher) may still return a non-<b>FALSE</b> value.
	 */
	public static function getPropertyName(int $property, int $nameChoice = IntlChar::LONG_PROPERTY_NAME): string {}

	/**
	 * (PHP 7)<br/>
	 * Get the property constant value for a given property name
	 * @link http://php.net/manual/en/intlchar.getpropertyenum.php
	 * @param string $alias <p>
	 * The property name to be matched. The name is compared using "loose matching" as described in PropertyAliases.txt.
	 * </p>
	 * @return int an IntlChar::PROPERTY_ constant value,
	 * or <b>IntlChar::PROPERTY_INVALID_CODE</b> if the given name does not match any property.
	 */
	public static function getPropertyEnum(string $alias): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode name for a property value
	 * @link http://php.net/manual/en/intlchar.getpropertyvaluename.php
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * <p>
	 * If out of range, or this method doesn't work with the given value, <b>FALSE</b> is returned.
	 * </p>
	 * @param int $value <p>
	 * Selector for a value for the given property. If out of range, <b>FALSE</b> is returned.
	 * </p>
	 * <p>
	 * In general, valid values range from 0 up to some maximum. There are a couple exceptions:
	 * <b>IntlChar::PROPERTY_BLOCK</b> values begin at the non-zero value <b>IntlChar::BLOCK_CODE_BASIC_LATIN</b>
	 * <b>IntlChar::PROPERTY_CANONICAL_COMBINING_CLASS</b> values are not contiguous and range from 0..240.
	 * </p>
	 * @param int $nameChoice [optional] <p>
	 * Selector for which name to get. If out of range, <b>FALSE</b> is returned.
	 * </p>
	 * <p>
	 * All values have a long name. Most have a short name, but some do not. Unicode allows for additional names;
	 * if present these will be returned by adding 1, 2, etc. to <b>IntlChar::LONG_PROPERTY_NAME</b>.
	 * </p>
	 * @return string the name, or <b>FALSE</b> if either the <i>property</i> or the <i>nameChoice</i>
	 * is out of range.
	 * </p>
	 * <p>
	 * If a given <i>nameChoice</i> returns <b>FALSE</b>, then all larger values of <i>nameChoice</i>
	 * will return <b>FALSE</b>, with one exception: if <b>FALSE</b> is returned for <b>IntlChar::SHORT_PROPERTY_NAME</b>,
	 * then <b>IntlChar::LONG_PROPERTY_NAME</b> (and higher) may still return a non-<b>FALSE</b> value.
	 */
	public static function getPropertyValueName(int $property, int $value, int $nameChoice = IntlChar::LONG_PROPERTY_NAME): string {}

	/**
	 * (PHP 7)<br/>
	 * Get the property value for a given value name
	 * @link http://php.net/manual/en/intlchar.getpropertyvalueenum.php
	 * @param int $property The Unicode property to lookup (see the IntlChar::PROPERTY_* constants).</p>
	 * <p>
	 * If out of range, or this method doesn't work with the given value,
	 * <b>IntlChar::PROPERTY_INVALID_CODE</b> is returned.
	 * </p>
	 * @param string $name <p>
	 * The value name to be matched. The name is compared using "loose matching" as described in PropertyValueAliases.txt.
	 * </p>
	 * @return int the corresponding value integer, or <b>IntlChar::PROPERTY_INVALID_CODE</b> if the given name
	 * does not match any value of the given property, or if the property is invalid.
	 */
	public static function getPropertyValueEnum(int $property, string $name): int {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible as the first character in an identifier
	 * @link http://php.net/manual/en/intlchar.isidstart.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> may start an identifier, <b>FALSE</b> if not.
	 */
	public static function isIDStart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible in an identifier
	 * @link http://php.net/manual/en/intlchar.isidpart.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is the code point may occur in an identifier, <b>FALSE</b> if not.
	 */
	public static function isIDPart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is an ignorable character
	 * @link http://php.net/manual/en/intlchar.isidignorable.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> is ignorable in identifiers, <b>FALSE</b> if not.
	 */
	public static function isIDIgnorable($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible as the first character in a Java identifier
	 * @link http://php.net/manual/en/intlchar.isjavaidstart.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> may start a Java identifier, <b>FALSE</b> if not.
	 */
	public static function isJavaIDStart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Check if code point is permissible in a Java identifier
	 * @link http://php.net/manual/en/intlchar.isjavaidpart.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return bool <b>TRUE</b> if
	 * <i>codepoint</i> may occur in a Java identifier, <b>FALSE</b> if not.
	 */
	public static function isJavaIDPart($codepoint): bool {}

	/**
	 * (PHP 7)<br/>
	 * Make Unicode character lowercase
	 * @link http://php.net/manual/en/intlchar.tolower.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return mixed the Simple_Lowercase_Mapping of the code point, if any;
	 * otherwise the code point itself.
	 */
	public static function tolower($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Make Unicode character uppercase
	 * @link http://php.net/manual/en/intlchar.toupper.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return mixed the Simple_Uppercase_Mapping of the code point, if any;
	 * otherwise the code point itself.
	 */
	public static function toupper($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Make Unicode character titlecase
	 * @link http://php.net/manual/en/intlchar.totitle.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return mixed the Simple_Titlecase_Mapping of the code point, if any;
	 * otherwise the code point itself.
	 */
	public static function totitle($codepoint) {}

	/**
	 * (PHP 7)<br/>
	 * Perform case folding on a code point
	 * @link http://php.net/manual/en/intlchar.foldcase.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @param int $options [optional] <p>
	 * Either <b>IntlChar::FOLD_CASE_DEFAULT</b> (default)
	 * or <b>IntlChar::FOLD_CASE_EXCLUDE_SPECIAL_I</b>.
	 * </p>
	 * @return mixed the Simple_Case_Folding of the code point, if any; otherwise the code point itself.
	 */
	public static function foldCase($codepoint, int $options = IntlChar::FOLD_CASE_DEFAULT) {}

	/**
	 * (PHP 7)<br/>
	 * Get the decimal digit value of a code point for a given radix
	 * @link http://php.net/manual/en/intlchar.digit.php
	 * @param string $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @param int $radix [optional] <p>
	 * The radix (defaults to 10).
	 * </p>
	 * @return int the numeric value represented by the character in the specified radix,
	 * or <b>FALSE</b> if there is no value or if the value exceeds the radix.
	 */
	public static function digit(string $codepoint, int $radix = 10): int {}

	/**
	 * (PHP 7)<br/>
	 * Get character representation for a given digit and radix
	 * @link http://php.net/manual/en/intlchar.fordigit.php
	 * @param int $digit <p>
	 * The number to convert to a character.
	 * </p>
	 * @param int $radix [optional] <p>
	 * The radix (defaults to 10).
	 * </p>
	 * @return int The character representation (as a string) of the specified digit in the specified radix.
	 */
	public static function forDigit(int $digit, int $radix = 10): int {}

	/**
	 * (PHP 7)<br/>
	 * Get the "age" of the code point
	 * @link http://php.net/manual/en/intlchar.charage.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return array The Unicode version number, as an array.
	 * For example, version 1.3.31.2 would be represented as [1, 3, 31, 2].
	 */
	public static function charAge($codepoint): array {}

	/**
	 * (PHP 7)<br/>
	 * Get the Unicode version
	 * @link http://php.net/manual/en/intlchar.getunicodeversion.php
	 * @return array An array containing the Unicode version number.
	 */
	public static function getUnicodeVersion(): array {}

	/**
	 * (PHP 7)<br/>
	 * Get the FC_NFKC_Closure property for a code point
	 * @link http://php.net/manual/en/intlchar.getfc-nfkc-closure.php
	 * @param mixed $codepoint The integer codepoint value (e.g. 0x2603 for U+2603 SNOWMAN), or the character encoded as a UTF-8 string (e.g. "\u{2603}")</p>
	 * @return string the FC_NFKC_Closure property string for the <i>codepoint</i>, or an empty string if there is none.
	 */
	public static function getFC_NFKC_Closure($codepoint): string {}

}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Create a collator
 * @link http://php.net/manual/en/collator.create.php
 * @param string $locale <p>
 * The locale containing the required collation rules. Special values for
 * locales can be passed in - if null is passed for the locale, the
 * default locale collation rules will be used. If empty string ("") or
 * "root" are passed, UCA rules will be used.
 * </p>
 * @return Collator Return new instance of <b>Collator</b> object, or <b>NULL</b>
 * on error.
 */
function collator_create(string $locale): Collator {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Compare two Unicode strings
 * @link http://php.net/manual/en/collator.compare.php
 * @param string $str1 <p>
 * The first string to compare.
 * </p>
 * @param string $str2 <p>
 * The second string to compare.
 * </p>
 * @return int Return comparison result:</p>
 * <p>
 * <p>
 * 1 if <i>str1</i> is greater than
 * <i>str2</i> ;
 * </p>
 * <p>
 * 0 if <i>str1</i> is equal to
 * <i>str2</i>;
 * </p>
 * <p>
 * -1 if <i>str1</i> is less than
 * <i>str2</i> .
 * </p>
 * On error
 * boolean
 * <b>FALSE</b>
 * is returned.
 */
function collator_compare(string $str1, string $str2): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get collation attribute value
 * @link http://php.net/manual/en/collator.getattribute.php
 * @param int $attr <p>
 * Attribute to get value for.
 * </p>
 * @return int Attribute value, or boolean <b>FALSE</b> on error.
 */
function collator_get_attribute(int $attr): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set collation attribute
 * @link http://php.net/manual/en/collator.setattribute.php
 * @param int $attr <p>Attribute.</p>
 * @param int $val <p>
 * Attribute value.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function collator_set_attribute(int $attr, int $val): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get current collation strength
 * @link http://php.net/manual/en/collator.getstrength.php
 * @param Collator $object
 * @return int current collation strength, or boolean <b>FALSE</b> on error.
 */
function collator_get_strength(Collator $object): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set collation strength
 * @link http://php.net/manual/en/collator.setstrength.php
 * @param int $strength <p>Strength to set.</p>
 * <p>
 * Possible values are:
 * <p>
 * <b>Collator::PRIMARY</b>
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function collator_set_strength(int $strength): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Sort array using specified collator
 * @link http://php.net/manual/en/collator.sort.php
 * @param array $arr <p>
 * Array of strings to sort.
 * </p>
 * @param int $sort_flag [optional] <p>
 * Optional sorting type, one of the following:
 * </p>
 * <p>
 * <p>
 * <b>Collator::SORT_REGULAR</b>
 * - compare items normally (don't change types)
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function collator_sort(array &$arr, int $sort_flag = null): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Sort array using specified collator and sort keys
 * @link http://php.net/manual/en/collator.sortwithsortkeys.php
 * @param array $arr <p>Array of strings to sort</p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function collator_sort_with_sort_keys(array &$arr): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Sort array maintaining index association
 * @link http://php.net/manual/en/collator.asort.php
 * @param array $arr <p>Array of strings to sort.</p>
 * @param int $sort_flag [optional] <p>
 * Optional sorting type, one of the following:
 * <p>
 * <b>Collator::SORT_REGULAR</b>
 * - compare items normally (don't change types)
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function collator_asort(array &$arr, int $sort_flag = null): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the locale name of the collator
 * @link http://php.net/manual/en/collator.getlocale.php
 * @param int $type <p>
 * You can choose between valid and actual locale (
 * <b>Locale::VALID_LOCALE</b> and
 * <b>Locale::ACTUAL_LOCALE</b>,
 * respectively).
 * </p>
 * @return string Real locale name from which the collation data comes. If the collator was
 * instantiated from rules or an error occurred, returns
 * boolean <b>FALSE</b>.
 */
function collator_get_locale(int $type): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get collator's last error code
 * @link http://php.net/manual/en/collator.geterrorcode.php
 * @param Collator $object
 * @return int Error code returned by the last Collator API function call.
 */
function collator_get_error_code(Collator $object): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get text for collator's last error code
 * @link http://php.net/manual/en/collator.geterrormessage.php
 * @param Collator $object
 * @return string Description of an error occurred in the last Collator API function call.
 */
function collator_get_error_message(Collator $object): string {}

/**
 * (PHP 5 &gt;= 5.3.11, PHP 7, PECL intl &gt;= 1.0.3)<br/>
 * Get sorting key for a string
 * @link http://php.net/manual/en/collator.getsortkey.php
 * @param string $str <p>
 * The string to produce the key from.
 * </p>
 * @return string the collation key for the string. Collation keys can be compared directly instead of strings.
 */
function collator_get_sort_key(string $str): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Create a number formatter
 * @link http://php.net/manual/en/numberformatter.create.php
 * @param string $locale <p>
 * Locale in which the number would be formatted (locale name, e.g. en_CA).
 * </p>
 * @param int $style <p>
 * Style of the formatting, one of the
 * format style constants. If
 * <b>NumberFormatter::PATTERN_DECIMAL</b>
 * or <b>NumberFormatter::PATTERN_RULEBASED</b>
 * is passed then the number format is opened using the given pattern,
 * which must conform to the syntax described in
 * ICU DecimalFormat
 * documentation or
 * ICU RuleBasedNumberFormat
 * documentation, respectively.
 * </p>
 * @param string $pattern [optional] <p>
 * Pattern string if the chosen style requires a pattern.
 * </p>
 * @return NumberFormatter <b>NumberFormatter</b> object or <b>FALSE</b> on error.
 */
function numfmt_create(string $locale, int $style, string $pattern = null): NumberFormatter {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Format a number
 * @link http://php.net/manual/en/numberformatter.format.php
 * @param number $value <p>
 * The value to format. Can be integer or float,
 * other values will be converted to a numeric value.
 * </p>
 * @param int $type [optional] <p>
 * The
 * formatting type to use.
 * </p>
 * @return string the string containing formatted value, or <b>FALSE</b> on error.
 */
function numfmt_format($value, int $type = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Parse a number
 * @link http://php.net/manual/en/numberformatter.parse.php
 * @param string $value
 * @param int $type [optional] <p>
 * The
 * formatting type to use. By default,
 * <b>NumberFormatter::TYPE_DOUBLE</b> is used.
 * </p>
 * @param int $position [optional] <p>
 * Offset in the string at which to begin parsing. On return, this value
 * will hold the offset at which parsing ended.
 * </p>
 * @return mixed The value of the parsed number or <b>FALSE</b> on error.
 */
function numfmt_parse(string $value, int $type = null, int &$position = null) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Format a currency value
 * @link http://php.net/manual/en/numberformatter.formatcurrency.php
 * @param float $value <p>
 * The numeric currency value.
 * </p>
 * @param string $currency <p>
 * The 3-letter ISO 4217 currency code indicating the currency to use.
 * </p>
 * @return string String representing the formatted currency value.
 */
function numfmt_format_currency(float $value, string $currency): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Parse a currency number
 * @link http://php.net/manual/en/numberformatter.parsecurrency.php
 * @param string $value
 * @param string $currency <p>
 * Parameter to receive the currency name (3-letter ISO 4217 currency
 * code).
 * </p>
 * @param int $position [optional] <p>
 * Offset in the string at which to begin parsing. On return, this value
 * will hold the offset at which parsing ended.
 * </p>
 * @return float The parsed numeric value or <b>FALSE</b> on error.
 */
function numfmt_parse_currency(string $value, string &$currency, int &$position = null): float {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set an attribute
 * @link http://php.net/manual/en/numberformatter.setattribute.php
 * @param int $attr <p>
 * Attribute specifier - one of the
 * numeric attribute constants.
 * </p>
 * @param int $value <p>
 * The attribute value.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function numfmt_set_attribute(int $attr, int $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get an attribute
 * @link http://php.net/manual/en/numberformatter.getattribute.php
 * @param int $attr <p>
 * Attribute specifier - one of the
 * numeric attribute constants.
 * </p>
 * @return int Return attribute value on success, or <b>FALSE</b> on error.
 */
function numfmt_get_attribute(int $attr): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set a text attribute
 * @link http://php.net/manual/en/numberformatter.settextattribute.php
 * @param int $attr <p>
 * Attribute specifier - one of the
 * text attribute
 * constants.
 * </p>
 * @param string $value <p>
 * Text for the attribute value.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function numfmt_set_text_attribute(int $attr, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get a text attribute
 * @link http://php.net/manual/en/numberformatter.gettextattribute.php
 * @param int $attr <p>
 * Attribute specifier - one of the
 * text attribute constants.
 * </p>
 * @return string Return attribute value on success, or <b>FALSE</b> on error.
 */
function numfmt_get_text_attribute(int $attr): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set a symbol value
 * @link http://php.net/manual/en/numberformatter.setsymbol.php
 * @param int $attr <p>
 * Symbol specifier, one of the
 * format symbol constants.
 * </p>
 * @param string $value <p>
 * Text for the symbol.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function numfmt_set_symbol(int $attr, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get a symbol value
 * @link http://php.net/manual/en/numberformatter.getsymbol.php
 * @param int $attr <p>
 * Symbol specifier, one of the
 * format symbol constants.
 * </p>
 * @return string The symbol string or <b>FALSE</b> on error.
 */
function numfmt_get_symbol(int $attr): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set formatter pattern
 * @link http://php.net/manual/en/numberformatter.setpattern.php
 * @param string $pattern <p>
 * Pattern in syntax described in
 * ICU DecimalFormat
 * documentation.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function numfmt_set_pattern(string $pattern): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get formatter pattern
 * @link http://php.net/manual/en/numberformatter.getpattern.php
 * @param $nf
 * @return string Pattern string that is used by the formatter, or <b>FALSE</b> if an error happens.
 */
function numfmt_get_pattern($nf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get formatter locale
 * @link http://php.net/manual/en/numberformatter.getlocale.php
 * @param int $type [optional] <p>
 * You can choose between valid and actual locale (
 * <b>Locale::VALID_LOCALE</b>,
 * <b>Locale::ACTUAL_LOCALE</b>,
 * respectively). The default is the actual locale.
 * </p>
 * @return string The locale name used to create the formatter.
 */
function numfmt_get_locale(int $type = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get formatter's last error code.
 * @link http://php.net/manual/en/numberformatter.geterrorcode.php
 * @param $nf
 * @return int error code from last formatter call.
 */
function numfmt_get_error_code($nf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get formatter's last error message.
 * @link http://php.net/manual/en/numberformatter.geterrormessage.php
 * @param $nf
 * @return string error message from last formatter call.
 */
function numfmt_get_error_message($nf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Normalizes the input provided and returns the normalized string
 * @link http://php.net/manual/en/normalizer.normalize.php
 * @param string $input <p>The input string to normalize</p>
 * @param int $form [optional] <p>One of the normalization forms.</p>
 * @return string The normalized string or <b>FALSE</b> if an error occurred.
 */
function normalizer_normalize(string $input, int $form = Normalizer::FORM_C): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Checks if the provided string is already in the specified normalization
form.
 * @link http://php.net/manual/en/normalizer.isnormalized.php
 * @param string $input <p>The input string to normalize</p>
 * @param int $form [optional] <p>
 * One of the normalization forms.
 * </p>
 * @return bool <b>TRUE</b> if normalized, <b>FALSE</b> otherwise or if there an error
 */
function normalizer_is_normalized(string $input, int $form = Normalizer::FORM_C): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Gets the default locale value from the INTL global 'default_locale'
 * @link http://php.net/manual/en/locale.getdefault.php
 * @return string The current runtime locale
 */
function locale_get_default(): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * sets the default runtime locale
 * @link http://php.net/manual/en/locale.setdefault.php
 * @param string $locale <p>
 * Is a BCP 47 compliant language tag.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function locale_set_default(string $locale): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Gets the primary language for the input locale
 * @link http://php.net/manual/en/locale.getprimarylanguage.php
 * @param string $locale <p>
 * The locale to extract the primary language code from
 * </p>
 * @return string The language code associated with the language or <b>NULL</b> in case of error.
 */
function locale_get_primary_language(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Gets the script for the input locale
 * @link http://php.net/manual/en/locale.getscript.php
 * @param string $locale <p>
 * The locale to extract the script code from
 * </p>
 * @return string The script subtag for the locale or <b>NULL</b> if not present
 */
function locale_get_script(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Gets the region for the input locale
 * @link http://php.net/manual/en/locale.getregion.php
 * @param string $locale <p>
 * The locale to extract the region code from
 * </p>
 * @return string The region subtag for the locale or <b>NULL</b> if not present
 */
function locale_get_region(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Gets the keywords for the input locale
 * @link http://php.net/manual/en/locale.getkeywords.php
 * @param string $locale <p>
 * The locale to extract the keywords from
 * </p>
 * @return array Associative array containing the keyword-value pairs for this locale
 */
function locale_get_keywords(string $locale): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns an appropriately localized display name for script of the input locale
 * @link http://php.net/manual/en/locale.getdisplayscript.php
 * @param string $locale <p>
 * The locale to return a display script for
 * </p>
 * @param string $in_locale [optional] <p>
 * Optional format locale to use to display the script name
 * </p>
 * @return string Display name of the script for the $locale in the format appropriate for
 * $in_locale.
 */
function locale_get_display_script(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns an appropriately localized display name for region of the input locale
 * @link http://php.net/manual/en/locale.getdisplayregion.php
 * @param string $locale <p>
 * The locale to return a display region for.
 * </p>
 * @param string $in_locale [optional] <p>
 * Optional format locale to use to display the region name
 * </p>
 * @return string display name of the region for the $locale in the format appropriate for
 * $in_locale.
 */
function locale_get_display_region(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns an appropriately localized display name for the input locale
 * @link http://php.net/manual/en/locale.getdisplayname.php
 * @param string $locale <p>
 * The locale to return a display name for.
 * </p>
 * @param string $in_locale [optional] <p>optional format locale</p>
 * @return string Display name of the locale in the format appropriate for $in_locale.
 */
function locale_get_display_name(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns an appropriately localized display name for language of the inputlocale
 * @link http://php.net/manual/en/locale.getdisplaylanguage.php
 * @param string $locale <p>
 * The locale to return a display language for
 * </p>
 * @param string $in_locale [optional] <p>
 * Optional format locale to use to display the language name
 * </p>
 * @return string display name of the language for the $locale in the format appropriate for
 * $in_locale.
 */
function locale_get_display_language(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns an appropriately localized display name for variants of the input locale
 * @link http://php.net/manual/en/locale.getdisplayvariant.php
 * @param string $locale <p>
 * The locale to return a display variant for
 * </p>
 * @param string $in_locale [optional] <p>
 * Optional format locale to use to display the variant name
 * </p>
 * @return string Display name of the variant for the $locale in the format appropriate for
 * $in_locale.
 */
function locale_get_display_variant(string $locale, string $in_locale = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns a correctly ordered and delimited locale ID
 * @link http://php.net/manual/en/locale.composelocale.php
 * @param array $subtags <p>
 * an array containing a list of key-value pairs, where the keys identify
 * the particular locale ID subtags, and the values are the associated
 * subtag values.
 * <p>
 * The 'variant' and 'private' subtags can take maximum 15 values
 * whereas 'extlang' can take maximum 3 values.e.g. Variants are allowed
 * with the suffix ranging from 0-14. Hence the keys for the input array
 * can be variant0, variant1, ...,variant14. In the returned locale id,
 * the subtag is ordered by suffix resulting in variant0 followed by
 * variant1 followed by variant2 and so on.
 * </p>
 * <p>
 * The 'variant', 'private' and 'extlang' multiple values can be specified both
 * as array under specific key (e.g. 'variant') and as multiple numbered keys
 * (e.g. 'variant0', 'variant1', etc.).
 * </p>
 * </p>
 * @return string The corresponding locale identifier.
 */
function locale_compose(array $subtags): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns a key-value array of locale ID subtag elements.
 * @link http://php.net/manual/en/locale.parselocale.php
 * @param string $locale <p>
 * The locale to extract the subtag array from. Note: The 'variant' and
 * 'private' subtags can take maximum 15 values whereas 'extlang' can take
 * maximum 3 values.
 * </p>
 * @return array an array containing a list of key-value pairs, where the keys
 * identify the particular locale ID subtags, and the values are the
 * associated subtag values. The array will be ordered as the locale id
 * subtags e.g. in the locale id if variants are '-varX-varY-varZ' then the
 * returned array will have variant0=&gt;varX , variant1=&gt;varY ,
 * variant2=&gt;varZ
 */
function locale_parse(string $locale): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Gets the variants for the input locale
 * @link http://php.net/manual/en/locale.getallvariants.php
 * @param string $locale <p>
 * The locale to extract the variants from
 * </p>
 * @return array The array containing the list of all variants subtag for the locale
 * or <b>NULL</b> if not present
 */
function locale_get_all_variants(string $locale): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Checks if a language tag filter matches with locale
 * @link http://php.net/manual/en/locale.filtermatches.php
 * @param string $langtag <p>
 * The language tag to check
 * </p>
 * @param string $locale <p>
 * The language range to check against
 * </p>
 * @param bool $canonicalize [optional] <p>
 * If true, the arguments will be converted to canonical form before
 * matching.
 * </p>
 * @return bool <b>TRUE</b> if $locale matches $langtag <b>FALSE</b> otherwise.
 */
function locale_filter_matches(string $langtag, string $locale, bool $canonicalize = false): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Canonicalize the locale string
 * @link http://php.net/manual/en/locale.canonicalize.php
 * @param string $locale <p>
 * </p>
 * @return string
 */
function locale_canonicalize(string $locale): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Searches the language tag list for the best match to the language
 * @link http://php.net/manual/en/locale.lookup.php
 * @param array $langtag <p>
 * An array containing a list of language tags to compare to
 * <i>locale</i>. Maximum 100 items allowed.
 * </p>
 * @param string $locale <p>
 * The locale to use as the language range when matching.
 * </p>
 * @param bool $canonicalize [optional] <p>
 * If true, the arguments will be converted to canonical form before
 * matching.
 * </p>
 * @param string $default [optional] <p>
 * The locale to use if no match is found.
 * </p>
 * @return string The closest matching language tag or default value.
 */
function locale_lookup(array $langtag, string $locale, bool $canonicalize = false, string $default = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Tries to find out best available locale based on HTTP "Accept-Language" header
 * @link http://php.net/manual/en/locale.acceptfromhttp.php
 * @param string $header <p>
 * The string containing the "Accept-Language" header according to format in RFC 2616.
 * </p>
 * @return string The corresponding locale identifier.
 */
function locale_accept_from_http(string $header): string {}

/**
 * @param $locale
 * @param $pattern
 */
function msgfmt_create($locale, $pattern) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Format the message
 * @link http://php.net/manual/en/messageformatter.format.php
 * @param array $args <p>
 * Arguments to insert into the format string
 * </p>
 * @return string The formatted string, or <b>FALSE</b> if an error occurred
 */
function msgfmt_format(array $args): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Quick format message
 * @link http://php.net/manual/en/messageformatter.formatmessage.php
 * @param string $locale <p>
 * The locale to use for formatting locale-dependent parts
 * </p>
 * @param string $pattern <p>
 * The pattern string to insert things into.
 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
 * umsg_autoQuoteApostrophe
 * before being interpreted.
 * </p>
 * @param array $args <p>
 * The array of values to insert into the format string
 * </p>
 * @return string The formatted pattern string or <b>FALSE</b> if an error occurred
 */
function msgfmt_format_message(string $locale, string $pattern, array $args): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Parse input string according to pattern
 * @link http://php.net/manual/en/messageformatter.parse.php
 * @param string $value <p>
 * The string to parse
 * </p>
 * @return array An array containing the items extracted, or <b>FALSE</b> on error
 */
function msgfmt_parse(string $value): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Quick parse input string
 * @link http://php.net/manual/en/messageformatter.parsemessage.php
 * @param string $locale <p>
 * The locale to use for parsing locale-dependent parts
 * </p>
 * @param string $pattern <p>
 * The pattern with which to parse the <i>value</i>.
 * </p>
 * @param string $source <p>
 * The string to parse, conforming to the <i>pattern</i>.
 * </p>
 * @return array An array containing items extracted, or <b>FALSE</b> on error
 */
function msgfmt_parse_message(string $locale, string $pattern, string $source): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set the pattern used by the formatter
 * @link http://php.net/manual/en/messageformatter.setpattern.php
 * @param string $pattern <p>
 * The pattern string to use in this message formatter.
 * The pattern uses an 'apostrophe-friendly' syntax; it is run through
 * umsg_autoQuoteApostrophe
 * before being interpreted.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function msgfmt_set_pattern(string $pattern): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the pattern used by the formatter
 * @link http://php.net/manual/en/messageformatter.getpattern.php
 * @param $mf
 * @return string The pattern string for this message formatter
 */
function msgfmt_get_pattern($mf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the locale for which the formatter was created.
 * @link http://php.net/manual/en/messageformatter.getlocale.php
 * @param $mf
 * @return string The locale name
 */
function msgfmt_get_locale($mf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the error code from last operation
 * @link http://php.net/manual/en/messageformatter.geterrorcode.php
 * @param $nf
 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
 */
function msgfmt_get_error_code($nf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the error text from the last operation
 * @link http://php.net/manual/en/messageformatter.geterrormessage.php
 * @param $coll
 * @return string Description of the last error.
 */
function msgfmt_get_error_message($coll): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Create a date formatter
 * @link http://php.net/manual/en/intldateformatter.create.php
 * @param string $locale <p>
 * Locale to use when formatting or parsing or <b>NULL</b> to use the value
 * specified in the ini setting intl.default_locale.
 * </p>
 * @param int $datetype <p>
 * Date type to use (<b>none</b>, <b>short</b>,
 * <b>medium</b>, <b>long</b>,
 * <b>full</b>). This is one of the IntlDateFormatter
 * constants. It can also be <b>NULL</b>, in which case ICUʼs default
 * date type will be used.
 * </p>
 * @param int $timetype <p>
 * Time type to use (<b>none</b>, <b>short</b>,
 * <b>medium</b>, <b>long</b>,
 * <b>full</b>). This is one of the IntlDateFormatter
 * constants. It can also be <b>NULL</b>, in which case ICUʼs default
 * time type will be used.
 * </p>
 * @param mixed $timezone [optional] <p>
 * Time zone ID. The default (and the one used if <b>NULL</b> is given) is the
 * one returned by <b>date_default_timezone_get</b> or, if
 * applicable, that of the <b>IntlCalendar</b> object passed
 * for the <i>calendar</i> parameter. This ID must be a
 * valid identifier on ICUʼs database or an ID representing an
 * explicit offset, such as GMT-05:30.
 * </p>
 * <p>
 * This can also be an <b>IntlTimeZone</b> or a
 * <b>DateTimeZone</b> object.
 * </p>
 * @param mixed $calendar [optional] <p>
 * Calendar to use for formatting or parsing. The default value is <b>NULL</b>,
 * which corresponds to <b>IntlDateFormatter::GREGORIAN</b>.
 * This can either be one of the
 * IntlDateFormatter
 * calendar constants or an <b>IntlCalendar</b>. Any
 * <b>IntlCalendar</b> object passed will be clone; it will
 * not be changed by the <b>IntlDateFormatter</b>. This will
 * determine the calendar type used (gregorian, islamic, persian, etc.) and,
 * if <b>NULL</b> is given for the <i>timezone</i> parameter,
 * also the timezone used.
 * </p>
 * @param string $pattern [optional] <p>
 * Optional pattern to use when formatting or parsing.
 * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
 * </p>
 * @return IntlDateFormatter The created <b>IntlDateFormatter</b> or <b>FALSE</b> in case of
 * failure.
 */
function datefmt_create(string $locale, int $datetype, int $timetype, $timezone = NULL, $calendar = NULL, string $pattern = ""): IntlDateFormatter {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the datetype used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.getdatetype.php
 * @param $mf
 * @return int The current date type value of the formatter.
 */
function datefmt_get_datetype($mf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the timetype used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.gettimetype.php
 * @param $mf
 * @return int The current date type value of the formatter.
 */
function datefmt_get_timetype($mf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the calendar type used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.getcalendar.php
 * @param $mf
 * @return int The calendar
 * type being used by the formatter. Either
 * <b>IntlDateFormatter::TRADITIONAL</b> or
 * <b>IntlDateFormatter::GREGORIAN</b>.
 */
function datefmt_get_calendar($mf): int {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * Get copy of formatterʼs calendar object
 * @link http://php.net/manual/en/intldateformatter.getcalendarobject.php
 * @param $mf
 * @return IntlCalendar A copy of the internal calendar object used by this formatter.
 */
function datefmt_get_calendar_object($mf): IntlCalendar {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Sets the calendar type used by the formatter
 * @link http://php.net/manual/en/intldateformatter.setcalendar.php
 * @param mixed $which <p>
 * This can either be: the calendar
 * type to use (default is
 * <b>IntlDateFormatter::GREGORIAN</b>, which is also used if
 * <b>NULL</b> is specified) or an
 * <b>IntlCalendar</b> object.
 * </p>
 * <p>
 * Any <b>IntlCalendar</b> object passed in will be cloned;
 * no modifications will be made to the argument object.
 * </p>
 * <p>
 * The timezone of the formatter will only be kept if an
 * <b>IntlCalendar</b> object is not passed, otherwise the
 * new timezone will be that of the passed object.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function datefmt_set_calendar($which): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the locale used by formatter
 * @link http://php.net/manual/en/intldateformatter.getlocale.php
 * @param int $which [optional]
 * @return string the locale of this formatter or 'false' if error
 */
function datefmt_get_locale(int $which = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the timezone-id used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.gettimezoneid.php
 * @param $mf
 * @return string ID string for the time zone used by this formatter.
 */
function datefmt_get_timezone_id($mf): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * Get formatterʼs timezone
 * @link http://php.net/manual/en/intldateformatter.gettimezone.php
 * @param $mf
 * @return IntlTimeZone The associated <b>IntlTimeZone</b>
 * object or <b>FALSE</b> on failure.
 */
function datefmt_get_timezone($mf): IntlTimeZone {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * Sets formatterʼs timezone
 * @link http://php.net/manual/en/intldateformatter.settimezone.php
 * @param mixed $zone <p>
 * The timezone to use for this formatter. This can be specified in the
 * following forms:
 * </p>
 * @return boolean <b>TRUE</b> on success and <b>FALSE</b> on failure.
 */
function datefmt_set_timezone($zone): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the pattern used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.getpattern.php
 * @param $mf
 * @return string The pattern string being used to format/parse.
 */
function datefmt_get_pattern($mf): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set the pattern used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.setpattern.php
 * @param string $pattern <p>
 * New pattern string to use.
 * Possible patterns are documented at http://userguide.icu-project.org/formatparse/datetime.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * Bad formatstrings are usually the cause of the failure.
 */
function datefmt_set_pattern(string $pattern): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the lenient used for the IntlDateFormatter
 * @link http://php.net/manual/en/intldateformatter.islenient.php
 * @param $mf
 * @return bool <b>TRUE</b> if parser is lenient, <b>FALSE</b> if parser is strict. By default the parser is lenient.
 */
function datefmt_is_lenient($mf): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Set the leniency of the parser
 * @link http://php.net/manual/en/intldateformatter.setlenient.php
 * @param bool $lenient <p>
 * Sets whether the parser is lenient or not, default is <b>TRUE</b> (lenient).
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function datefmt_set_lenient(bool $lenient): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Format the date/time value as a string
 * @link http://php.net/manual/en/intldateformatter.format.php
 * @param mixed $value <p>
 * Value to format. This may be a <b>DateTime</b> object, an
 * <b>IntlCalendar</b> object, a numeric type
 * representing a (possibly fractional) number of seconds since epoch or an
 * array in the format output by
 * <b>localtime</b>.
 * </p>
 * <p>
 * If a <b>DateTime</b> or an
 * <b>IntlCalendar</b> object is passed, its timezone is not
 * considered. The object will be formatted using the formaterʼs configured
 * timezone. If one wants to use the timezone of the object to be formatted,
 * <b>IntlDateFormatter::setTimeZone</b> must be called before
 * with the objectʼs timezone. Alternatively, the static function
 * <b>IntlDateFormatter::formatObject</b> may be used instead.
 * </p>
 * @return string The formatted string or, if an error occurred, <b>FALSE</b>.
 */
function datefmt_format($value): string {}

/**
 * (PHP 5 &gt;= 5.5.0, PHP 7, PECL intl &gt;= 3.0.0)<br/>
 * Formats an object
 * @link http://php.net/manual/en/intldateformatter.formatobject.php
 * @param object $object <p>
 * An object of type <b>IntlCalendar</b> or
 * <b>DateTime</b>. The timezone information in the object
 * will be used.
 * </p>
 * @param mixed $format [optional] <p>
 * How to format the date/time. This can either be an array with
 * two elements (first the date style, then the time style, these being one
 * of the constants <b>IntlDateFormatter::NONE</b>,
 * <b>IntlDateFormatter::SHORT</b>,
 * <b>IntlDateFormatter::MEDIUM</b>,
 * <b>IntlDateFormatter::LONG</b>,
 * <b>IntlDateFormatter::FULL</b>), a long with
 * the value of one of these constants (in which case it will be used both
 * for the time and the date) or a string with the format
 * described in the ICU
 * documentation. If <b>NULL</b>, the default style will be used.
 * </p>
 * @param string $locale [optional] <p>
 * The locale to use, or <b>NULL</b> to use the default one.
 * </p>
 * @return string A string with result or <b>FALSE</b> on failure.
 */
function datefmt_format_object($object, $format = NULL, string $locale = NULL): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Parse string to a timestamp value
 * @link http://php.net/manual/en/intldateformatter.parse.php
 * @param string $value <p>
 * string to convert to a time
 * </p>
 * @param int $position [optional] <p>
 * Position at which to start the parsing in $value (zero-based).
 * If no error occurs before $value is consumed, $parse_pos will contain -1
 * otherwise it will contain the position at which parsing ended (and the error occurred).
 * This variable will contain the end position if the parse fails.
 * If $parse_pos > strlen($value), the parse fails immediately.
 * </p>
 * @return int timestamp parsed value, or <b>FALSE</b> if value can't be parsed.
 */
function datefmt_parse(string $value, int &$position = null): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Parse string to a field-based time value
 * @link http://php.net/manual/en/intldateformatter.localtime.php
 * @param string $value <p>
 * string to convert to a time
 * </p>
 * @param int $position [optional] <p>
 * Position at which to start the parsing in $value (zero-based).
 * If no error occurs before $value is consumed, $parse_pos will contain -1
 * otherwise it will contain the position at which parsing ended .
 * If $parse_pos > strlen($value), the parse fails immediately.
 * </p>
 * @return array Localtime compatible array of integers : contains 24 hour clock value in tm_hour field
 */
function datefmt_localtime(string $value, int &$position = null): array {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the error code from last operation
 * @link http://php.net/manual/en/intldateformatter.geterrorcode.php
 * @param $nf
 * @return int The error code, one of UErrorCode values. Initial value is U_ZERO_ERROR.
 */
function datefmt_get_error_code($nf): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the error text from the last operation.
 * @link http://php.net/manual/en/intldateformatter.geterrormessage.php
 * @param $coll
 * @return string Description of the last error.
 */
function datefmt_get_error_message($coll): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get string length in grapheme units
 * @link http://php.net/manual/en/function.grapheme-strlen.php
 * @param string $input <p>
 * The string being measured for length. It must be a valid UTF-8 string.
 * </p>
 * @return int The length of the string on success, and 0 if the string is empty.
 */
function grapheme_strlen(string $input): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Find position (in grapheme units) of first occurrence of a string
 * @link http://php.net/manual/en/function.grapheme-strpos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, strpos() will return boolean FALSE.
 */
function grapheme_strpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Find position (in grapheme units) of first occurrence of a case-insensitive string
 * @link http://php.net/manual/en/function.grapheme-stripos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, grapheme_stripos() will return boolean FALSE.
 */
function grapheme_stripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Find position (in grapheme units) of last occurrence of a string
 * @link http://php.net/manual/en/function.grapheme-strrpos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, grapheme_strrpos() will return boolean FALSE.
 */
function grapheme_strrpos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Find position (in grapheme units) of last occurrence of a case-insensitive string
 * @link http://php.net/manual/en/function.grapheme-strripos.php
 * @param string $haystack <p>
 * The string to look in. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param int $offset [optional] <p>
 * The optional $offset parameter allows you to specify where in $haystack to
 * start searching as an offset in grapheme units (not bytes or characters).
 * The position returned is still relative to the beginning of haystack
 * regardless of the value of $offset.
 * </p>
 * @return int the position as an integer. If needle is not found, grapheme_strripos() will return boolean FALSE.
 */
function grapheme_strripos(string $haystack, string $needle, int $offset = 0): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Return part of a string
 * @link http://php.net/manual/en/function.grapheme-substr.php
 * @param string $string <p>
 * The input string. Must be valid UTF-8.
 * </p>
 * @param int $start <p>
 * Start position in default grapheme units.
 * If $start is non-negative, the returned string will start at the
 * $start'th position in $string, counting from zero. If $start is negative,
 * the returned string will start at the $start'th grapheme unit from the
 * end of string.
 * </p>
 * @param int $length [optional] <p>
 * Length in grapheme units.
 * If $length is given and is positive, the string returned will contain
 * at most $length grapheme units beginning from $start (depending on the
 * length of string). If $length is given and is negative, then
 * that many grapheme units will be omitted from the end of string (after the
 * start position has been calculated when a start is negative). If $start
 * denotes a position beyond this truncation, <b>FALSE</b> will be returned.
 * </p>
 * @return int the extracted part of $string.
 */
function grapheme_substr(string $string, int $start, int $length = null): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns part of haystack string from the first occurrence of needle to the end of haystack.
 * @link http://php.net/manual/en/function.grapheme-strstr.php
 * @param string $haystack <p>
 * The input string. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If <b>TRUE</b>, grapheme_strstr() returns the part of the
 * haystack before the first occurrence of the needle (excluding the needle).
 * </p>
 * @return string the portion of string, or FALSE if needle is not found.
 */
function grapheme_strstr(string $haystack, string $needle, bool $before_needle = false): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Returns part of haystack string from the first occurrence of case-insensitive needle to the end of haystack.
 * @link http://php.net/manual/en/function.grapheme-stristr.php
 * @param string $haystack <p>
 * The input string. Must be valid UTF-8.
 * </p>
 * @param string $needle <p>
 * The string to look for. Must be valid UTF-8.
 * </p>
 * @param bool $before_needle [optional] <p>
 * If <b>TRUE</b>, grapheme_strstr() returns the part of the
 * haystack before the first occurrence of the needle (excluding needle).
 * </p>
 * @return string the portion of $haystack, or FALSE if $needle is not found.
 */
function grapheme_stristr(string $haystack, string $needle, bool $before_needle = false): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Function to extract a sequence of default grapheme clusters from a text buffer, which must be encoded in UTF-8.
 * @link http://php.net/manual/en/function.grapheme-extract.php
 * @param string $haystack <p>
 * String to search.
 * </p>
 * @param int $size <p>
 * Maximum number items - based on the $extract_type - to return.
 * </p>
 * @param int $extract_type [optional] <p>
 * Defines the type of units referred to by the $size parameter:
 * </p>
 * <p>
 * GRAPHEME_EXTR_COUNT (default) - $size is the number of default
 * grapheme clusters to extract.
 * GRAPHEME_EXTR_MAXBYTES - $size is the maximum number of bytes
 * returned.
 * GRAPHEME_EXTR_MAXCHARS - $size is the maximum number of UTF-8
 * characters returned.
 * </p>
 * @param int $start [optional] <p>
 * Starting position in $haystack in bytes - if given, it must be zero or a
 * positive value that is less than or equal to the length of $haystack in
 * bytes. If $start does not point to the first byte of a UTF-8
 * character, the start position is moved to the next character boundary.
 * </p>
 * @param int $next [optional] <p>
 * Reference to a value that will be set to the next starting position.
 * When the call returns, this may point to the first byte position past the end of the string.
 * </p>
 * @return string A string starting at offset $start and ending on a default grapheme cluster
 * boundary that conforms to the $size and $extract_type specified.
 */
function grapheme_extract(string $haystack, int $size, int $extract_type = null, int $start = 0, int &$next = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.2, PHP 7, PECL idn &gt;= 0.1)<br/>
 * Convert UTF-8 encoded domain name to ASCII
 * @link http://php.net/manual/en/function.idn-to-ascii.php
 * @param string $utf8_domain <p>
 * The UTF-8 encoded domain name.
 * <p>
 * If e.g. an ISO-8859-1 (aka Western Europe latin1) encoded string is
 * passed it will be converted into an ACE encoded "xn--" string.
 * It will not be the one you expected though!
 * </p>
 * </p>
 * @param int $errorcode [optional] <p>
 * Will be set to the IDNA error code.
 * </p>
 * @return string The ACE encoded version of the domain name or <b>FALSE</b> on failure.
 */
function idn_to_ascii(string $utf8_domain, int &$errorcode = null): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.2, PHP 7, PECL idn &gt;= 0.1)<br/>
 * Convert ASCII encoded domain name to UTF-8
 * @link http://php.net/manual/en/function.idn-to-utf8.php
 * @param string $ascii_domain <p>
 * The ASCII encoded domain name. Looks like "xn--..." if the it originally contained non-ASCII characters.
 * </p>
 * @param int $errorcode [optional] <p>
 * Will be set to the IDNA error code.
 * </p>
 * @return string The UTF-8 encoded version of the domain name or <b>FALSE</b> on failure.
 * RFC 3490 4.2 states though "ToUnicode never fails. If any step fails, then the original input
 * sequence is returned immediately in that step."
 */
function idn_to_utf8(string $ascii_domain, int &$errorcode = null): string {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * Create a resource bundle
 * @link http://php.net/manual/en/resourcebundle.create.php
 * @param string $locale <p>
 * Locale for which the resources should be loaded (locale name, e.g. en_CA).
 * </p>
 * @param string $bundlename <p>
 * The directory where the data is stored or the name of the .dat file.
 * </p>
 * @param bool $fallback [optional] <p>
 * Whether locale should match exactly or fallback to parent locale is allowed.
 * </p>
 * @return ResourceBundle <b>ResourceBundle</b> object or <b>NULL</b> on error.
 */
function resourcebundle_create(string $locale, string $bundlename, bool $fallback = null): ResourceBundle {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * Get data from the bundle
 * @link http://php.net/manual/en/resourcebundle.get.php
 * @param string|int $index <p>
 * Data index, must be string or integer.
 * </p>
 * @return mixed the data located at the index or <b>NULL</b> on error. Strings, integers and binary data strings
 * are returned as corresponding PHP types, integer array is returned as PHP array. Complex types are
 * returned as <b>ResourceBundle</b> object.
 */
function resourcebundle_get($index) {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * Get number of elements in the bundle
 * @link http://php.net/manual/en/resourcebundle.count.php
 * @param $bundle
 * @return int number of elements in the bundle.
 */
function resourcebundle_count($bundle): int {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * Get supported locales
 * @link http://php.net/manual/en/resourcebundle.locales.php
 * @param string $bundlename <p>
 * Path of ResourceBundle for which to get available locales, or
 * empty string for default locales list.
 * </p>
 * @return array the list of locales supported by the bundle.
 */
function resourcebundle_locales(string $bundlename): array {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * Get bundle's last error code.
 * @link http://php.net/manual/en/resourcebundle.geterrorcode.php
 * @param $bundle
 * @return int error code from last bundle object call.
 */
function resourcebundle_get_error_code($bundle): int {}

/**
 * (PHP &gt;= 5.3.2, PECL intl &gt;= 2.0.0)<br/>
 * Get bundle's last error message.
 * @link http://php.net/manual/en/resourcebundle.geterrormessage.php
 * @param $bundle
 * @return string error message from last bundle object's call.
 */
function resourcebundle_get_error_message($bundle): string {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Create a transliterator
 * @link http://php.net/manual/en/transliterator.create.php
 * @param string $id <p>
 * The id.
 * </p>
 * @param int $direction [optional] <p>
 * The direction, defaults to
 * >Transliterator::FORWARD.
 * May also be set to
 * Transliterator::REVERSE.
 * </p>
 * @return Transliterator a <b>Transliterator</b> object on success,
 * or <b>NULL</b> on failure.
 */
function transliterator_create(string $id, int $direction = null): Transliterator {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Create transliterator from rules
 * @link http://php.net/manual/en/transliterator.createfromrules.php
 * @param string $rules <p>
 * The rules.
 * </p>
 * @param string $direction [optional] <p>
 * The direction, defaults to
 * >Transliterator::FORWARD.
 * May also be set to
 * Transliterator::REVERSE.
 * </p>
 * @return Transliterator a <b>Transliterator</b> object on success,
 * or <b>NULL</b> on failure.
 */
function transliterator_create_from_rules(string $rules, string $direction = null): Transliterator {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Get transliterator IDs
 * @link http://php.net/manual/en/transliterator.listids.php
 * @return array An array of registered transliterator IDs on success,
 * or <b>FALSE</b> on failure.
 */
function transliterator_list_ids(): array {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Create an inverse transliterator
 * @link http://php.net/manual/en/transliterator.createinverse.php
 * @param Transliterator $orig_trans
 * @return Transliterator a <b>Transliterator</b> object on success,
 * or <b>NULL</b> on failure
 */
function transliterator_create_inverse(Transliterator $orig_trans): Transliterator {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Transliterate a string
 * @link http://php.net/manual/en/transliterator.transliterate.php
 * @param string $subject <p>
 * The string to be transformed.
 * </p>
 * @param int $start [optional] <p>
 * The start index (in UTF-16 code units) from which the string will start
 * to be transformed, inclusive. Indexing starts at 0. The text before will
 * be left as is.
 * </p>
 * @param int $end [optional] <p>
 * The end index (in UTF-16 code units) until which the string will be
 * transformed, exclusive. Indexing starts at 0. The text after will be
 * left as is.
 * </p>
 * @return string The transfomed string on success, or <b>FALSE</b> on failure.
 */
function transliterator_transliterate(string $subject, int $start = null, int $end = null): string {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Get last error code
 * @link http://php.net/manual/en/transliterator.geterrorcode.php
 * @param Transliterator $trans
 * @return int The error code on success,
 * or <b>FALSE</b> if none exists, or on failure.
 */
function transliterator_get_error_code(Transliterator $trans): int {}

/**
 * (PHP &gt;= 5.4.0, PECL intl &gt;= 2.0.0)<br/>
 * Get last error message
 * @link http://php.net/manual/en/transliterator.geterrormessage.php
 * @param Transliterator $trans
 * @return string The error code on success,
 * or <b>FALSE</b> if none exists, or on failure.
 */
function transliterator_get_error_message(Transliterator $trans): string {}

/**
 * @param $zoneId
 */
function intltz_create_time_zone($zoneId) {}

/**
 * @param DateTimeZone $dateTimeZone
 */
function intltz_from_date_time_zone(DateTimeZone $dateTimeZone) {}

function intltz_create_default() {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_id(IntlTimeZone $timeZone) {}

function intltz_get_gmt() {}

function intltz_get_unknown() {}

/**
 * @param $countryOrRawOffset [optional]
 */
function intltz_create_enumeration($countryOrRawOffset) {}

/**
 * @param $zoneId
 */
function intltz_count_equivalent_ids($zoneId) {}

/**
 * @param $zoneType
 * @param $region [optional]
 * @param $rawOffset [optional]
 */
function intltz_create_time_zone_id_enumeration($zoneType, $region, $rawOffset) {}

/**
 * @param $zoneId
 * @param $isSystemID [optional]
 */
function intltz_get_canonical_id($zoneId, &$isSystemID) {}

/**
 * @param $zoneId
 */
function intltz_get_region($zoneId) {}

function intltz_get_tz_data_version() {}

/**
 * @param $zoneId
 * @param $index
 */
function intltz_get_equivalent_id($zoneId, $index) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_use_daylight_time(IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param $date
 * @param $local
 * @param $rawOffset
 * @param $dstOffset
 */
function intltz_get_offset(IntlTimeZone $timeZone, $date, $local, &$rawOffset, &$dstOffset) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_raw_offset(IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param IntlTimeZone $otherTimeZone [optional]
 */
function intltz_has_same_rules(IntlTimeZone $timeZoneIntlTimeZone , $otherTimeZone) {}

/**
 * @param IntlTimeZone $timeZone
 * @param $isDaylight [optional]
 * @param $style [optional]
 * @param $locale [optional]
 */
function intltz_get_display_name(IntlTimeZone $timeZone, $isDaylight, $style, $locale) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_get_dst_savings(IntlTimeZone $timeZone) {}

/**
 * @param IntlTimeZone $timeZone
 */
function intltz_to_date_time_zone(IntlTimeZone $timeZone) {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * Get last error code on the object
 * @link http://php.net/manual/en/intltimezone.geterrorcode.php
 * @param IntlTimeZone $timeZone
 * @return integer
 */
function intltz_get_error_code(IntlTimeZone $timeZone): integer {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * Get last error message on the object
 * @link http://php.net/manual/en/intltimezone.geterrormessage.php
 * @param IntlTimeZone $timeZone
 * @return string
 */
function intltz_get_error_message(IntlTimeZone $timeZone): string {}

/**
 * @param $timeZone [optional]
 * @param $locale [optional]
 */
function intlcal_create_instance($timeZone, $locale) {}

/**
 * @param $key
 * @param $locale
 * @param $commonlyUsed
 */
function intlcal_get_keyword_values_for_locale($key, $locale, $commonlyUsed) {}

function intlcal_get_now() {}

function intlcal_get_available_locales() {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $date
 */
function intlcal_set_time(IntlCalendar $calendar, $date) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 * @param $amount
 */
function intlcal_add(IntlCalendar $calendar, $field, $amount) {}

/**
 * @param IntlCalendar $calendar
 * @param $timeZone
 */
function intlcal_set_time_zone(IntlCalendar $calendar, $timeZone) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_after(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_before(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $fieldOrYear
 * @param $valueOrMonth
 * @param $dayOfMonth [optional]
 * @param $hour [optional]
 * @param $minute [optional]
 * @param $second [optional]
 */
function intlcal_set(IntlCalendar $calendar, $fieldOrYear, $valueOrMonth, $dayOfMonth, $hour, $minute, $second) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 * @param $amountOrUpOrDown [optional]
 */
function intlcal_roll(IntlCalendar $calendar, $field, $amountOrUpOrDown) {}

/**
 * @param IntlCalendar $calendar
 * @param $field [optional]
 */
function intlcal_clear(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $when
 * @param $field
 */
function intlcal_field_difference(IntlCalendar $calendar, $when, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_actual_maximum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_actual_minimum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_get_day_of_week_type(IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_first_day_of_week(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_greatest_minimum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_least_maximum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $localeType
 */
function intlcal_get_locale(IntlCalendar $calendar, $localeType) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_maximum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_minimal_days_in_first_week(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_get_minimum(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_time_zone(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_type(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_get_weekend_transition(IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_in_daylight_time(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_is_equivalent_to(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_is_lenient(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $field
 */
function intlcal_is_set(IntlCalendar $calendar, $field) {}

/**
 * @param IntlCalendar $calendar
 * @param $date [optional]
 */
function intlcal_is_weekend(IntlCalendar $calendar, $date) {}

/**
 * @param IntlCalendar $calendar
 * @param $dayOfWeek
 */
function intlcal_set_first_day_of_week(IntlCalendar $calendar, $dayOfWeek) {}

/**
 * @param IntlCalendar $calendar
 * @param $isLenient
 */
function intlcal_set_lenient(IntlCalendar $calendar, $isLenient) {}

/**
 * @param IntlCalendar $calendar
 * @param $numberOfDays
 */
function intlcal_set_minimal_days_in_first_week(IntlCalendar $calendar, $numberOfDays) {}

/**
 * @param IntlCalendar $calendar
 * @param IntlCalendar $otherCalendar
 */
function intlcal_equals(IntlCalendar $calendarIntlCalendar , $otherCalendar) {}

/**
 * @param $dateTime
 */
function intlcal_from_date_time($dateTime) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_to_date_time(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_repeated_wall_time_option(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 */
function intlcal_get_skipped_wall_time_option(IntlCalendar $calendar) {}

/**
 * @param IntlCalendar $calendar
 * @param $wallTimeOption
 */
function intlcal_set_repeated_wall_time_option(IntlCalendar $calendar, $wallTimeOption) {}

/**
 * @param IntlCalendar $calendar
 * @param $wallTimeOption
 */
function intlcal_set_skipped_wall_time_option(IntlCalendar $calendar, $wallTimeOption) {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * Get last error code on the object
 * @link http://php.net/manual/en/intlcalendar.geterrorcode.php
 * @param IntlCalendar $calendar
 * @return int An ICU error code indicating either success, failure or a warning.
 */
function intlcal_get_error_code(IntlCalendar $calendar): int {}

/**
 * (PHP 5.5.0, PHP 7, PECL &gt;= 3.0.0a1)<br/>
 * Get last error message on the object
 * @link http://php.net/manual/en/intlcalendar.geterrormessage.php
 * @param IntlCalendar $calendar
 * @return string The error message associated with last error that occurred in a function call
 * on this object, or a string indicating the non-existance of an error.
 */
function intlcal_get_error_message(IntlCalendar $calendar): string {}

/**
 * @param $timeZoneOrYear [optional]
 * @param $localeOrMonth [optional]
 * @param $dayOfMonth [optional]
 * @param $hour [optional]
 * @param $minute [optional]
 * @param $second [optional]
 */
function intlgregcal_create_instance($timeZoneOrYear, $localeOrMonth, $dayOfMonth, $hour, $minute, $second) {}

/**
 * @param IntlGregorianCalendar $calendar
 * @param $date
 */
function intlgregcal_set_gregorian_change(IntlGregorianCalendar $calendar, $date) {}

/**
 * @param IntlGregorianCalendar $calendar
 */
function intlgregcal_get_gregorian_change(IntlGregorianCalendar $calendar) {}

/**
 * @param IntlGregorianCalendar $calendar
 * @param $year
 */
function intlgregcal_is_leap_year(IntlGregorianCalendar $calendar, $year) {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get the last error code
 * @link http://php.net/manual/en/function.intl-get-error-code.php
 * @return int Error code returned by the last API function call.
 */
function intl_get_error_code(): int {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get description of the last error
 * @link http://php.net/manual/en/function.intl-get-error-message.php
 * @return string Description of an error occurred in the last API function call.
 */
function intl_get_error_message(): string {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Check whether the given error code indicates failure
 * @link http://php.net/manual/en/function.intl-is-failure.php
 * @param int $error_code <p>
 * is a value that returned by functions:
 * <b>intl_get_error_code</b>,
 * <b>collator_get_error_code</b> .
 * </p>
 * @return bool <b>TRUE</b> if it the code indicates some failure, and <b>FALSE</b>
 * in case of success or a warning.
 */
function intl_is_failure(int $error_code): bool {}

/**
 * (PHP 5 &gt;= 5.3.0, PHP 7, PECL intl &gt;= 1.0.0)<br/>
 * Get symbolic name for a given error code
 * @link http://php.net/manual/en/function.intl-error-name.php
 * @param int $error_code <p>
 * ICU error code.
 * </p>
 * @return string The returned string will be the same as the name of the error code
 * constant.
 */
function intl_error_name(int $error_code): string {}


/**
 * Limit on locale length, set to 80 in PHP code. Locale names longer
 * than this limit will not be accepted.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('INTL_MAX_LOCALE_LEN', 80);
define ('INTL_ICU_VERSION', 55.1);
define ('INTL_ICU_DATA_VERSION', 55.1);
define ('ULOC_ACTUAL_LOCALE', 0);
define ('ULOC_VALID_LOCALE', 1);
define ('GRAPHEME_EXTR_COUNT', 0);
define ('GRAPHEME_EXTR_MAXBYTES', 1);
define ('GRAPHEME_EXTR_MAXCHARS', 2);
define ('U_USING_FALLBACK_WARNING', -128);
define ('U_ERROR_WARNING_START', -128);
define ('U_USING_DEFAULT_WARNING', -127);
define ('U_SAFECLONE_ALLOCATED_WARNING', -126);
define ('U_STATE_OLD_WARNING', -125);
define ('U_STRING_NOT_TERMINATED_WARNING', -124);
define ('U_SORT_KEY_TOO_SHORT_WARNING', -123);
define ('U_AMBIGUOUS_ALIAS_WARNING', -122);
define ('U_DIFFERENT_UCA_VERSION', -121);
define ('U_ERROR_WARNING_LIMIT', -119);
define ('U_ZERO_ERROR', 0);
define ('U_ILLEGAL_ARGUMENT_ERROR', 1);
define ('U_MISSING_RESOURCE_ERROR', 2);
define ('U_INVALID_FORMAT_ERROR', 3);
define ('U_FILE_ACCESS_ERROR', 4);
define ('U_INTERNAL_PROGRAM_ERROR', 5);
define ('U_MESSAGE_PARSE_ERROR', 6);
define ('U_MEMORY_ALLOCATION_ERROR', 7);
define ('U_INDEX_OUTOFBOUNDS_ERROR', 8);
define ('U_PARSE_ERROR', 9);
define ('U_INVALID_CHAR_FOUND', 10);
define ('U_TRUNCATED_CHAR_FOUND', 11);
define ('U_ILLEGAL_CHAR_FOUND', 12);
define ('U_INVALID_TABLE_FORMAT', 13);
define ('U_INVALID_TABLE_FILE', 14);
define ('U_BUFFER_OVERFLOW_ERROR', 15);
define ('U_UNSUPPORTED_ERROR', 16);
define ('U_RESOURCE_TYPE_MISMATCH', 17);
define ('U_ILLEGAL_ESCAPE_SEQUENCE', 18);
define ('U_UNSUPPORTED_ESCAPE_SEQUENCE', 19);
define ('U_NO_SPACE_AVAILABLE', 20);
define ('U_CE_NOT_FOUND_ERROR', 21);
define ('U_PRIMARY_TOO_LONG_ERROR', 22);
define ('U_STATE_TOO_OLD_ERROR', 23);
define ('U_TOO_MANY_ALIASES_ERROR', 24);
define ('U_ENUM_OUT_OF_SYNC_ERROR', 25);
define ('U_INVARIANT_CONVERSION_ERROR', 26);
define ('U_INVALID_STATE_ERROR', 27);
define ('U_COLLATOR_VERSION_MISMATCH', 28);
define ('U_USELESS_COLLATOR_ERROR', 29);
define ('U_NO_WRITE_PERMISSION', 30);
define ('U_STANDARD_ERROR_LIMIT', 31);
define ('U_BAD_VARIABLE_DEFINITION', 65536);
define ('U_PARSE_ERROR_START', 65536);
define ('U_MALFORMED_RULE', 65537);
define ('U_MALFORMED_SET', 65538);
define ('U_MALFORMED_SYMBOL_REFERENCE', 65539);
define ('U_MALFORMED_UNICODE_ESCAPE', 65540);
define ('U_MALFORMED_VARIABLE_DEFINITION', 65541);
define ('U_MALFORMED_VARIABLE_REFERENCE', 65542);
define ('U_MISMATCHED_SEGMENT_DELIMITERS', 65543);
define ('U_MISPLACED_ANCHOR_START', 65544);
define ('U_MISPLACED_CURSOR_OFFSET', 65545);
define ('U_MISPLACED_QUANTIFIER', 65546);
define ('U_MISSING_OPERATOR', 65547);
define ('U_MISSING_SEGMENT_CLOSE', 65548);
define ('U_MULTIPLE_ANTE_CONTEXTS', 65549);
define ('U_MULTIPLE_CURSORS', 65550);
define ('U_MULTIPLE_POST_CONTEXTS', 65551);
define ('U_TRAILING_BACKSLASH', 65552);
define ('U_UNDEFINED_SEGMENT_REFERENCE', 65553);
define ('U_UNDEFINED_VARIABLE', 65554);
define ('U_UNQUOTED_SPECIAL', 65555);
define ('U_UNTERMINATED_QUOTE', 65556);
define ('U_RULE_MASK_ERROR', 65557);
define ('U_MISPLACED_COMPOUND_FILTER', 65558);
define ('U_MULTIPLE_COMPOUND_FILTERS', 65559);
define ('U_INVALID_RBT_SYNTAX', 65560);
define ('U_INVALID_PROPERTY_PATTERN', 65561);
define ('U_MALFORMED_PRAGMA', 65562);
define ('U_UNCLOSED_SEGMENT', 65563);
define ('U_ILLEGAL_CHAR_IN_SEGMENT', 65564);
define ('U_VARIABLE_RANGE_EXHAUSTED', 65565);
define ('U_VARIABLE_RANGE_OVERLAP', 65566);
define ('U_ILLEGAL_CHARACTER', 65567);
define ('U_INTERNAL_TRANSLITERATOR_ERROR', 65568);
define ('U_INVALID_ID', 65569);
define ('U_INVALID_FUNCTION', 65570);
define ('U_PARSE_ERROR_LIMIT', 65571);
define ('U_UNEXPECTED_TOKEN', 65792);
define ('U_FMT_PARSE_ERROR_START', 65792);
define ('U_MULTIPLE_DECIMAL_SEPARATORS', 65793);
define ('U_MULTIPLE_DECIMAL_SEPERATORS', 65793);
define ('U_MULTIPLE_EXPONENTIAL_SYMBOLS', 65794);
define ('U_MALFORMED_EXPONENTIAL_PATTERN', 65795);
define ('U_MULTIPLE_PERCENT_SYMBOLS', 65796);
define ('U_MULTIPLE_PERMILL_SYMBOLS', 65797);
define ('U_MULTIPLE_PAD_SPECIFIERS', 65798);
define ('U_PATTERN_SYNTAX_ERROR', 65799);
define ('U_ILLEGAL_PAD_POSITION', 65800);
define ('U_UNMATCHED_BRACES', 65801);
define ('U_UNSUPPORTED_PROPERTY', 65802);
define ('U_UNSUPPORTED_ATTRIBUTE', 65803);
define ('U_FMT_PARSE_ERROR_LIMIT', 65810);
define ('U_BRK_INTERNAL_ERROR', 66048);
define ('U_BRK_ERROR_START', 66048);
define ('U_BRK_HEX_DIGITS_EXPECTED', 66049);
define ('U_BRK_SEMICOLON_EXPECTED', 66050);
define ('U_BRK_RULE_SYNTAX', 66051);
define ('U_BRK_UNCLOSED_SET', 66052);
define ('U_BRK_ASSIGN_ERROR', 66053);
define ('U_BRK_VARIABLE_REDFINITION', 66054);
define ('U_BRK_MISMATCHED_PAREN', 66055);
define ('U_BRK_NEW_LINE_IN_QUOTED_STRING', 66056);
define ('U_BRK_UNDEFINED_VARIABLE', 66057);
define ('U_BRK_INIT_ERROR', 66058);
define ('U_BRK_RULE_EMPTY_SET', 66059);
define ('U_BRK_UNRECOGNIZED_OPTION', 66060);
define ('U_BRK_MALFORMED_RULE_TAG', 66061);
define ('U_BRK_ERROR_LIMIT', 66062);
define ('U_REGEX_INTERNAL_ERROR', 66304);
define ('U_REGEX_ERROR_START', 66304);
define ('U_REGEX_RULE_SYNTAX', 66305);
define ('U_REGEX_INVALID_STATE', 66306);
define ('U_REGEX_BAD_ESCAPE_SEQUENCE', 66307);
define ('U_REGEX_PROPERTY_SYNTAX', 66308);
define ('U_REGEX_UNIMPLEMENTED', 66309);
define ('U_REGEX_MISMATCHED_PAREN', 66310);
define ('U_REGEX_NUMBER_TOO_BIG', 66311);
define ('U_REGEX_BAD_INTERVAL', 66312);
define ('U_REGEX_MAX_LT_MIN', 66313);
define ('U_REGEX_INVALID_BACK_REF', 66314);
define ('U_REGEX_INVALID_FLAG', 66315);
define ('U_REGEX_LOOK_BEHIND_LIMIT', 66316);
define ('U_REGEX_SET_CONTAINS_STRING', 66317);
define ('U_REGEX_ERROR_LIMIT', 66326);
define ('U_IDNA_PROHIBITED_ERROR', 66560);
define ('U_IDNA_ERROR_START', 66560);
define ('U_IDNA_UNASSIGNED_ERROR', 66561);
define ('U_IDNA_CHECK_BIDI_ERROR', 66562);
define ('U_IDNA_STD3_ASCII_RULES_ERROR', 66563);
define ('U_IDNA_ACE_PREFIX_ERROR', 66564);
define ('U_IDNA_VERIFICATION_ERROR', 66565);
define ('U_IDNA_LABEL_TOO_LONG_ERROR', 66566);
define ('U_IDNA_ZERO_LENGTH_LABEL_ERROR', 66567);
define ('U_IDNA_DOMAIN_NAME_TOO_LONG_ERROR', 66568);
define ('U_IDNA_ERROR_LIMIT', 66569);
define ('U_STRINGPREP_PROHIBITED_ERROR', 66560);
define ('U_STRINGPREP_UNASSIGNED_ERROR', 66561);
define ('U_STRINGPREP_CHECK_BIDI_ERROR', 66562);
define ('U_ERROR_LIMIT', 66818);

/**
 * Prohibit processing of unassigned codepoints in the input for IDN
 * functions and do not check if the input conforms to domain name ASCII rules.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_DEFAULT', 0);

/**
 * Allow processing of unassigned codepoints in the input for IDN functions.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_ALLOW_UNASSIGNED', 1);

/**
 * Check if the input for IDN functions conforms to domain name ASCII rules.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_USE_STD3_RULES', 2);

/**
 * Check whether the input conforms to the BiDi rules.
 * Ignored by the IDNA2003 implementation, which always performs this check.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_CHECK_BIDI', 4);

/**
 * Check whether the input conforms to the CONTEXTJ rules.
 * Ignored by the IDNA2003 implementation, as this check is new in IDNA2008.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_CHECK_CONTEXTJ', 8);

/**
 * Option for nontransitional processing in
 * <b>idn_to_ascii</b>. Transitional processing is activated
 * by default. This option is ignored by the IDNA2003 implementation.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_NONTRANSITIONAL_TO_ASCII', 16);

/**
 * Option for nontransitional processing in
 * <b>idn_to_utf8</b>. Transitional processing is activated
 * by default. This option is ignored by the IDNA2003 implementation.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_NONTRANSITIONAL_TO_UNICODE', 32);

/**
 * Use IDNA 2003 algorithm in <b>idn_to_utf8</b> and
 * <b>idn_to_ascii</b>. This is the default.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('INTL_IDNA_VARIANT_2003', 0);

/**
 * Use UTS #46 algorithm in <b>idn_to_utf8</b> and
 * <b>idn_to_ascii</b>.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('INTL_IDNA_VARIANT_UTS46', 1);

/**
 * Errors reported in a bitset returned by the UTS #46 algorithm in
 * <b>idn_to_utf8</b> and
 * <b>idn_to_ascii</b>.
 * @link http://php.net/manual/en/intl.constants.php
 */
define ('IDNA_ERROR_EMPTY_LABEL', 1);
define ('IDNA_ERROR_LABEL_TOO_LONG', 2);
define ('IDNA_ERROR_DOMAIN_NAME_TOO_LONG', 4);
define ('IDNA_ERROR_LEADING_HYPHEN', 8);
define ('IDNA_ERROR_TRAILING_HYPHEN', 16);
define ('IDNA_ERROR_HYPHEN_3_4', 32);
define ('IDNA_ERROR_LEADING_COMBINING_MARK', 64);
define ('IDNA_ERROR_DISALLOWED', 128);
define ('IDNA_ERROR_PUNYCODE', 256);
define ('IDNA_ERROR_LABEL_HAS_DOT', 512);
define ('IDNA_ERROR_INVALID_ACE_LABEL', 1024);
define ('IDNA_ERROR_BIDI', 2048);
define ('IDNA_ERROR_CONTEXTJ', 4096);

// End of intl v.1.1.0
?>
