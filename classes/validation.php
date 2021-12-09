<?php
	class Validation{

		private $error = "";
		private $is_error = false;

		public function __construct($post_value){

			foreach ($post_value as $value) {
				$rules = explode(":",$value[1]);

				foreach ($rules as $v) {
					if($v != "image" && $v != "image_required"){
						$this->{$v}($_REQUEST[$value[0]]);
					}
					elseif($v == "image_required"){
						$this->image_required($_FILES[$value[0]]);
					}
					else{
						$this->image($_FILES[$value[0]],"products/");
					}
				}
			}
		}
<?php
	class Validation{

		private $error = "";
		private $is_error = false;

		public function __construct($post_value){

			foreach ($post_value as $value) {
				$rules = explode(":",$value[1]);

				foreach ($rules as $v) {
					if($v != "image" && $v != "image_required"){
						$this->{$v}($_REQUEST[$value[0]]);
					}
					elseif($v == "image_required"){
						$this->image_required($_FILES[$value[0]]);
					}
					else{
						$this->image($_FILES[$value[0]],"products/");
					}
				}
			}
		}

		public function required($val){
			if(isset($val) && !empty($val)){
				return true;
			}
			$this->is_error = true;
			$this->error .= "Field can not be empty.<br>";
		}

		public function image_required($val){
			if(isset($val['name']) && !empty($val['name'])){
				return true;
			}
			$this->is_error = true;
			$this->error .= "Please upload an Image.<br>";
		}

		public function email($email){
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				if(!$this->is_error){
					$this->error .= "Invalid Email.<br>";
				}
				
				$this->is_error = true;
			}
			else{
				return true;
			}			
		}

		public function password($pass){
			$uppercase = preg_match('@[A-Z]@', $pass);
			$lowercase = preg_match('@[a-z]@', $pass);
			$number = preg_match('@[0-9]@', $pass);

			if(!$uppercase || !$lowercase || !$number || strlen($pass) < 8){
				if(!$this->is_error){
					$this->error .= "Password Should at-least contain 1 Uppercase, 1 Lower case, 1 Number and not less than 8 charechters.<br>";
				}				
				$this->is_error = true;
			}
			else{
				return true;
			}			
		}

		public function image($img,$path){
			$new_path = "../assets/".$path;
			$target_file = $new_path.basename($img["name"]);
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

			if ($img["size"] > 500000) {
				if(!$this->is_error){
					$this->error .= "Sorry, your file is too large.";
				}
				$this->is_error = true;			
			}
			elseif(
				$imageFileType != "jpg" && 
				$imageFileType != "png" && 
				$imageFileType != "jpeg" && 
				$imageFileType != "gif" 
			) {
				if(!$this->is_error){
					$this->error .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				}
				$this->is_error = true;	
			}
			elseif(file_exists($target_file)) {
				if(!$this->is_error){
					$this->error .= "Sorry, file already exists.";
				}
				$this->is_error = true;
			}
			else{
				return true;
			}
		}

		public function isError(){
			if($this->is_error){
				return $this->error;
			}
			return false;
		}
	}