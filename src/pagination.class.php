<?php
class pagination {
	private $currentPage;
	private $totalPages;
	private $amountPerPage;
	
	/**
	 * Constructor responsible for receiving information about pagination
	 * @param Integer $current
	 * @param Integer $total
	 * @param Integer $amountPerPage
	 * @return void
	 **/
	public function __construct($current, $total, $amountPerPage){
		$this->currentPage = $current;
		$this->totalPages = $total;
		$this->amountPerPage = $amountPerPage;
	}
	
	/**
	 * Get paginations
	 * @return array
	 **/
	public function getData(){
		$start = $this->currentPage - $this->amountPerPage;
		$end = $this->currentPage + $this->amountPerPage;
		
		if($start <= 0) $start = 1;
		
		if($this->isFirstPage()) $end += $this->amountPerPage;
		
		if($end > $this->totalPages) $end = $this->totalPages;
		
		if($this->isLastPage()) $start -= $this->amountPerPage;
		
		if($start <= 0) $start = 1;
		
		return range($start, $end);
	}
	
	/**
	 * Checks whether the current page is the first
	 * @return boolean
	 **/
	public function isFirstPage(){
		return ($this->currentPage == 1);
	}
	
	/**
	 * Checks whether the current page is the last
	 * @return boolean
	 **/
	public function isLastPage(){
		return ($this->currentPage == $this->totalPages);
	}
}