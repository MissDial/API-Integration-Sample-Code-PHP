<?php
/**
 * 2010-2016 [cozyvision Technology Pvt Ltd.]
 *
 * NOTICE OF LICENSE
 *
 *Licensed under the Apache License, Version 2.0 (the "License");
 *you may not use this file except in compliance with the License.
 *You may obtain a copy of the License at
 *
 *http://www.apache.org/licenses/LICENSE-2.0
 *
 *Unless required by applicable law or agreed to in writing, software
 *distributed under the License is distributed on an "AS IS" BASIS,
 *WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *See the License for the specific language governing permissions and
 *limitations under the License.
 *
 *  @author    cozyvision Technology Pvt Ltd.
 *  @copyright 2010-2016 cozyvision Technology Pvt Ltd.
 *  @license   http://www.apache.org/licenses/LICENSE-2.0
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