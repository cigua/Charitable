<?php

class Arithmetic_Secret {

	private $x = 'ABCD';

	private $y = '0123456789';

	private $x_length = 0;

	private $y_length = 0;

	private $number = NULL;

	private $code = NULL;

	private $block_num = 4;

	public function __construct() {
		$this->x_length = strlen( $this->x );
		$this->y_length = strlen( $this->y );	
	}

	//生成数字
	private function rand_num($num){
		$rand = array(0,1,2,3,4,5,6,7,8,9);   
		$key  = array_rand($rand, $num);   
		$str  = "";   
		for($i=0; $i<$num; $i++){
			$str .= $rand[$key[$i]];
		} 	
		return $str;
	}


	private function rand_secret() {
		//生成随机横坐标
		$data   = array();
		for ($x=0; $x < $this->x_length; $x++) {
			for ($y = 0;$y < $this->y_length;$y++){
				$data[$this->x{$x} . $this->y{$y}] = $this->rand_num(2);
			}
		}

		$this->code = serialize($data); //序列化后将信息入库
	}

	public function checkRandBlock($data) {
		$result = TRUE;

		foreach ( $data AS $block => $value ) {
			if ( $this->data[$block] != $value )
				$result = FALSE;
		}

		return $result;
	}

	public function setRandBlockNumber($num) {
		$this->block_num = $num;
	}

	public function getRandBlockNumber() {
		return $this->block_num;
	}

	public function getRandBlock() {
		$block = array_rand($this->data, $this->block_num);
		return $block;
	}

	public function getCode() {
		return $this->code;
	}

	public function getNumber() {
		return $this->number;
	}


	public function setCode($code) {
		$this->code = $code;
		$this->data = unserialize($this->code);
	}


	public function setNumber($number) {
		$this->number = $number;
	}


	public function regenerate() {
		$this->number = '1000-'. uniqid();
		$this->rand_secret();
		$this->data  = unserialize($this->code);
		$this->imagegenerate();
	}


	public function generate($number='', $code='') {
		if ( $number )
			$this->setNumber($number);

		if ( $code )
			$this->setCode($code);

		if ( $this->code AND $this->number )
			$this->imagegenerate();
		else
			$this->regenerate();
	}


	private function imagegenerate() {
		//图片初始值
		$height = ($this->y_length + 1) * 25 + 115;    //图片高度
		$width  = ($this->x_length + 1) * 50 + 20;          //图片宽度
		$im                   = imagecreatetruecolor($width,$height);
		$linecolor            = imagecolorallocate($im, 229, 229, 229);
		$fontcolor            = imagecolorallocate($im, 0, 0, 0);
		$top_rectangle_color  = imagecolorallocate($im, 241, 254, 237);
		$top_letter_color     = imagecolorallocate($im, 54, 126, 76);
		$left_rectangle_color = imagecolorallocate($im, 243, 247, 255);
		$left_num_color       = imagecolorallocate($im, 4, 68, 192);
		$color                = $logo_str_color = imagecolorallocate($im,0,0,0);
		imagefill($im,0,0,imagecolorallocate($im,255,255,255));  //图片背景色

		//写入标题
		$title = "MG Secret Passport";
		$x = 40; $y = 30; //序列号位置
		$this->imagechars($im, 8, $x, $y, $title, $color);

		//写入卡号
		$card_string = 'Number: '.$this->number;
		$card_length = strlen($card_string);

		$x = 30; $y = 80; //序列号位置
		$this->imagechars($im, 4, $x, $y, $card_string, $color);

		//颜色框
		imagefilledrectangle($im, 10, 105, $width-10, 130, $top_rectangle_color);
		imagefilledrectangle($im, 10, 130, 60, $height-10, $left_rectangle_color);

		imageline($im,10,70,$width-10,70,$linecolor);
		imageline($im,10,105,$width-10,105,$linecolor);

		//写入最上排英文字母及竖线
		for($i=0; $i< $this->x_length; $i++){
			$x          = ( $i + 1 )*50 + 30;     
			$y          = 110;   
			$float_size = 12;   //字母位置参数
			imagechar($im,$float_size,$x,$y, $this->x{$i}, $top_letter_color);//写入最上排英文字母

			$line_x  = $i*50+60;
			$line_y  = 105;
			$line_y2 = $height-10;  //竖线位置参数
			imageline($im,$line_x,$line_y,$line_x,$line_y2,$linecolor);//划入竖线
		}

		for($j=0; $j < $this->y_length; $j++){
			$x = 30;
			$y = ($j + 1 )*25 + 105 + 5; //左排数字及横线位置参数
			imagechar($im, $float_size, $x, $y, $this->y{$j}, $left_num_color);//写入左排数字

			$line_x  = 10; 
			$line_x2 = $width-10;
			$line_y  = ($j + 1 ) * 25 + 105; //横线位置参数 y坐标数据同上
			imageline($im,$line_x,$line_y,$line_x2,$line_y,$linecolor);//划入横线
		}

		//写入竖排数字及填入矩阵数据 划横线

		for ($j=0; $j < $this->y_length; $j++) {	
			for ($i=0; $i<$this->x_length; $i++) {
				$key = $this->x[$i] . $this->y[$j];

				$x = ( $i + 1 )*50 + 26;
				$y = ( $j + 1 )*25 + 105 + 5;   //填入矩阵数据位置参数
				$this->imagechars($im, 4, $x, $y, $this->data[$key], $fontcolor);//写入矩阵数据
			}
		}


		//外框边线
		imageline($im,10,10,$width-10,10,$linecolor);//横线
		imageline($im,10,$height-10,$width-10,$height-10,$linecolor);
		imageline($im,10,10,10,$height-10,$linecolor);//竖线
		imageline($im,$width-10,10,$width-10,$height-10,$linecolor);	

		//生成图片
		ob_clean();
		header("Content-type: image/jpeg");
		imagejpeg($im,null,100);
		imagedestroy($im);
	}

	private function imagechars($im, $font_size, $x, $y, $string, $color) {
		$length = strlen($string);
		for( $i=0; $i<$length; $i++ ) {
			imagechar($im, $font_size, $x+$i*8, $y, $string{$i}, $color);
		}
	}
}
?>