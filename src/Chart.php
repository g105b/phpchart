<?php
namespace g105b\phpchart;

class Chart {

const TYPE_BAR = "type_bar";

private $svg;

public function __construct($data, $type = null) {
	if(is_null($type)) {
		$type = self::TYPE_BAR;
	}

	$this->svg = new Svg();
}

public function __toString() {
	return $this->svg->__toString();
}

}#