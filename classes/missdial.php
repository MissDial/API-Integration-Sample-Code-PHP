<?php
/**
 *  @author    Cozy Vision Technologies Pvt. Ltd.
 *  @copyright 2010-2016 cozyvision Technology Pvt Ltd.
 */
 class Missdial {
	
	private $number;// Declare number of caller
	
	private $datetime;// Declare datetime of caller
	
	private $circle;// declare the area from where caller called
	
	private $operator;// shows the caller opreator
	
    private $ndnd;// define that number is dnd or not
	
	private $prefix;// define the country code
	// constructor  gives value of variable
	public function __construct($number,$datetime=NULL,$circle=NULL,$operator=NULL,$ndnd=NULL,$prefix=NULL){
		$this->number = $number;	
		$this->datetime=$datetime;
		$this->circle=$circle;
		$this->operator=$operator;
		$this->ndnd=$ndnd;
		$this->prefix=$prefix;
		
	}
	
	public function getnumber(){
		return $this->number;
	}
	
	public function setnumber($number){
		$this->number = $number;
	}
	public function getdatetime(){
		return $this->datetime;
	}
	public function setdatetime($datetime){
		$this->datetime =$datetime;
	}
	public function getcircle(){
		return $this->circle;
	}
	public function setcircle($circle){
		$this->circle = $circle;
	}
	public function  getoperator(){
		return $this->operator;
		
	}
	public function  setoperator($operator){
		  $this->operator=$operator;
		
	}
	public function  getndnd(){
		
		return $this->ndnd;
	}
	public function setdnd($ndnd){
		
		$this->ndnd=$ndnd;
	}
	public function  getprefix(){
		
		return $this->prefix;
	}
	public function setprefix(){
		
		$this->prefix=$prefix;
	}
	
	
}


?>
