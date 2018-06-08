<?php

class AutoLoadClass
{
	protected static $path = '';
	protected static $class = '';
	protected static $primaryClass = 'TMPHP\\';

	public static function register(string $class) {
		$trace = debug_backtrace();
		$file = $trace[2]['args'][0];
		$file = str_replace('\\', '/', $file);

		$core = preg_quote(CORE, '/');
		$path = preg_match("/^{$core}/", $file)? CORE: BASE;

		self::$class  = str_replace(self::$primaryClass, '', $class);
		self::$class .= '.php';
		self::$path  .= $path . self::$class;

		self::getFileClass();
	}

	protected static function getFileClass() {
		if(!file_exists(self::$path)) {
			ob_clean();
			throw new Exception("The `".self::$class."` doesn't exists.", 1);
		}
		$path = self::$path;
		self::$path  = null;
		self::$class = null;
		require_once $path;
	}
}
