<?php

class Model_User extends Orm\Model
{

    protected static $_properties = array(
    	'id', 
    	'username',
    	'password', 
    	'group_id', 
    	'email', 
    	'last_login', 
    	'previous_login', 
    	'login_hash', 
    	'user_id', 
    	'created_at', 
    	'updated_at'
    );

    
}