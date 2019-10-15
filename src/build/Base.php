<?php
	/**
	 * ----------------------------------------
	 * | Created By pfinal-collection                 |
	 * | User: pfinal <lampxiezi@163.com>     |
	 * | Date: 2019/10/15                      |
	 * | Time: 上午11:17                        |
	 * ----------------------------------------
	 * |    _____  ______ _             _     |
	 * |   |  __ \|  ____(_)           | |    |
	 * |   | |__) | |__   _ _ __   __ _| |    |
	 * |   |  ___/|  __| | | '_ \ / _` | |    |
	 * |   | |    | |    | | | | | (_| | |    |
	 * |   |_|    |_|    |_|_| |_|\__,_|_|    |
	 * ----------------------------------------
	 */
	
	namespace pf\collection\build;
	
	
	use pf\page\Page;
	
	class Base implements \Iterator, \ArrayAccess
	{
		//数据集合
		protected $items = [];
		
		public function current()
		{
			return current($this->items);
		}
		
		public function next()
		{
			next($this->items);
		}
		
		public function valid()
		{
			return current($this->items);
		}
		
		public function key()
		{
			return key($this->items);
		}
		
		public function rewind()
		{
			reset($this->items);
		}
		
		public function offsetSet($offset, $value)
		{
			$this->items[$offset] = $value;
		}
		
		
		public function offsetExists($offset)
		{
			return isset($this->items[$offset]);
			
		}
		
		public function offsetGet($offset)
		{
			return isset($this->items[$offset]) ? $this->items[$offset] : null;
		}
		
		public function offsetUnset($offset)
		{
			if (isset($this->items[$offset])) {
				unset($this->items[$offset]);
			}
		}
		
		public function toArray()
		{
			$res = [];
			foreach ($this->items as $k => $v) {
				if (is_object($v) && method_exists($v, 'toArray')) {
					$res[] = $v->toArray();
				} else {
					$res[] = $v;
				}
			}
			
			return $res;
		}
		
		public function make($data)
		{
			$this->items = $data;
			
			return $this;
		}
		
		public function links()
		{
			return Page::single();
		}
		
	}