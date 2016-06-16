<?php

// Start of imagick v.3.4.0RC6

final class ImagickException extends Exception implements Throwable {
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

final class ImagickDrawException extends Exception implements Throwable {
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

final class ImagickPixelIteratorException extends Exception implements Throwable {
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

final class ImagickPixelException extends Exception implements Throwable {
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
 * @link http://php.net/manual/en/class.imagickkernelexception.php
 */
final class ImagickKernelException extends Exception implements Throwable {
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
 * @method Imagick clone() (PECL imagick 2.0.0)<br/>Makes an exact copy of the Imagick object
 * @link http://php.net/manual/en/class.imagick.php
 */
class Imagick implements Iterator, Traversable, Countable {
	const COLOR_BLACK = 11;
	const COLOR_BLUE = 12;
	const COLOR_CYAN = 13;
	const COLOR_GREEN = 14;
	const COLOR_RED = 15;
	const COLOR_YELLOW = 16;
	const COLOR_MAGENTA = 17;
	const COLOR_OPACITY = 18;
	const COLOR_ALPHA = 19;
	const COLOR_FUZZ = 20;
	const IMAGICK_EXTNUM = 30400;
	const IMAGICK_EXTVER = "3.4.0RC6";
	const QUANTUM_RANGE = 65535;
	const USE_ZEND_MM = 0;
	const COMPOSITE_DEFAULT = 40;
	const COMPOSITE_UNDEFINED = 0;
	const COMPOSITE_NO = 1;
	const COMPOSITE_ADD = 2;
	const COMPOSITE_ATOP = 3;
	const COMPOSITE_BLEND = 4;
	const COMPOSITE_BUMPMAP = 5;
	const COMPOSITE_CLEAR = 7;
	const COMPOSITE_COLORBURN = 8;
	const COMPOSITE_COLORDODGE = 9;
	const COMPOSITE_COLORIZE = 10;
	const COMPOSITE_COPYBLACK = 11;
	const COMPOSITE_COPYBLUE = 12;
	const COMPOSITE_COPY = 13;
	const COMPOSITE_COPYCYAN = 14;
	const COMPOSITE_COPYGREEN = 15;
	const COMPOSITE_COPYMAGENTA = 16;
	const COMPOSITE_COPYOPACITY = 17;
	const COMPOSITE_COPYRED = 18;
	const COMPOSITE_COPYYELLOW = 19;
	const COMPOSITE_DARKEN = 20;
	const COMPOSITE_DSTATOP = 21;
	const COMPOSITE_DST = 22;
	const COMPOSITE_DSTIN = 23;
	const COMPOSITE_DSTOUT = 24;
	const COMPOSITE_DSTOVER = 25;
	const COMPOSITE_DIFFERENCE = 26;
	const COMPOSITE_DISPLACE = 27;
	const COMPOSITE_DISSOLVE = 28;
	const COMPOSITE_EXCLUSION = 29;
	const COMPOSITE_HARDLIGHT = 30;
	const COMPOSITE_HUE = 31;
	const COMPOSITE_IN = 32;
	const COMPOSITE_LIGHTEN = 33;
	const COMPOSITE_LUMINIZE = 35;
	const COMPOSITE_MINUS = 36;
	const COMPOSITE_MODULATE = 37;
	const COMPOSITE_MULTIPLY = 38;
	const COMPOSITE_OUT = 39;
	const COMPOSITE_OVER = 40;
	const COMPOSITE_OVERLAY = 41;
	const COMPOSITE_PLUS = 42;
	const COMPOSITE_REPLACE = 43;
	const COMPOSITE_SATURATE = 44;
	const COMPOSITE_SCREEN = 45;
	const COMPOSITE_SOFTLIGHT = 46;
	const COMPOSITE_SRCATOP = 47;
	const COMPOSITE_SRC = 48;
	const COMPOSITE_SRCIN = 49;
	const COMPOSITE_SRCOUT = 50;
	const COMPOSITE_SRCOVER = 51;
	const COMPOSITE_SUBTRACT = 52;
	const COMPOSITE_THRESHOLD = 53;
	const COMPOSITE_XOR = 54;
	const COMPOSITE_CHANGEMASK = 6;
	const COMPOSITE_LINEARLIGHT = 34;
	const COMPOSITE_DIVIDE = 55;
	const COMPOSITE_DISTORT = 56;
	const COMPOSITE_BLUR = 57;
	const COMPOSITE_PEGTOPLIGHT = 58;
	const COMPOSITE_VIVIDLIGHT = 59;
	const COMPOSITE_PINLIGHT = 60;
	const COMPOSITE_LINEARDODGE = 61;
	const COMPOSITE_LINEARBURN = 62;
	const COMPOSITE_MATHEMATICS = 63;
	const COMPOSITE_MODULUSADD = 2;
	const COMPOSITE_MODULUSSUBTRACT = 52;
	const COMPOSITE_MINUSDST = 36;
	const COMPOSITE_DIVIDEDST = 55;
	const COMPOSITE_DIVIDESRC = 64;
	const COMPOSITE_MINUSSRC = 65;
	const COMPOSITE_DARKENINTENSITY = 66;
	const COMPOSITE_LIGHTENINTENSITY = 67;
	const MONTAGEMODE_FRAME = 1;
	const MONTAGEMODE_UNFRAME = 2;
	const MONTAGEMODE_CONCATENATE = 3;
	const STYLE_NORMAL = 1;
	const STYLE_ITALIC = 2;
	const STYLE_OBLIQUE = 3;
	const STYLE_ANY = 4;
	const FILTER_UNDEFINED = 0;
	const FILTER_POINT = 1;
	const FILTER_BOX = 2;
	const FILTER_TRIANGLE = 3;
	const FILTER_HERMITE = 4;
	const FILTER_HANNING = 5;
	const FILTER_HAMMING = 6;
	const FILTER_BLACKMAN = 7;
	const FILTER_GAUSSIAN = 8;
	const FILTER_QUADRATIC = 9;
	const FILTER_CUBIC = 10;
	const FILTER_CATROM = 11;
	const FILTER_MITCHELL = 12;
	const FILTER_LANCZOS = 22;
	const FILTER_BESSEL = 13;
	const FILTER_SINC = 14;
	const FILTER_KAISER = 16;
	const FILTER_WELSH = 17;
	const FILTER_PARZEN = 18;
	const FILTER_LAGRANGE = 21;
	const FILTER_SENTINEL = 31;
	const FILTER_BOHMAN = 19;
	const FILTER_BARTLETT = 20;
	const FILTER_JINC = 13;
	const FILTER_SINCFAST = 15;
	const FILTER_ROBIDOUX = 26;
	const FILTER_LANCZOSSHARP = 23;
	const FILTER_LANCZOS2 = 24;
	const FILTER_LANCZOS2SHARP = 25;
	const FILTER_ROBIDOUXSHARP = 27;
	const FILTER_COSINE = 28;
	const FILTER_SPLINE = 29;
	const FILTER_LANCZOSRADIUS = 30;
	const IMGTYPE_UNDEFINED = 0;
	const IMGTYPE_BILEVEL = 1;
	const IMGTYPE_GRAYSCALE = 2;
	const IMGTYPE_GRAYSCALEMATTE = 3;
	const IMGTYPE_PALETTE = 4;
	const IMGTYPE_PALETTEMATTE = 5;
	const IMGTYPE_TRUECOLOR = 6;
	const IMGTYPE_TRUECOLORMATTE = 7;
	const IMGTYPE_COLORSEPARATION = 8;
	const IMGTYPE_COLORSEPARATIONMATTE = 9;
	const IMGTYPE_OPTIMIZE = 10;
	const IMGTYPE_PALETTEBILEVELMATTE = 11;
	const RESOLUTION_UNDEFINED = 0;
	const RESOLUTION_PIXELSPERINCH = 1;
	const RESOLUTION_PIXELSPERCENTIMETER = 2;
	const COMPRESSION_UNDEFINED = 0;
	const COMPRESSION_NO = 1;
	const COMPRESSION_BZIP = 2;
	const COMPRESSION_FAX = 6;
	const COMPRESSION_GROUP4 = 7;
	const COMPRESSION_JPEG = 8;
	const COMPRESSION_JPEG2000 = 9;
	const COMPRESSION_LOSSLESSJPEG = 10;
	const COMPRESSION_LZW = 11;
	const COMPRESSION_RLE = 12;
	const COMPRESSION_ZIP = 13;
	const COMPRESSION_DXT1 = 3;
	const COMPRESSION_DXT3 = 4;
	const COMPRESSION_DXT5 = 5;
	const COMPRESSION_ZIPS = 14;
	const COMPRESSION_PIZ = 15;
	const COMPRESSION_PXR24 = 16;
	const COMPRESSION_B44 = 17;
	const COMPRESSION_B44A = 18;
	const COMPRESSION_LZMA = 19;
	const COMPRESSION_JBIG1 = 20;
	const COMPRESSION_JBIG2 = 21;
	const PAINT_POINT = 1;
	const PAINT_REPLACE = 2;
	const PAINT_FLOODFILL = 3;
	const PAINT_FILLTOBORDER = 4;
	const PAINT_RESET = 5;
	const GRAVITY_NORTHWEST = 1;
	const GRAVITY_NORTH = 2;
	const GRAVITY_NORTHEAST = 3;
	const GRAVITY_WEST = 4;
	const GRAVITY_CENTER = 5;
	const GRAVITY_EAST = 6;
	const GRAVITY_SOUTHWEST = 7;
	const GRAVITY_SOUTH = 8;
	const GRAVITY_SOUTHEAST = 9;
	const GRAVITY_FORGET = 0;
	const GRAVITY_STATIC = 10;
	const STRETCH_NORMAL = 1;
	const STRETCH_ULTRACONDENSED = 2;
	const STRETCH_EXTRACONDENSED = 3;
	const STRETCH_CONDENSED = 4;
	const STRETCH_SEMICONDENSED = 5;
	const STRETCH_SEMIEXPANDED = 6;
	const STRETCH_EXPANDED = 7;
	const STRETCH_EXTRAEXPANDED = 8;
	const STRETCH_ULTRAEXPANDED = 9;
	const STRETCH_ANY = 10;
	const ALIGN_UNDEFINED = 0;
	const ALIGN_LEFT = 1;
	const ALIGN_CENTER = 2;
	const ALIGN_RIGHT = 3;
	const DECORATION_NO = 1;
	const DECORATION_UNDERLINE = 2;
	const DECORATION_OVERLINE = 3;
	const DECORATION_LINETROUGH = 4;
	const DECORATION_LINETHROUGH = 4;
	const NOISE_UNIFORM = 1;
	const NOISE_GAUSSIAN = 2;
	const NOISE_MULTIPLICATIVEGAUSSIAN = 3;
	const NOISE_IMPULSE = 4;
	const NOISE_LAPLACIAN = 5;
	const NOISE_POISSON = 6;
	const NOISE_RANDOM = 7;
	const CHANNEL_UNDEFINED = 0;
	const CHANNEL_RED = 1;
	const CHANNEL_GRAY = 1;
	const CHANNEL_CYAN = 1;
	const CHANNEL_GREEN = 2;
	const CHANNEL_MAGENTA = 2;
	const CHANNEL_BLUE = 4;
	const CHANNEL_YELLOW = 4;
	const CHANNEL_ALPHA = 8;
	const CHANNEL_OPACITY = 8;
	const CHANNEL_MATTE = 8;
	const CHANNEL_BLACK = 32;
	const CHANNEL_INDEX = 32;
	const CHANNEL_ALL = 134217727;
	const CHANNEL_DEFAULT = 134217719;
	const CHANNEL_RGBA = 15;
	const CHANNEL_TRUEALPHA = 64;
	const CHANNEL_RGBS = 128;
	const CHANNEL_GRAY_CHANNELS = 128;
	const CHANNEL_SYNC = 256;
	const CHANNEL_COMPOSITES = 47;
	const METRIC_UNDEFINED = 0;
	const METRIC_ABSOLUTEERRORMETRIC = 1;
	const METRIC_MEANABSOLUTEERROR = 2;
	const METRIC_MEANERRORPERPIXELMETRIC = 3;
	const METRIC_MEANSQUAREERROR = 4;
	const METRIC_PEAKABSOLUTEERROR = 5;
	const METRIC_PEAKSIGNALTONOISERATIO = 6;
	const METRIC_ROOTMEANSQUAREDERROR = 7;
	const METRIC_NORMALIZEDCROSSCORRELATIONERRORMETRIC = 8;
	const METRIC_FUZZERROR = 9;
	const PIXEL_CHAR = 1;
	const PIXEL_DOUBLE = 2;
	const PIXEL_FLOAT = 3;
	const PIXEL_INTEGER = 4;
	const PIXEL_LONG = 5;
	const PIXEL_QUANTUM = 6;
	const PIXEL_SHORT = 7;
	const EVALUATE_UNDEFINED = 0;
	const EVALUATE_ADD = 1;
	const EVALUATE_AND = 2;
	const EVALUATE_DIVIDE = 3;
	const EVALUATE_LEFTSHIFT = 4;
	const EVALUATE_MAX = 5;
	const EVALUATE_MIN = 6;
	const EVALUATE_MULTIPLY = 7;
	const EVALUATE_OR = 8;
	const EVALUATE_RIGHTSHIFT = 9;
	const EVALUATE_SET = 10;
	const EVALUATE_SUBTRACT = 11;
	const EVALUATE_XOR = 12;
	const EVALUATE_POW = 13;
	const EVALUATE_LOG = 14;
	const EVALUATE_THRESHOLD = 15;
	const EVALUATE_THRESHOLDBLACK = 16;
	const EVALUATE_THRESHOLDWHITE = 17;
	const EVALUATE_GAUSSIANNOISE = 18;
	const EVALUATE_IMPULSENOISE = 19;
	const EVALUATE_LAPLACIANNOISE = 20;
	const EVALUATE_MULTIPLICATIVENOISE = 21;
	const EVALUATE_POISSONNOISE = 22;
	const EVALUATE_UNIFORMNOISE = 23;
	const EVALUATE_COSINE = 24;
	const EVALUATE_SINE = 25;
	const EVALUATE_ADDMODULUS = 26;
	const EVALUATE_MEAN = 27;
	const EVALUATE_ABS = 28;
	const EVALUATE_EXPONENTIAL = 29;
	const EVALUATE_MEDIAN = 30;
	const EVALUATE_SUM = 31;
	const COLORSPACE_UNDEFINED = 0;
	const COLORSPACE_RGB = 1;
	const COLORSPACE_GRAY = 2;
	const COLORSPACE_TRANSPARENT = 3;
	const COLORSPACE_OHTA = 4;
	const COLORSPACE_LAB = 5;
	const COLORSPACE_XYZ = 6;
	const COLORSPACE_YCBCR = 7;
	const COLORSPACE_YCC = 8;
	const COLORSPACE_YIQ = 9;
	const COLORSPACE_YPBPR = 10;
	const COLORSPACE_YUV = 11;
	const COLORSPACE_CMYK = 12;
	const COLORSPACE_SRGB = 13;
	const COLORSPACE_HSB = 14;
	const COLORSPACE_HSL = 15;
	const COLORSPACE_HWB = 16;
	const COLORSPACE_REC601LUMA = 17;
	const COLORSPACE_REC709LUMA = 19;
	const COLORSPACE_LOG = 21;
	const COLORSPACE_CMY = 22;
	const COLORSPACE_LUV = 23;
	const COLORSPACE_HCL = 24;
	const COLORSPACE_LCH = 25;
	const COLORSPACE_LMS = 26;
	const COLORSPACE_LCHAB = 27;
	const COLORSPACE_LCHUV = 28;
	const COLORSPACE_SCRGB = 29;
	const COLORSPACE_HSI = 30;
	const COLORSPACE_HSV = 31;
	const COLORSPACE_HCLP = 32;
	const COLORSPACE_YDBDR = 33;
	const COLORSPACE_REC601YCBCR = 18;
	const COLORSPACE_REC709YCBCR = 20;
	const VIRTUALPIXELMETHOD_UNDEFINED = 0;
	const VIRTUALPIXELMETHOD_BACKGROUND = 1;
	const VIRTUALPIXELMETHOD_CONSTANT = 2;
	const VIRTUALPIXELMETHOD_EDGE = 4;
	const VIRTUALPIXELMETHOD_MIRROR = 5;
	const VIRTUALPIXELMETHOD_TILE = 7;
	const VIRTUALPIXELMETHOD_TRANSPARENT = 8;
	const VIRTUALPIXELMETHOD_MASK = 9;
	const VIRTUALPIXELMETHOD_BLACK = 10;
	const VIRTUALPIXELMETHOD_GRAY = 11;
	const VIRTUALPIXELMETHOD_WHITE = 12;
	const VIRTUALPIXELMETHOD_HORIZONTALTILE = 13;
	const VIRTUALPIXELMETHOD_VERTICALTILE = 14;
	const VIRTUALPIXELMETHOD_HORIZONTALTILEEDGE = 15;
	const VIRTUALPIXELMETHOD_VERTICALTILEEDGE = 16;
	const VIRTUALPIXELMETHOD_CHECKERTILE = 17;
	const PREVIEW_UNDEFINED = 0;
	const PREVIEW_ROTATE = 1;
	const PREVIEW_SHEAR = 2;
	const PREVIEW_ROLL = 3;
	const PREVIEW_HUE = 4;
	const PREVIEW_SATURATION = 5;
	const PREVIEW_BRIGHTNESS = 6;
	const PREVIEW_GAMMA = 7;
	const PREVIEW_SPIFF = 8;
	const PREVIEW_DULL = 9;
	const PREVIEW_GRAYSCALE = 10;
	const PREVIEW_QUANTIZE = 11;
	const PREVIEW_DESPECKLE = 12;
	const PREVIEW_REDUCENOISE = 13;
	const PREVIEW_ADDNOISE = 14;
	const PREVIEW_SHARPEN = 15;
	const PREVIEW_BLUR = 16;
	const PREVIEW_THRESHOLD = 17;
	const PREVIEW_EDGEDETECT = 18;
	const PREVIEW_SPREAD = 19;
	const PREVIEW_SOLARIZE = 20;
	const PREVIEW_SHADE = 21;
	const PREVIEW_RAISE = 22;
	const PREVIEW_SEGMENT = 23;
	const PREVIEW_SWIRL = 24;
	const PREVIEW_IMPLODE = 25;
	const PREVIEW_WAVE = 26;
	const PREVIEW_OILPAINT = 27;
	const PREVIEW_CHARCOALDRAWING = 28;
	const PREVIEW_JPEG = 29;
	const RENDERINGINTENT_UNDEFINED = 0;
	const RENDERINGINTENT_SATURATION = 1;
	const RENDERINGINTENT_PERCEPTUAL = 2;
	const RENDERINGINTENT_ABSOLUTE = 3;
	const RENDERINGINTENT_RELATIVE = 4;
	const INTERLACE_UNDEFINED = 0;
	const INTERLACE_NO = 1;
	const INTERLACE_LINE = 2;
	const INTERLACE_PLANE = 3;
	const INTERLACE_PARTITION = 4;
	const INTERLACE_GIF = 5;
	const INTERLACE_JPEG = 6;
	const INTERLACE_PNG = 7;
	const FILLRULE_UNDEFINED = 0;
	const FILLRULE_EVENODD = 1;
	const FILLRULE_NONZERO = 2;
	const PATHUNITS_UNDEFINED = 0;
	const PATHUNITS_USERSPACE = 1;
	const PATHUNITS_USERSPACEONUSE = 2;
	const PATHUNITS_OBJECTBOUNDINGBOX = 3;
	const LINECAP_UNDEFINED = 0;
	const LINECAP_BUTT = 1;
	const LINECAP_ROUND = 2;
	const LINECAP_SQUARE = 3;
	const LINEJOIN_UNDEFINED = 0;
	const LINEJOIN_MITER = 1;
	const LINEJOIN_ROUND = 2;
	const LINEJOIN_BEVEL = 3;
	const RESOURCETYPE_UNDEFINED = 0;
	const RESOURCETYPE_AREA = 1;
	const RESOURCETYPE_DISK = 2;
	const RESOURCETYPE_FILE = 3;
	const RESOURCETYPE_MAP = 4;
	const RESOURCETYPE_MEMORY = 5;
	const RESOURCETYPE_TIME = 7;
	const RESOURCETYPE_THROTTLE = 8;
	const RESOURCETYPE_THREAD = 6;
	const DISPOSE_UNRECOGNIZED = 0;
	const DISPOSE_UNDEFINED = 0;
	const DISPOSE_NONE = 1;
	const DISPOSE_BACKGROUND = 2;
	const DISPOSE_PREVIOUS = 3;
	const INTERPOLATE_UNDEFINED = 0;
	const INTERPOLATE_AVERAGE = 1;
	const INTERPOLATE_BICUBIC = 2;
	const INTERPOLATE_BILINEAR = 3;
	const INTERPOLATE_FILTER = 4;
	const INTERPOLATE_INTEGER = 5;
	const INTERPOLATE_MESH = 6;
	const INTERPOLATE_NEARESTNEIGHBOR = 7;
	const INTERPOLATE_SPLINE = 8;
	const LAYERMETHOD_UNDEFINED = 0;
	const LAYERMETHOD_COALESCE = 1;
	const LAYERMETHOD_COMPAREANY = 2;
	const LAYERMETHOD_COMPARECLEAR = 3;
	const LAYERMETHOD_COMPAREOVERLAY = 4;
	const LAYERMETHOD_DISPOSE = 5;
	const LAYERMETHOD_OPTIMIZE = 6;
	const LAYERMETHOD_OPTIMIZEPLUS = 8;
	const LAYERMETHOD_OPTIMIZETRANS = 9;
	const LAYERMETHOD_COMPOSITE = 12;
	const LAYERMETHOD_OPTIMIZEIMAGE = 7;
	const LAYERMETHOD_REMOVEDUPS = 10;
	const LAYERMETHOD_REMOVEZERO = 11;
	const LAYERMETHOD_TRIMBOUNDS = 16;
	const ORIENTATION_UNDEFINED = 0;
	const ORIENTATION_TOPLEFT = 1;
	const ORIENTATION_TOPRIGHT = 2;
	const ORIENTATION_BOTTOMRIGHT = 3;
	const ORIENTATION_BOTTOMLEFT = 4;
	const ORIENTATION_LEFTTOP = 5;
	const ORIENTATION_RIGHTTOP = 6;
	const ORIENTATION_RIGHTBOTTOM = 7;
	const ORIENTATION_LEFTBOTTOM = 8;
	const DISTORTION_UNDEFINED = 0;
	const DISTORTION_AFFINE = 1;
	const DISTORTION_AFFINEPROJECTION = 2;
	const DISTORTION_ARC = 9;
	const DISTORTION_BILINEAR = 6;
	const DISTORTION_PERSPECTIVE = 4;
	const DISTORTION_PERSPECTIVEPROJECTION = 5;
	const DISTORTION_SCALEROTATETRANSLATE = 3;
	const DISTORTION_POLYNOMIAL = 8;
	const DISTORTION_POLAR = 10;
	const DISTORTION_DEPOLAR = 11;
	const DISTORTION_BARREL = 14;
	const DISTORTION_SHEPARDS = 16;
	const DISTORTION_SENTINEL = 18;
	const DISTORTION_BARRELINVERSE = 15;
	const DISTORTION_BILINEARFORWARD = 6;
	const DISTORTION_BILINEARREVERSE = 7;
	const DISTORTION_RESIZE = 17;
	const DISTORTION_CYLINDER2PLANE = 12;
	const DISTORTION_PLANE2CYLINDER = 13;
	const LAYERMETHOD_MERGE = 13;
	const LAYERMETHOD_FLATTEN = 14;
	const LAYERMETHOD_MOSAIC = 15;
	const ALPHACHANNEL_ACTIVATE = 1;
	const ALPHACHANNEL_RESET = 7;
	const ALPHACHANNEL_SET = 8;
	const ALPHACHANNEL_UNDEFINED = 0;
	const ALPHACHANNEL_COPY = 3;
	const ALPHACHANNEL_DEACTIVATE = 4;
	const ALPHACHANNEL_EXTRACT = 5;
	const ALPHACHANNEL_OPAQUE = 6;
	const ALPHACHANNEL_SHAPE = 9;
	const ALPHACHANNEL_TRANSPARENT = 10;
	const SPARSECOLORMETHOD_UNDEFINED = 0;
	const SPARSECOLORMETHOD_BARYCENTRIC = 1;
	const SPARSECOLORMETHOD_BILINEAR = 7;
	const SPARSECOLORMETHOD_POLYNOMIAL = 8;
	const SPARSECOLORMETHOD_SPEPARDS = 16;
	const SPARSECOLORMETHOD_VORONOI = 18;
	const SPARSECOLORMETHOD_INVERSE = 19;
	const DITHERMETHOD_UNDEFINED = 0;
	const DITHERMETHOD_NO = 1;
	const DITHERMETHOD_RIEMERSMA = 2;
	const DITHERMETHOD_FLOYDSTEINBERG = 3;
	const FUNCTION_UNDEFINED = 0;
	const FUNCTION_POLYNOMIAL = 1;
	const FUNCTION_SINUSOID = 2;
	const ALPHACHANNEL_BACKGROUND = 2;
	const FUNCTION_ARCSIN = 3;
	const FUNCTION_ARCTAN = 4;
	const ALPHACHANNEL_FLATTEN = 11;
	const ALPHACHANNEL_REMOVE = 12;
	const STATISTIC_GRADIENT = 1;
	const STATISTIC_MAXIMUM = 2;
	const STATISTIC_MEAN = 3;
	const STATISTIC_MEDIAN = 4;
	const STATISTIC_MINIMUM = 5;
	const STATISTIC_MODE = 6;
	const STATISTIC_NONPEAK = 7;
	const STATISTIC_STANDARD_DEVIATION = 8;
	const MORPHOLOGY_CONVOLVE = 1;
	const MORPHOLOGY_CORRELATE = 2;
	const MORPHOLOGY_ERODE = 3;
	const MORPHOLOGY_DILATE = 4;
	const MORPHOLOGY_ERODE_INTENSITY = 5;
	const MORPHOLOGY_DILATE_INTENSITY = 6;
	const MORPHOLOGY_DISTANCE = 7;
	const MORPHOLOGY_OPEN = 8;
	const MORPHOLOGY_CLOSE = 9;
	const MORPHOLOGY_OPEN_INTENSITY = 10;
	const MORPHOLOGY_CLOSE_INTENSITY = 11;
	const MORPHOLOGY_SMOOTH = 12;
	const MORPHOLOGY_EDGE_IN = 13;
	const MORPHOLOGY_EDGE_OUT = 14;
	const MORPHOLOGY_EDGE = 15;
	const MORPHOLOGY_TOP_HAT = 16;
	const MORPHOLOGY_BOTTOM_HAT = 17;
	const MORPHOLOGY_HIT_AND_MISS = 18;
	const MORPHOLOGY_THINNING = 19;
	const MORPHOLOGY_THICKEN = 20;
	const MORPHOLOGY_VORONOI = 21;
	const MORPHOLOGY_ITERATIVE = 22;
	const KERNEL_UNITY = 1;
	const KERNEL_GAUSSIAN = 2;
	const KERNEL_DIFFERENCE_OF_GAUSSIANS = 3;
	const KERNEL_LAPLACIAN_OF_GAUSSIANS = 4;
	const KERNEL_BLUR = 5;
	const KERNEL_COMET = 6;
	const KERNEL_LAPLACIAN = 7;
	const KERNEL_SOBEL = 8;
	const KERNEL_FREI_CHEN = 9;
	const KERNEL_ROBERTS = 10;
	const KERNEL_PREWITT = 11;
	const KERNEL_COMPASS = 12;
	const KERNEL_KIRSCH = 13;
	const KERNEL_DIAMOND = 14;
	const KERNEL_SQUARE = 15;
	const KERNEL_RECTANGLE = 16;
	const KERNEL_OCTAGON = 17;
	const KERNEL_DISK = 18;
	const KERNEL_PLUS = 19;
	const KERNEL_CROSS = 20;
	const KERNEL_RING = 21;
	const KERNEL_PEAKS = 22;
	const KERNEL_EDGES = 23;
	const KERNEL_CORNERS = 24;
	const KERNEL_DIAGONALS = 25;
	const KERNEL_LINE_ENDS = 26;
	const KERNEL_LINE_JUNCTIONS = 27;
	const KERNEL_RIDGES = 28;
	const KERNEL_CONVEX_HULL = 29;
	const KERNEL_THIN_SE = 30;
	const KERNEL_SKELETON = 31;
	const KERNEL_CHEBYSHEV = 32;
	const KERNEL_MANHATTAN = 33;
	const KERNEL_OCTAGONAL = 34;
	const KERNEL_EUCLIDEAN = 35;
	const KERNEL_USER_DEFINED = 36;
	const KERNEL_BINOMIAL = 37;
	const NORMALIZE_KERNEL_NONE = 0;
	const NORMALIZE_KERNEL_VALUE = 8192;
	const NORMALIZE_KERNEL_CORRELATE = 65536;
	const NORMALIZE_KERNEL_PERCENT = 4096;


	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes repeated portions of images to optimize
	 * @link http://php.net/manual/en/imagick.optimizeimagelayers.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function optimizeimagelayers(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the maximum bounding region between images
	 * @link http://php.net/manual/en/imagick.compareimagelayers.php
	 * @param int $method <p>
	 * One of the layer method constants.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function compareimagelayers(int $method): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Quickly fetch attributes
	 * @link http://php.net/manual/en/imagick.pingimageblob.php
	 * @param string $image <p>
	 * A string containing the image.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function pingimageblob(string $image): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Get basic image attributes in a lightweight manner
	 * @link http://php.net/manual/en/imagick.pingimagefile.php
	 * @param resource $filehandle <p>
	 * An open filehandle to the image.
	 * </p>
	 * @param string $fileName [optional] <p>
	 * Optional filename for this image.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function pingimagefile($filehandle, string $fileName = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a vertical mirror image
	 * @link http://php.net/manual/en/imagick.transposeimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function transposeimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a horizontal mirror image
	 * @link http://php.net/manual/en/imagick.transverseimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function transverseimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Remove edges from the image
	 * @link http://php.net/manual/en/imagick.trimimage.php
	 * @param float $fuzz <p>
	 * By default target must match a particular pixel color exactly.
	 * However, in many cases two colors may differ by a small amount.
	 * The fuzz member of image defines how much tolerance is acceptable
	 * to consider two colors as the same. This parameter represents the variation
	 * on the quantum range.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function trimimage(float $fuzz): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies wave filter to the image
	 * @link http://php.net/manual/en/imagick.waveimage.php
	 * @param float $amplitude <p>
	 * The amplitude of the wave.
	 * </p>
	 * @param float $length <p>
	 * The length of the wave.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function waveimage(float $amplitude, float $length): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds vignette filter to the image
	 * @link http://php.net/manual/en/imagick.vignetteimage.php
	 * @param float $blackPoint <p>
	 * The black point.
	 * </p>
	 * @param float $whitePoint <p>
	 * The white point
	 * </p>
	 * @param int $x <p>
	 * X offset of the ellipse
	 * </p>
	 * @param int $y <p>
	 * Y offset of the ellipse
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function vignetteimage(float $blackPoint, float $whitePoint, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Discards all but one of any pixel color
	 * @link http://php.net/manual/en/imagick.uniqueimagecolors.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function uniqueimagecolors(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Return if the image has a matte channel
	 * @link http://php.net/manual/en/imagick.getimagematte.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function getimagematte(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image matte channel
	 * @link http://php.net/manual/en/imagick.setimagematte.php
	 * @param bool $matte <p>
	 * True activates the matte channel and false disables it.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagematte(bool $matte): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adaptively resize image with data dependent triangulation
	 * @link http://php.net/manual/en/imagick.adaptiveresizeimage.php
	 * @param int $columns <p>
	 * The number of columns in the scaled image.
	 * </p>
	 * @param int $rows <p>
	 * The number of rows in the scaled image.
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * Whether to fit the image inside a bounding box.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptiveresizeimage(int $columns, int $rows, bool $bestfit = false): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates a pencil sketch
	 * @link http://php.net/manual/en/imagick.sketchimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param float $angle <p>
	 * Apply the effect along this angle.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sketchimage(float $radius, float $sigma, float $angle): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a 3D effect
	 * @link http://php.net/manual/en/imagick.shadeimage.php
	 * @param bool $gray <p>
	 * A value other than zero shades the intensity of each pixel.
	 * </p>
	 * @param float $azimuth <p>
	 * Defines the light source direction.
	 * </p>
	 * @param float $elevation <p>
	 * Defines the light source direction.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shadeimage(bool $gray, float $azimuth, float $elevation): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the size offset
	 * @link http://php.net/manual/en/imagick.getsizeoffset.php
	 * @return int the size offset associated with the Imagick object.
	 */
	public function getsizeoffset(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the size and offset of the Imagick object
	 * @link http://php.net/manual/en/imagick.setsizeoffset.php
	 * @param int $columns <p>
	 * The width in pixels.
	 * </p>
	 * @param int $rows <p>
	 * The height in pixels.
	 * </p>
	 * @param int $offset <p>
	 * The image offset.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setsizeoffset(int $columns, int $rows, int $offset): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds adaptive blur filter to image
	 * @link http://php.net/manual/en/imagick.adaptiveblurimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * Provide a value of 0 and the radius will be chosen automagically.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptiveblurimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Enhances the contrast of a color image
	 * @link http://php.net/manual/en/imagick.contraststretchimage.php
	 * @param float $black_point <p>
	 * The black point.
	 * </p>
	 * @param float $white_point <p>
	 * The white point.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. <b>Imagick::CHANNEL_ALL</b>. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function contraststretchimage(float $black_point, float $white_point, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adaptively sharpen the image
	 * @link http://php.net/manual/en/imagick.adaptivesharpenimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel. Use 0 for auto-select.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptivesharpenimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a high-contrast, two-color image
	 * @link http://php.net/manual/en/imagick.randomthresholdimage.php
	 * @param float $low <p>
	 * The low point
	 * </p>
	 * @param float $high <p>
	 * The high point
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function randomthresholdimage(float $low, float $high, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * @param $xRounding
	 * @param $yRounding
	 * @param $strokeWidth [optional]
	 * @param $displace [optional]
	 * @param $sizeCorrection [optional]
	 */
	public function roundcornersimage($xRounding, $yRounding, $strokeWidth, $displace, $sizeCorrection) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Rounds image corners
	 * @link http://php.net/manual/en/imagick.roundcorners.php
	 * @param float $x_rounding <p>
	 * x rounding
	 * </p>
	 * @param float $y_rounding <p>
	 * y rounding
	 * </p>
	 * @param float $stroke_width [optional] <p>
	 * stroke width
	 * </p>
	 * @param float $displace [optional] <p>
	 * image displace
	 * </p>
	 * @param float $size_correction [optional] <p>
	 * size correction
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function roundcorners(float $x_rounding, float $y_rounding, float $stroke_width = 10, float $displace = 5, float $size_correction = -6): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the iterator position
	 * @link http://php.net/manual/en/imagick.setiteratorindex.php
	 * @param int $index <p>
	 * The position to set the iterator to
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setiteratorindex(int $index): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the index of the current active image
	 * @link http://php.net/manual/en/imagick.getiteratorindex.php
	 * @return int an integer containing the index of the image in the stack.
	 */
	public function getiteratorindex(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Convenience method for setting crop size and the image geometry
	 * @link http://php.net/manual/en/imagick.transformimage.php
	 * @param string $crop <p>
	 * A crop geometry string. This geometry defines a subregion of the image to crop.
	 * </p>
	 * @param string $geometry <p>
	 * An image geometry string. This geometry defines the final size of the image.
	 * </p>
	 * @return Imagick an Imagick object containing the transformed image.
	 */
	public function transformimage(string $crop, string $geometry): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image opacity level
	 * @link http://php.net/manual/en/imagick.setimageopacity.php
	 * @param float $opacity <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageopacity(float $opacity): bool {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * Performs an ordered dither
	 * @link http://php.net/manual/en/imagick.orderedposterizeimage.php
	 * @param string $threshold_map <p>
	 * A string containing the name of the threshold dither map to use
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function orderedposterizeimage(string $threshold_map, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates a Polaroid picture
	 * @link http://php.net/manual/en/imagick.polaroidimage.php
	 * @param ImagickDraw $properties <p>
	 * The polaroid properties
	 * </p>
	 * @param float $angle <p>
	 * The polaroid angle
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function polaroidimage(ImagickDraw $properties, float $angle): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the named image property
	 * @link http://php.net/manual/en/imagick.getimageproperty.php
	 * @param string $name <p>
	 * name of the property (for example Exif:DateTime)
	 * </p>
	 * @return string a string containing the image property, false if a
	 * property with the given name does not exist.
	 */
	public function getimageproperty(string $name): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets an image property
	 * @link http://php.net/manual/en/imagick.setimageproperty.php
	 * @param string $name
	 * @param string $value
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageproperty(string $name, string $value): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.deleteimageproperty.php
	 * @param string $name <p>
	 * The name of the property to delete.
	 * </p>
	 * @return void
	 */
	public function deleteimageproperty(string $name) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.identifyformat.php
	 * @param string $embedText <p>
	 * A string containing formatting sequences e.g. "Trim box: %@ number of unique colors: %k".
	 * </p>
	 * @return string|false
	 */
	public function identifyformat(string $embedText) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image interpolate pixel method
	 * @link http://php.net/manual/en/imagick.setimageinterpolatemethod.php
	 * @param int $method <p>
	 * The method is one of the <b>Imagick::INTERPOLATE_*</b> constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageinterpolatemethod(int $method): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the interpolation method
	 * @link http://php.net/manual/en/imagick.getimageinterpolatemethod.php
	 * @return int the interpolate method on success.
	 */
	public function getimageinterpolatemethod(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Stretches with saturation the image intensity
	 * @link http://php.net/manual/en/imagick.linearstretchimage.php
	 * @param float $blackPoint <p>
	 * The image black point
	 * </p>
	 * @param float $whitePoint <p>
	 * The image white point
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function linearstretchimage(float $blackPoint, float $whitePoint): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image length in bytes
	 * @link http://php.net/manual/en/imagick.getimagelength.php
	 * @return int an int containing the current image size.
	 */
	public function getimagelength(): int {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set image size
	 * @link http://php.net/manual/en/imagick.extentimage.php
	 * @param int $width <p>
	 * The new width
	 * </p>
	 * @param int $height <p>
	 * The new height
	 * </p>
	 * @param int $x <p>
	 * X position for the new size
	 * </p>
	 * @param int $y <p>
	 * Y position for the new size
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function extentimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image orientation
	 * @link http://php.net/manual/en/imagick.getimageorientation.php
	 * @return int an int on success.
	 */
	public function getimageorientation(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image orientation
	 * @link http://php.net/manual/en/imagick.setimageorientation.php
	 * @param int $orientation <p>
	 * One of the orientation constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageorientation(int $orientation): bool {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.paintfloodfillimage.php
	 * @param mixed $fill <p>
	 * ImagickPixel object or a string containing the fill color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at
	 * intensities of 100 and 102 respectively are now interpreted as the
	 * same color for the purposes of the floodfill.
	 * </p>
	 * @param mixed $bordercolor <p>
	 * ImagickPixel object or a string containing the border color
	 * </p>
	 * @param int $x <p>
	 * X start position of the floodfill
	 * </p>
	 * @param int $y <p>
	 * Y start position of the floodfill
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function paintfloodfillimage($fill, float $fuzz, $bordercolor, int $x, int $y, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Replaces colors in the image
	 * @link http://php.net/manual/en/imagick.clutimage.php
	 * @param Imagick $lookup_table <p>
	 * Imagick object containing the color lookup table
	 * </p>
	 * @param float $channel [optional] <p>
	 * The Channeltype
	 * constant. When not supplied, default channels are replaced.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clutimage(Imagick $lookup_table, float $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image properties
	 * @link http://php.net/manual/en/imagick.getimageproperties.php
	 * @param string $pattern [optional] <p>
	 * The pattern for property names.
	 * </p>
	 * @param bool $only_names [optional] <p>
	 * Whether to return only property names. If <b>FALSE</b> then also the values are returned
	 * </p>
	 * @return array an array containing the image properties or property names.
	 */
	public function getimageproperties(string $pattern = "*", bool $only_names = true): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image profiles
	 * @link http://php.net/manual/en/imagick.getimageprofiles.php
	 * @param string $pattern [optional] <p>
	 * The pattern for profile names.
	 * </p>
	 * @param bool $only_names [optional] <p>
	 * Whether to return only profile names. If <b>FALSE</b> then values are returned as well
	 * </p>
	 * @return array an array containing the image profiles or profile names.
	 */
	public function getimageprofiles(string $pattern = "*", bool $only_names = true): array {}

	/**
	 * (PECL imagick 2.0.1)<br/>
	 * Distorts an image using various distortion methods
	 * @link http://php.net/manual/en/imagick.distortimage.php
	 * @param int $method <p>
	 * The method of image distortion. See distortion constants
	 * </p>
	 * @param array $arguments <p>
	 * The arguments for this distortion method
	 * </p>
	 * @param bool $bestfit <p>
	 * Attempt to resize destination to fit distorted source
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function distortimage(int $method, array $arguments, bool $bestfit): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Writes an image to a filehandle
	 * @link http://php.net/manual/en/imagick.writeimagefile.php
	 * @param resource $filehandle <p>
	 * Filehandle where to write the image
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeimagefile($filehandle): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Writes frames to a filehandle
	 * @link http://php.net/manual/en/imagick.writeimagesfile.php
	 * @param resource $filehandle <p>
	 * Filehandle where to write the images
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeimagesfile($filehandle): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Reset image page
	 * @link http://php.net/manual/en/imagick.resetimagepage.php
	 * @param string $page <p>
	 * The page definition. For example 7168x5147+0+0
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resetimagepage(string $page): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Sets image clip mask
	 * @link http://php.net/manual/en/imagick.setimageclipmask.php
	 * @param Imagick $clip_mask <p>
	 * The Imagick object containing the clip mask
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageclipmask(Imagick $clip_mask): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Gets image clip mask
	 * @link http://php.net/manual/en/imagick.getimageclipmask.php
	 * @return Imagick an Imagick object containing the clip mask.
	 */
	public function getimageclipmask(): Imagick {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Animates an image or images
	 * @link http://php.net/manual/en/imagick.animateimages.php
	 * @param string $x_server <p>
	 * X server address
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function animateimages(string $x_server): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Recolors image
	 * @link http://php.net/manual/en/imagick.recolorimage.php
	 * @param array $matrix <p>
	 * The matrix containing the color values
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function recolorimage(array $matrix): bool {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Sets font
	 * @link http://php.net/manual/en/imagick.setfont.php
	 * @param string $font <p>
	 * Font name or a filename
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setfont(string $font): bool {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Gets font
	 * @link http://php.net/manual/en/imagick.getfont.php
	 * @return string the string containing the font name or <b>FALSE</b> if not font is set.
	 */
	public function getfont(): string {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Sets point size
	 * @link http://php.net/manual/en/imagick.setpointsize.php
	 * @param float $point_size <p>
	 * Point size
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setpointsize(float $point_size): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Gets point size
	 * @link http://php.net/manual/en/imagick.getpointsize.php
	 * @return float a float containing the point size.
	 */
	public function getpointsize(): float {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Merges image layers
	 * @link http://php.net/manual/en/imagick.mergeimagelayers.php
	 * @param int $layer_method <p>
	 * One of the <b>Imagick::LAYERMETHOD_*</b> constants
	 * </p>
	 * @return Imagick an Imagick object containing the merged image.
	 */
	public function mergeimagelayers(int $layer_method): Imagick {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Sets image alpha channel
	 * @link http://php.net/manual/en/imagick.setimagealphachannel.php
	 * @param int $mode <p>
	 * One of the <b>Imagick::ALPHACHANNEL_*</b> constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagealphachannel(int $mode): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.floodfillpaintimage.php
	 * @param mixed $fill <p>
	 * ImagickPixel object or a string containing the fill color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param mixed $target <p>
	 * ImagickPixel object or a string containing the target color to paint
	 * </p>
	 * @param int $x <p>
	 * X start position of the floodfill
	 * </p>
	 * @param int $y <p>
	 * Y start position of the floodfill
	 * </p>
	 * @param bool $invert <p>
	 * If <b>TRUE</b> paints any pixel that does not match the target color.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function floodfillpaintimage($fill, float $fuzz, $target, int $x, int $y, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.opaquepaintimage.php
	 * @param mixed $target <p>
	 * ImagickPixel object or a string containing the color to change
	 * </p>
	 * @param mixed $fill <p>
	 * The replacement color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param bool $invert <p>
	 * If <b>TRUE</b> paints any pixel that does not match the target color.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function opaquepaintimage($target, $fill, float $fuzz, bool $invert, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Paints pixels transparent
	 * @link http://php.net/manual/en/imagick.transparentpaintimage.php
	 * @param mixed $target <p>
	 * The target color to paint
	 * </p>
	 * @param float $alpha <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully transparent.
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at intensities of 100 and 102 respectively are now interpreted as the same color.
	 * </p>
	 * @param bool $invert <p>
	 * If <b>TRUE</b> paints any pixel that does not match the target color.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function transparentpaintimage($target, float $alpha, float $fuzz, bool $invert): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Animates an image or images
	 * @link http://php.net/manual/en/imagick.liquidrescaleimage.php
	 * @param int $width <p>
	 * The width of the target size
	 * </p>
	 * @param int $height <p>
	 * The height of the target size
	 * </p>
	 * @param float $delta_x <p>
	 * How much the seam can traverse on x-axis.
	 * Passing 0 causes the seams to be straight.
	 * </p>
	 * @param float $rigidity <p>
	 * Introduces a bias for non-straight seams. This parameter is
	 * typically 0.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function liquidrescaleimage(int $width, int $height, float $delta_x, float $rigidity): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Enciphers an image
	 * @link http://php.net/manual/en/imagick.encipherimage.php
	 * @param string $passphrase <p>
	 * The passphrase
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function encipherimage(string $passphrase): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Deciphers an image
	 * @link http://php.net/manual/en/imagick.decipherimage.php
	 * @param string $passphrase <p>
	 * The passphrase
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function decipherimage(string $passphrase): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Sets the gravity
	 * @link http://php.net/manual/en/imagick.setgravity.php
	 * @param int $gravity <p>
	 * The gravity property. Refer to the list of
	 * gravity constants.
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setgravity(int $gravity): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Gets the gravity
	 * @link http://php.net/manual/en/imagick.getgravity.php
	 * @return int the gravity property. Refer to the list of
	 * gravity constants.
	 */
	public function getgravity(): int {}

	/**
	 * (PECL imagick 2.2.1)<br/>
	 * Gets channel range
	 * @link http://php.net/manual/en/imagick.getimagechannelrange.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return array an array containing minima and maxima values of the channel(s).
	 */
	public function getimagechannelrange(int $channel): array {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Gets the image alpha channel
	 * @link http://php.net/manual/en/imagick.getimagealphachannel.php
	 * @return int a constant defining the current alpha channel value. Refer to this
	 * list of alpha channel constants.
	 */
	public function getimagealphachannel(): int {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Gets channel distortions
	 * @link http://php.net/manual/en/imagick.getimagechanneldistortions.php
	 * @param Imagick $reference <p>
	 * Imagick object containing the reference image
	 * </p>
	 * @param int $metric <p>
	 * Refer to this list of metric type constants.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return float a double describing the channel distortion.
	 */
	public function getimagechanneldistortions(Imagick $reference, int $metric, int $channel = Imagick::CHANNEL_DEFAULT): float {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Sets the image gravity
	 * @link http://php.net/manual/en/imagick.setimagegravity.php
	 * @param int $gravity <p>
	 * The gravity property. Refer to the list of
	 * gravity constants.
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setimagegravity(int $gravity): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Gets the image gravity
	 * @link http://php.net/manual/en/imagick.getimagegravity.php
	 * @return int the images gravity property. Refer to the list of
	 * gravity constants.
	 */
	public function getimagegravity(): int {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Imports image pixels
	 * @link http://php.net/manual/en/imagick.importimagepixels.php
	 * @param int $x <p>
	 * The image x position
	 * </p>
	 * @param int $y <p>
	 * The image y position
	 * </p>
	 * @param int $width <p>
	 * The image width
	 * </p>
	 * @param int $height <p>
	 * The image height
	 * </p>
	 * @param string $map <p>
	 * Map of pixel ordering as a string. This can be for example RGB.
	 * The value can be any combination or order of R = red, G = green, B = blue, A = alpha (0 is transparent),
	 * O = opacity (0 is opaque), C = cyan, Y = yellow, M = magenta, K = black, I = intensity (for grayscale), P = pad.
	 * </p>
	 * @param int $storage <p>
	 * The pixel storage method.
	 * Refer to this list of pixel constants.
	 * </p>
	 * @param array $pixels <p>
	 * The array of pixels
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function importimagepixels(int $x, int $y, int $width, int $height, string $map, int $storage, array $pixels): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Removes skew from the image
	 * @link http://php.net/manual/en/imagick.deskewimage.php
	 * @param float $threshold <p>
	 * Deskew threshold
	 * </p>
	 * @return bool
	 */
	public function deskewimage(float $threshold): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Segments an image
	 * @link http://php.net/manual/en/imagick.segmentimage.php
	 * @param int $COLORSPACE <p>
	 * One of the COLORSPACE constants.
	 * </p>
	 * @param float $cluster_threshold <p>
	 * A percentage describing minimum number of pixels
	 * contained in hexedra before it is considered valid.
	 * </p>
	 * @param float $smooth_threshold <p>
	 * Eliminates noise from the histogram.
	 * </p>
	 * @param bool $verbose [optional] <p>
	 * Whether to output detailed information about recognised classes.
	 * </p>
	 * @return bool
	 */
	public function segmentimage(int $COLORSPACE, float $cluster_threshold, float $smooth_threshold, bool $verbose = false): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Interpolates colors
	 * @link http://php.net/manual/en/imagick.sparsecolorimage.php
	 * @param int $SPARSE_METHOD <p>
	 * Refer to this list of sparse method constants
	 * </p>
	 * @param array $arguments <p>
	 * An array containing the coordinates.
	 * The array is in format array(1,1, 2,45)
	 * </p>
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sparsecolorimage(int $SPARSE_METHOD, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Remaps image colors
	 * @link http://php.net/manual/en/imagick.remapimage.php
	 * @param Imagick $replacement <p>
	 * An Imagick object containing the replacement colors
	 * </p>
	 * @param int $DITHER <p>
	 * Refer to this list of dither method constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function remapimage(Imagick $replacement, int $DITHER): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Exports raw image pixels
	 * @link http://php.net/manual/en/imagick.exportimagepixels.php
	 * @param int $x <p>
	 * X-coordinate of the exported area
	 * </p>
	 * @param int $y <p>
	 * Y-coordinate of the exported area
	 * </p>
	 * @param int $width <p>
	 * Width of the exported aread
	 * </p>
	 * @param int $height <p>
	 * Height of the exported area
	 * </p>
	 * @param string $map <p>
	 * Ordering of the exported pixels. For example "RGB".
	 * Valid characters for the map are R, G, B, A, O, C, Y, M, K, I and P.
	 * </p>
	 * @param int $STORAGE <p>
	 * Refer to this list of pixel type constants
	 * </p>
	 * @return array an array containing the pixels values.
	 */
	public function exportimagepixels(int $x, int $y, int $width, int $height, string $map, int $STORAGE): array {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * The getImageChannelKurtosis purpose
	 * @link http://php.net/manual/en/imagick.getimagechannelkurtosis.php
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return array an array with kurtosis and skewness
	 * members.
	 */
	public function getimagechannelkurtosis(int $channel = Imagick::CHANNEL_DEFAULT): array {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Applies a function on the image
	 * @link http://php.net/manual/en/imagick.functionimage.php
	 * @param int $function <p>
	 * Refer to this list of function constants
	 * </p>
	 * @param array $arguments <p>
	 * Array of arguments to pass to this function.
	 * </p>
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function functionimage(int $function, array $arguments, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Transforms an image to a new colorspace.
	 * @link http://php.net/manual/en/imagick.transformimagecolorspace.php
	 * @param int $colorspace <p>
	 * The colorspace the image should be transformed to, one of the COLORSPACE constants e.g. Imagick::COLORSPACE_CMYK.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function transformimagecolorspace(int $colorspace): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Replaces colors in the image
	 * @link http://php.net/manual/en/imagick.haldclutimage.php
	 * @param Imagick $clut <p>
	 * Imagick object containing the Hald lookup image.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function haldclutimage(Imagick $clut, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.autolevelimage.php
	 * @param string $CHANNEL [optional] <p>
	 * Which channel should the auto-levelling should be done on.
	 * </p>
	 * @return void
	 */
	public function autolevelimage(string $CHANNEL = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.blueshiftimage.php
	 * @param float $factor [optional] <p>
	 * </p>
	 * @return void
	 */
	public function blueshiftimage(float $factor = 1.5) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Get image artifact
	 * @link http://php.net/manual/en/imagick.getimageartifact.php
	 * @param string $artifact <p>
	 * The name of the artifact
	 * </p>
	 * @return string the artifact value on success.
	 */
	public function getimageartifact(string $artifact): string {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set image artifact
	 * @link http://php.net/manual/en/imagick.setimageartifact.php
	 * @param string $artifact <p>
	 * The name of the artifact
	 * </p>
	 * @param string $value <p>
	 * The value of the artifact
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageartifact(string $artifact, string $value): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Delete image artifact
	 * @link http://php.net/manual/en/imagick.deleteimageartifact.php
	 * @param string $artifact <p>
	 * The name of the artifact to delete
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function deleteimageartifact(string $artifact): bool {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * Gets the colorspace
	 * @link http://php.net/manual/en/imagick.getcolorspace.php
	 * @return int an integer which can be compared against COLORSPACE constants.
	 */
	public function getcolorspace(): int {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Set colorspace
	 * @link http://php.net/manual/en/imagick.setcolorspace.php
	 * @param int $COLORSPACE <p>
	 * One of the COLORSPACE constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setcolorspace(int $COLORSPACE): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.clampimage.php
	 * @param string $CHANNEL [optional] <p>
	 * </p>
	 * @return void
	 */
	public function clampimage(string $CHANNEL = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.smushimages.php
	 * @param string $stack <p>
	 * </p>
	 * @param string $offset <p>
	 * </p>
	 * @return Imagick The new smushed image.
	 */
	public function smushimages(string $stack, string $offset): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The Imagick constructor
	 * @link http://php.net/manual/en/imagick.construct.php
	 * @param mixed $files <p>
	 * The path to an image to load or an array of paths. Paths can include
	 * wildcards for file names, or can be URLs.
	 * </p>
	 */
	public function __construct($files) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Returns the image as a string.
	 * @link http://php.net/manual/en/imagick.tostring.php
	 * @return string the string content on success or an empty string on failure.
	 */
	public function __tostring(): string {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.count.php
	 * @param string $mode [optional] <p>
	 * An unused argument. Currently there is a non-particularly well defined feature in PHP where calling count() on a countable object might (or might not) require this method to accept a parameter. This parameter is here to be conformant with the interface of countable, even though the param is not used.
	 * </p>
	 * @return void
	 */
	public function count(string $mode = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a MagickPixelIterator
	 * @link http://php.net/manual/en/imagick.getpixeliterator.php
	 * @return ImagickPixelIterator an ImagickPixelIterator on success.
	 */
	public function getpixeliterator(): ImagickPixelIterator {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Get an ImagickPixelIterator for an image section
	 * @link http://php.net/manual/en/imagick.getpixelregioniterator.php
	 * @param int $x <p>
	 * The x-coordinate of the region.
	 * </p>
	 * @param int $y <p>
	 * The y-coordinate of the region.
	 * </p>
	 * @param int $columns <p>
	 * The width of the region.
	 * </p>
	 * @param int $rows <p>
	 * The height of the region.
	 * </p>
	 * @return ImagickPixelIterator an ImagickPixelIterator for an image section.
	 */
	public function getpixelregioniterator(int $x, int $y, int $columns, int $rows): ImagickPixelIterator {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * Reads image from filename
	 * @link http://php.net/manual/en/imagick.readimage.php
	 * @param string $filename
	 * @return bool <b>TRUE</b> on success.
	 */
	public function readimage(string $filename): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.readimages.php
	 * @param string $filenames <p>
	 * </p>
	 * @return Imagick The Imagick object that contains all the images.
	 */
	public function readimages(string $filenames): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reads image from a binary string
	 * @link http://php.net/manual/en/imagick.readimageblob.php
	 * @param string $image
	 * @param string $filename [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function readimageblob(string $image, string $filename = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the format of a particular image
	 * @link http://php.net/manual/en/imagick.setimageformat.php
	 * @param string $format <p>
	 * String presentation of the image format. Format support
	 * depends on the ImageMagick installation.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageformat(string $format): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales the size of an image
	 * @link http://php.net/manual/en/imagick.scaleimage.php
	 * @param int $cols
	 * @param int $rows
	 * @param bool $bestfit [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function scaleimage(int $cols, int $rows, bool $bestfit = false): bool {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * Writes an image to the specified filename
	 * @link http://php.net/manual/en/imagick.writeimage.php
	 * @param string $filename [optional] <p>
	 * Filename where to write the image. The extension of the filename
	 * defines the type of the file.
	 * Format can be forced regardless of file extension using format: prefix,
	 * for example "jpg:test.png".
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeimage(string $filename = NULL): bool {}

	/**
	 * (PECL imagick 0.9.0-0.9.9)<br/>
	 * Writes an image or image sequence
	 * @link http://php.net/manual/en/imagick.writeimages.php
	 * @param string $filename
	 * @param bool $adjoin
	 * @return bool <b>TRUE</b> on success.
	 */
	public function writeimages(string $filename, bool $adjoin): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds blur filter to image
	 * @link http://php.net/manual/en/imagick.blurimage.php
	 * @param float $radius <p>
	 * Blur radius
	 * </p>
	 * @param float $sigma <p>
	 * Standard deviation
	 * </p>
	 * @param int $channel [optional] <p>
	 * The Channeltype
	 * constant. When not supplied, all channels are blurred.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function blurimage(float $radius, float $sigma, int $channel = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the size of an image
	 * @link http://php.net/manual/en/imagick.thumbnailimage.php
	 * @param int $columns <p>
	 * Image width
	 * </p>
	 * @param int $rows <p>
	 * Image height
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * Whether to force maximum values
	 * </p>
	 * @param bool $fill [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function thumbnailimage(int $columns, int $rows, bool $bestfit = false, bool $fill = false): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a crop thumbnail
	 * @link http://php.net/manual/en/imagick.cropthumbnailimage.php
	 * @param int $width <p>
	 * The width of the thumbnail
	 * </p>
	 * @param int $height <p>
	 * The Height of the thumbnail
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function cropthumbnailimage(int $width, int $height): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the filename of a particular image in a sequence
	 * @link http://php.net/manual/en/imagick.getimagefilename.php
	 * @return string a string with the filename of the image.
	 */
	public function getimagefilename(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the filename of a particular image
	 * @link http://php.net/manual/en/imagick.setimagefilename.php
	 * @param string $filename
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagefilename(string $filename): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the format of a particular image in a sequence
	 * @link http://php.net/manual/en/imagick.getimageformat.php
	 * @return string a string containing the image format on success.
	 */
	public function getimageformat(): string {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.getimagemimetype.php
	 * @return string
	 */
	public function getimagemimetype(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes an image from the image list
	 * @link http://php.net/manual/en/imagick.removeimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function removeimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Destroys the Imagick object
	 * @link http://php.net/manual/en/imagick.destroy.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clears all resources associated to Imagick object
	 * @link http://php.net/manual/en/imagick.clear.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clear(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image length in bytes
	 * @link http://php.net/manual/en/imagick.getimagesize.php
	 * @return int an int containing the current image size.
	 */
	public function getimagesize(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image sequence as a blob
	 * @link http://php.net/manual/en/imagick.getimageblob.php
	 * @return string a string containing the image.
	 */
	public function getimageblob(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns all image sequences as a blob
	 * @link http://php.net/manual/en/imagick.getimagesblob.php
	 * @return string a string containing the images. On failure, throws
	 * ImagickException.
	 */
	public function getimagesblob(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the Imagick iterator to the first image
	 * @link http://php.net/manual/en/imagick.setfirstiterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setfirstiterator(): bool {}

	/**
	 * (PECL imagick 2.0.1)<br/>
	 * Sets the Imagick iterator to the last image
	 * @link http://php.net/manual/en/imagick.setlastiterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setlastiterator(): bool {}

	public function resetiterator() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Move to the previous image in the object
	 * @link http://php.net/manual/en/imagick.previousimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function previousimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Moves to the next image
	 * @link http://php.net/manual/en/imagick.nextimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function nextimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Checks if the object has a previous image
	 * @link http://php.net/manual/en/imagick.haspreviousimage.php
	 * @return bool <b>TRUE</b> if the object has more images when traversing the list in the
	 * reverse direction, returns <b>FALSE</b> if there are none.
	 */
	public function haspreviousimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Checks if the object has more images
	 * @link http://php.net/manual/en/imagick.hasnextimage.php
	 * @return bool <b>TRUE</b> if the object has more images when traversing the list in the
	 * forward direction, returns <b>FALSE</b> if there are none.
	 */
	public function hasnextimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the iterator position
	 * @link http://php.net/manual/en/imagick.setimageindex.php
	 * @param int $index <p>
	 * The position to set the iterator to
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageindex(int $index): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the index of the current active image
	 * @link http://php.net/manual/en/imagick.getimageindex.php
	 * @return int an integer containing the index of the image in the stack.
	 */
	public function getimageindex(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a comment to your image
	 * @link http://php.net/manual/en/imagick.commentimage.php
	 * @param string $comment <p>
	 * The comment to add
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function commentimage(string $comment): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Extracts a region of the image
	 * @link http://php.net/manual/en/imagick.cropimage.php
	 * @param int $width <p>
	 * The width of the crop
	 * </p>
	 * @param int $height <p>
	 * The height of the crop
	 * </p>
	 * @param int $x <p>
	 * The X coordinate of the cropped region's top left corner
	 * </p>
	 * @param int $y <p>
	 * The Y coordinate of the cropped region's top left corner
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function cropimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a label to an image
	 * @link http://php.net/manual/en/imagick.labelimage.php
	 * @param string $label <p>
	 * The label to add
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function labelimage(string $label): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the width and height as an associative array
	 * @link http://php.net/manual/en/imagick.getimagegeometry.php
	 * @return array an array with the width/height of the image.
	 */
	public function getimagegeometry(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Renders the ImagickDraw object on the current image
	 * @link http://php.net/manual/en/imagick.drawimage.php
	 * @param ImagickDraw $draw <p>
	 * The drawing operations to render on the image.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function drawimage(ImagickDraw $draw): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Sets the image compression quality
	 * @link http://php.net/manual/en/imagick.setimagecompressionquality.php
	 * @param int $quality <p>
	 * The image compression quality as an integer
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagecompressionquality(int $quality): bool {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * Gets the current image's compression quality
	 * @link http://php.net/manual/en/imagick.getimagecompressionquality.php
	 * @return int integer describing the images compression quality
	 */
	public function getimagecompressionquality(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image compression
	 * @link http://php.net/manual/en/imagick.setimagecompression.php
	 * @param int $compression <p>
	 * One of the <b>COMPRESSION</b> constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagecompression(int $compression): bool {}

	/**
	 * (PECL imagick 2.2.2)<br/>
	 * Gets the current image's compression type
	 * @link http://php.net/manual/en/imagick.getimagecompression.php
	 * @return int the compression constant
	 */
	public function getimagecompression(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Annotates an image with text
	 * @link http://php.net/manual/en/imagick.annotateimage.php
	 * @param ImagickDraw $draw_settings <p>
	 * The ImagickDraw object that contains settings for drawing the text
	 * </p>
	 * @param float $x <p>
	 * Horizontal offset in pixels to the left of text
	 * </p>
	 * @param float $y <p>
	 * Vertical offset in pixels to the baseline of text
	 * </p>
	 * @param float $angle <p>
	 * The angle at which to write the text
	 * </p>
	 * @param string $text <p>
	 * The string to draw
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function annotateimage(ImagickDraw $draw_settings, float $x, float $y, float $angle, string $text): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composite one image onto another
	 * @link http://php.net/manual/en/imagick.compositeimage.php
	 * @param Imagick $composite_object <p>
	 * Imagick object which holds the composite image
	 * </p>
	 * @param int $composite
	 * @param int $x <p>
	 * The column offset of the composited image
	 * </p>
	 * @param int $y <p>
	 * The row offset of the composited image
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function compositeimage(Imagick $composite_object, int $composite, int $x, int $y, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Control the brightness, saturation, and hue
	 * @link http://php.net/manual/en/imagick.modulateimage.php
	 * @param float $brightness
	 * @param float $saturation
	 * @param float $hue
	 * @return bool <b>TRUE</b> on success.
	 */
	public function modulateimage(float $brightness, float $saturation, float $hue): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the number of unique colors in the image
	 * @link http://php.net/manual/en/imagick.getimagecolors.php
	 * @return int <b>TRUE</b> on success.
	 */
	public function getimagecolors(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a composite image
	 * @link http://php.net/manual/en/imagick.montageimage.php
	 * @param ImagickDraw $draw <p>
	 * The font name, size, and color are obtained from this object.
	 * </p>
	 * @param string $tile_geometry <p>
	 * The number of tiles per row and page (e.g. 6x4+0+0).
	 * </p>
	 * @param string $thumbnail_geometry <p>
	 * Preferred image size and border size of each thumbnail
	 * (e.g. 120x120+4+3>).
	 * </p>
	 * @param int $mode <p>
	 * Thumbnail framing mode, see Montage Mode constants.
	 * </p>
	 * @param string $frame <p>
	 * Surround the image with an ornamental border (e.g. 15x15+3+3). The
	 * frame color is that of the thumbnail's matte color.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function montageimage(ImagickDraw $draw, string $tile_geometry, string $thumbnail_geometry, int $mode, string $frame): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Identifies an image and fetches attributes
	 * @link http://php.net/manual/en/imagick.identifyimage.php
	 * @param bool $appendRawOutput [optional]
	 * @return array Identifies an image and returns the attributes. Attributes include
	 * the image width, height, size, and others.
	 */
	public function identifyimage(bool $appendRawOutput = false): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the value of individual pixels based on a threshold
	 * @link http://php.net/manual/en/imagick.thresholdimage.php
	 * @param float $threshold
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function thresholdimage(float $threshold, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Selects a threshold for each pixel based on a range of intensity
	 * @link http://php.net/manual/en/imagick.adaptivethresholdimage.php
	 * @param int $width <p>
	 * Width of the local neighborhood.
	 * </p>
	 * @param int $height <p>
	 * Height of the local neighborhood.
	 * </p>
	 * @param int $offset <p>
	 * The mean offset
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function adaptivethresholdimage(int $width, int $height, int $offset): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Forces all pixels below the threshold into black
	 * @link http://php.net/manual/en/imagick.blackthresholdimage.php
	 * @param mixed $threshold <p>
	 * The threshold below which everything turns black
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function blackthresholdimage($threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Force all pixels above the threshold into white
	 * @link http://php.net/manual/en/imagick.whitethresholdimage.php
	 * @param mixed $threshold
	 * @return bool <b>TRUE</b> on success.
	 */
	public function whitethresholdimage($threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Append a set of images
	 * @link http://php.net/manual/en/imagick.appendimages.php
	 * @param bool $stack [optional] <p>
	 * Whether to stack the images vertically.
	 * By default (or if <b>FALSE</b> is specified) images are stacked left-to-right.
	 * If <i>stack</i> is <b>TRUE</b>, images are stacked top-to-bottom.
	 * </p>
	 * @return Imagick Imagick instance on success.
	 */
	public function appendimages(bool $stack = false): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates a charcoal drawing
	 * @link http://php.net/manual/en/imagick.charcoalimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function charcoalimage(float $radius, float $sigma): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Enhances the contrast of a color image
	 * @link http://php.net/manual/en/imagick.normalizeimage.php
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function normalizeimage(int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates an oil painting
	 * @link http://php.net/manual/en/imagick.oilpaintimage.php
	 * @param float $radius <p>
	 * The radius of the circular neighborhood.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function oilpaintimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reduces the image to a limited number of color level
	 * @link http://php.net/manual/en/imagick.posterizeimage.php
	 * @param int $levels
	 * @param bool $dither
	 * @return bool <b>TRUE</b> on success.
	 */
	public function posterizeimage(int $levels, bool $dither): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Radial blurs an image
	 * @link http://php.net/manual/en/imagick.radialblurimage.php
	 * @param float $angle
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function radialblurimage(float $angle, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a simulated 3d button-like effect
	 * @link http://php.net/manual/en/imagick.raiseimage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @param bool $raise
	 * @return bool <b>TRUE</b> on success.
	 */
	public function raiseimage(int $width, int $height, int $x, int $y, bool $raise): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Resample image to desired resolution
	 * @link http://php.net/manual/en/imagick.resampleimage.php
	 * @param float $x_resolution
	 * @param float $y_resolution
	 * @param int $filter
	 * @param float $blur
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resampleimage(float $x_resolution, float $y_resolution, int $filter, float $blur): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image
	 * @link http://php.net/manual/en/imagick.resizeimage.php
	 * @param int $columns <p>
	 * Width of the image
	 * </p>
	 * @param int $rows <p>
	 * Height of the image
	 * </p>
	 * @param int $filter <p>
	 * Refer to the list of filter constants.
	 * </p>
	 * @param float $blur <p>
	 * The blur factor where &gt; 1 is blurry, &lt; 1 is sharp.
	 * </p>
	 * @param bool $bestfit [optional] <p>
	 * Optional fit parameter.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resizeimage(int $columns, int $rows, int $filter, float $blur, bool $bestfit = false): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Offsets an image
	 * @link http://php.net/manual/en/imagick.rollimage.php
	 * @param int $x <p>
	 * The X offset.
	 * </p>
	 * @param int $y <p>
	 * The Y offset.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function rollimage(int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Rotates an image
	 * @link http://php.net/manual/en/imagick.rotateimage.php
	 * @param mixed $background <p>
	 * The background color
	 * </p>
	 * @param float $degrees <p>
	 * Rotation angle, in degrees. The rotation angle is interpreted as the
	 * number of degrees to rotate the image clockwise.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function rotateimage($background, float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image with pixel sampling
	 * @link http://php.net/manual/en/imagick.sampleimage.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sampleimage(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a solarizing effect to the image
	 * @link http://php.net/manual/en/imagick.solarizeimage.php
	 * @param int $threshold
	 * @return bool <b>TRUE</b> on success.
	 */
	public function solarizeimage(int $threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates an image shadow
	 * @link http://php.net/manual/en/imagick.shadowimage.php
	 * @param float $opacity
	 * @param float $sigma
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shadowimage(float $opacity, float $sigma, int $x, int $y): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.setimageattribute.php
	 * @param string $key <p>
	 * </p>
	 * @param string $value <p>
	 * </p>
	 * @return void
	 */
	public function setimageattribute(string $key, string $value) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image background color
	 * @link http://php.net/manual/en/imagick.setimagebackgroundcolor.php
	 * @param mixed $background
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagebackgroundcolor($background): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image composite operator
	 * @link http://php.net/manual/en/imagick.setimagecompose.php
	 * @param int $compose
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagecompose(int $compose): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image delay
	 * @link http://php.net/manual/en/imagick.setimagedelay.php
	 * @param int $delay <p>
	 * The amount of time expressed in 'ticks' that the image should be
	 * displayed for. For animated GIFs there are 100 ticks per second, so a
	 * value of 20 would be 20/100 of a second aka 1/5th of a second.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagedelay(int $delay): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image depth
	 * @link http://php.net/manual/en/imagick.setimagedepth.php
	 * @param int $depth
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagedepth(int $depth): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image gamma
	 * @link http://php.net/manual/en/imagick.setimagegamma.php
	 * @param float $gamma
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagegamma(float $gamma): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image iterations
	 * @link http://php.net/manual/en/imagick.setimageiterations.php
	 * @param int $iterations <p>
	 * The number of iterations the image should loop over. Set to '0' to loop
	 * continuously.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageiterations(int $iterations): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image matte color
	 * @link http://php.net/manual/en/imagick.setimagemattecolor.php
	 * @param mixed $matte
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagemattecolor($matte): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the page geometry of the image
	 * @link http://php.net/manual/en/imagick.setimagepage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagepage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * @param $filename
	 */
	public function setimageprogressmonitor($filename) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.setprogressmonitor.php
	 * @param callable $callback <p>
	 * The progress function to call. It should return true if image processing should continue, or false if it should be cancelled. The offset parameter indicates the progress and the span parameter indicates the total amount of work needed to be done.
	 * </p>
	 * bool
	 * <b>
	 * callback
	 * </b>
	 * <b>
	 * mixed<i>offset</i>
	 * </b>
	 * <b>
	 * mixed
	 * <i>span</i>
	 * </b>
	 * <p>
	 * The values passed to the callback function are not consistent. In particular the span parameter can increase during image processing. Because of this calculating the percentage complete of an image operation is not trivial.
	 * </p>
	 * @return void
	 */
	public function setprogressmonitor(callable $callback) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image resolution
	 * @link http://php.net/manual/en/imagick.setimageresolution.php
	 * @param float $x_resolution
	 * @param float $y_resolution
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageresolution(float $x_resolution, float $y_resolution): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image scene
	 * @link http://php.net/manual/en/imagick.setimagescene.php
	 * @param int $scene
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagescene(int $scene): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image ticks-per-second
	 * @link http://php.net/manual/en/imagick.setimagetickspersecond.php
	 * @param int $ticks_per_second <p>
	 * The duration for which an image should be displayed expressed in ticks
	 * per second.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagetickspersecond(int $ticks_per_second): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image type
	 * @link http://php.net/manual/en/imagick.setimagetype.php
	 * @param int $image_type
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagetype(int $image_type): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image units of resolution
	 * @link http://php.net/manual/en/imagick.setimageunits.php
	 * @param int $units
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageunits(int $units): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sharpens an image
	 * @link http://php.net/manual/en/imagick.sharpenimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sharpenimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Shaves pixels from the image edges
	 * @link http://php.net/manual/en/imagick.shaveimage.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shaveimage(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creating a parallelogram
	 * @link http://php.net/manual/en/imagick.shearimage.php
	 * @param mixed $background <p>
	 * The background color
	 * </p>
	 * @param float $x_shear <p>
	 * The number of degrees to shear on the x axis
	 * </p>
	 * @param float $y_shear <p>
	 * The number of degrees to shear on the y axis
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function shearimage($background, float $x_shear, float $y_shear): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Splices a solid color into the image
	 * @link http://php.net/manual/en/imagick.spliceimage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function spliceimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Fetch basic attributes about the image
	 * @link http://php.net/manual/en/imagick.pingimage.php
	 * @param string $filename <p>
	 * The filename to read the information from.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function pingimage(string $filename): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reads image from open filehandle
	 * @link http://php.net/manual/en/imagick.readimagefile.php
	 * @param resource $filehandle
	 * @param string $fileName [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function readimagefile($filehandle, string $fileName = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Displays an image
	 * @link http://php.net/manual/en/imagick.displayimage.php
	 * @param string $servername <p>
	 * The X server name
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function displayimage(string $servername): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Displays an image or image sequence
	 * @link http://php.net/manual/en/imagick.displayimages.php
	 * @param string $servername <p>
	 * The X server name
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function displayimages(string $servername): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Randomly displaces each pixel in a block
	 * @link http://php.net/manual/en/imagick.spreadimage.php
	 * @param float $radius
	 * @return bool <b>TRUE</b> on success.
	 */
	public function spreadimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Swirls the pixels about the center of the image
	 * @link http://php.net/manual/en/imagick.swirlimage.php
	 * @param float $degrees
	 * @return bool <b>TRUE</b> on success.
	 */
	public function swirlimage(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Strips an image of all profiles and comments
	 * @link http://php.net/manual/en/imagick.stripimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function stripimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns formats supported by Imagick
	 * @link http://php.net/manual/en/imagick.queryformats.php
	 * @param string $pattern [optional]
	 * @return array an array containing the formats supported by Imagick.
	 */
	public static function queryformats(string $pattern = "*"): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the configured fonts
	 * @link http://php.net/manual/en/imagick.queryfonts.php
	 * @param string $pattern [optional] <p>
	 * The query pattern
	 * </p>
	 * @return array an array containing the configured fonts.
	 */
	public static function queryfonts(string $pattern = "*"): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns an array representing the font metrics
	 * @link http://php.net/manual/en/imagick.queryfontmetrics.php
	 * @param ImagickDraw $properties <p>
	 * ImagickDraw object containing font properties
	 * </p>
	 * @param string $text <p>
	 * The text
	 * </p>
	 * @param bool $multiline [optional] <p>
	 * Multiline parameter. If left empty it is autodetected
	 * </p>
	 * @return array a multi-dimensional array representing the font metrics.
	 */
	public function queryfontmetrics(ImagickDraw $properties, string $text, bool $multiline = null): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Hides a digital watermark within the image
	 * @link http://php.net/manual/en/imagick.steganoimage.php
	 * @param Imagick $watermark_wand
	 * @param int $offset
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function steganoimage(Imagick $watermark_wand, int $offset): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds random noise to the image
	 * @link http://php.net/manual/en/imagick.addnoiseimage.php
	 * @param int $noise_type <p>
	 * The type of the noise. Refer to this list of
	 * noise constants.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function addnoiseimage(int $noise_type, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Simulates motion blur
	 * @link http://php.net/manual/en/imagick.motionblurimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param float $angle <p>
	 * Apply the effect along this angle.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * The channel argument affects only if Imagick is compiled against ImageMagick version
	 * 6.4.4 or greater.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function motionblurimage(float $radius, float $sigma, float $angle, int $channel = Imagick::CHANNEL_DEFAULT): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Forms a mosaic from images
	 * @link http://php.net/manual/en/imagick.mosaicimages.php
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function mosaicimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Method morphs a set of images
	 * @link http://php.net/manual/en/imagick.morphimages.php
	 * @param int $number_frames <p>
	 * The number of in-between images to generate.
	 * </p>
	 * @return Imagick This method returns a new Imagick object on success.
	 * Throw an
	 * <b>ImagickException</b> on error.
	 */
	public function morphimages(int $number_frames): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image proportionally to half its size
	 * @link http://php.net/manual/en/imagick.minifyimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function minifyimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Transforms an image
	 * @link http://php.net/manual/en/imagick.affinetransformimage.php
	 * @param ImagickDraw $matrix <p>
	 * The affine matrix
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function affinetransformimage(ImagickDraw $matrix): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Average a set of images
	 * @link http://php.net/manual/en/imagick.averageimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function averageimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Surrounds the image with a border
	 * @link http://php.net/manual/en/imagick.borderimage.php
	 * @param mixed $bordercolor <p>
	 * ImagickPixel object or a string containing the border color
	 * </p>
	 * @param int $width <p>
	 * Border width
	 * </p>
	 * @param int $height <p>
	 * Border height
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function borderimage($bordercolor, int $width, int $height): bool {}

	/**
	 * @param $orig_width
	 * @param $orig_height
	 * @param $desired_width
	 * @param $desired_height
	 * @param $legacy [optional]
	 */
	public static function calculatecrop($orig_width, $orig_height, $desired_width, $desired_height, $legacy) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes a region of an image and trims
	 * @link http://php.net/manual/en/imagick.chopimage.php
	 * @param int $width <p>
	 * Width of the chopped area
	 * </p>
	 * @param int $height <p>
	 * Height of the chopped area
	 * </p>
	 * @param int $x <p>
	 * X origo of the chopped area
	 * </p>
	 * @param int $y <p>
	 * Y origo of the chopped area
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function chopimage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clips along the first path from the 8BIM profile
	 * @link http://php.net/manual/en/imagick.clipimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clipimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clips along the named paths from the 8BIM profile
	 * @link http://php.net/manual/en/imagick.clippathimage.php
	 * @param string $pathname <p>
	 * The name of the path
	 * </p>
	 * @param bool $inside <p>
	 * If <b>TRUE</b> later operations take effect inside clipping path.
	 * Otherwise later operations take effect outside clipping path.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clippathimage(string $pathname, bool $inside): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.clipimagepath.php
	 * @param string $pathname <p>
	 * </p>
	 * @param string $inside <p>
	 * </p>
	 * @return void
	 */
	public function clipimagepath(string $pathname, string $inside) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composites a set of images
	 * @link http://php.net/manual/en/imagick.coalesceimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function coalesceimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the color value of any pixel that matches target
	 * @link http://php.net/manual/en/imagick.colorfloodfillimage.php
	 * @param mixed $fill <p>
	 * ImagickPixel object containing the fill color
	 * </p>
	 * @param float $fuzz <p>
	 * The amount of fuzz. For example, set fuzz to 10 and the color red at
	 * intensities of 100 and 102 respectively are now interpreted as the
	 * same color for the purposes of the floodfill.
	 * </p>
	 * @param mixed $bordercolor <p>
	 * ImagickPixel object containing the border color
	 * </p>
	 * @param int $x <p>
	 * X start position of the floodfill
	 * </p>
	 * @param int $y <p>
	 * Y start position of the floodfill
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function colorfloodfillimage($fill, float $fuzz, $bordercolor, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Blends the fill color with the image
	 * @link http://php.net/manual/en/imagick.colorizeimage.php
	 * @param mixed $colorize <p>
	 * ImagickPixel object or a string containing the colorize color
	 * </p>
	 * @param mixed $opacity <p>
	 * ImagickPixel object or an float containing the opacity value.
	 * 1.0 is fully opaque and 0.0 is fully transparent.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function colorizeimage($colorize, $opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the difference in one or more images
	 * @link http://php.net/manual/en/imagick.compareimagechannels.php
	 * @param Imagick $image <p>
	 * Imagick object containing the image to compare.
	 * </p>
	 * @param int $channelType <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @param int $metricType <p>
	 * One of the metric type constants.
	 * </p>
	 * @return array Array consisting of new_wand and
	 * distortion.
	 */
	public function compareimagechannels(Imagick $image, int $channelType, int $metricType): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Compares an image to a reconstructed image
	 * @link http://php.net/manual/en/imagick.compareimages.php
	 * @param Imagick $compare <p>
	 * An image to compare to.
	 * </p>
	 * @param int $metric <p>
	 * Provide a valid metric type constant. Refer to this
	 * list of metric constants.
	 * </p>
	 * @return array <b>TRUE</b> on success.
	 */
	public function compareimages(Imagick $compare, int $metric): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Change the contrast of the image
	 * @link http://php.net/manual/en/imagick.contrastimage.php
	 * @param bool $sharpen <p>
	 * The sharpen value
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function contrastimage(bool $sharpen): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Combines one or more images into a single image
	 * @link http://php.net/manual/en/imagick.combineimages.php
	 * @param int $channelType <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function combineimages(int $channelType): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a custom convolution kernel to the image
	 * @link http://php.net/manual/en/imagick.convolveimage.php
	 * @param array $kernel <p>
	 * The convolution kernel
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function convolveimage(array $kernel, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Displaces an image's colormap
	 * @link http://php.net/manual/en/imagick.cyclecolormapimage.php
	 * @param int $displace <p>
	 * The amount to displace the colormap.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function cyclecolormapimage(int $displace): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns certain pixel differences between images
	 * @link http://php.net/manual/en/imagick.deconstructimages.php
	 * @return Imagick a new Imagick object on success.
	 */
	public function deconstructimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Reduces the speckle noise in an image
	 * @link http://php.net/manual/en/imagick.despeckleimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function despeckleimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Enhance edges within the image
	 * @link http://php.net/manual/en/imagick.edgeimage.php
	 * @param float $radius <p>
	 * The radius of the operation.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function edgeimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a grayscale image with a three-dimensional effect
	 * @link http://php.net/manual/en/imagick.embossimage.php
	 * @param float $radius <p>
	 * The radius of the effect
	 * </p>
	 * @param float $sigma <p>
	 * The sigma of the effect
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function embossimage(float $radius, float $sigma): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Improves the quality of a noisy image
	 * @link http://php.net/manual/en/imagick.enhanceimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function enhanceimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Equalizes the image histogram
	 * @link http://php.net/manual/en/imagick.equalizeimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function equalizeimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies an expression to an image
	 * @link http://php.net/manual/en/imagick.evaluateimage.php
	 * @param int $op <p>
	 * The evaluation operator
	 * </p>
	 * @param float $constant <p>
	 * The value of the operator
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function evaluateimage(int $op, float $constant, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * @param $EVALUATE
	 */
	public function evaluateimages($EVALUATE) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Merges a sequence of images
	 * @link http://php.net/manual/en/imagick.flattenimages.php
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function flattenimages(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a vertical mirror image
	 * @link http://php.net/manual/en/imagick.flipimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function flipimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a horizontal mirror image
	 * @link http://php.net/manual/en/imagick.flopimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function flopimage(): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.forwardfouriertransformimage.php
	 * @param bool $magnitude <p>
	 * If true, return as magnitude / phase pair otherwise a real / imaginary image pair.
	 * </p>
	 * @return void
	 */
	public function forwardfouriertransformimage(bool $magnitude) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a simulated three-dimensional border
	 * @link http://php.net/manual/en/imagick.frameimage.php
	 * @param mixed $matte_color <p>
	 * ImagickPixel object or a string representing the matte color
	 * </p>
	 * @param int $width <p>
	 * The width of the border
	 * </p>
	 * @param int $height <p>
	 * The height of the border
	 * </p>
	 * @param int $inner_bevel <p>
	 * The inner bevel width
	 * </p>
	 * @param int $outer_bevel <p>
	 * The outer bevel width
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function frameimage($matte_color, int $width, int $height, int $inner_bevel, int $outer_bevel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Evaluate expression for each pixel in the image
	 * @link http://php.net/manual/en/imagick.fximage.php
	 * @param string $expression <p>
	 * The expression.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return Imagick <b>TRUE</b> on success.
	 */
	public function fximage(string $expression, int $channel = Imagick::CHANNEL_ALL): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gamma-corrects an image
	 * @link http://php.net/manual/en/imagick.gammaimage.php
	 * @param float $gamma <p>
	 * The amount of gamma-correction.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function gammaimage(float $gamma, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Blurs an image
	 * @link http://php.net/manual/en/imagick.gaussianblurimage.php
	 * @param float $radius <p>
	 * The radius of the Gaussian, in pixels, not counting the center pixel.
	 * </p>
	 * @param float $sigma <p>
	 * The standard deviation of the Gaussian, in pixels.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function gaussianblurimage(float $radius, float $sigma, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.getimageattribute.php
	 * @param string $key <p>
	 * The key of the attribute to get.
	 * </p>
	 * @return string
	 */
	public function getimageattribute(string $key): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image background color
	 * @link http://php.net/manual/en/imagick.getimagebackgroundcolor.php
	 * @return ImagickPixel an ImagickPixel set to the background color of the image.
	 */
	public function getimagebackgroundcolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticy blue primary point
	 * @link http://php.net/manual/en/imagick.getimageblueprimary.php
	 * @return array Array consisting of "x" and "y" coordinates of point.
	 */
	public function getimageblueprimary(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image border color
	 * @link http://php.net/manual/en/imagick.getimagebordercolor.php
	 * @return ImagickPixel <b>TRUE</b> on success.
	 */
	public function getimagebordercolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the depth for a particular image channel
	 * @link http://php.net/manual/en/imagick.getimagechanneldepth.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return int <b>TRUE</b> on success.
	 */
	public function getimagechanneldepth(int $channel): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Compares image channels of an image to a reconstructed image
	 * @link http://php.net/manual/en/imagick.getimagechanneldistortion.php
	 * @param Imagick $reference <p>
	 * Imagick object to compare to.
	 * </p>
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @param int $metric <p>
	 * One of the metric type constants.
	 * </p>
	 * @return float <b>TRUE</b> on success.
	 */
	public function getimagechanneldistortion(Imagick $reference, int $channel, int $metric): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the extrema for one or more image channels
	 * @link http://php.net/manual/en/imagick.getimagechannelextrema.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return array <b>TRUE</b> on success.
	 */
	public function getimagechannelextrema(int $channel): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the mean and standard deviation
	 * @link http://php.net/manual/en/imagick.getimagechannelmean.php
	 * @param int $channel <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return array <b>TRUE</b> on success.
	 */
	public function getimagechannelmean(int $channel): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns statistics for each channel in the image
	 * @link http://php.net/manual/en/imagick.getimagechannelstatistics.php
	 * @return array <b>TRUE</b> on success.
	 */
	public function getimagechannelstatistics(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color of the specified colormap index
	 * @link http://php.net/manual/en/imagick.getimagecolormapcolor.php
	 * @param int $index <p>
	 * The offset into the image colormap.
	 * </p>
	 * @return ImagickPixel <b>TRUE</b> on success.
	 */
	public function getimagecolormapcolor(int $index): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image colorspace
	 * @link http://php.net/manual/en/imagick.getimagecolorspace.php
	 * @return int <b>TRUE</b> on success.
	 */
	public function getimagecolorspace(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the composite operator associated with the image
	 * @link http://php.net/manual/en/imagick.getimagecompose.php
	 * @return int <b>TRUE</b> on success.
	 */
	public function getimagecompose(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image delay
	 * @link http://php.net/manual/en/imagick.getimagedelay.php
	 * @return int the image delay.
	 */
	public function getimagedelay(): int {}

	/**
	 * (PECL imagick 0.9.1-0.9.9)<br/>
	 * Gets the image depth
	 * @link http://php.net/manual/en/imagick.getimagedepth.php
	 * @return int The image depth.
	 */
	public function getimagedepth(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Compares an image to a reconstructed image
	 * @link http://php.net/manual/en/imagick.getimagedistortion.php
	 * @param MagickWand $reference <p>
	 * Imagick object to compare to.
	 * </p>
	 * @param int $metric <p>
	 * One of the metric type constants.
	 * </p>
	 * @return float the distortion metric used on the image (or the best guess
	 * thereof).
	 */
	public function getimagedistortion(MagickWand $reference, int $metric): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the extrema for the image
	 * @link http://php.net/manual/en/imagick.getimageextrema.php
	 * @return array an associative array with the keys "min" and "max".
	 */
	public function getimageextrema(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image disposal method
	 * @link http://php.net/manual/en/imagick.getimagedispose.php
	 * @return int the dispose method on success.
	 */
	public function getimagedispose(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image gamma
	 * @link http://php.net/manual/en/imagick.getimagegamma.php
	 * @return float the image gamma on success.
	 */
	public function getimagegamma(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticy green primary point
	 * @link http://php.net/manual/en/imagick.getimagegreenprimary.php
	 * @return array an array with the keys "x" and "y" on success, throws an
	 * ImagickException on failure.
	 */
	public function getimagegreenprimary(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image height
	 * @link http://php.net/manual/en/imagick.getimageheight.php
	 * @return int the image height in pixels.
	 */
	public function getimageheight(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image histogram
	 * @link http://php.net/manual/en/imagick.getimagehistogram.php
	 * @return array the image histogram as an array of ImagickPixel objects.
	 */
	public function getimagehistogram(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image interlace scheme
	 * @link http://php.net/manual/en/imagick.getimageinterlacescheme.php
	 * @return int the interlace scheme as an integer on success.
	 * Throw an
	 * <b>ImagickException</b> on error.
	 */
	public function getimageinterlacescheme(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image iterations
	 * @link http://php.net/manual/en/imagick.getimageiterations.php
	 * @return int the image iterations as an integer.
	 */
	public function getimageiterations(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image matte color
	 * @link http://php.net/manual/en/imagick.getimagemattecolor.php
	 * @return ImagickPixel ImagickPixel object on success.
	 */
	public function getimagemattecolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the page geometry
	 * @link http://php.net/manual/en/imagick.getimagepage.php
	 * @return array the page geometry associated with the image in an array with the
	 * keys "width", "height", "x", and "y".
	 */
	public function getimagepage(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color of the specified pixel
	 * @link http://php.net/manual/en/imagick.getimagepixelcolor.php
	 * @param int $x <p>
	 * The x-coordinate of the pixel
	 * </p>
	 * @param int $y <p>
	 * The y-coordinate of the pixel
	 * </p>
	 * @return ImagickPixel an ImagickPixel instance for the color at the coordinates given.
	 */
	public function getimagepixelcolor(int $x, int $y): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the named image profile
	 * @link http://php.net/manual/en/imagick.getimageprofile.php
	 * @param string $name <p>
	 * The name of the profile to return.
	 * </p>
	 * @return string a string containing the image profile.
	 */
	public function getimageprofile(string $name): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticity red primary point
	 * @link http://php.net/manual/en/imagick.getimageredprimary.php
	 * @return array the chromaticity red primary point as an array with the keys "x"
	 * and "y".
	 * Throw an
	 * <b>ImagickException</b> on error.
	 */
	public function getimageredprimary(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image rendering intent
	 * @link http://php.net/manual/en/imagick.getimagerenderingintent.php
	 * @return int the image rendering intent.
	 */
	public function getimagerenderingintent(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image X and Y resolution
	 * @link http://php.net/manual/en/imagick.getimageresolution.php
	 * @return array the resolution as an array.
	 */
	public function getimageresolution(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image scene
	 * @link http://php.net/manual/en/imagick.getimagescene.php
	 * @return int the image scene.
	 */
	public function getimagescene(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Generates an SHA-256 message digest
	 * @link http://php.net/manual/en/imagick.getimagesignature.php
	 * @return string a string containing the SHA-256 hash of the file.
	 */
	public function getimagesignature(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image ticks-per-second
	 * @link http://php.net/manual/en/imagick.getimagetickspersecond.php
	 * @return int the image ticks-per-second.
	 */
	public function getimagetickspersecond(): int {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * Gets the potential image type
	 * @link http://php.net/manual/en/imagick.getimagetype.php
	 * @return int the potential image type.
	 * <b>imagick::IMGTYPE_UNDEFINED</b>
	 * <b>imagick::IMGTYPE_BILEVEL</b>
	 * <b>imagick::IMGTYPE_GRAYSCALE</b>
	 * <b>imagick::IMGTYPE_GRAYSCALEMATTE</b>
	 * <b>imagick::IMGTYPE_PALETTE</b>
	 * <b>imagick::IMGTYPE_PALETTEMATTE</b>
	 * <b>imagick::IMGTYPE_TRUECOLOR</b>
	 * <b>imagick::IMGTYPE_TRUECOLORMATTE</b>
	 * <b>imagick::IMGTYPE_COLORSEPARATION</b>
	 * <b>imagick::IMGTYPE_COLORSEPARATIONMATTE</b>
	 * <b>imagick::IMGTYPE_OPTIMIZE</b>
	 */
	public function getimagetype(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image units of resolution
	 * @link http://php.net/manual/en/imagick.getimageunits.php
	 * @return int the image units of resolution.
	 */
	public function getimageunits(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the virtual pixel method
	 * @link http://php.net/manual/en/imagick.getimagevirtualpixelmethod.php
	 * @return int the virtual pixel method on success.
	 */
	public function getimagevirtualpixelmethod(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the chromaticity white point
	 * @link http://php.net/manual/en/imagick.getimagewhitepoint.php
	 * @return array the chromaticity white point as an associative array with the keys
	 * "x" and "y".
	 */
	public function getimagewhitepoint(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the image width
	 * @link http://php.net/manual/en/imagick.getimagewidth.php
	 * @return int the image width.
	 */
	public function getimagewidth(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the number of images in the object
	 * @link http://php.net/manual/en/imagick.getnumberimages.php
	 * @return int the number of images associated with Imagick object.
	 */
	public function getnumberimages(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the image total ink density
	 * @link http://php.net/manual/en/imagick.getimagetotalinkdensity.php
	 * @return float the image total ink density of the image.
	 * Throw an
	 * <b>ImagickException</b> on error.
	 */
	public function getimagetotalinkdensity(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Extracts a region of the image
	 * @link http://php.net/manual/en/imagick.getimageregion.php
	 * @param int $width <p>
	 * The width of the extracted region.
	 * </p>
	 * @param int $height <p>
	 * The height of the extracted region.
	 * </p>
	 * @param int $x <p>
	 * X-coordinate of the top-left corner of the extracted region.
	 * </p>
	 * @param int $y <p>
	 * Y-coordinate of the top-left corner of the extracted region.
	 * </p>
	 * @return Imagick Extracts a region of the image and returns it as a new wand.
	 */
	public function getimageregion(int $width, int $height, int $x, int $y): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a new image as a copy
	 * @link http://php.net/manual/en/imagick.implodeimage.php
	 * @param float $radius <p>
	 * The radius of the implode
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function implodeimage(float $radius): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.inversefouriertransformimage.php
	 * @param string $complement <p>
	 * The second image to combine with this one to form either the magnitude / phase or real / imaginary image pair.
	 * </p>
	 * @param string $magnitude <p>
	 * If true, combine as magnitude / phase pair otherwise a real / imaginary image pair.
	 * </p>
	 * @return void
	 */
	public function inversefouriertransformimage(string $complement, string $magnitude) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the levels of an image
	 * @link http://php.net/manual/en/imagick.levelimage.php
	 * @param float $blackPoint <p>
	 * The image black point
	 * </p>
	 * @param float $gamma <p>
	 * The gamma value
	 * </p>
	 * @param float $whitePoint <p>
	 * The image white point
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function levelimage(float $blackPoint, float $gamma, float $whitePoint, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Scales an image proportionally 2x
	 * @link http://php.net/manual/en/imagick.magnifyimage.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function magnifyimage(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Replaces the colors of an image with the closest color from a reference image.
	 * @link http://php.net/manual/en/imagick.mapimage.php
	 * @param Imagick $map
	 * @param bool $dither
	 * @return bool <b>TRUE</b> on success.
	 */
	public function mapimage(Imagick $map, bool $dither): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes the transparency value of a color
	 * @link http://php.net/manual/en/imagick.mattefloodfillimage.php
	 * @param float $alpha <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @param float $fuzz <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @param mixed $bordercolor <p>
	 * An <b>ImagickPixel</b> object or string representing the border color.
	 * </p>
	 * @param int $x <p>
	 * The starting x coordinate of the operation.
	 * </p>
	 * @param int $y <p>
	 * The starting y coordinate of the operation.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function mattefloodfillimage(float $alpha, float $fuzz, $bordercolor, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a digital filter
	 * @link http://php.net/manual/en/imagick.medianfilterimage.php
	 * @param float $radius <p>
	 * The radius of the pixel neighborhood.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function medianfilterimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Negates the colors in the reference image
	 * @link http://php.net/manual/en/imagick.negateimage.php
	 * @param bool $gray <p>
	 * Whether to only negate grayscale pixels within the image.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function negateimage(bool $gray, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Change any pixel that matches color
	 * @link http://php.net/manual/en/imagick.paintopaqueimage.php
	 * @param mixed $target <p>
	 * Change this target color to the fill color within the image. An
	 * ImagickPixel object or a string representing the target color.
	 * </p>
	 * @param mixed $fill <p>
	 * An ImagickPixel object or a string representing the fill color.
	 * </p>
	 * @param float $fuzz <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To
	 * apply to more than one channel, combine channeltype constants using
	 * bitwise operators. Refer to this
	 * list of channel constants.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function paintopaqueimage($target, $fill, float $fuzz, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Changes any pixel that matches color with the color defined by fill
	 * @link http://php.net/manual/en/imagick.painttransparentimage.php
	 * @param mixed $target <p>
	 * Change this target color to specified opacity value within the image.
	 * </p>
	 * @param float $alpha <p>
	 * The level of transparency: 1.0 is fully opaque and 0.0 is fully
	 * transparent.
	 * </p>
	 * @param float $fuzz <p>
	 * The fuzz member of image defines how much tolerance is acceptable to
	 * consider two colors as the same.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function painttransparentimage($target, float $alpha, float $fuzz): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Quickly pin-point appropriate parameters for image processing
	 * @link http://php.net/manual/en/imagick.previewimages.php
	 * @param int $preview <p>
	 * Preview type. See Preview type constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function previewimages(int $preview): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds or removes a profile from an image
	 * @link http://php.net/manual/en/imagick.profileimage.php
	 * @param string $name
	 * @param string $profile
	 * @return bool <b>TRUE</b> on success.
	 */
	public function profileimage(string $name, string $profile): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Analyzes the colors within a reference image
	 * @link http://php.net/manual/en/imagick.quantizeimage.php
	 * @param int $numberColors
	 * @param int $colorspace
	 * @param int $treedepth
	 * @param bool $dither
	 * @param bool $measureError
	 * @return bool <b>TRUE</b> on success.
	 */
	public function quantizeimage(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Analyzes the colors within a sequence of images
	 * @link http://php.net/manual/en/imagick.quantizeimages.php
	 * @param int $numberColors
	 * @param int $colorspace
	 * @param int $treedepth
	 * @param bool $dither
	 * @param bool $measureError
	 * @return bool <b>TRUE</b> on success.
	 */
	public function quantizeimages(int $numberColors, int $colorspace, int $treedepth, bool $dither, bool $measureError): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Smooths the contours of an image
	 * @link http://php.net/manual/en/imagick.reducenoiseimage.php
	 * @param float $radius
	 * @return bool <b>TRUE</b> on success.
	 */
	public function reducenoiseimage(float $radius): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Removes the named image profile and returns it
	 * @link http://php.net/manual/en/imagick.removeimageprofile.php
	 * @param string $name
	 * @return string a string containing the profile of the image.
	 */
	public function removeimageprofile(string $name): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Separates a channel from the image
	 * @link http://php.net/manual/en/imagick.separateimagechannel.php
	 * @param int $channel <p>
	 * Which 'channel' to return. For colorspaces other than RGB, you can still use the CHANNEL_RED, CHANNEL_GREEN, CHANNEL_BLUE constants to indicate the 1st, 2nd and 3rd channels.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function separateimagechannel(int $channel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sepia tones an image
	 * @link http://php.net/manual/en/imagick.sepiatoneimage.php
	 * @param float $threshold
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sepiatoneimage(float $threshold): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image bias for any method that convolves an image
	 * @link http://php.net/manual/en/imagick.setimagebias.php
	 * @param float $bias
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagebias(float $bias): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.setimagebiasquantum.php
	 * @param string $bias <p>
	 * </p>
	 * @return void
	 */
	public function setimagebiasquantum(string $bias) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity blue primary point
	 * @link http://php.net/manual/en/imagick.setimageblueprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageblueprimary(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image border color
	 * @link http://php.net/manual/en/imagick.setimagebordercolor.php
	 * @param mixed $border <p>
	 * The border color
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagebordercolor($border): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the depth of a particular image channel
	 * @link http://php.net/manual/en/imagick.setimagechanneldepth.php
	 * @param int $channel
	 * @param int $depth
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagechanneldepth(int $channel, int $depth): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the color of the specified colormap index
	 * @link http://php.net/manual/en/imagick.setimagecolormapcolor.php
	 * @param int $index
	 * @param ImagickPixel $color
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagecolormapcolor(int $index, ImagickPixel $color): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image colorspace
	 * @link http://php.net/manual/en/imagick.setimagecolorspace.php
	 * @param int $colorspace <p>
	 * One of the COLORSPACE constants
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagecolorspace(int $colorspace): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image disposal method
	 * @link http://php.net/manual/en/imagick.setimagedispose.php
	 * @param int $dispose
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagedispose(int $dispose): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image size
	 * @link http://php.net/manual/en/imagick.setimageextent.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageextent(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity green primary point
	 * @link http://php.net/manual/en/imagick.setimagegreenprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagegreenprimary(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image compression
	 * @link http://php.net/manual/en/imagick.setimageinterlacescheme.php
	 * @param int $interlace_scheme
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageinterlacescheme(int $interlace_scheme): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a named profile to the Imagick object
	 * @link http://php.net/manual/en/imagick.setimageprofile.php
	 * @param string $name
	 * @param string $profile
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageprofile(string $name, string $profile): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity red primary point
	 * @link http://php.net/manual/en/imagick.setimageredprimary.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimageredprimary(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image rendering intent
	 * @link http://php.net/manual/en/imagick.setimagerenderingintent.php
	 * @param int $rendering_intent
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagerenderingintent(int $rendering_intent): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image virtual pixel method
	 * @link http://php.net/manual/en/imagick.setimagevirtualpixelmethod.php
	 * @param int $method
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagevirtualpixelmethod(int $method): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image chromaticity white point
	 * @link http://php.net/manual/en/imagick.setimagewhitepoint.php
	 * @param float $x
	 * @param float $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimagewhitepoint(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the contrast of an image
	 * @link http://php.net/manual/en/imagick.sigmoidalcontrastimage.php
	 * @param bool $sharpen <p>
	 * If true increase the contrast, if false decrease the contrast.
	 * </p>
	 * @param float $alpha <p>
	 * The amount of contrast to apply. 1 is very little, 5 is a significant amount, 20 is extreme.
	 * </p>
	 * @param float $beta <p>
	 * Where the midpoint of the gradient will be. This value should be in the range 0 to 1 - mutliplied by the quantum value for ImageMagick.
	 * </p>
	 * @param int $channel [optional] <p>
	 * Which color channels the contrast will be applied to.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sigmoidalcontrastimage(bool $sharpen, float $alpha, float $beta, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composites two images
	 * @link http://php.net/manual/en/imagick.stereoimage.php
	 * @param Imagick $offset_wand
	 * @return bool <b>TRUE</b> on success.
	 */
	public function stereoimage(Imagick $offset_wand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Repeatedly tiles the texture image
	 * @link http://php.net/manual/en/imagick.textureimage.php
	 * @param Imagick $texture_wand
	 * @return bool <b>TRUE</b> on success.
	 */
	public function textureimage(Imagick $texture_wand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a color vector to each pixel in the image
	 * @link http://php.net/manual/en/imagick.tintimage.php
	 * @param mixed $tint
	 * @param mixed $opacity
	 * @return bool <b>TRUE</b> on success.
	 */
	public function tintimage($tint, $opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sharpens an image
	 * @link http://php.net/manual/en/imagick.unsharpmaskimage.php
	 * @param float $radius
	 * @param float $sigma
	 * @param float $amount
	 * @param float $threshold
	 * @param int $channel [optional]
	 * @return bool <b>TRUE</b> on success.
	 */
	public function unsharpmaskimage(float $radius, float $sigma, float $amount, float $threshold, int $channel = Imagick::CHANNEL_ALL): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a new Imagick object
	 * @link http://php.net/manual/en/imagick.getimage.php
	 * @return Imagick a new Imagick object with the current image sequence.
	 */
	public function getimage(): Imagick {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds new image to Imagick object image list
	 * @link http://php.net/manual/en/imagick.addimage.php
	 * @param Imagick $source <p>
	 * The source Imagick object
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function addimage(Imagick $source): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Replaces image in the object
	 * @link http://php.net/manual/en/imagick.setimage.php
	 * @param Imagick $replace <p>
	 * The replace Imagick object
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setimage(Imagick $replace): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a new image
	 * @link http://php.net/manual/en/imagick.newimage.php
	 * @param int $cols <p>
	 * Columns in the new image
	 * </p>
	 * @param int $rows <p>
	 * Rows in the new image
	 * </p>
	 * @param mixed $background <p>
	 * The background color used for this image
	 * </p>
	 * @param string $format [optional] <p>
	 * Image format. This parameter was added in Imagick version 2.0.1.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function newimage(int $cols, int $rows, $background, string $format = null): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Creates a new image
	 * @link http://php.net/manual/en/imagick.newpseudoimage.php
	 * @param int $columns <p>
	 * columns in the new image
	 * </p>
	 * @param int $rows <p>
	 * rows in the new image
	 * </p>
	 * @param string $pseudoString <p>
	 * string containing pseudo image definition.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function newpseudoimage(int $columns, int $rows, string $pseudoString): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the object compression type
	 * @link http://php.net/manual/en/imagick.getcompression.php
	 * @return int the compression constant
	 */
	public function getcompression(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the object compression quality
	 * @link http://php.net/manual/en/imagick.getcompressionquality.php
	 * @return int integer describing the compression quality
	 */
	public function getcompressionquality(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick API copyright as a string
	 * @link http://php.net/manual/en/imagick.getcopyright.php
	 * @return string a string containing the copyright notice of Imagemagick and
	 * Magickwand C API.
	 */
	public static function getcopyright(): string {}

	/**
	 * @param $pattern [optional]
	 */
	public static function getconfigureoptions($pattern) {}

	public static function getfeatures() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The filename associated with an image sequence
	 * @link http://php.net/manual/en/imagick.getfilename.php
	 * @return string a string on success.
	 */
	public function getfilename(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the format of the Imagick object
	 * @link http://php.net/manual/en/imagick.getformat.php
	 * @return string the format of the image.
	 */
	public function getformat(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick home URL
	 * @link http://php.net/manual/en/imagick.gethomeurl.php
	 * @return string a link to the imagemagick homepage.
	 */
	public static function gethomeurl(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the object interlace scheme
	 * @link http://php.net/manual/en/imagick.getinterlacescheme.php
	 * @return int Gets the wand interlace
	 * scheme.
	 */
	public function getinterlacescheme(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a value associated with the specified key
	 * @link http://php.net/manual/en/imagick.getoption.php
	 * @param string $key <p>
	 * The name of the option
	 * </p>
	 * @return string a value associated with a wand and the specified key.
	 */
	public function getoption(string $key): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick package name
	 * @link http://php.net/manual/en/imagick.getpackagename.php
	 * @return string the ImageMagick package name as a string.
	 */
	public static function getpackagename(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the page geometry
	 * @link http://php.net/manual/en/imagick.getpage.php
	 * @return array the page geometry associated with the Imagick object in
	 * an associative array with the keys "width", "height", "x", and "y",
	 * throwing ImagickException on error.
	 */
	public function getpage(): array {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.getquantum.php
	 * @return int
	 */
	public static function getquantum(): int {}

	public static function gethdrienabled() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the quantum depth
	 * @link http://php.net/manual/en/imagick.getquantumdepth.php
	 * @return array the Imagick quantum depth as a string.
	 */
	public static function getquantumdepth(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the Imagick quantum range
	 * @link http://php.net/manual/en/imagick.getquantumrange.php
	 * @return array an associative array containing the quantum range as an
	 * integer ("quantumRangeLong") and as a
	 * string ("quantumRangeString").
	 */
	public static function getquantumrange(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick release date
	 * @link http://php.net/manual/en/imagick.getreleasedate.php
	 * @return string the ImageMagick release date as a string.
	 */
	public static function getreleasedate(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the specified resource's memory usage
	 * @link http://php.net/manual/en/imagick.getresource.php
	 * @param int $type <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @return int the specified resource's memory usage in megabytes.
	 */
	public static function getresource(int $type): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the specified resource limit
	 * @link http://php.net/manual/en/imagick.getresourcelimit.php
	 * @param int $type <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @return int the specified resource limit in megabytes.
	 */
	public static function getresourcelimit(int $type): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the horizontal and vertical sampling factor
	 * @link http://php.net/manual/en/imagick.getsamplingfactors.php
	 * @return array an associative array with the horizontal and vertical sampling
	 * factors of the image.
	 */
	public function getsamplingfactors(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the size associated with the Imagick object
	 * @link http://php.net/manual/en/imagick.getsize.php
	 * @return array the size associated with the Imagick object as an array with the
	 * keys "columns" and "rows".
	 */
	public function getsize(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the ImageMagick API version
	 * @link http://php.net/manual/en/imagick.getversion.php
	 * @return array the ImageMagick API version as a string and as a number.
	 */
	public static function getversion(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the object's default background color
	 * @link http://php.net/manual/en/imagick.setbackgroundcolor.php
	 * @param mixed $background
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setbackgroundcolor($background): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the object's default compression type
	 * @link http://php.net/manual/en/imagick.setcompression.php
	 * @param int $compression
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setcompression(int $compression): bool {}

	/**
	 * (PECL imagick 0.9.10-0.9.9)<br/>
	 * Sets the object's default compression quality
	 * @link http://php.net/manual/en/imagick.setcompressionquality.php
	 * @param int $quality
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setcompressionquality(int $quality): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the filename before you read or write the image
	 * @link http://php.net/manual/en/imagick.setfilename.php
	 * @param string $filename
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setfilename(string $filename): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the format of the Imagick object
	 * @link http://php.net/manual/en/imagick.setformat.php
	 * @param string $format
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setformat(string $format): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image compression
	 * @link http://php.net/manual/en/imagick.setinterlacescheme.php
	 * @param int $interlace_scheme
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setinterlacescheme(int $interlace_scheme): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set an option
	 * @link http://php.net/manual/en/imagick.setoption.php
	 * @param string $key
	 * @param string $value
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setoption(string $key, string $value): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the page geometry of the Imagick object
	 * @link http://php.net/manual/en/imagick.setpage.php
	 * @param int $width
	 * @param int $height
	 * @param int $x
	 * @param int $y
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setpage(int $width, int $height, int $x, int $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the limit for a particular resource in megabytes
	 * @link http://php.net/manual/en/imagick.setresourcelimit.php
	 * @param int $type <p>
	 * Refer to the list of resourcetype constants.
	 * </p>
	 * @param int $limit <p>
	 * The resource limit. The unit depends on the type of the resource being limited.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public static function setresourcelimit(int $type, int $limit): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image resolution
	 * @link http://php.net/manual/en/imagick.setresolution.php
	 * @param float $x_resolution <p>
	 * The horizontal resolution.
	 * </p>
	 * @param float $y_resolution <p>
	 * The vertical resolution.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setresolution(float $x_resolution, float $y_resolution): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image sampling factors
	 * @link http://php.net/manual/en/imagick.setsamplingfactors.php
	 * @param array $factors
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setsamplingfactors(array $factors): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the size of the Imagick object
	 * @link http://php.net/manual/en/imagick.setsize.php
	 * @param int $columns
	 * @param int $rows
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setsize(int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the image type attribute
	 * @link http://php.net/manual/en/imagick.settype.php
	 * @param int $image_type
	 * @return bool <b>TRUE</b> on success.
	 */
	public function settype(int $image_type): bool {}

	public function key() {}

	public function next() {}

	public function rewind() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Checks if the current item is valid
	 * @link http://php.net/manual/en/imagick.valid.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function valid(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a reference to the current Imagick object
	 * @link http://php.net/manual/en/imagick.current.php
	 * @return Imagick self on success.
	 */
	public function current(): Imagick {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.brightnesscontrastimage.php
	 * @param string $brightness <p>
	 * </p>
	 * @param string $contrast <p>
	 * </p>
	 * @param string $CHANNEL [optional] <p>
	 * </p>
	 * @return void
	 */
	public function brightnesscontrastimage(string $brightness, string $contrast, string $CHANNEL = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.colormatriximage.php
	 * @param string $color_matrix [optional] <p>
	 * </p>
	 * @return void
	 */
	public function colormatriximage(string $color_matrix = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.selectiveblurimage.php
	 * @param float $radius <p>
	 * </p>
	 * @param float $sigma <p>
	 * </p>
	 * @param float $threshold <p>
	 * </p>
	 * @param int $CHANNEL <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return void
	 */
	public function selectiveblurimage(float $radius, float $sigma, float $threshold, int $CHANNEL) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.rotationalblurimage.php
	 * @param string $angle <p>
	 * The angle to apply the blur over.
	 * </p>
	 * @param string $CHANNEL [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return void
	 */
	public function rotationalblurimage(string $angle, string $CHANNEL = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.statisticimage.php
	 * @param int $type <p>
	 * </p>
	 * @param int $width <p>
	 * </p>
	 * @param int $height <p>
	 * </p>
	 * @param string $CHANNEL [optional] <p>
	 * </p>
	 * @return void
	 */
	public function statisticimage(int $type, int $width, int $height, string $CHANNEL = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.subimagematch.php
	 * @param Imagick $Imagick <p>
	 * </p>
	 * @param array $offset [optional] <p>
	 * </p>
	 * @param float $similarity [optional] <p>
	 * A new image that displays the amount of similarity at each pixel.
	 * </p>
	 * @return Imagick
	 */
	public function subimagematch(Imagick $Imagick, array &$offset = null, float &$similarity = null): Imagick {}

	/**
	 * @param Imagick $Imagick
	 * @param $offset [optional]
	 * @param $similarity [optional]
	 * @param $similarity_threshold [optional]
	 * @param $metric [optional]
	 */
	public function similarityimage(Imagick $Imagick, &$offset, &$similarity, &$similarity_threshold, &$metric) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.setregistry.php
	 * @param string $key <p>
	 * </p>
	 * @param string $value <p>
	 * </p>
	 * @return void
	 */
	public static function setregistry(string $key, string $value) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.getregistry.php
	 * @param string $key <p>
	 * The entry to get.
	 * </p>
	 * @return string
	 */
	public static function getregistry(string $key): string {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.listregistry.php
	 * @return array An array containing the key/values from the registry.
	 */
	public static function listregistry(): array {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.morphology.php
	 * @param int $morphologyMethod <p>
	 * Which morphology method to use one of the \Imagick::MORPHOLOGY_* constants.
	 * </p>
	 * @param int $iterations <p>
	 * The number of iteration to apply the morphology function. A value of -1 means loop until no change found. How this is applied may depend on the morphology method. Typically this is a value of 1.
	 * </p>
	 * @param ImagickKernel $ImagickKernel <p>
	 * </p>
	 * @param string $CHANNEL [optional] <p>
	 * </p>
	 * @return void
	 */
	public function morphology(int $morphologyMethod, int $iterations, ImagickKernel $ImagickKernel, string $CHANNEL = null) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagick.filter.php
	 * @param ImagickKernel $ImagickKernel <p>
	 * An instance of ImagickKernel that represents either a single kernel or a linked series of kernels.
	 * </p>
	 * @param int $CHANNEL [optional] <p>
	 * Provide any channel constant that is valid for your channel mode. To apply to more than one channel, combine channel constants using bitwise operators. Defaults to <b>Imagick::CHANNEL_DEFAULT</b>. Refer to this list of channel constants
	 * </p>
	 * @return void
	 */
	public function filter(ImagickKernel $ImagickKernel, int $CHANNEL = Imagick::CHANNEL_DEFAULT) {}

	/**
	 * @param $antialias
	 */
	public function setantialias($antialias) {}

	public function getantialias() {}

	/**
	 * @param $antialias
	 */
	public function colordecisionlistimage($antialias) {}

}

/**
 * @method ImagickDraw clone() (PECL imagick 2.0.0)<br/>Makes an exact copy of the specified ImagickDraw object
 * @link http://php.net/manual/en/class.imagickdraw.php
 */
class ImagickDraw  {

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.resetvectorgraphics.php
	 * @return void
	 */
	public function resetvectorgraphics() {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.gettextkerning.php
	 * @return float
	 */
	public function gettextkerning(): float {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.settextkerning.php
	 * @param float $kerning <p>
	 * </p>
	 * @return void
	 */
	public function settextkerning(float $kerning) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.gettextinterwordspacing.php
	 * @return float
	 */
	public function gettextinterwordspacing(): float {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.settextinterwordspacing.php
	 * @param float $spacing <p>
	 * </p>
	 * @return void
	 */
	public function settextinterwordspacing(float $spacing) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.gettextinterlinespacing.php
	 * @return float
	 */
	public function gettextinterlinespacing(): float {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.settextinterlinespacing.php
	 * @param float $spacing <p>
	 * </p>
	 * @return void
	 */
	public function settextinterlinespacing(float $spacing) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The ImagickDraw constructor
	 * @link http://php.net/manual/en/imagickdraw.construct.php
	 */
	public function __construct() {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the fill color to be used for drawing filled objects
	 * @link http://php.net/manual/en/imagickdraw.setfillcolor.php
	 * @param ImagickPixel $fill_pixel <p>
	 * ImagickPixel to use to set the color
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfillcolor(ImagickPixel $fill_pixel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the opacity to use when drawing using the fill color or fill texture
	 * @link http://php.net/manual/en/imagickdraw.setfillalpha.php
	 * @param float $opacity <p>
	 * fill alpha
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfillalpha(float $opacity): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.setresolution.php
	 * @param string $x_resolution <p>
	 * </p>
	 * @param string $y_resolution <p>
	 * </p>
	 * @return void
	 */
	public function setresolution(string $x_resolution, string $y_resolution) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the color used for stroking object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokecolor.php
	 * @param ImagickPixel $stroke_pixel <p>
	 * the stroke color
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokecolor(ImagickPixel $stroke_pixel): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the opacity of stroked object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokealpha.php
	 * @param float $opacity <p>
	 * opacity
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokealpha(float $opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the width of the stroke used to draw object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokewidth.php
	 * @param float $stroke_width <p>
	 * stroke width
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokewidth(float $stroke_width): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clears the ImagickDraw
	 * @link http://php.net/manual/en/imagickdraw.clear.php
	 * @return bool an ImagickDraw object.
	 */
	public function clear(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a circle
	 * @link http://php.net/manual/en/imagickdraw.circle.php
	 * @param float $ox <p>
	 * origin x coordinate
	 * </p>
	 * @param float $oy <p>
	 * origin y coordinate
	 * </p>
	 * @param float $px <p>
	 * perimeter x coordinate
	 * </p>
	 * @param float $py <p>
	 * perimeter y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function circle(float $ox, float $oy, float $px, float $py): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws text on the image
	 * @link http://php.net/manual/en/imagickdraw.annotation.php
	 * @param float $x <p>
	 * The x coordinate where text is drawn
	 * </p>
	 * @param float $y <p>
	 * The y coordinate where text is drawn
	 * </p>
	 * @param string $text <p>
	 * The text to draw on the image
	 * </p>
	 * @return bool No value is returned.
	 */
	public function annotation(float $x, float $y, string $text): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Controls whether text is antialiased
	 * @link http://php.net/manual/en/imagickdraw.settextantialias.php
	 * @param bool $antiAlias
	 * @return bool No value is returned.
	 */
	public function settextantialias(bool $antiAlias): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the text code set
	 * @link http://php.net/manual/en/imagickdraw.settextencoding.php
	 * @param string $encoding <p>
	 * the encoding name
	 * </p>
	 * @return bool No value is returned.
	 */
	public function settextencoding(string $encoding): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the fully-specified font to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfont.php
	 * @param string $font_name
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setfont(string $font_name): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font family to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontfamily.php
	 * @param string $font_family <p>
	 * the font family
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setfontfamily(string $font_family): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font pointsize to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontsize.php
	 * @param float $pointsize <p>
	 * the point size
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfontsize(float $pointsize): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font style to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontstyle.php
	 * @param int $style <p>
	 * STYLETYPE_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfontstyle(int $style): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font weight
	 * @link http://php.net/manual/en/imagickdraw.setfontweight.php
	 * @param int $font_weight
	 * @return bool
	 */
	public function setfontweight(int $font_weight): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font
	 * @link http://php.net/manual/en/imagickdraw.getfont.php
	 * @return string a string on success and false if no font is set.
	 */
	public function getfont(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font family
	 * @link http://php.net/manual/en/imagickdraw.getfontfamily.php
	 * @return string the font family currently selected or false if font family is not set.
	 */
	public function getfontfamily(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font pointsize
	 * @link http://php.net/manual/en/imagickdraw.getfontsize.php
	 * @return float the font size associated with the current ImagickDraw object.
	 */
	public function getfontsize(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font style
	 * @link http://php.net/manual/en/imagickdraw.getfontstyle.php
	 * @return int the font style constant (STYLE_) associated with the ImagickDraw object
	 * or 0 if no style is set.
	 */
	public function getfontstyle(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the font weight
	 * @link http://php.net/manual/en/imagickdraw.getfontweight.php
	 * @return int an int on success and 0 if no weight is set.
	 */
	public function getfontweight(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Frees all associated resources
	 * @link http://php.net/manual/en/imagickdraw.destroy.php
	 * @return bool No value is returned.
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a rectangle
	 * @link http://php.net/manual/en/imagickdraw.rectangle.php
	 * @param float $x1 <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of the bottom right corner
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the bottom right corner
	 * </p>
	 * @return bool No value is returned.
	 */
	public function rectangle(float $x1, float $y1, float $x2, float $y2): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a rounded rectangle
	 * @link http://php.net/manual/en/imagickdraw.roundrectangle.php
	 * @param float $x1 <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of the bottom right
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the bottom right
	 * </p>
	 * @param float $rx <p>
	 * x rounding
	 * </p>
	 * @param float $ry <p>
	 * y rounding
	 * </p>
	 * @return bool No value is returned.
	 */
	public function roundrectangle(float $x1, float $y1, float $x2, float $y2, float $rx, float $ry): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an ellipse on the image
	 * @link http://php.net/manual/en/imagickdraw.ellipse.php
	 * @param float $ox
	 * @param float $oy
	 * @param float $rx
	 * @param float $ry
	 * @param float $start
	 * @param float $end
	 * @return bool No value is returned.
	 */
	public function ellipse(float $ox, float $oy, float $rx, float $ry, float $start, float $end): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Skews the current coordinate system in the horizontal direction
	 * @link http://php.net/manual/en/imagickdraw.skewx.php
	 * @param float $degrees <p>
	 * degrees to skew
	 * </p>
	 * @return bool No value is returned.
	 */
	public function skewx(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Skews the current coordinate system in the vertical direction
	 * @link http://php.net/manual/en/imagickdraw.skewy.php
	 * @param float $degrees <p>
	 * degrees to skew
	 * </p>
	 * @return bool No value is returned.
	 */
	public function skewy(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies a translation to the current coordinate system
	 * @link http://php.net/manual/en/imagickdraw.translate.php
	 * @param float $x <p>
	 * horizontal translation
	 * </p>
	 * @param float $y <p>
	 * vertical translation
	 * </p>
	 * @return bool No value is returned.
	 */
	public function translate(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a line
	 * @link http://php.net/manual/en/imagickdraw.line.php
	 * @param float $sx <p>
	 * starting x coordinate
	 * </p>
	 * @param float $sy <p>
	 * starting y coordinate
	 * </p>
	 * @param float $ex <p>
	 * ending x coordinate
	 * </p>
	 * @param float $ey <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function line(float $sx, float $sy, float $ex, float $ey): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an arc
	 * @link http://php.net/manual/en/imagickdraw.arc.php
	 * @param float $sx <p>
	 * Starting x ordinate of bounding rectangle
	 * </p>
	 * @param float $sy <p>
	 * starting y ordinate of bounding rectangle
	 * </p>
	 * @param float $ex <p>
	 * ending x ordinate of bounding rectangle
	 * </p>
	 * @param float $ey <p>
	 * ending y ordinate of bounding rectangle
	 * </p>
	 * @param float $sd <p>
	 * starting degrees of rotation
	 * </p>
	 * @param float $ed <p>
	 * ending degrees of rotation
	 * </p>
	 * @return bool No value is returned.
	 */
	public function arc(float $sx, float $sy, float $ex, float $ey, float $sd, float $ed): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Paints on the image's opacity channel
	 * @link http://php.net/manual/en/imagickdraw.matte.php
	 * @param float $x <p>
	 * x coordinate of the matte
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the matte
	 * </p>
	 * @param int $paintMethod <p>
	 * PAINT_ constant
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function matte(float $x, float $y, int $paintMethod): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a polygon
	 * @link http://php.net/manual/en/imagickdraw.polygon.php
	 * @param array $coordinates <p>
	 * multidimensional array like array( array( 'x' => 3, 'y' => 4 ), array( 'x' => 2, 'y' => 6 ) );
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function polygon(array $coordinates): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a point
	 * @link http://php.net/manual/en/imagickdraw.point.php
	 * @param float $x <p>
	 * point's x coordinate
	 * </p>
	 * @param float $y <p>
	 * point's y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function point(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text decoration
	 * @link http://php.net/manual/en/imagickdraw.gettextdecoration.php
	 * @return int one of the DECORATION_ constants
	 * and 0 if no decoration is set.
	 */
	public function gettextdecoration(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the code set used for text annotations
	 * @link http://php.net/manual/en/imagickdraw.gettextencoding.php
	 * @return string a string specifying the code set
	 * or false if text encoding is not set.
	 */
	public function gettextencoding(): string {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickdraw.getfontstretch.php
	 * @return int
	 */
	public function getfontstretch(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the font stretch to use when annotating with text
	 * @link http://php.net/manual/en/imagickdraw.setfontstretch.php
	 * @param int $fontStretch <p>
	 * STRETCH_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfontstretch(int $fontStretch): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Controls whether stroked outlines are antialiased
	 * @link http://php.net/manual/en/imagickdraw.setstrokeantialias.php
	 * @param bool $stroke_antialias <p>
	 * the antialias setting
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokeantialias(bool $stroke_antialias): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies a text alignment
	 * @link http://php.net/manual/en/imagickdraw.settextalignment.php
	 * @param int $alignment <p>
	 * ALIGN_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function settextalignment(int $alignment): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies a decoration
	 * @link http://php.net/manual/en/imagickdraw.settextdecoration.php
	 * @param int $decoration <p>
	 * DECORATION_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function settextdecoration(int $decoration): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the color of a background rectangle
	 * @link http://php.net/manual/en/imagickdraw.settextundercolor.php
	 * @param ImagickPixel $under_color <p>
	 * the under color
	 * </p>
	 * @return bool No value is returned.
	 */
	public function settextundercolor(ImagickPixel $under_color): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the overall canvas size
	 * @link http://php.net/manual/en/imagickdraw.setviewbox.php
	 * @param int $x1 <p>
	 * left x coordinate
	 * </p>
	 * @param int $y1 <p>
	 * left y coordinate
	 * </p>
	 * @param int $x2 <p>
	 * right x coordinate
	 * </p>
	 * @param int $y2 <p>
	 * right y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setviewbox(int $x1, int $y1, int $x2, int $y2): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the current affine transformation matrix
	 * @link http://php.net/manual/en/imagickdraw.affine.php
	 * @param array $affine <p>
	 * Affine matrix parameters
	 * </p>
	 * @return bool No value is returned.
	 */
	public function affine(array $affine): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a bezier curve
	 * @link http://php.net/manual/en/imagickdraw.bezier.php
	 * @param array $coordinates <p>
	 * Multidimensional array like array( array( 'x' => 1, 'y' => 2 ),
	 * array( 'x' => 3, 'y' => 4 ) )
	 * </p>
	 * @return bool No value is returned.
	 */
	public function bezier(array $coordinates): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Composites an image onto the current image
	 * @link http://php.net/manual/en/imagickdraw.composite.php
	 * @param int $compose <p>
	 * composition operator. One of COMPOSITE_ constants
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the top left corner
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the top left corner
	 * </p>
	 * @param float $width <p>
	 * width of the composition image
	 * </p>
	 * @param float $height <p>
	 * height of the composition image
	 * </p>
	 * @param Imagick $compositeWand <p>
	 * the Imagick object where composition image is taken from
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function composite(int $compose, float $x, float $y, float $width, float $height, Imagick $compositeWand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws color on image
	 * @link http://php.net/manual/en/imagickdraw.color.php
	 * @param float $x <p>
	 * x coordinate of the paint
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the paint
	 * </p>
	 * @param int $paintMethod <p>
	 * one of the PAINT_ constants
	 * </p>
	 * @return bool No value is returned.
	 */
	public function color(float $x, float $y, int $paintMethod): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a comment
	 * @link http://php.net/manual/en/imagickdraw.comment.php
	 * @param string $comment <p>
	 * The comment string to add to vector output stream
	 * </p>
	 * @return bool No value is returned.
	 */
	public function comment(string $comment): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Obtains the current clipping path ID
	 * @link http://php.net/manual/en/imagickdraw.getclippath.php
	 * @return string a string containing the clip path ID or false if no clip path exists.
	 */
	public function getclippath(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current polygon fill rule
	 * @link http://php.net/manual/en/imagickdraw.getcliprule.php
	 * @return int one of the FILLRULE_ constants.
	 */
	public function getcliprule(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the interpretation of clip path units
	 * @link http://php.net/manual/en/imagickdraw.getclipunits.php
	 * @return int an int on success.
	 */
	public function getclipunits(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the fill color
	 * @link http://php.net/manual/en/imagickdraw.getfillcolor.php
	 * @return ImagickPixel an ImagickPixel object.
	 */
	public function getfillcolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the opacity used when drawing
	 * @link http://php.net/manual/en/imagickdraw.getfillopacity.php
	 * @return float The opacity.
	 */
	public function getfillopacity(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the fill rule
	 * @link http://php.net/manual/en/imagickdraw.getfillrule.php
	 * @return int a FILLRULE_ constant
	 */
	public function getfillrule(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text placement gravity
	 * @link http://php.net/manual/en/imagickdraw.getgravity.php
	 * @return int a GRAVITY_ constant on success and 0 if no gravity is set.
	 */
	public function getgravity(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current stroke antialias setting
	 * @link http://php.net/manual/en/imagickdraw.getstrokeantialias.php
	 * @return bool <b>TRUE</b> if antialiasing is on and false if it is off.
	 */
	public function getstrokeantialias(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color used for stroking object outlines
	 * @link http://php.net/manual/en/imagickdraw.getstrokecolor.php
	 * @return ImagickPixel an ImagickPixel object which describes the color.
	 */
	public function getstrokecolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns an array representing the pattern of dashes and gaps used to stroke paths
	 * @link http://php.net/manual/en/imagickdraw.getstrokedasharray.php
	 * @return array an array on success and empty array if not set.
	 */
	public function getstrokedasharray(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the offset into the dash pattern to start the dash
	 * @link http://php.net/manual/en/imagickdraw.getstrokedashoffset.php
	 * @return float a float representing the offset and 0 if it's not set.
	 */
	public function getstrokedashoffset(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the shape to be used at the end of open subpaths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.getstrokelinecap.php
	 * @return int one of the LINECAP_ constants or 0 if stroke linecap is not set.
	 */
	public function getstrokelinecap(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the shape to be used at the corners of paths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.getstrokelinejoin.php
	 * @return int one of the LINEJOIN_ constants or 0 if stroke line join is not set.
	 */
	public function getstrokelinejoin(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the stroke miter limit
	 * @link http://php.net/manual/en/imagickdraw.getstrokemiterlimit.php
	 * @return int an int describing the miter limit
	 * and 0 if no miter limit is set.
	 */
	public function getstrokemiterlimit(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the opacity of stroked object outlines
	 * @link http://php.net/manual/en/imagickdraw.getstrokeopacity.php
	 * @return float a double describing the opacity.
	 */
	public function getstrokeopacity(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the width of the stroke used to draw object outlines
	 * @link http://php.net/manual/en/imagickdraw.getstrokewidth.php
	 * @return float a double describing the stroke width.
	 */
	public function getstrokewidth(): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text alignment
	 * @link http://php.net/manual/en/imagickdraw.gettextalignment.php
	 * @return int one of the ALIGN_ constants and 0 if no align is set.
	 */
	public function gettextalignment(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current text antialias setting
	 * @link http://php.net/manual/en/imagickdraw.gettextantialias.php
	 * @return bool <b>TRUE</b> if text is antialiased and false if not.
	 */
	public function gettextantialias(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a string containing vector graphics
	 * @link http://php.net/manual/en/imagickdraw.getvectorgraphics.php
	 * @return string a string containing the vector graphics.
	 */
	public function getvectorgraphics(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the text under color
	 * @link http://php.net/manual/en/imagickdraw.gettextundercolor.php
	 * @return ImagickPixel an ImagickPixel object describing the color.
	 */
	public function gettextundercolor(): ImagickPixel {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adds a path element to the current path
	 * @link http://php.net/manual/en/imagickdraw.pathclose.php
	 * @return bool No value is returned.
	 */
	public function pathclose(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoabsolute.php
	 * @param float $x1 <p>
	 * x coordinate of the first control point
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the first control point
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the first control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the curve end
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the curve end
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetoabsolute(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetorelative.php
	 * @param float $x1 <p>
	 * x coordinate of starting control point
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of starting control point
	 * </p>
	 * @param float $x2 <p>
	 * x coordinate of ending control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of ending control point
	 * </p>
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetorelative(float $x1, float $y1, float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierabsolute.php
	 * @param float $x1 <p>
	 * x coordinate of the control point
	 * </p>
	 * @param float $y1 <p>
	 * y coordinate of the control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the end point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the end point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetoquadraticbezierabsolute(float $x1, float $y1, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbezierrelative.php
	 * @param float $x1 <p>
	 * starting x coordinate
	 * </p>
	 * @param float $y1 <p>
	 * starting y coordinate
	 * </p>
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetoquadraticbezierrelative(float $x1, float $y1, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothabsolute.php
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetoquadraticbeziersmoothabsolute(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a quadratic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetoquadraticbeziersmoothrelative.php
	 * @param float $x <p>
	 * ending x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetoquadraticbeziersmoothrelative(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetosmoothabsolute.php
	 * @param float $x2 <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the second control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the ending point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the ending point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetosmoothabsolute(float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a cubic Bezier curve
	 * @link http://php.net/manual/en/imagickdraw.pathcurvetosmoothrelative.php
	 * @param float $x2 <p>
	 * x coordinate of the second control point
	 * </p>
	 * @param float $y2 <p>
	 * y coordinate of the second control point
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the ending point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the ending point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathcurvetosmoothrelative(float $x2, float $y2, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an elliptical arc
	 * @link http://php.net/manual/en/imagickdraw.pathellipticarcabsolute.php
	 * @param float $rx <p>
	 * x radius
	 * </p>
	 * @param float $ry <p>
	 * y radius
	 * </p>
	 * @param float $x_axis_rotation <p>
	 * x axis rotation
	 * </p>
	 * @param bool $large_arc_flag <p>
	 * large arc flag
	 * </p>
	 * @param bool $sweep_flag <p>
	 * sweep flag
	 * </p>
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathellipticarcabsolute(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws an elliptical arc
	 * @link http://php.net/manual/en/imagickdraw.pathellipticarcrelative.php
	 * @param float $rx <p>
	 * x radius
	 * </p>
	 * @param float $ry <p>
	 * y radius
	 * </p>
	 * @param float $x_axis_rotation <p>
	 * x axis rotation
	 * </p>
	 * @param bool $large_arc_flag <p>
	 * large arc flag
	 * </p>
	 * @param bool $sweep_flag <p>
	 * sweep flag
	 * </p>
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathellipticarcrelative(float $rx, float $ry, float $x_axis_rotation, bool $large_arc_flag, bool $sweep_flag, float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates the current path
	 * @link http://php.net/manual/en/imagickdraw.pathfinish.php
	 * @return bool No value is returned.
	 */
	public function pathfinish(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetoabsolute.php
	 * @param float $x <p>
	 * starting x coordinate
	 * </p>
	 * @param float $y <p>
	 * ending x coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathlinetoabsolute(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetorelative.php
	 * @param float $x <p>
	 * starting x coordinate
	 * </p>
	 * @param float $y <p>
	 * starting y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathlinetorelative(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a horizontal line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetohorizontalabsolute.php
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathlinetohorizontalabsolute(float $x): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a horizontal line
	 * @link http://php.net/manual/en/imagickdraw.pathlinetohorizontalrelative.php
	 * @param float $x <p>
	 * x coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathlinetohorizontalrelative(float $x): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a vertical line
	 * @link http://php.net/manual/en/imagickdraw.pathlinetoverticalabsolute.php
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathlinetoverticalabsolute(float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a vertical line path
	 * @link http://php.net/manual/en/imagickdraw.pathlinetoverticalrelative.php
	 * @param float $y <p>
	 * y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathlinetoverticalrelative(float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Starts a new sub-path
	 * @link http://php.net/manual/en/imagickdraw.pathmovetoabsolute.php
	 * @param float $x <p>
	 * x coordinate of the starting point
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the starting point
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathmovetoabsolute(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Starts a new sub-path
	 * @link http://php.net/manual/en/imagickdraw.pathmovetorelative.php
	 * @param float $x <p>
	 * target x coordinate
	 * </p>
	 * @param float $y <p>
	 * target y coordinate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pathmovetorelative(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Declares the start of a path drawing list
	 * @link http://php.net/manual/en/imagickdraw.pathstart.php
	 * @return bool No value is returned.
	 */
	public function pathstart(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Draws a polyline
	 * @link http://php.net/manual/en/imagickdraw.polyline.php
	 * @param array $coordinates <p>
	 * array of x and y coordinates: array( array( 'x' => 4, 'y' => 6 ), array( 'x' => 8, 'y' => 10 ) )
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function polyline(array $coordinates): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates a clip path definition
	 * @link http://php.net/manual/en/imagickdraw.popclippath.php
	 * @return bool No value is returned.
	 */
	public function popclippath(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates a definition list
	 * @link http://php.net/manual/en/imagickdraw.popdefs.php
	 * @return bool No value is returned.
	 */
	public function popdefs(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Terminates a pattern definition
	 * @link http://php.net/manual/en/imagickdraw.poppattern.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function poppattern(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Starts a clip path definition
	 * @link http://php.net/manual/en/imagickdraw.pushclippath.php
	 * @param string $clip_mask_id <p>
	 * Clip mask Id
	 * </p>
	 * @return bool No value is returned.
	 */
	public function pushclippath(string $clip_mask_id): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Indicates that following commands create named elements for early processing
	 * @link http://php.net/manual/en/imagickdraw.pushdefs.php
	 * @return bool No value is returned.
	 */
	public function pushdefs(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Indicates that subsequent commands up to a ImagickDraw::opPattern() command comprise the definition of a named pattern
	 * @link http://php.net/manual/en/imagickdraw.pushpattern.php
	 * @param string $pattern_id <p>
	 * the pattern Id
	 * </p>
	 * @param float $x <p>
	 * x coordinate of the top-left corner
	 * </p>
	 * @param float $y <p>
	 * y coordinate of the top-left corner
	 * </p>
	 * @param float $width <p>
	 * width of the pattern
	 * </p>
	 * @param float $height <p>
	 * height of the pattern
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function pushpattern(string $pattern_id, float $x, float $y, float $width, float $height): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Renders all preceding drawing commands onto the image
	 * @link http://php.net/manual/en/imagickdraw.render.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function render(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Applies the specified rotation to the current coordinate space
	 * @link http://php.net/manual/en/imagickdraw.rotate.php
	 * @param float $degrees <p>
	 * degrees to rotate
	 * </p>
	 * @return bool No value is returned.
	 */
	public function rotate(float $degrees): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Adjusts the scaling factor
	 * @link http://php.net/manual/en/imagickdraw.scale.php
	 * @param float $x <p>
	 * horizontal factor
	 * </p>
	 * @param float $y <p>
	 * vertical factor
	 * </p>
	 * @return bool No value is returned.
	 */
	public function scale(float $x, float $y): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Associates a named clipping path with the image
	 * @link http://php.net/manual/en/imagickdraw.setclippath.php
	 * @param string $clip_mask <p>
	 * the clipping path name
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setclippath(string $clip_mask): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the polygon fill rule to be used by the clipping path
	 * @link http://php.net/manual/en/imagickdraw.setcliprule.php
	 * @param int $fill_rule <p>
	 * FILLRULE_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setcliprule(int $fill_rule): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the interpretation of clip path units
	 * @link http://php.net/manual/en/imagickdraw.setclipunits.php
	 * @param int $clip_units <p>
	 * the number of clip units
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setclipunits(int $clip_units): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the opacity to use when drawing using the fill color or fill texture
	 * @link http://php.net/manual/en/imagickdraw.setfillopacity.php
	 * @param float $fillOpacity <p>
	 * the fill opacity
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfillopacity(float $fillOpacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the URL to use as a fill pattern for filling objects
	 * @link http://php.net/manual/en/imagickdraw.setfillpatternurl.php
	 * @param string $fill_url <p>
	 * URL to use to obtain fill pattern.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setfillpatternurl(string $fill_url): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the fill rule to use while drawing polygons
	 * @link http://php.net/manual/en/imagickdraw.setfillrule.php
	 * @param int $fill_rule <p>
	 * FILLRULE_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setfillrule(int $fill_rule): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the text placement gravity
	 * @link http://php.net/manual/en/imagickdraw.setgravity.php
	 * @param int $gravity <p>
	 * GRAVITY_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setgravity(int $gravity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the pattern used for stroking object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokepatternurl.php
	 * @param string $stroke_url <p>
	 * stroke URL
	 * </p>
	 * @return bool imagick.imagickdraw.return.success;
	 */
	public function setstrokepatternurl(string $stroke_url): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the offset into the dash pattern to start the dash
	 * @link http://php.net/manual/en/imagickdraw.setstrokedashoffset.php
	 * @param float $dash_offset <p>
	 * dash offset
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokedashoffset(float $dash_offset): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the shape to be used at the end of open subpaths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.setstrokelinecap.php
	 * @param int $linecap <p>
	 * LINECAP_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokelinecap(int $linecap): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the shape to be used at the corners of paths when they are stroked
	 * @link http://php.net/manual/en/imagickdraw.setstrokelinejoin.php
	 * @param int $linejoin <p>
	 * LINEJOIN_ constant
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokelinejoin(int $linejoin): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the miter limit
	 * @link http://php.net/manual/en/imagickdraw.setstrokemiterlimit.php
	 * @param int $miterlimit <p>
	 * the miter limit
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokemiterlimit(int $miterlimit): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the opacity of stroked object outlines
	 * @link http://php.net/manual/en/imagickdraw.setstrokeopacity.php
	 * @param float $stroke_opacity <p>
	 * stroke opacity. 1.0 is fully opaque
	 * </p>
	 * @return bool No value is returned.
	 */
	public function setstrokeopacity(float $stroke_opacity): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the vector graphics
	 * @link http://php.net/manual/en/imagickdraw.setvectorgraphics.php
	 * @param string $xml <p>
	 * xml containing the vector graphics
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setvectorgraphics(string $xml): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Destroys the current ImagickDraw in the stack, and returns to the previously pushed ImagickDraw
	 * @link http://php.net/manual/en/imagickdraw.pop.php
	 * @return bool <b>TRUE</b> on success and false on failure.
	 */
	public function pop(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clones the current ImagickDraw and pushes it to the stack
	 * @link http://php.net/manual/en/imagickdraw.push.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function push(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Specifies the pattern of dashes and gaps used to stroke paths
	 * @link http://php.net/manual/en/imagickdraw.setstrokedasharray.php
	 * @param array $dashArray <p>
	 * array of floats
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setstrokedasharray(array $dashArray): bool {}

}

/**
 * @link http://php.net/manual/en/class.imagickpixeliterator.php
 */
class ImagickPixelIterator implements Iterator, Traversable {

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The ImagickPixelIterator constructor
	 * @link http://php.net/manual/en/imagickpixeliterator.construct.php
	 * @param Imagick $wand
	 */
	public function __construct(Imagick $wand) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a new pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.newpixeliterator.php
	 * @param Imagick $wand
	 * @return bool <b>TRUE</b> on success. Throwing ImagickPixelIteratorException.
	 */
	public function newpixeliterator(Imagick $wand): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns a new pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.newpixelregioniterator.php
	 * @param Imagick $wand
	 * @param int $x
	 * @param int $y
	 * @param int $columns
	 * @param int $rows
	 * @return bool a new ImagickPixelIterator on success; on failure, throws
	 * ImagickPixelIteratorException.
	 */
	public function newpixelregioniterator(Imagick $wand, int $x, int $y, int $columns, int $rows): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current pixel iterator row
	 * @link http://php.net/manual/en/imagickpixeliterator.getiteratorrow.php
	 * @return int the integer offset of the row, throwing
	 * ImagickPixelIteratorException on error.
	 */
	public function getiteratorrow(): int {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Set the pixel iterator row
	 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorrow.php
	 * @param int $row
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setiteratorrow(int $row): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the pixel iterator to the first pixel row
	 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorfirstrow.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setiteratorfirstrow(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the pixel iterator to the last pixel row
	 * @link http://php.net/manual/en/imagickpixeliterator.setiteratorlastrow.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setiteratorlastrow(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the previous row
	 * @link http://php.net/manual/en/imagickpixeliterator.getpreviousiteratorrow.php
	 * @return array the previous row as an array of ImagickPixelWand objects from the
	 * ImagickPixelIterator, throwing ImagickPixelIteratorException on error.
	 */
	public function getpreviousiteratorrow(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the current row of ImagickPixel objects
	 * @link http://php.net/manual/en/imagickpixeliterator.getcurrentiteratorrow.php
	 * @return array a row as an array of ImagickPixel objects that can themselves be iterated.
	 */
	public function getcurrentiteratorrow(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the next row of the pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.getnextiteratorrow.php
	 * @return array the next row as an array of ImagickPixel objects, throwing
	 * ImagickPixelIteratorException on error.
	 */
	public function getnextiteratorrow(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Resets the pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.resetiterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function resetiterator(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Syncs the pixel iterator
	 * @link http://php.net/manual/en/imagickpixeliterator.synciterator.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function synciterator(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Deallocates resources associated with a PixelIterator
	 * @link http://php.net/manual/en/imagickpixeliterator.destroy.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clear resources associated with a PixelIterator
	 * @link http://php.net/manual/en/imagickpixeliterator.clear.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clear(): bool {}

	/**
	 * @param Imagick $Imagick
	 */
	public static function getpixeliterator(Imagick $Imagick) {}

	/**
	 * @param Imagick $Imagick
	 * @param $x
	 * @param $y
	 * @param $columns
	 * @param $rows
	 */
	public static function getpixelregioniterator(Imagick $Imagick, $x, $y, $columns, $rows) {}

	public function key() {}

	public function next() {}

	public function rewind() {}

	public function current() {}

	public function valid() {}

}

/**
 * @method clone()
 * @link http://php.net/manual/en/class.imagickpixel.php
 */
class ImagickPixel  {

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the normalized HSL color of the ImagickPixel object
	 * @link http://php.net/manual/en/imagickpixel.gethsl.php
	 * @return array the HSL value in an array with the keys "hue",
	 * "saturation", and "luminosity". Throws ImagickPixelException on failure.
	 */
	public function gethsl(): array {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the normalized HSL color
	 * @link http://php.net/manual/en/imagickpixel.sethsl.php
	 * @param float $hue <p>
	 * The normalized value for hue, described as a fractional arc
	 * (between 0 and 1) of the hue circle, where the zero value is
	 * red.
	 * </p>
	 * @param float $saturation <p>
	 * The normalized value for saturation, with 1 as full saturation.
	 * </p>
	 * @param float $luminosity <p>
	 * The normalized value for luminosity, on a scale from black at
	 * 0 to white at 1, with the full HS value at 0.5 luminosity.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function sethsl(float $hue, float $saturation, float $luminosity): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.getcolorvaluequantum.php
	 * @param $color
	 * @return mixed The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.
	 */
	public function getcolorvaluequantum($color) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.setcolorvaluequantum.php
	 * @param int $color <p>
	 * Which color element to set e.g. \Imagick::COLOR_GREEN.
	 * </p>
	 * @param mixed $value <p>
	 * The quantum value to set the color element to. This should be a float if ImageMagick was compiled with HDRI otherwise an int in the range 0 to Imagick::getQuantum().
	 * </p>
	 * @return void
	 */
	public function setcolorvaluequantum(int $color, $value) {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.getindex.php
	 * @return int
	 */
	public function getindex(): int {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.setindex.php
	 * @param int $index <p>
	 * </p>
	 * @return void
	 */
	public function setindex(int $index) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * The ImagickPixel constructor
	 * @link http://php.net/manual/en/imagickpixel.construct.php
	 * @param string $color [optional] <p>
	 * The optional color string to use as the initial value of this object.
	 * </p>
	 */
	public function __construct(string $color = null) {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the color
	 * @link http://php.net/manual/en/imagickpixel.setcolor.php
	 * @param string $color <p>
	 * The color definition to use in order to initialise the
	 * ImagickPixel object.
	 * </p>
	 * @return bool <b>TRUE</b> if the specified color was set, <b>FALSE</b> otherwise.
	 */
	public function setcolor(string $color): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Sets the normalized value of one of the channels
	 * @link http://php.net/manual/en/imagickpixel.setcolorvalue.php
	 * @param int $color <p>
	 * One of the Imagick color constants e.g. \Imagick::COLOR_GREEN or \Imagick::COLOR_ALPHA.
	 * </p>
	 * @param float $value <p>
	 * The value to set this channel to, ranging from 0 to 1.
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function setcolorvalue(int $color, float $value): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Gets the normalized value of the provided color channel
	 * @link http://php.net/manual/en/imagickpixel.getcolorvalue.php
	 * @param int $color <p>
	 * The color to get the value of, specified as one of the Imagick color
	 * constants. This can be one of the RGB colors, CMYK colors, alpha and
	 * opacity e.g (Imagick::COLOR_BLUE, Imagick::COLOR_MAGENTA).
	 * </p>
	 * @return float The value of the channel, as a normalized floating-point number, throwing
	 * ImagickPixelException on error.
	 */
	public function getcolorvalue(int $color): float {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Clears resources associated with this object
	 * @link http://php.net/manual/en/imagickpixel.clear.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function clear(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Deallocates resources associated with this object
	 * @link http://php.net/manual/en/imagickpixel.destroy.php
	 * @return bool <b>TRUE</b> on success.
	 */
	public function destroy(): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Check the distance between this color and another
	 * @link http://php.net/manual/en/imagickpixel.issimilar.php
	 * @param ImagickPixel $color <p>
	 * The ImagickPixel object to compare this object against.
	 * </p>
	 * @param float $fuzz <p>
	 * The maximum distance within which to consider these colors as similar.
	 * The theoretical maximum for this value is the square root of three
	 * (1.732).
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function issimilar(ImagickPixel $color, float $fuzz): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.ispixelsimilarquantum.php
	 * @param string $color <p>
	 * </p>
	 * @param string $fuzz [optional] <p>
	 * </p>
	 * @return bool
	 */
	public function ispixelsimilarquantum(string $color, string $fuzz = null): bool {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Check the distance between this color and another
	 * @link http://php.net/manual/en/imagickpixel.ispixelsimilar.php
	 * @param ImagickPixel $color <p>
	 * The ImagickPixel object to compare this object against.
	 * </p>
	 * @param float $fuzz <p>
	 * The maximum distance within which to consider these colors as similar.
	 * The theoretical maximum for this value is the square root of three
	 * (1.732).
	 * </p>
	 * @return bool <b>TRUE</b> on success.
	 */
	public function ispixelsimilar(ImagickPixel $color, float $fuzz): bool {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color
	 * @link http://php.net/manual/en/imagickpixel.getcolor.php
	 * @param bool $normalized [optional] <p>
	 * Normalize the color values
	 * </p>
	 * @return array An array of channel values, each normalized if <b>TRUE</b> is given as param. Throws
	 * ImagickPixelException on error.
	 */
	public function getcolor(bool $normalized = false): array {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.getcolorquantum.php
	 * @return mixed The quantum value of the color element. Float if ImageMagick was compiled with HDRI, otherwise an int.
	 */
	public function getcolorquantum() {}

	/**
	 * (PECL imagick 2.1.0)<br/>
	 * Returns the color as a string
	 * @link http://php.net/manual/en/imagickpixel.getcolorasstring.php
	 * @return string the color of the ImagickPixel object as a string.
	 */
	public function getcolorasstring(): string {}

	/**
	 * (PECL imagick 2.0.0)<br/>
	 * Returns the color count associated with this color
	 * @link http://php.net/manual/en/imagickpixel.getcolorcount.php
	 * @return int the color count as an integer on success, throws
	 * ImagickPixelException on failure.
	 */
	public function getcolorcount(): int {}

	/**
	 * (No version information available, might only be in Git)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickpixel.setcolorcount.php
	 * @param string $colorCount <p>
	 * </p>
	 * @return void
	 */
	public function setcolorcount(string $colorCount) {}

}

/**
 * @link http://php.net/manual/en/class.imagickkernel.php
 */
class ImagickKernel  {

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.frommatrix.php
	 * @param array $matrix
	 * @param array $origin [optional]
	 * @return ImagickKernel The generated ImagickKernel.
	 */
	public static function frommatrix(array $matrix, array $origin = null): ImagickKernel {}

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.frombuiltin.php
	 * @param string $kernelType
	 * @param string $kernelString <p>
	 * A string that describes the parameters e.g. "4,2.5"
	 * </p>
	 * @return ImagickKernel
	 */
	public static function frombuiltin(string $kernelType, string $kernelString): ImagickKernel {}

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.addkernel.php
	 * @param ImagickKernel $ImagickKernel <p>
	 * </p>
	 * @return void
	 */
	public function addkernel(ImagickKernel $ImagickKernel) {}

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.getmatrix.php
	 * @return array A matrix (2d array) of the values that represent the kernel.
	 */
	public function getmatrix(): array {}

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.separate.php
	 * @return array
	 */
	public function separate(): array {}

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.scale.php
	 * @return void
	 */
	public function scale() {}

	/**
	 * (PECL imagick &gt;= 3.3.0)<br/>
	 * Description
	 * @link http://php.net/manual/en/imagickkernel.addunitykernel.php
	 * @return void
	 */
	public function addunitykernel() {}

}
// End of imagick v.3.4.0RC6
?>
