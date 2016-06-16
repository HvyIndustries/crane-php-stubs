<?php

// Start of xmlwriter v.7.0.4-7ubuntu2

class XMLWriter  {

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create new xmlwriter using source uri for output
	 * @link http://php.net/manual/en/function.xmlwriter-open-uri.php
	 * @param string $uri <p>
	 * The URI of the resource for the output.
	 * </p>
	 * @return bool Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 * <p>
	 * Procedural style: Returns a new xmlwriter resource for later use with the
	 * xmlwriter functions on success, <b>FALSE</b> on error.
	 */
	public function openUri(string $uri): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create new xmlwriter using memory for string output
	 * @link http://php.net/manual/en/function.xmlwriter-open-memory.php
	 * @return bool Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 * </p>
	 * <p>
	 * Procedural style: Returns a new xmlwriter resource for later use with the
	 * xmlwriter functions on success, <b>FALSE</b> on error.
	 */
	public function openMemory(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Toggle indentation on/off
	 * @link http://php.net/manual/en/function.xmlwriter-set-indent.php
	 * @param bool $indent <p>
	 * Whether indentation is enabled.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setIndent(bool $indent): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Set string used for indenting
	 * @link http://php.net/manual/en/function.xmlwriter-set-indent-string.php
	 * @param string $indentString <p>
	 * The indentation string.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function setIndentString(string $indentString): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
	 * Create start comment
	 * @link http://php.net/manual/en/function.xmlwriter-start-comment.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startComment(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
	 * Create end comment
	 * @link http://php.net/manual/en/function.xmlwriter-end-comment.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endComment(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start attribute
	 * @link http://php.net/manual/en/function.xmlwriter-start-attribute.php
	 * @param string $name <p>
	 * The attribute name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startAttribute(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End attribute
	 * @link http://php.net/manual/en/function.xmlwriter-end-attribute.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endAttribute(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full attribute
	 * @link http://php.net/manual/en/function.xmlwriter-write-attribute.php
	 * @param string $name <p>
	 * The name of the attribute.
	 * </p>
	 * @param string $value <p>
	 * The value of the attribute.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeAttribute(string $name, string $value): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start namespaced attribute
	 * @link http://php.net/manual/en/function.xmlwriter-start-attribute-ns.php
	 * @param string $prefix <p>
	 * The namespace prefix.
	 * </p>
	 * @param string $name <p>
	 * The attribute name.
	 * </p>
	 * @param string $uri <p>
	 * The namespace URI.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startAttributeNs(string $prefix, string $name, string $uri): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full namespaced attribute
	 * @link http://php.net/manual/en/function.xmlwriter-write-attribute-ns.php
	 * @param string $prefix <p>
	 * The namespace prefix.
	 * </p>
	 * @param string $name <p>
	 * The attribute name.
	 * </p>
	 * @param string $uri <p>
	 * The namespace URI.
	 * </p>
	 * @param string $content <p>
	 * The attribute value.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeAttributeNs(string $prefix, string $name, string $uri, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start element tag
	 * @link http://php.net/manual/en/function.xmlwriter-start-element.php
	 * @param string $name <p>
	 * The element name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startElement(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current element
	 * @link http://php.net/manual/en/function.xmlwriter-end-element.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
	 * End current element
	 * @link http://php.net/manual/en/function.xmlwriter-full-end-element.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function fullEndElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start namespaced element tag
	 * @link http://php.net/manual/en/function.xmlwriter-start-element-ns.php
	 * @param string $prefix <p>
	 * The namespace prefix.
	 * </p>
	 * @param string $name <p>
	 * The element name.
	 * </p>
	 * @param string $uri <p>
	 * The namespace URI.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startElementNs(string $prefix, string $name, string $uri): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full element tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-element.php
	 * @param string $name <p>
	 * The element name.
	 * </p>
	 * @param string $content [optional] <p>
	 * The element contents.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeElement(string $name, string $content = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full namespaced element tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-element-ns.php
	 * @param string $prefix <p>
	 * The namespace prefix.
	 * </p>
	 * @param string $name <p>
	 * The element name.
	 * </p>
	 * @param string $uri <p>
	 * The namespace URI.
	 * </p>
	 * @param string $content [optional] <p>
	 * The element contents.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeElementNs(string $prefix, string $name, string $uri, string $content = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start PI tag
	 * @link http://php.net/manual/en/function.xmlwriter-start-pi.php
	 * @param string $target <p>
	 * The target of the processing instruction.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startPi(string $target): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current PI
	 * @link http://php.net/manual/en/function.xmlwriter-end-pi.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endPi(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Writes a PI
	 * @link http://php.net/manual/en/function.xmlwriter-write-pi.php
	 * @param string $target <p>
	 * The target of the processing instruction.
	 * </p>
	 * @param string $content <p>
	 * The content of the processing instruction.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writePi(string $target, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start CDATA tag
	 * @link http://php.net/manual/en/function.xmlwriter-start-cdata.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startCdata(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current CDATA
	 * @link http://php.net/manual/en/function.xmlwriter-end-cdata.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endCdata(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full CDATA tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-cdata.php
	 * @param string $content <p>
	 * The contents of the CDATA.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeCdata(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write text
	 * @link http://php.net/manual/en/function.xmlwriter-text.php
	 * @param string $content <p>
	 * The contents of the text.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function text(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
	 * Write a raw XML text
	 * @link http://php.net/manual/en/function.xmlwriter-write-raw.php
	 * @param string $content <p>
	 * The text string to write.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeRaw(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create document tag
	 * @link http://php.net/manual/en/function.xmlwriter-start-document.php
	 * @param string $version [optional] <p>
	 * The version number of the document as part of the XML declaration.
	 * </p>
	 * @param string $encoding [optional] <p>
	 * The encoding of the document as part of the XML declaration.
	 * </p>
	 * @param string $standalone [optional] <p>
	 * yes or no.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startDocument(string $version = '1.0', string $encoding = null, string $standalone = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current document
	 * @link http://php.net/manual/en/function.xmlwriter-end-document.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endDocument(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full comment tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-comment.php
	 * @param string $content <p>
	 * The contents of the comment.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeComment(string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start DTD tag
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd.php
	 * @param string $qualifiedName <p>
	 * The qualified name of the document type to create.
	 * </p>
	 * @param string $publicId [optional] <p>
	 * The external subset public identifier.
	 * </p>
	 * @param string $systemId [optional] <p>
	 * The external subset system identifier.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startDtd(string $qualifiedName, string $publicId = null, string $systemId = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current DTD
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endDtd(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full DTD tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd.php
	 * @param string $name <p>
	 * The DTD name.
	 * </p>
	 * @param string $publicId [optional] <p>
	 * The external subset public identifier.
	 * </p>
	 * @param string $systemId [optional] <p>
	 * The external subset system identifier.
	 * </p>
	 * @param string $subset [optional] <p>
	 * The content of the DTD.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeDtd(string $name, string $publicId = null, string $systemId = null, string $subset = null): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start DTD element
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-element.php
	 * @param string $qualifiedName <p>
	 * The qualified name of the document type to create.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startDtdElement(string $qualifiedName): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current DTD element
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-element.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endDtdElement(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full DTD element tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-element.php
	 * @param string $name <p>
	 * The name of the DTD element.
	 * </p>
	 * @param string $content <p>
	 * The content of the element.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeDtdElement(string $name, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start DTD AttList
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
	 * @param string $name <p>
	 * The attribute list name.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startDtdAttlist(string $name): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current DTD AttList
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endDtdAttlist(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full DTD AttList tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
	 * @param string $name <p>
	 * The name of the DTD attribute list.
	 * </p>
	 * @param string $content <p>
	 * The content of the DTD attribute list.
	 * </p>
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeDtdAttlist(string $name, string $content): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Create start DTD Entity
	 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-entity.php
	 * @param string $name <p>
	 * The name of the entity.
	 * </p>
	 * @param bool $isparam
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function startDtdEntity(string $name, bool $isparam): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * End current DTD Entity
	 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-entity.php
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function endDtdEntity(): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Write full DTD Entity tag
	 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-entity.php
	 * @param string $name <p>
	 * The name of the entity.
	 * </p>
	 * @param string $content <p>
	 * The content of the entity.
	 * </p>
	 * @param bool $pe
	 * @param string $pubid
	 * @param string $sysid
	 * @param string $ndataid
	 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
	 */
	public function writeDtdEntity(string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid): bool {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
	 * Returns current buffer
	 * @link http://php.net/manual/en/function.xmlwriter-output-memory.php
	 * @param bool $flush [optional] <p>
	 * Whether to flush the output buffer or not. Default is <b>TRUE</b>.
	 * </p>
	 * @return string the current buffer as a string.
	 */
	public function outputMemory(bool $flush = true): string {}

	/**
	 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
	 * Flush current buffer
	 * @link http://php.net/manual/en/function.xmlwriter-flush.php
	 * @param bool $empty [optional] <p>
	 * Whether to empty the buffer or not. Default is <b>TRUE</b>.
	 * </p>
	 * @return mixed If you opened the writer in memory, this function returns the generated XML buffer,
	 * Else, if using URI, this function will write the buffer and return the number of
	 * written bytes.
	 */
	public function flush(bool $empty = true) {}

}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create new xmlwriter using source uri for output
 * @link http://php.net/manual/en/function.xmlwriter-open-uri.php
 * @param string $uri <p>
 * The URI of the resource for the output.
 * </p>
 * @return bool Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * </p>
 * <p>
 * Procedural style: Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, <b>FALSE</b> on error.
 */
function xmlwriter_open_uri(string $uri): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create new xmlwriter using memory for string output
 * @link http://php.net/manual/en/function.xmlwriter-open-memory.php
 * @return bool Object oriented style: Returns <b>TRUE</b> on success or <b>FALSE</b> on failure.
 * </p>
 * <p>
 * Procedural style: Returns a new xmlwriter resource for later use with the
 * xmlwriter functions on success, <b>FALSE</b> on error.
 */
function xmlwriter_open_memory(): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Toggle indentation on/off
 * @link http://php.net/manual/en/function.xmlwriter-set-indent.php
 * @param bool $indent <p>
 * Whether indentation is enabled.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_set_indent(bool $indent): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Set string used for indenting
 * @link http://php.net/manual/en/function.xmlwriter-set-indent-string.php
 * @param string $indentString <p>
 * The indentation string.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_set_indent_string(string $indentString): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
 * Create start comment
 * @link http://php.net/manual/en/function.xmlwriter-start-comment.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_comment($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
 * Create end comment
 * @link http://php.net/manual/en/function.xmlwriter-end-comment.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_comment($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start attribute
 * @link http://php.net/manual/en/function.xmlwriter-start-attribute.php
 * @param string $name <p>
 * The attribute name.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_attribute(string $name): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End attribute
 * @link http://php.net/manual/en/function.xmlwriter-end-attribute.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_attribute($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full attribute
 * @link http://php.net/manual/en/function.xmlwriter-write-attribute.php
 * @param string $name <p>
 * The name of the attribute.
 * </p>
 * @param string $value <p>
 * The value of the attribute.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_attribute(string $name, string $value): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start namespaced attribute
 * @link http://php.net/manual/en/function.xmlwriter-start-attribute-ns.php
 * @param string $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The attribute name.
 * </p>
 * @param string $uri <p>
 * The namespace URI.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_attribute_ns(string $prefix, string $name, string $uri): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full namespaced attribute
 * @link http://php.net/manual/en/function.xmlwriter-write-attribute-ns.php
 * @param string $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The attribute name.
 * </p>
 * @param string $uri <p>
 * The namespace URI.
 * </p>
 * @param string $content <p>
 * The attribute value.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_attribute_ns(string $prefix, string $name, string $uri, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start element tag
 * @link http://php.net/manual/en/function.xmlwriter-start-element.php
 * @param string $name <p>
 * The element name.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_element(string $name): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current element
 * @link http://php.net/manual/en/function.xmlwriter-end-element.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_element($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
 * End current element
 * @link http://php.net/manual/en/function.xmlwriter-full-end-element.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_full_end_element($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start namespaced element tag
 * @link http://php.net/manual/en/function.xmlwriter-start-element-ns.php
 * @param string $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The element name.
 * </p>
 * @param string $uri <p>
 * The namespace URI.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_element_ns(string $prefix, string $name, string $uri): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full element tag
 * @link http://php.net/manual/en/function.xmlwriter-write-element.php
 * @param string $name <p>
 * The element name.
 * </p>
 * @param string $content [optional] <p>
 * The element contents.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_element(string $name, string $content = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full namespaced element tag
 * @link http://php.net/manual/en/function.xmlwriter-write-element-ns.php
 * @param string $prefix <p>
 * The namespace prefix.
 * </p>
 * @param string $name <p>
 * The element name.
 * </p>
 * @param string $uri <p>
 * The namespace URI.
 * </p>
 * @param string $content [optional] <p>
 * The element contents.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_element_ns(string $prefix, string $name, string $uri, string $content = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start PI tag
 * @link http://php.net/manual/en/function.xmlwriter-start-pi.php
 * @param string $target <p>
 * The target of the processing instruction.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_pi(string $target): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current PI
 * @link http://php.net/manual/en/function.xmlwriter-end-pi.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_pi($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Writes a PI
 * @link http://php.net/manual/en/function.xmlwriter-write-pi.php
 * @param string $target <p>
 * The target of the processing instruction.
 * </p>
 * @param string $content <p>
 * The content of the processing instruction.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_pi(string $target, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start CDATA tag
 * @link http://php.net/manual/en/function.xmlwriter-start-cdata.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_cdata($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current CDATA
 * @link http://php.net/manual/en/function.xmlwriter-end-cdata.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_cdata($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full CDATA tag
 * @link http://php.net/manual/en/function.xmlwriter-write-cdata.php
 * @param string $content <p>
 * The contents of the CDATA.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_cdata(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write text
 * @link http://php.net/manual/en/function.xmlwriter-text.php
 * @param string $content <p>
 * The contents of the text.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_text(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.2.0, PHP 7, PECL xmlwriter &gt;= 2.0.4)<br/>
 * Write a raw XML text
 * @link http://php.net/manual/en/function.xmlwriter-write-raw.php
 * @param string $content <p>
 * The text string to write.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_raw(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create document tag
 * @link http://php.net/manual/en/function.xmlwriter-start-document.php
 * @param string $version [optional] <p>
 * The version number of the document as part of the XML declaration.
 * </p>
 * @param string $encoding [optional] <p>
 * The encoding of the document as part of the XML declaration.
 * </p>
 * @param string $standalone [optional] <p>
 * yes or no.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_document(string $version = '1.0', string $encoding = null, string $standalone = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current document
 * @link http://php.net/manual/en/function.xmlwriter-end-document.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_document($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full comment tag
 * @link http://php.net/manual/en/function.xmlwriter-write-comment.php
 * @param string $content <p>
 * The contents of the comment.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_comment(string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD tag
 * @link http://php.net/manual/en/function.xmlwriter-start-dtd.php
 * @param string $qualifiedName <p>
 * The qualified name of the document type to create.
 * </p>
 * @param string $publicId [optional] <p>
 * The external subset public identifier.
 * </p>
 * @param string $systemId [optional] <p>
 * The external subset system identifier.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd(string $qualifiedName, string $publicId = null, string $systemId = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD
 * @link http://php.net/manual/en/function.xmlwriter-end-dtd.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD tag
 * @link http://php.net/manual/en/function.xmlwriter-write-dtd.php
 * @param string $name <p>
 * The DTD name.
 * </p>
 * @param string $publicId [optional] <p>
 * The external subset public identifier.
 * </p>
 * @param string $systemId [optional] <p>
 * The external subset system identifier.
 * </p>
 * @param string $subset [optional] <p>
 * The content of the DTD.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd(string $name, string $publicId = null, string $systemId = null, string $subset = null): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD element
 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-element.php
 * @param string $qualifiedName <p>
 * The qualified name of the document type to create.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd_element(string $qualifiedName): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD element
 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-element.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd_element($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD element tag
 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-element.php
 * @param string $name <p>
 * The name of the DTD element.
 * </p>
 * @param string $content <p>
 * The content of the element.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd_element(string $name, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD AttList
 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-attlist.php
 * @param string $name <p>
 * The attribute list name.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd_attlist(string $name): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD AttList
 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-attlist.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd_attlist($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD AttList tag
 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-attlist.php
 * @param string $name <p>
 * The name of the DTD attribute list.
 * </p>
 * @param string $content <p>
 * The content of the DTD attribute list.
 * </p>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd_attlist(string $name, string $content): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Create start DTD Entity
 * @link http://php.net/manual/en/function.xmlwriter-start-dtd-entity.php
 * @param string $name <p>
 * The name of the entity.
 * </p>
 * @param bool $isparam
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_start_dtd_entity(string $name, bool $isparam): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * End current DTD Entity
 * @link http://php.net/manual/en/function.xmlwriter-end-dtd-entity.php
 * @param $xmlwriter
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_end_dtd_entity($xmlwriter): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Write full DTD Entity tag
 * @link http://php.net/manual/en/function.xmlwriter-write-dtd-entity.php
 * @param string $name <p>
 * The name of the entity.
 * </p>
 * @param string $content <p>
 * The content of the entity.
 * </p>
 * @param bool $pe
 * @param string $pubid
 * @param string $sysid
 * @param string $ndataid
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.
 */
function xmlwriter_write_dtd_entity(string $name, string $content, bool $pe, string $pubid, string $sysid, string $ndataid): bool {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 0.1.0)<br/>
 * Returns current buffer
 * @link http://php.net/manual/en/function.xmlwriter-output-memory.php
 * @param bool $flush [optional] <p>
 * Whether to flush the output buffer or not. Default is <b>TRUE</b>.
 * </p>
 * @return string the current buffer as a string.
 */
function xmlwriter_output_memory(bool $flush = true): string {}

/**
 * (PHP 5 &gt;= 5.1.2, PHP 7, PECL xmlwriter &gt;= 1.0.0)<br/>
 * Flush current buffer
 * @link http://php.net/manual/en/function.xmlwriter-flush.php
 * @param bool $empty [optional] <p>
 * Whether to empty the buffer or not. Default is <b>TRUE</b>.
 * </p>
 * @return mixed If you opened the writer in memory, this function returns the generated XML buffer,
 * Else, if using URI, this function will write the buffer and return the number of
 * written bytes.
 */
function xmlwriter_flush(bool $empty = true) {}

// End of xmlwriter v.7.0.4-7ubuntu2
?>
