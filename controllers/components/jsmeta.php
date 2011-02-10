<?php
/**
 *  Jsmeta - Inject JSON encoded PHP variables for Javascript access (hidden metabox in layout) 
 *
 *  Copyright (c) <2010>, Jaakko Paukamainen <jaakko.paukamainen@student.samk.fi>
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License 
 * as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied  
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for  
 * more details.
 * 
 * You should have received a copy of the GNU General Public License along with this program; if not, write to the Free 
 * Software Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * License text found in /license/
 */

/**
 *  Jsmeta - class
 *
 *  @package    plugins
 *  @author     Jaakko Paukamainen (ZEND version), Jari Korpela (Imported from ZEND to CakePHP)
 *  @copyright  2010 Jaakko Paukamainen
 *  @license    GPL v2
 *  @version    1.0
 */ 

class JsmetaComponent extends object {
	
	private $_output = null;
	
	public function append($identifier, $data)
	{
		$this->_output[$identifier][] = $data;
		return $this;
	}
	
	public function output()
	{
		return json_encode($this->_output);
	}
}