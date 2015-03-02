<?php
namespace g105b\phpchart;

use \g105b\phpsvg\SvgRenderingContext;

class Chart {

const DEFAULT_WIDTH = 800;
const DEFAULT_HEIGHT = 600;
const TYPE_BAR = "type_bar";

private $ctx;

public function __construct() {
	$this->ctx = new SvgRenderingContext(
		self::DEFAULT_WIDTH, self::DEFAULT_HEIGHT);
}

public function __toString() {
	return $this->ctx->render();
}

public function __sleep() {
	return $this->__toString();
}

public function render() {
	return $this->__toString();
}

}#