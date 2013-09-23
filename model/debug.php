<?php
/**
 * Debug Function
 * 
 * This function can improve your debugging actions by using the Firefox extension "Firebug"
 * 
 * Copyright (C) 2006 - Mathias Bank (http://forenblogger.de)
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA
 * or go to http://www.gnu.org/licenses/gpl.html
 */

if (!defined("DEBUG_TYPE_LOG")) define("DEBUG_TYPE_LOG",1);
if (!defined("DEBUG_TYPE_INFO")) define("DEBUG_TYPE_INFO",2);
if (!defined("DEBUG_TYPE_WARN")) define("DEBUG_TYPE_WARN",3);
if (!defined("DEBUG_TYPE_ERR")) define("DEBUG_TYPE_ERR",4);

if (!defined("NL")) define("NL","\r\n");

/**
 * Debug function
 * Prints debug messages to firebug
 * 
 * It can be used like:
 * <code>
 *   debug("simple message");
 *   debug("simple warning","",DEBUG_TYPE_WARN);
 *   debug("varX",$x);
 *   debug("object y", $y);
 * </code>
 * @param string text message (names or simple Messages)
 * @param [string] variable which should be printed
 * @param [int] message type: DEBUG_TYPE_LOG | DEBUG_TYPE_INFO | DEBUG_TYPE_WARN | DEBUG_TYPE_ERR
 */
function debug($name, $var="", $messageType=DEBUG_TYPE_LOG) {

	echo '<script type="text/javascript">'.NL;
			
	if ($messageType==DEBUG_TYPE_LOG)
		echo 'console.log("'.$name.'");'.NL;
	elseif ($messageType==DEBUG_TYPE_INFO)
		echo 'console.info("'.$name.'");'.NL;
	elseif ($messageType==DEBUG_TYPE_WARN)
		echo 'console.warn("'.$name.'");'.NL;
	elseif ($messageType==DEBUG_TYPE_ERR)
		echo 'console.error("'.$name.'");'.NL;
	
	if (!empty($var)) {
		if (is_object($var) || is_array($var)) {
			$object = json_encode($var);
			echo 'var object'.preg_replace('~[^A-Z|0-9]~i',"_",$name).' = \''.str_replace("'","\'",$object).'\';'.NL;
			echo 'var val'.preg_replace('~[^A-Z|0-9]~i',"_",$name).' = eval("(" + object'.preg_replace('~[^A-Z|0-9]~i',"_",$name).' + ")" );'.NL;
			
			if ($messageType==DEBUG_TYPE_LOG)
				echo 'console.debug(val'.preg_replace('~[^A-Z|0-9]~i',"_",$name).');'.NL;
			elseif ($messageType==DEBUG_TYPE_INFO)
				echo 'console.info(val'.preg_replace('~[^A-Z|0-9]~i',"_",$name).');'.NL;
			elseif ($messageType==DEBUG_TYPE_WARN)
				echo 'console.warn(val'.preg_replace('~[^A-Z|0-9]~i',"_",$name).');'.NL;	
			elseif ($messageType==DEBUG_TYPE_ERR)
				echo 'console.error(val'.preg_replace('~[^A-Z|0-9]~i',"_",$name).');'.NL;	
		} else {
			if ($messageType==DEBUG_TYPE_LOG)
				echo 'console.debug("'.str_replace('"','\"',$var).'");'.NL;
			elseif ($messageType==DEBUG_TYPE_INFO)
				echo 'console.info("'.str_replace('"','\"',$var).'");'.NL;
			elseif ($messageType==DEBUG_TYPE_WARN)
				echo 'console.warn("'.str_replace('"','\"',$var).'");'.NL;	
			elseif ($messageType==DEBUG_TYPE_ERR)
				echo 'console.error("'.str_replace('"','\"',$var).'");'.NL;	
		}
	}
	echo '</script>'.NL;
}
?>
