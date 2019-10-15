<?php
	/**
	 * ----------------------------------------
	 * | Created By pfinal-collection                 |
	 * | User: pfinal <lampxiezi@163.com>     |
	 * | Date: 2019/10/15                      |
	 * | Time: 上午11:09                        |
	 * ----------------------------------------
	 * |    _____  ______ _             _     |
	 * |   |  __ \|  ____(_)           | |    |
	 * |   | |__) | |__   _ _ __   __ _| |    |
	 * |   |  ___/|  __| | | '_ \ / _` | |    |
	 * |   | |    | |    | | | | | (_| | |    |
	 * |   |_|    |_|    |_|_| |_|\__,_|_|    |
	 * ----------------------------------------
	 */
	if (!function_exists('collect')) {
		/**
		 * 集合
		 * @param $data
		 * @return mixed
		 */
		function collect(array $data)
		{
			return (new \pf\collection\Collection())->make($data);
		}
	}