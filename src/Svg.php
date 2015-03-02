<?php
namespace g105b\phpchart;

use \DOMImplementation;
use \DomDocument;

class Svg {

private $document;
public $root;

public function __construct() {
	$implementation = new DOMImplementation();
	$docType = $implementation->createDocumentType(
		"svg",
		"-//W3C//DTD SVG 1.1//EN",
		"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"
	);
	$this->document = new DomDocument("1.0", "utf-8");
	$this->document->insertBefore($docType);
	$this->root = $this->document->createElement("svg");
	$this->root->setAttribute("version", "1.1");
	$this->document->appendChild($this->root);
}

public function render() {
	return $this->document->saveXML();
}

}#