<?php if (! defined ('BASEPATH')) exit('Access not allowed.'); 

	Class Menu{
		$arr_menu = "";
		public function __construct($arr){
			$this->$arr_menu = $arr;
		}

		public function built_Menu(){
			$return_Menu = "<nav><ul>";
			foreach ($this->$arr_menu as $option){
				$return_Menu.="<li>".$option."</li>";

			}
			$return_Menu.="</ul></nav>";
			return $return_Menu;
		}
	}
?>