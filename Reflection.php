<?php

// Start of Reflection v.7.0.4-7ubuntu2

/**
 * The ReflectionException class.
 * @link http://php.net/manual/en/class.reflectionexception.php
 */
class ReflectionException extends Exception implements Throwable {
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
 * The reflection class.
 * @link http://php.net/manual/en/class.reflection.php
 */
class Reflection  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets modifier names
	 * @link http://php.net/manual/en/reflection.getmodifiernames.php
	 * @param int $modifiers <p>
	 * The modifiers to get, which is from a numeric value.
	 * </p>
	 * @return array An array of modifier names.
	 */
	public static function getModifierNames(int $modifiers): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflection.export.php
	 * @param Reflector $reflector <p>
	 * The reflection to export.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 */
	public static function export(Reflector $reflector, bool $return = false): string {}

}

/**
 * <b>Reflector</b> is an interface implemented by all
 * exportable Reflection classes.
 * @link http://php.net/manual/en/class.reflector.php
 */
interface Reflector  {

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflector.export.php
	 * @return string
	 */
	abstract public static function export(): string;

	/**
	 * (PHP 5, PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflector.tostring.php
	 * @return string
	 */
	abstract public function __toString(): string;

}

/**
 * A parent class to <b>ReflectionFunction</b>, read its
 * description for details.
 * @link http://php.net/manual/en/class.reflectionfunctionabstract.php
 */
