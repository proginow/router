<?php

/*
 * Copyright (c) Proginow (https://proginow.com/)
 */

namespace Proginow\Router;


final class url {

	private $str;

	/**
	 * Constructor
	 *
	 * @param string $str the URI as a string
	 */
	public function __construct($str) {
		$this->str = $str;
	}

	/**
	 * Removes the query component from this string
	 *
	 * @return static this instance for chaining
	 */
	public function removeQuery() {
		$this->str = strtok($this->str, '?');

		return $this;
	}

	public function __toString() {
		return $this->str;
	}

}

?>
