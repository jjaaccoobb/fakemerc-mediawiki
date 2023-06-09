<?php
/**
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, version 3.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
 *
 * This file is part of BlueSpice MediaWiki
 * For further information visit https://bluespice.com
 *
 * @author     Sebastian Ulbricht <sebastian.ulbricht@dragon-design.hk>
 * @author     Robert Vogel <vogel@hallowelt.com>
 * @package    Bluespice_Core
 * @copyright  Copyright (C) 2016 Hallo Welt! GmbH, All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GPL-3.0-only
 * @filesource
 */

/**
 * DEPRECATED!
 * BsPARAMOPTION
 *
 * Options for BsCore::sanitize(), BsCore::sanitizeArrayEntry()
 * and BsCore::getParam()
 * @deprecated since version 3.1
 */
class BsPARAMOPTION {
	/**
	 * DEPRECATED!
	 * BsPARAMOPTION::DEFAULT_ON_ERROR
	 *
	 * For use with BsCore::getParam(). If type checking results in an error,
	 * the provided default value is returned.
	 * By default it is attempted to sanitize the value, even if type checking
	 * fails.
	 * @deprecated since version 3.1
	 */
	public const DEFAULT_ON_ERROR = 524288;

	/**
	 * DEPRECATED!
	 * BsPARAMOPTION::CLEANUP_STRING
	 * Attempt to sanitize the value, even if type checking
	 * fails.
	 * @deprecated since version 3.1
	 */
	public const CLEANUP_STRING = 1048576;
}
