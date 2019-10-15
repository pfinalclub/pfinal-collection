<?php
	/**
	 * ----------------------------------------
	 * | Created By pfinal-collection                 |
	 * | User: pfinal <lampxiezi@163.com>     |
	 * | Date: 2019/10/15                      |
	 * | Time: 上午11:29                        |
	 * ----------------------------------------
	 * |    _____  ______ _             _     |
	 * |   |  __ \|  ____(_)           | |    |
	 * |   | |__) | |__   _ _ __   __ _| |    |
	 * |   |  ___/|  __| | | '_ \ / _` | |    |
	 * |   | |    | |    | | | | | (_| | |    |
	 * |   |_|    |_|    |_|_| |_|\__,_|_|    |
	 * ----------------------------------------
	 */
	
	namespace pf\collection;
	
	
	use pf\framework\build\Facade;
	
	class CollectionFacade extends Facade
	{
		public static function getFacadeAccessor() {
			return 'Collection';
		}
	}