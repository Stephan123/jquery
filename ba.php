<?php
/**
 * Beschreibung
 *
 *
 * 
 * 
 * @author User
 * @since 08.01.2015 19:54
 */

	class recipe
	{

	    protected $_id;

	    public $name;

	    public $prep_time;

	    function getIngredients() {
	        $ingredients = Ingredients::fetchAllById($this->_id);
	        return $ingredients;
	    }
	}