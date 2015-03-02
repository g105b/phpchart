<?php
/**
 *
 * http://github.com/g105b/phpchart
 * @copyright Copyright Ⓒ 2015 Bright Flair Ltd. (http://brightflair.com)
 * @license http://www.opensource.org/licenses/mit-license.php MIT
 */
namespace g105b\phpchart;

class Svg_Test extends \PHPUnit_Framework_TestCase {

public function tearDown() {
}

public function testCreates() {
	$svg = new Svg();
	$output = $svg->render();
	$this->assertEmpty(trim($output), $output);
}

}#