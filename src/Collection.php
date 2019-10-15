<?php
	/**
	 * ----------------------------------------
	 * | Created By pfinal-collection                 |
	 * | User: pfinal <lampxiezi@163.com>     |
	 * | Date: 2019/10/15                      |
	 * | Time: 上午11:16                        |
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
	
	
	use pf\collection\build\Base;
	
	class Collection
	{
		protected $link;
		
		//更改缓存驱动
		protected function driver()
		{
			$this->link = new Base();
			
			return $this;
		}
		
		public function __call($method, $params)
		{
			if (is_null($this->link)) {
				$this->driver();
			}
			
			return call_user_func_array([$this->link, $method], $params);
		}
		
		public static function __callStatic($name, $arguments)
		{
			return call_user_func_array([new static(), $name], $arguments);
		}
		
	}