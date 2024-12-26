<?php

function validate_filed_erros($signupErrors,$fields_name){
    if (isset($signupErrors) && !empty($signupErrors)){
        foreach($signupErrors as $key=>$value){
            if ($key==$fields_name){
                return $value;
            }
        }

    }
    
    
}