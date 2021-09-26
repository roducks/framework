<?php

/**
 *
 *	@package Roducks Framework
 *	@version 2.0
 *	@copyright Possible Development
 *	@author Rod	<rodrigocervantez@gmail.com>
 *
 *
 * Copyright (C) 2021  Rod
 *
 *    Roducks is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    Roducks is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with Roducks.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

use Roducks\Routing\Dispatcher;

$autoload = __DIR__ . '/../vendor/autoload.php';

if (file_exists($autoload)) {
  include $autoload;
}
else {
  include __DIR__ . '/../error.html';
  exit;
}

Dispatcher::web(__DIR__);
