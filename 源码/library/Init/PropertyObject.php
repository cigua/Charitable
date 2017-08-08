<?php


Abstract class Init_PropertyObject {

    protected $primary_id = FALSE;

    protected $action = 'insert';

    //stores name/value pairs that hook properties to database field names
    protected $property_table = array();

    //List of properties that have been modified
    protected $changed_properties = array();

    //Actual data from the database
    protected $data;

    //Any validation errors that might have occurred
    protected $errors = array();

    public function __construct($data) {
        $this->data = $data;
    }

    public function __get($property_name) {
        if ( ! array_key_exists($property_name, $this->property_table) ) {
            throw new Exception("Invalid property \"$property_name\"!");
        }
        if ( method_exists($this, 'get' . $property_name) ) {
            return call_user_func(array($this, 'get' . $property_name) );
        } else {
            return isset($this->data[$this->property_table[$property_name]]) ? $this->data[$this->property_table[$property_name]] : '';
        }
    }

       
    public function __set($property_name, $value) {
        if( ! array_key_exists($property_name, $this->property_table) ) {
            throw new Exception("Invalid property \"$property_name\"!");
        }
        if( method_exists($this, 'set' . $property_name)) {
            return call_user_func( array($this, 'set' . $property_name), $value);
        } else {
          
            if( ! isset($this->data[$this->property_table[$property_name]]) OR (
                $this->data[$this->property_table[$property_name]] != stripslashes( $value )  AND 
                ! array_key_exists($property_name, $this->changed_properties))) {
                $this->changed_properties[$property_name] = $this->$property_name;
            }
            //Now set the new value
            $this->data[$this->property_table[$property_name]] = $value;
        }
    }
          
    public function validate() {}

    public function format($data) {}

    public function getPrimaryId() {
        return $this->primary_id;
    }

    public function getProperty() {
        $data = array();
        foreach ($this->property_table AS $field => $table_field) {
            $data[$field] = isset($this->data[$table_field]) ? $this->data[$table_field] : '';
        }
        return $data;
    }

    public function getData() {
        return $this->data;
    }

    public function reset() {
        foreach ($this->property_table AS $field => $table_field) {
            $this->$field = NULL;
        }
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getErrors() {
        $string = '<ul class="error">';
        foreach ($this->errors AS $e) {
            $string .= "<li>$e</li>";
        }
        $string .= "</ul>";
        return $string;
    }

    public function getChange() {
        return $this->changed_properties;
    }

    public function isChange() {
        return empty($this->changed_properties) ? false : true;
    }

    public function notify() {
        if ( empty ($this->changed_properties) )
            return false;

        DataManager::log($this);      
    } 
}
?>