class ReflectionFunctionAbstract implements Reflector {
	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void
	 */
	final private function __clone() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool <b>TRUE</b> if it's in a namespace, otherwise <b>FALSE</b>
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool <b>TRUE</b> if the function is a <b>Closure</b>, otherwise <b>FALSE</b>.
	 */
	public function isClosure(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool <b>TRUE</b> if it's deprecated, otherwise <b>FALSE</b>
	 */
	public function isDeprecated(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool <b>TRUE</b> if it's internal, otherwise <b>FALSE</b>
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool <b>TRUE</b> if it's user-defined, otherwise false;
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * Returns whether this function is a generator
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
	 * @return bool <b>TRUE</b> if the function is generator, <b>FALSE</b> if it is not or <b>NULL</b>
	 * on failure.
	 */
	public function isGenerator(): bool {}

	/**
	 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
	 * Checks if the function is variadic
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
	 * @return bool <b>TRUE</b> if the function is variadic, otherwise <b>FALSE</b>.
	 */
	public function isVariadic(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns this pointer bound to closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this pointer.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getClosureThis() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns the scope associated to the closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass the class on success or <b>NULL</b> on failure.
	 */
	public function getClosureScopeClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise <b>FALSE</b>
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined function, or <b>FALSE</b> if unknown.
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a <b>ReflectionExtension</b> object.
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 */
	public function getNumberOfParameters(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 */
	public function getNumberOfRequiredParameters(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return array The parameters, as a <b>ReflectionParameter</b> object.
	 */
	public function getParameters(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 */
	public function getShortName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 */
	public function getStaticVariables(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool <b>TRUE</b> if it returns a reference, otherwise <b>FALSE</b>
	 */
	public function returnsReference(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if the function has a specified return type
	 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
	 * @return bool <b>TRUE</b> if the function is a specified return type, otherwise <b>FALSE</b>.
	 */
	public function hasReturnType(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Gets the specified return type of a function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
	 * @return ReflectionType a <b>ReflectionType</b> object if a return type is
	 * specified, <b>NULL</b> otherwise.
	 */
	public function getReturnType(): ReflectionType {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflector.export.php
	 * @return string
	 */
	abstract public static function export(): string;

	/**
	 * (PHP 5, PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflector.tostring.php
	 * @return string
	 */
	abstract public function __toString(): string;

}

/**
 * The <b>ReflectionFunction</b> class reports
 * information about a function.
 * @link http://php.net/manual/en/class.reflectionfunction.php
 */
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector {
	const IS_DEPRECATED = 262144;

	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Constructs a ReflectionFunction object
	 * @link http://php.net/manual/en/reflectionfunction.construct.php
	 * @param mixed $name <p>
	 * The name of the function to reflect or a closure.
	 * </p>
	 */
	public function __construct($name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionfunction.tostring.php
	 * @return string <b>ReflectionFunction::export</b>-like output for
	 * the function.
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Exports function
	 * @link http://php.net/manual/en/reflectionfunction.export.php
	 * @param string $name <p>
	 * The reflection to export.
	 * </p>
	 * @param string $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 */
	public static function export(string $name, string $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if function is disabled
	 * @link http://php.net/manual/en/reflectionfunction.isdisabled.php
	 * @return bool <b>TRUE</b> if it's disable, otherwise <b>FALSE</b>
	 */
	public function isDisabled(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Invokes function
	 * @link http://php.net/manual/en/reflectionfunction.invoke.php
	 * @param mixed $parameter [optional]
	 * @param mixed $_ [optional]
	 * @return mixed the result of the invoked function call.
	 */
	public function invoke($parameter = null, $_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Invokes function args
	 * @link http://php.net/manual/en/reflectionfunction.invokeargs.php
	 * @param array $args <p>
	 * The passed arguments to the function as an array, much like
	 * <b>call_user_func_array</b> works.
	 * </p>
	 * @return mixed the result of the invoked function
	 */
	public function invokeArgs(array $args) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns a dynamically created closure for the function
	 * @link http://php.net/manual/en/reflectionfunction.getclosure.php
	 * @return Closure <b>Closure</b>.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getClosure(): Closure {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void
	 */
	final private function __clone() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool <b>TRUE</b> if it's in a namespace, otherwise <b>FALSE</b>
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool <b>TRUE</b> if the function is a <b>Closure</b>, otherwise <b>FALSE</b>.
	 */
	public function isClosure(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool <b>TRUE</b> if it's deprecated, otherwise <b>FALSE</b>
	 */
	public function isDeprecated(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool <b>TRUE</b> if it's internal, otherwise <b>FALSE</b>
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool <b>TRUE</b> if it's user-defined, otherwise false;
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * Returns whether this function is a generator
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
	 * @return bool <b>TRUE</b> if the function is generator, <b>FALSE</b> if it is not or <b>NULL</b>
	 * on failure.
	 */
	public function isGenerator(): bool {}

	/**
	 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
	 * Checks if the function is variadic
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
	 * @return bool <b>TRUE</b> if the function is variadic, otherwise <b>FALSE</b>.
	 */
	public function isVariadic(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns this pointer bound to closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this pointer.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getClosureThis() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns the scope associated to the closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass the class on success or <b>NULL</b> on failure.
	 */
	public function getClosureScopeClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise <b>FALSE</b>
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined function, or <b>FALSE</b> if unknown.
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a <b>ReflectionExtension</b> object.
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 */
	public function getNumberOfParameters(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 */
	public function getNumberOfRequiredParameters(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return array The parameters, as a <b>ReflectionParameter</b> object.
	 */
	public function getParameters(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 */
	public function getShortName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 */
	public function getStaticVariables(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool <b>TRUE</b> if it returns a reference, otherwise <b>FALSE</b>
	 */
	public function returnsReference(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if the function has a specified return type
	 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
	 * @return bool <b>TRUE</b> if the function is a specified return type, otherwise <b>FALSE</b>.
	 */
	public function hasReturnType(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Gets the specified return type of a function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
	 * @return ReflectionType a <b>ReflectionType</b> object if a return type is
	 * specified, <b>NULL</b> otherwise.
	 */
	public function getReturnType(): ReflectionType {}

}

/**
 * The <b>ReflectionGenerator</b> class reports
 * information about a generator.
 * @link http://php.net/manual/en/class.reflectiongenerator.php
 */
class ReflectionGenerator  {

	/**
	 * (PHP 7)<br/>
	 * Constructs a ReflectionGenerator object
	 * @link http://php.net/manual/en/reflectiongenerator.construct.php
	 * @param Generator $generator <p>
	 * A generator object.
	 * </p>
	 */
	public function __construct(Generator $generator) {}

	/**
	 * (PHP 7)<br/>
	 * Gets the currently executing line of the generator
	 * @link http://php.net/manual/en/reflectiongenerator.getexecutingline.php
	 * @return int the line number of the currently executing statement in the generator.
	 */
	public function getExecutingLine(): int {}

	/**
	 * (PHP 7)<br/>
	 * Gets the file name of the currently executing generator
	 * @link http://php.net/manual/en/reflectiongenerator.getexecutingfile.php
	 * @return string the full path and file name of the currently executing generator.
	 */
	public function getExecutingFile(): string {}

	/**
	 * (PHP 7)<br/>
	 * Gets the trace of the executing generator
	 * @link http://php.net/manual/en/reflectiongenerator.gettrace.php
	 * @param int $options [optional] <p>
	 * The value of <i>options</i> can be any of the following
	 * the following flags.
	 * </p>
	 * <p>
	 * <table>
	 * Available options
	 * <tr valign="top">
	 * <td>Option</td>
	 * <td>Description</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>
	 * <b>DEBUG_BACKTRACE_PROVIDE_OBJECT</b>
	 * </td>
	 * <td>
	 * Default.
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>
	 * <b>DEBUG_BACKTRACE_IGNORE_ARGS</b>
	 * </td>
	 * <td>
	 * Don't include the argument information for functions in the stack
	 * trace.
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return array the trace of the currently executing generator.
	 */
	public function getTrace(int $options = DEBUG_BACKTRACE_PROVIDE_OBJECT): array {}

	/**
	 * (PHP 7)<br/>
	 * Gets the function name of the generator
	 * @link http://php.net/manual/en/reflectiongenerator.getfunction.php
	 * @return ReflectionFunctionAbstract a <b>ReflectionFunctionAbstract</b> class. This will
	 * be <b>ReflectionFunction</b> for functions, or
	 * <b>ReflectionMethod</b> for methods.
	 */
	public function getFunction(): ReflectionFunctionAbstract {}

	/**
	 * (PHP 7)<br/>
	 * Gets the $this value of the generator
	 * @link http://php.net/manual/en/reflectiongenerator.getthis.php
	 * @return object the $this value, or <b>NULL</b> if the generator was
	 * not created in a class context.
	 */
	public function getThis() {}

	/**
	 * (PHP 7)<br/>
	 * Gets the executing <b>Generator</b> object
	 * @link http://php.net/manual/en/reflectiongenerator.getexecutinggenerator.php
	 * @return Generator the currently executing <b>Generator</b> object.
	 */
	public function getExecutingGenerator(): Generator {}

}

/**
 * The <b>ReflectionParameter</b> class retrieves
 * information about function's or method's parameters.
 * @link http://php.net/manual/en/class.reflectionparameter.php
 */
class ReflectionParameter implements Reflector {
	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Clone
	 * @link http://php.net/manual/en/reflectionparameter.clone.php
	 * @return void
	 */
	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflectionparameter.export.php
	 * @param string $function <p>
	 * The function name.
	 * </p>
	 * @param string $parameter <p>
	 * The parameter name.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string The exported reflection.
	 */
	public static function export(string $function, string $parameter, bool $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Construct
	 * @link http://php.net/manual/en/reflectionparameter.construct.php
	 * @param string $function <p>
	 * The function to reflect parameters from.
	 * </p>
	 * @param string $parameter <p>
	 * The parameter.
	 * </p>
	 */
	public function __construct(string $function, string $parameter) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionparameter.tostring.php
	 * @return string
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets parameter name
	 * @link http://php.net/manual/en/reflectionparameter.getname.php
	 * @return string The name of the reflected parameter.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if passed by reference
	 * @link http://php.net/manual/en/reflectionparameter.ispassedbyreference.php
	 * @return bool <b>TRUE</b> if the parameter is passed in by reference, otherwise <b>FALSE</b>
	 */
	public function isPassedByReference(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this parameter can be passed by value
	 * @link http://php.net/manual/en/reflectionparameter.canbepassedbyvalue.php
	 * @return bool <b>TRUE</b> if the parameter can be passed by value, <b>FALSE</b> otherwise.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function canBePassedByValue(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.3, PHP 7)<br/>
	 * Gets declaring function
	 * @link http://php.net/manual/en/reflectionparameter.getdeclaringfunction.php
	 * @return ReflectionFunctionAbstract A <b>ReflectionFunction</b> object.
	 */
	public function getDeclaringFunction(): ReflectionFunctionAbstract {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionparameter.getdeclaringclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object.
	 */
	public function getDeclaringClass(): ReflectionClass {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Get the type hinted class
	 * @link http://php.net/manual/en/reflectionparameter.getclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object.
	 */
	public function getClass(): ReflectionClass {}

	/**
	 * (PHP 7)<br/>
	 * Checks if parameter has a type
	 * @link http://php.net/manual/en/reflectionparameter.hastype.php
	 * @return bool <b>TRUE</b> if a type is specified, <b>FALSE</b> otherwise.
	 */
	public function hasType(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Gets a parameter's type
	 * @link http://php.net/manual/en/reflectionparameter.gettype.php
	 * @return ReflectionType a <b>ReflectionType</b> object if a parameter type is
	 * specified, <b>NULL</b> otherwise.
	 */
	public function getType(): ReflectionType {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if parameter expects an array
	 * @link http://php.net/manual/en/reflectionparameter.isarray.php
	 * @return bool <b>TRUE</b> if an array is expected, <b>FALSE</b> otherwise.
	 */
	public function isArray(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.0, PHP 7)<br/>
	 * Returns whether parameter MUST be callable
	 * @link http://php.net/manual/en/reflectionparameter.iscallable.php
	 * @return bool <b>TRUE</b> if the parameter is callable, <b>FALSE</b> if it is
	 * not or <b>NULL</b> on failure.
	 */
	public function isCallable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if null is allowed
	 * @link http://php.net/manual/en/reflectionparameter.allowsnull.php
	 * @return bool <b>TRUE</b> if <b>NULL</b> is allowed, otherwise <b>FALSE</b>
	 */
	public function allowsNull(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.3, PHP 7)<br/>
	 * Gets parameter position
	 * @link http://php.net/manual/en/reflectionparameter.getposition.php
	 * @return int The position of the parameter, left to right, starting at position #0.
	 */
	public function getPosition(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Checks if optional
	 * @link http://php.net/manual/en/reflectionparameter.isoptional.php
	 * @return bool <b>TRUE</b> if the parameter is optional, otherwise <b>FALSE</b>
	 */
	public function isOptional(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Checks if a default value is available
	 * @link http://php.net/manual/en/reflectionparameter.isdefaultvalueavailable.php
	 * @return bool <b>TRUE</b> if a default value is available, otherwise <b>FALSE</b>
	 */
	public function isDefaultValueAvailable(): bool {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets default parameter value
	 * @link http://php.net/manual/en/reflectionparameter.getdefaultvalue.php
	 * @return mixed The parameters default value.
	 */
	public function getDefaultValue() {}

	/**
	 * (PHP 5 &gt;= 5.4.6, PHP 7)<br/>
	 * Returns whether the default value of this parameter is constant
	 * @link http://php.net/manual/en/reflectionparameter.isdefaultvalueconstant.php
	 * @return bool <b>TRUE</b> if the default value is constant, <b>FALSE</b> if it is not or
	 * <b>NULL</b> on failure.
	 */
	public function isDefaultValueConstant(): bool {}

	/**
	 * (PHP 5 &gt;= 5.4.6, PHP 7)<br/>
	 * Returns the default value's constant name if default value is constant or null
	 * @link http://php.net/manual/en/reflectionparameter.getdefaultvalueconstantname.php
	 * @return string string on success or <b>NULL</b> on failure.
	 */
	public function getDefaultValueConstantName(): string {}

	/**
	 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
	 * Checks if the parameter is variadic
	 * @link http://php.net/manual/en/reflectionparameter.isvariadic.php
	 * @return bool <b>TRUE</b> if the parameter is variadic, otherwise <b>FALSE</b>.
	 */
	public function isVariadic(): bool {}

}

/**
 * The <b>ReflectionType</b> class reports
 * information about a function's return type.
 * @link http://php.net/manual/en/class.reflectiontype.php
 */
class ReflectionType  {

	final private function __clone() {}

	/**
	 * (PHP 7)<br/>
	 * Checks if null is allowed
	 * @link http://php.net/manual/en/reflectiontype.allowsnull.php
	 * @return bool <b>TRUE</b> if <b>NULL</b> is allowed, otherwise <b>FALSE</b>
	 */
	public function allowsNull(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if it is a built-in type
	 * @link http://php.net/manual/en/reflectiontype.isbuiltin.php
	 * @return bool <b>TRUE</b> if it's a built-in type, otherwise <b>FALSE</b>
	 */
	public function isBuiltin(): bool {}

	/**
	 * (PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectiontype.tostring.php
	 * @return string the type of the parameter.
	 */
	public function __toString(): string {}

}

/**
 * The <b>ReflectionMethod</b> class reports
 * information about a method.
 * @link http://php.net/manual/en/class.reflectionmethod.php
 */
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;
	const IS_ABSTRACT = 2;
	const IS_FINAL = 4;

	public $name;
	public $class;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Export a reflection method.
	 * @link http://php.net/manual/en/reflectionmethod.export.php
	 * @param string $class <p>
	 * The class name.
	 * </p>
	 * @param string $name <p>
	 * The name of the method.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 */
	public static function export(string $class, string $name, bool $return = false): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Constructs a ReflectionMethod
	 * @link http://php.net/manual/en/reflectionmethod.construct.php
	 * @param mixed $class <p>
	 * Classname or object (instance of the class) that contains the method.
	 * </p>
	 * @param string $name <p>
	 * Name of the method.
	 * </p>
	 */
	public function __construct($class, string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Returns the string representation of the Reflection method object.
	 * @link http://php.net/manual/en/reflectionmethod.tostring.php
	 * @return string A string representation of this <b>ReflectionMethod</b> instance.
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is public
	 * @link http://php.net/manual/en/reflectionmethod.ispublic.php
	 * @return bool <b>TRUE</b> if the method is public, otherwise <b>FALSE</b>
	 */
	public function isPublic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is private
	 * @link http://php.net/manual/en/reflectionmethod.isprivate.php
	 * @return bool <b>TRUE</b> if the method is private, otherwise <b>FALSE</b>
	 */
	public function isPrivate(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is protected
	 * @link http://php.net/manual/en/reflectionmethod.isprotected.php
	 * @return bool <b>TRUE</b> if the method is protected, otherwise <b>FALSE</b>
	 */
	public function isProtected(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is abstract
	 * @link http://php.net/manual/en/reflectionmethod.isabstract.php
	 * @return bool <b>TRUE</b> if the method is abstract, otherwise <b>FALSE</b>
	 */
	public function isAbstract(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is final
	 * @link http://php.net/manual/en/reflectionmethod.isfinal.php
	 * @return bool <b>TRUE</b> if the method is final, otherwise <b>FALSE</b>
	 */
	public function isFinal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is static
	 * @link http://php.net/manual/en/reflectionmethod.isstatic.php
	 * @return bool <b>TRUE</b> if the method is static, otherwise <b>FALSE</b>
	 */
	public function isStatic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is a constructor
	 * @link http://php.net/manual/en/reflectionmethod.isconstructor.php
	 * @return bool <b>TRUE</b> if the method is a constructor, otherwise <b>FALSE</b>
	 */
	public function isConstructor(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if method is a destructor
	 * @link http://php.net/manual/en/reflectionmethod.isdestructor.php
	 * @return bool <b>TRUE</b> if the method is a destructor, otherwise <b>FALSE</b>
	 */
	public function isDestructor(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns a dynamically created closure for the method
	 * @link http://php.net/manual/en/reflectionmethod.getclosure.php
	 * @param object $object <p>
	 * Forbidden for static methods, required for other methods.
	 * </p>
	 * @return Closure <b>Closure</b>.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getClosure($object): Closure {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the method modifiers
	 * @link http://php.net/manual/en/reflectionmethod.getmodifiers.php
	 * @return int A numeric representation of the modifiers. The modifiers are listed below.
	 * The actual meanings of these modifiers are described in the
	 * predefined constants.
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Invoke
	 * @link http://php.net/manual/en/reflectionmethod.invoke.php
	 * @param object $object <p>
	 * The object to invoke the method on. For static methods, pass
	 * null to this parameter.
	 * </p>
	 * @param mixed $parameter [optional] <p>
	 * Zero or more parameters to be passed to the method.
	 * It accepts a variable number of parameters which are passed to the method.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return mixed the method result.
	 */
	public function invoke($object, $parameter = null, $_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Invoke args
	 * @link http://php.net/manual/en/reflectionmethod.invokeargs.php
	 * @param object $object <p>
	 * The object to invoke the method on. In case of static methods, you can pass
	 * null to this parameter.
	 * </p>
	 * @param array $args <p>
	 * The parameters to be passed to the function, as an array.
	 * </p>
	 * @return mixed the method result.
	 */
	public function invokeArgs($object, array $args) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets declaring class for the reflected method.
	 * @link http://php.net/manual/en/reflectionmethod.getdeclaringclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object of the class that the
	 * reflected method is part of.
	 */
	public function getDeclaringClass(): ReflectionClass {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the method prototype (if there is one).
	 * @link http://php.net/manual/en/reflectionmethod.getprototype.php
	 * @return ReflectionMethod A <b>ReflectionMethod</b> instance of the method prototype.
	 */
	public function getPrototype(): ReflectionMethod {}

	/**
	 * (PHP 5 &gt;= 5.3.2, PHP 7)<br/>
	 * Set method accessibility
	 * @link http://php.net/manual/en/reflectionmethod.setaccessible.php
	 * @param bool $accessible <p>
	 * <b>TRUE</b> to allow accessibility, or <b>FALSE</b>.
	 * </p>
	 * @return void No value is returned.
	 */
	public function setAccessible(bool $accessible) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void
	 */
	final private function __clone() {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool <b>TRUE</b> if it's in a namespace, otherwise <b>FALSE</b>
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool <b>TRUE</b> if the function is a <b>Closure</b>, otherwise <b>FALSE</b>.
	 */
	public function isClosure(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool <b>TRUE</b> if it's deprecated, otherwise <b>FALSE</b>
	 */
	public function isDeprecated(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool <b>TRUE</b> if it's internal, otherwise <b>FALSE</b>
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool <b>TRUE</b> if it's user-defined, otherwise false;
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 5 &gt;= 5.5.0, PHP 7)<br/>
	 * Returns whether this function is a generator
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isgenerator.php
	 * @return bool <b>TRUE</b> if the function is generator, <b>FALSE</b> if it is not or <b>NULL</b>
	 * on failure.
	 */
	public function isGenerator(): bool {}

	/**
	 * (PHP 5 &gt;= 5.6.0, PHP 7)<br/>
	 * Checks if the function is variadic
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isvariadic.php
	 * @return bool <b>TRUE</b> if the function is variadic, otherwise <b>FALSE</b>.
	 */
	public function isVariadic(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns this pointer bound to closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurethis.php
	 * @return object $this pointer.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getClosureThis() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns the scope associated to the closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getclosurescopeclass.php
	 * @return ReflectionClass the class on success or <b>NULL</b> on failure.
	 */
	public function getClosureScopeClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise <b>FALSE</b>
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined function, or <b>FALSE</b> if unknown.
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a <b>ReflectionExtension</b> object.
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 */
	public function getNumberOfParameters(): int {}

	/**
	 * (PHP 5 &gt;= 5.0.3, PHP 7)<br/>
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 */
	public function getNumberOfRequiredParameters(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return array The parameters, as a <b>ReflectionParameter</b> object.
	 */
	public function getParameters(): array {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 */
	public function getShortName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 */
	public function getStaticVariables(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool <b>TRUE</b> if it returns a reference, otherwise <b>FALSE</b>
	 */
	public function returnsReference(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if the function has a specified return type
	 * @link http://php.net/manual/en/reflectionfunctionabstract.hasreturntype.php
	 * @return bool <b>TRUE</b> if the function is a specified return type, otherwise <b>FALSE</b>.
	 */
	public function hasReturnType(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Gets the specified return type of a function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getreturntype.php
	 * @return ReflectionType a <b>ReflectionType</b> object if a return type is
	 * specified, <b>NULL</b> otherwise.
	 */
	public function getReturnType(): ReflectionType {}

}

/**
 * The <b>ReflectionClass</b> class reports
 * information about a class.
 * @link http://php.net/manual/en/class.reflectionclass.php
 */
class ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 4;

	public $name;


	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Exports a class
	 * @link http://php.net/manual/en/reflectionclass.export.php
	 * @param mixed $argument <p>
	 * The reflection to export.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 */
	public static function export($argument, bool $return = false): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Constructs a ReflectionClass
	 * @link http://php.net/manual/en/reflectionclass.construct.php
	 * @param mixed $argument <p>
	 * Either a string containing the name of the class to
	 * reflect, or an object.
	 * </p>
	 */
	public function __construct($argument) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Returns the string representation of the ReflectionClass object.
	 * @link http://php.net/manual/en/reflectionclass.tostring.php
	 * @return string A string representation of this <b>ReflectionClass</b> instance.
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets class name
	 * @link http://php.net/manual/en/reflectionclass.getname.php
	 * @return string The class name.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if class is defined internally by an extension, or the core
	 * @link http://php.net/manual/en/reflectionclass.isinternal.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if class is anonymous
	 * @link http://php.net/manual/en/reflectionclass.isanonymous.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isAnonymous(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if the class is instantiable
	 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInstantiable(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this class is cloneable
	 * @link http://php.net/manual/en/reflectionclass.iscloneable.php
	 * @return bool <b>TRUE</b> if the class is cloneable, <b>FALSE</b> otherwise.
	 */
	public function isCloneable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the filename of the file in which the class has been defined
	 * @link http://php.net/manual/en/reflectionclass.getfilename.php
	 * @return string the filename of the file in which the class has been defined.
	 * If the class is defined in the PHP core or in a PHP extension, <b>FALSE</b>
	 * is returned.
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionclass.getstartline.php
	 * @return int The starting line number, as an integer.
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets end line
	 * @link http://php.net/manual/en/reflectionclass.getendline.php
	 * @return int The ending line number of the user defined class, or <b>FALSE</b> if unknown.
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets doc comments
	 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise <b>FALSE</b>
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the constructor of the class
	 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
	 * @return ReflectionMethod A <b>ReflectionMethod</b> object reflecting the class' constructor, or <b>NULL</b> if the class
	 * has no constructor.
	 */
	public function getConstructor(): ReflectionMethod {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if method is defined
	 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * Name of the method being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if it has the method, otherwise <b>FALSE</b>
	 */
	public function hasMethod(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets a <b>ReflectionMethod</b> for a class method.
	 * @link http://php.net/manual/en/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * The method name to reflect.
	 * </p>
	 * @return ReflectionMethod A <b>ReflectionMethod</b>.
	 */
	public function getMethod(string $name): ReflectionMethod {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets an array of methods
	 * @link http://php.net/manual/en/reflectionclass.getmethods.php
	 * @param int $filter [optional] <p>
	 * Filter the results to include only methods with certain attributes. Defaults
	 * to no filtering.
	 * </p>
	 * <p>
	 * Any combination of <b>ReflectionMethod::IS_STATIC</b>,
	 * <b>ReflectionMethod::IS_PUBLIC</b>,
	 * <b>ReflectionMethod::IS_PROTECTED</b>,
	 * <b>ReflectionMethod::IS_PRIVATE</b>,
	 * <b>ReflectionMethod::IS_ABSTRACT</b>,
	 * <b>ReflectionMethod::IS_FINAL</b>.
	 * </p>
	 * @return array An array of <b>ReflectionMethod</b> objects
	 * reflecting each method.
	 */
	public function getMethods(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if property is defined
	 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * Name of the property being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if it has the property, otherwise <b>FALSE</b>
	 */
	public function hasProperty(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets a <b>ReflectionProperty</b> for a class's property
	 * @link http://php.net/manual/en/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @return ReflectionProperty A <b>ReflectionProperty</b>.
	 */
	public function getProperty(string $name): ReflectionProperty {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets properties
	 * @link http://php.net/manual/en/reflectionclass.getproperties.php
	 * @param int $filter [optional] <p>
	 * The optional filter, for filtering desired property types. It's configured using
	 * the ReflectionProperty constants,
	 * and defaults to all property types.
	 * </p>
	 * @return array An array of <b>ReflectionProperty</b> objects.
	 */
	public function getProperties(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if constant is defined
	 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * The name of the constant being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if the constant is defined, otherwise <b>FALSE</b>.
	 */
	public function hasConstant(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionclass.getconstants.php
	 * @return array An array of constants.
	 * Constant name in key, constant value in value.
	 */
	public function getConstants(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets defined constant
	 * @link http://php.net/manual/en/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * Name of the constant.
	 * </p>
	 * @return mixed Value of the constant.
	 */
	public function getConstant(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the interfaces
	 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
	 * @return array An associative array of interfaces, with keys as interface
	 * names and the array values as <b>ReflectionClass</b> objects.
	 */
	public function getInterfaces(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * Gets the interface names
	 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
	 * @return array A numerical array with interface names as the values.
	 */
	public function getInterfaceNames(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if the class is an interface
	 * @link http://php.net/manual/en/reflectionclass.isinterface.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInterface(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns an array of traits used by this class
	 * @link http://php.net/manual/en/reflectionclass.gettraits.php
	 * @return array an array with trait names in keys and instances of trait's
	 * <b>ReflectionClass</b> in values.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getTraits(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns an array of names of traits used by this class
	 * @link http://php.net/manual/en/reflectionclass.gettraitnames.php
	 * @return array an array with trait names in values.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getTraitNames(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns an array of trait aliases
	 * @link http://php.net/manual/en/reflectionclass.gettraitaliases.php
	 * @return array an array with new method names in keys and original names (in the
	 * format "TraitName::original") in values.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getTraitAliases(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this is a trait
	 * @link http://php.net/manual/en/reflectionclass.istrait.php
	 * @return bool <b>TRUE</b> if this is a trait, <b>FALSE</b> otherwise.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function isTrait(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if class is abstract
	 * @link http://php.net/manual/en/reflectionclass.isabstract.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isAbstract(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if class is final
	 * @link http://php.net/manual/en/reflectionclass.isfinal.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isFinal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
	 * @return int bitmask of
	 * modifier constants.
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks class for instance
	 * @link http://php.net/manual/en/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * The object being compared to.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInstance($object): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Creates a new class instance from given arguments.
	 * @link http://php.net/manual/en/reflectionclass.newinstance.php
	 * @param mixed $args <p>
	 * Accepts a variable number of arguments which are passed to the class
	 * constructor, much like <b>call_user_func</b>.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return object
	 */
	public function newInstance($args, $_ = null) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Creates a new class instance without invoking the constructor.
	 * @link http://php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
	 * @return object
	 */
	public function newInstanceWithoutConstructor() {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * Creates a new class instance from given arguments.
	 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * The parameters to be passed to the class constructor as an array.
	 * </p>
	 * @return object a new instance of the class.
	 */
	public function newInstanceArgs(array $args = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets parent class
	 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
	 * @return object A <b>ReflectionClass</b>.
	 */
	public function getParentClass() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if a subclass
	 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * The class name being checked against.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isSubclassOf(string $class): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets static properties
	 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
	 * @return array The static properties, as an array.
	 */
	public function getStaticProperties(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets static property value
	 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * The name of the static property for which to return a value.
	 * </p>
	 * @param mixed $def_value [optional] <p>
	 * A default value to return in case the class does not declare a static
	 * property with the given <i>name</i>. If the property does
	 * not exist and this argument is omitted, a
	 * <b>ReflectionException</b> is thrown.
	 * </p>
	 * @return mixed The value of the static property.
	 */
	public function getStaticPropertyValue(string $name, &$def_value = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Sets static property value
	 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * Property name.
	 * </p>
	 * @param string $value <p>
	 * New property value.
	 * </p>
	 * @return void No value is returned.
	 */
	public function setStaticPropertyValue(string $name, string $value) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets default properties
	 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
	 * @return array An array of default properties, with the key being the name of
	 * the property and the value being the default value of the property or <b>NULL</b>
	 * if the property doesn't have a default value. The function does not distinguish
	 * between static and non static properties and does not take visibility modifiers
	 * into account.
	 */
	public function getDefaultProperties(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if iterateable
	 * @link http://php.net/manual/en/reflectionclass.isiterateable.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isIterateable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Implements interface
	 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * The interface name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function implementsInterface(string $interface): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets a <b>ReflectionExtension</b> object for the extension which defined the class
	 * @link http://php.net/manual/en/reflectionclass.getextension.php
	 * @return ReflectionExtension A <b>ReflectionExtension</b> object representing the extension which defined the class,
	 * or <b>NULL</b> for user-defined classes.
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the name of the extension which defined the class
	 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
	 * @return string The name of the extension which defined the class, or <b>FALSE</b> for user-defined classes.
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if in namespace
	 * @link http://php.net/manual/en/reflectionclass.innamespace.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets short name
	 * @link http://php.net/manual/en/reflectionclass.getshortname.php
	 * @return string The class short name.
	 */
	public function getShortName(): string {}

}

/**
 * The <b>ReflectionObject</b> class reports
 * information about an object.
 * @link http://php.net/manual/en/class.reflectionobject.php
 */
class ReflectionObject extends ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 4;

	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionobject.export.php
	 * @param string $argument <p>
	 * The reflection to export.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 */
	public static function export(string $argument, bool $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Constructs a ReflectionObject
	 * @link http://php.net/manual/en/reflectionobject.construct.php
	 * @param object $argument <p>
	 * An object instance.
	 * </p>
	 */
	public function __construct($argument) {}

	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Returns the string representation of the ReflectionClass object.
	 * @link http://php.net/manual/en/reflectionclass.tostring.php
	 * @return string A string representation of this <b>ReflectionClass</b> instance.
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets class name
	 * @link http://php.net/manual/en/reflectionclass.getname.php
	 * @return string The class name.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if class is defined internally by an extension, or the core
	 * @link http://php.net/manual/en/reflectionclass.isinternal.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInternal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isUserDefined(): bool {}

	/**
	 * (PHP 7)<br/>
	 * Checks if class is anonymous
	 * @link http://php.net/manual/en/reflectionclass.isanonymous.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isAnonymous(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if the class is instantiable
	 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInstantiable(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this class is cloneable
	 * @link http://php.net/manual/en/reflectionclass.iscloneable.php
	 * @return bool <b>TRUE</b> if the class is cloneable, <b>FALSE</b> otherwise.
	 */
	public function isCloneable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the filename of the file in which the class has been defined
	 * @link http://php.net/manual/en/reflectionclass.getfilename.php
	 * @return string the filename of the file in which the class has been defined.
	 * If the class is defined in the PHP core or in a PHP extension, <b>FALSE</b>
	 * is returned.
	 */
	public function getFileName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionclass.getstartline.php
	 * @return int The starting line number, as an integer.
	 */
	public function getStartLine(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets end line
	 * @link http://php.net/manual/en/reflectionclass.getendline.php
	 * @return int The ending line number of the user defined class, or <b>FALSE</b> if unknown.
	 */
	public function getEndLine(): int {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets doc comments
	 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise <b>FALSE</b>
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the constructor of the class
	 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
	 * @return ReflectionMethod A <b>ReflectionMethod</b> object reflecting the class' constructor, or <b>NULL</b> if the class
	 * has no constructor.
	 */
	public function getConstructor(): ReflectionMethod {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if method is defined
	 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * Name of the method being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if it has the method, otherwise <b>FALSE</b>
	 */
	public function hasMethod(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets a <b>ReflectionMethod</b> for a class method.
	 * @link http://php.net/manual/en/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * The method name to reflect.
	 * </p>
	 * @return ReflectionMethod A <b>ReflectionMethod</b>.
	 */
	public function getMethod(string $name): ReflectionMethod {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets an array of methods
	 * @link http://php.net/manual/en/reflectionclass.getmethods.php
	 * @param int $filter [optional] <p>
	 * Filter the results to include only methods with certain attributes. Defaults
	 * to no filtering.
	 * </p>
	 * <p>
	 * Any combination of <b>ReflectionMethod::IS_STATIC</b>,
	 * <b>ReflectionMethod::IS_PUBLIC</b>,
	 * <b>ReflectionMethod::IS_PROTECTED</b>,
	 * <b>ReflectionMethod::IS_PRIVATE</b>,
	 * <b>ReflectionMethod::IS_ABSTRACT</b>,
	 * <b>ReflectionMethod::IS_FINAL</b>.
	 * </p>
	 * @return array An array of <b>ReflectionMethod</b> objects
	 * reflecting each method.
	 */
	public function getMethods(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if property is defined
	 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * Name of the property being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if it has the property, otherwise <b>FALSE</b>
	 */
	public function hasProperty(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets a <b>ReflectionProperty</b> for a class's property
	 * @link http://php.net/manual/en/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @return ReflectionProperty A <b>ReflectionProperty</b>.
	 */
	public function getProperty(string $name): ReflectionProperty {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets properties
	 * @link http://php.net/manual/en/reflectionclass.getproperties.php
	 * @param int $filter [optional] <p>
	 * The optional filter, for filtering desired property types. It's configured using
	 * the ReflectionProperty constants,
	 * and defaults to all property types.
	 * </p>
	 * @return array An array of <b>ReflectionProperty</b> objects.
	 */
	public function getProperties(int $filter = null): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Checks if constant is defined
	 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * The name of the constant being checked for.
	 * </p>
	 * @return bool <b>TRUE</b> if the constant is defined, otherwise <b>FALSE</b>.
	 */
	public function hasConstant(string $name): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionclass.getconstants.php
	 * @return array An array of constants.
	 * Constant name in key, constant value in value.
	 */
	public function getConstants(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets defined constant
	 * @link http://php.net/manual/en/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * Name of the constant.
	 * </p>
	 * @return mixed Value of the constant.
	 */
	public function getConstant(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the interfaces
	 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
	 * @return array An associative array of interfaces, with keys as interface
	 * names and the array values as <b>ReflectionClass</b> objects.
	 */
	public function getInterfaces(): array {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7)<br/>
	 * Gets the interface names
	 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
	 * @return array A numerical array with interface names as the values.
	 */
	public function getInterfaceNames(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if the class is an interface
	 * @link http://php.net/manual/en/reflectionclass.isinterface.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInterface(): bool {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns an array of traits used by this class
	 * @link http://php.net/manual/en/reflectionclass.gettraits.php
	 * @return array an array with trait names in keys and instances of trait's
	 * <b>ReflectionClass</b> in values.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getTraits(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns an array of names of traits used by this class
	 * @link http://php.net/manual/en/reflectionclass.gettraitnames.php
	 * @return array an array with trait names in values.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getTraitNames(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns an array of trait aliases
	 * @link http://php.net/manual/en/reflectionclass.gettraitaliases.php
	 * @return array an array with new method names in keys and original names (in the
	 * format "TraitName::original") in values.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function getTraitAliases(): array {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this is a trait
	 * @link http://php.net/manual/en/reflectionclass.istrait.php
	 * @return bool <b>TRUE</b> if this is a trait, <b>FALSE</b> otherwise.
	 * Returns <b>NULL</b> in case of an error.
	 */
	public function isTrait(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if class is abstract
	 * @link http://php.net/manual/en/reflectionclass.isabstract.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isAbstract(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if class is final
	 * @link http://php.net/manual/en/reflectionclass.isfinal.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isFinal(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
	 * @return int bitmask of
	 * modifier constants.
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks class for instance
	 * @link http://php.net/manual/en/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * The object being compared to.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isInstance($object): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Creates a new class instance from given arguments.
	 * @link http://php.net/manual/en/reflectionclass.newinstance.php
	 * @param mixed $args <p>
	 * Accepts a variable number of arguments which are passed to the class
	 * constructor, much like <b>call_user_func</b>.
	 * </p>
	 * @param mixed $_ [optional]
	 * @return object
	 */
	public function newInstance($args, $_ = null) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Creates a new class instance without invoking the constructor.
	 * @link http://php.net/manual/en/reflectionclass.newinstancewithoutconstructor.php
	 * @return object
	 */
	public function newInstanceWithoutConstructor() {}

	/**
	 * (PHP 5 &gt;= 5.1.3, PHP 7)<br/>
	 * Creates a new class instance from given arguments.
	 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * The parameters to be passed to the class constructor as an array.
	 * </p>
	 * @return object a new instance of the class.
	 */
	public function newInstanceArgs(array $args = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets parent class
	 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
	 * @return object A <b>ReflectionClass</b>.
	 */
	public function getParentClass() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if a subclass
	 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * The class name being checked against.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isSubclassOf(string $class): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets static properties
	 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
	 * @return array The static properties, as an array.
	 */
	public function getStaticProperties(): array {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets static property value
	 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * The name of the static property for which to return a value.
	 * </p>
	 * @param mixed $def_value [optional] <p>
	 * A default value to return in case the class does not declare a static
	 * property with the given <i>name</i>. If the property does
	 * not exist and this argument is omitted, a
	 * <b>ReflectionException</b> is thrown.
	 * </p>
	 * @return mixed The value of the static property.
	 */
	public function getStaticPropertyValue(string $name, &$def_value = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Sets static property value
	 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * Property name.
	 * </p>
	 * @param string $value <p>
	 * New property value.
	 * </p>
	 * @return void No value is returned.
	 */
	public function setStaticPropertyValue(string $name, string $value) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets default properties
	 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
	 * @return array An array of default properties, with the key being the name of
	 * the property and the value being the default value of the property or <b>NULL</b>
	 * if the property doesn't have a default value. The function does not distinguish
	 * between static and non static properties and does not take visibility modifiers
	 * into account.
	 */
	public function getDefaultProperties(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if iterateable
	 * @link http://php.net/manual/en/reflectionclass.isiterateable.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function isIterateable(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Implements interface
	 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * The interface name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function implementsInterface(string $interface): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets a <b>ReflectionExtension</b> object for the extension which defined the class
	 * @link http://php.net/manual/en/reflectionclass.getextension.php
	 * @return ReflectionExtension A <b>ReflectionExtension</b> object representing the extension which defined the class,
	 * or <b>NULL</b> for user-defined classes.
	 */
	public function getExtension(): ReflectionExtension {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets the name of the extension which defined the class
	 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
	 * @return string The name of the extension which defined the class, or <b>FALSE</b> for user-defined classes.
	 */
	public function getExtensionName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Checks if in namespace
	 * @link http://php.net/manual/en/reflectionclass.innamespace.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function inNamespace(): bool {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Gets short name
	 * @link http://php.net/manual/en/reflectionclass.getshortname.php
	 * @return string The class short name.
	 */
	public function getShortName(): string {}

}

/**
 * The <b>ReflectionProperty</b> class reports
 * information about classes properties.
 * @link http://php.net/manual/en/class.reflectionproperty.php
 */
class ReflectionProperty implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;

	public $name;
	public $class;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Clone
	 * @link http://php.net/manual/en/reflectionproperty.clone.php
	 * @return void
	 */
	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionproperty.export.php
	 * @param mixed $class
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @param bool $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string
	 */
	public static function export($class, string $name, bool $return = null): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Construct a ReflectionProperty object
	 * @link http://php.net/manual/en/reflectionproperty.construct.php
	 * @param mixed $class <p>
	 * The class name, that contains the property.
	 * </p>
	 * @param string $name <p>
	 * The name of the property being reflected.
	 * </p>
	 */
	public function __construct($class, string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionproperty.tostring.php
	 * @return string
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets property name
	 * @link http://php.net/manual/en/reflectionproperty.getname.php
	 * @return string The name of the reflected property.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets value
	 * @link http://php.net/manual/en/reflectionproperty.getvalue.php
	 * @param object $object [optional] <p>
	 * If the property is non-static an object must be provided to fetch the
	 * property from. If you want to fetch the default property without
	 * providing an object use <b>ReflectionClass::getDefaultProperties</b>
	 * instead.
	 * </p>
	 * @return mixed The current value of the property.
	 */
	public function getValue($object = null) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Set property value
	 * @link http://php.net/manual/en/reflectionproperty.setvalue.php
	 * @param object $object <p>
	 * If the property is non-static an object must be provided to change
	 * the property on. If the property is static this parameter is left
	 * out and only <i>value</i> needs to be provided.
	 * </p>
	 * @param mixed $value <p>
	 * The new value.
	 * </p>
	 * @return void No value is returned.
	 */
	public function setValue($object, $value) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if property is public
	 * @link http://php.net/manual/en/reflectionproperty.ispublic.php
	 * @return bool <b>TRUE</b> if the property is public, <b>FALSE</b> otherwise.
	 */
	public function isPublic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if property is private
	 * @link http://php.net/manual/en/reflectionproperty.isprivate.php
	 * @return bool <b>TRUE</b> if the property is private, <b>FALSE</b> otherwise.
	 */
	public function isPrivate(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if property is protected
	 * @link http://php.net/manual/en/reflectionproperty.isprotected.php
	 * @return bool <b>TRUE</b> if the property is protected, <b>FALSE</b> otherwise.
	 */
	public function isProtected(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if property is static
	 * @link http://php.net/manual/en/reflectionproperty.isstatic.php
	 * @return bool <b>TRUE</b> if the property is static, <b>FALSE</b> otherwise.
	 */
	public function isStatic(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Checks if property is a default property
	 * @link http://php.net/manual/en/reflectionproperty.isdefault.php
	 * @return bool <b>TRUE</b> if the property was declared at compile-time, or <b>FALSE</b> if
	 * it was created at run-time.
	 */
	public function isDefault(): bool {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionproperty.getmodifiers.php
	 * @return int A numeric representation of the modifiers.
	 */
	public function getModifiers(): int {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionproperty.getdeclaringclass.php
	 * @return ReflectionClass A <b>ReflectionClass</b> object.
	 */
	public function getDeclaringClass(): ReflectionClass {}

	/**
	 * (PHP 5 &gt;= 5.1.0, PHP 7)<br/>
	 * Gets the property doc comment
	 * @link http://php.net/manual/en/reflectionproperty.getdoccomment.php
	 * @return string The property doc comment.
	 */
	public function getDocComment(): string {}

	/**
	 * (PHP 5 &gt;= 5.3.0, PHP 7)<br/>
	 * Set property accessibility
	 * @link http://php.net/manual/en/reflectionproperty.setaccessible.php
	 * @param bool $accessible <p>
	 * <b>TRUE</b> to allow accessibility, or <b>FALSE</b>.
	 * </p>
	 * @return void No value is returned.
	 */
	public function setAccessible(bool $accessible) {}

}

/**
 * The <b>ReflectionExtension</b> class reports
 * information about an extension.
 * @link http://php.net/manual/en/class.reflectionextension.php
 */
class ReflectionExtension implements Reflector {
	public $name;


	/**
	 * (PHP 5, PHP 7)<br/>
	 * Clones
	 * @link http://php.net/manual/en/reflectionextension.clone.php
	 * @return void No value is returned, if called a fatal error will occur.
	 */
	final private function __clone() {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionextension.export.php
	 * @param string $name <p>
	 * The reflection to export.
	 * </p>
	 * @param string $return [optional] <p>
	 * Setting to <b>TRUE</b> will return the export,
	 * as opposed to emitting it. Setting to <b>FALSE</b> (the default) will do the opposite.
	 * </p>
	 * @return string If the <i>return</i> parameter
	 * is set to <b>TRUE</b>, then the export is returned as a string,
	 * otherwise <b>NULL</b> is returned.
	 */
	public static function export(string $name, string $return = false): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Constructs a ReflectionExtension
	 * @link http://php.net/manual/en/reflectionextension.construct.php
	 * @param string $name <p>
	 * Name of the extension.
	 * </p>
	 */
	public function __construct(string $name) {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionextension.tostring.php
	 * @return string the exported extension as a string, in the same way as the
	 * <b>ReflectionExtension::export</b>.
	 */
	public function __toString(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionextension.getname.php
	 * @return string The extensions name.
	 */
	public function getName(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension version
	 * @link http://php.net/manual/en/reflectionextension.getversion.php
	 * @return string The version of the extension.
	 */
	public function getVersion(): string {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension functions
	 * @link http://php.net/manual/en/reflectionextension.getfunctions.php
	 * @return array An associative array of <b>ReflectionFunction</b> objects,
	 * for each function defined in the extension with the keys being the function
	 * names. If no function are defined, an empty array is returned.
	 */
	public function getFunctions(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionextension.getconstants.php
	 * @return array An associative array with constant names as keys.
	 */
	public function getConstants(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets extension ini entries
	 * @link http://php.net/manual/en/reflectionextension.getinientries.php
	 * @return array An associative array with the ini entries as keys,
	 * with their defined values as values.
	 */
	public function getINIEntries(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets classes
	 * @link http://php.net/manual/en/reflectionextension.getclasses.php
	 * @return array An array of <b>ReflectionClass</b> objects, one
	 * for each class within the extension. If no classes are defined,
	 * an empty array is returned.
	 */
	public function getClasses(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets class names
	 * @link http://php.net/manual/en/reflectionextension.getclassnames.php
	 * @return array An array of class names, as defined in the extension.
	 * If no classes are defined, an empty array is returned.
	 */
	public function getClassNames(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Gets dependencies
	 * @link http://php.net/manual/en/reflectionextension.getdependencies.php
	 * @return array An associative array with dependencies as keys and
	 * either Required, Optional
	 * or Conflicts as the values.
	 */
	public function getDependencies(): array {}

	/**
	 * (PHP 5, PHP 7)<br/>
	 * Print extension info
	 * @link http://php.net/manual/en/reflectionextension.info.php
	 * @return void Information about the extension.
	 */
	public function info() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this extension is persistent
	 * @link http://php.net/manual/en/reflectionextension.ispersistent.php
	 * @return void <b>TRUE</b> for extensions loaded by extension, <b>FALSE</b>
	 * otherwise.
	 */
	public function isPersistent() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Returns whether this extension is temporary
	 * @link http://php.net/manual/en/reflectionextension.istemporary.php
	 * @return void <b>TRUE</b> for extensions loaded by <b>dl</b>,
	 * <b>FALSE</b> otherwise.
	 */
	public function isTemporary() {}

}

/**
 * @link http://php.net/manual/en/class.reflectionzendextension.php
 */
class ReflectionZendExtension implements Reflector {
	public $name;


	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Clone handler
	 * @link http://php.net/manual/en/reflectionzendextension.clone.php
	 * @return void
	 */
	final private function __clone() {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionzendextension.export.php
	 * @param string $name <p>
	 * </p>
	 * @param string $return [optional] <p>
	 * </p>
	 * @return string
	 */
	public static function export(string $name, string $return = null): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Constructor
	 * @link http://php.net/manual/en/reflectionzendextension.construct.php
	 * @param string $name <p>
	 * </p>
	 */
	public function __construct(string $name) {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * To string handler
	 * @link http://php.net/manual/en/reflectionzendextension.tostring.php
	 * @return string
	 */
	public function __toString(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Gets name
	 * @link http://php.net/manual/en/reflectionzendextension.getname.php
	 * @return string
	 */
	public function getName(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Gets version
	 * @link http://php.net/manual/en/reflectionzendextension.getversion.php
	 * @return string
	 */
	public function getVersion(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Gets author
	 * @link http://php.net/manual/en/reflectionzendextension.getauthor.php
	 * @return string
	 */
	public function getAuthor(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Gets URL
	 * @link http://php.net/manual/en/reflectionzendextension.geturl.php
	 * @return string
	 */
	public function getURL(): string {}

	/**
	 * (PHP &gt;= 5.4.0)<br/>
	 * Gets copyright
	 * @link http://php.net/manual/en/reflectionzendextension.getcopyright.php
	 * @return string
	 */
	public function getCopyright(): string {}

}
// End of Reflection v.7.0.4-7ubuntu2
?>
