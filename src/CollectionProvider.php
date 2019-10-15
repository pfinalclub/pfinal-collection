<?php
	/**
	 * ----------------------------------------
	 * | Created By pfinal-collection                 |
	 * | User: pfinal <lampxiezi@163.com>     |
	 * | Date: 2019/10/15                      |
	 * | Time: 上午11:31                        |
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
	
	use pf\framework\build\Provider;
	class CollectionProvider extends Provide
	{
		//延迟加载
		public $defer = true;
		public function boot() {
		}
		public function register() {
			$this->app->bind( 'Collection', function () {
				return new Collection();
			} );
		}
	}