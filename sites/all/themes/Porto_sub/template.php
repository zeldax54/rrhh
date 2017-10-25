<?php
/*
 * Prefix your custom functions with porto_sub. For example:
 * porto_sub_form_alter(&$form, &$form_state, $form_id) { ... }
 */
 
 
 function porto_sub_views_pre_render(&$view) {
    
  if ('oportunidades_laborales_disponibles' == $view->name) {	 
	  if (!in_array('administrator',$GLOBALS['user']->roles)) {		
		  unset($view->field['nothing']);	   
	  }
	   
  }  
}




