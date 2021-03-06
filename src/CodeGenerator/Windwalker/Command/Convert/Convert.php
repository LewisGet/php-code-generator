<?php
/**
 * Part of php-code-generator project.
 *
 * @copyright  Copyright (C) 2011 - 2014 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

namespace CodeGenerator\Windwalker\Command\Convert;

use CodeGenerator\Controller\GeneratorController;
use CodeGenerator\Windwalker\IO;
use Windwalker\Console\Command\Command;

/**
 * Convert
 */
class Convert extends Command
{
	/**
	 * An enabled flag.
	 *
	 * @var bool
	 */
	public static $isEnabled = true;

	/**
	 * Console(Argument) name.
	 *
	 * @var  string
	 */
	protected $name = 'tmpl-convert';

	/**
	 * The command description.
	 *
	 * @var  string
	 */
	protected $description = 'Convert a directory and files back to a template.';

	/**
	 * The usage to tell user how to use this command.
	 *
	 * @var string
	 */
	protected $usage = 'tmpl-convert <cmd><tmpl-name></cmd> <cmd><dest-folder></cmd> <option>[option]</option>';

	/**
	 * Execute this command.
	 *
	 * @return int|void
	 */
	protected function doExecute()
	{
		$io = new IO($this);

		$controller = new GeneratorController($io);

		$controller->setTask('convert')->execute();
	}
}
