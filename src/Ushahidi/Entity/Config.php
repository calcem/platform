<?php

/**
 * Ushahidi File
 *
 * Description
 *
 * @author     Ushahidi Team <team@ushahidi.com>
 * @package    Ushahidi\Application
 * @copyright  2014 Ushahidi
 * @license    https://www.gnu.org/licenses/agpl-3.0.html GNU Affero General Public License Version 3 (AGPL3)
 */

namespace Ushahidi\Entity;
use Ushahidi;

class Config extends Ushahidi\Entity
{

	public $group = '';
	public $key = '';
	public $value;

}
