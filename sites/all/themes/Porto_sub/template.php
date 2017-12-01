<?php
/*
 * Prefix your custom functions with porto_sub. For example:
 * porto_sub_form_alter(&$form, &$form_state, $form_id) { ... }
 */
 
 
 function porto_sub_views_pre_render(&$view) {
    
  if ('oportunidades_laborales_disponibles' == $view->name) {	 
	  if (!in_array('administrator',$GLOBALS['user']->roles)) {
		//  print_r($view->field['created']);die();		  
		  unset($view->field['nothing']);	   
		  unset($view->field['field_sexo']);	   
		  unset($view->field['field_edad']);	   
		  unset($view->field['field_fecha_de_inicio']);	   
		  unset($view->field['created']);	   
		 
	  }
	   
  }  
}







/*function porto_sub_preprocess_page(&$vars, $hook = null){
die();
    if (isset($vars['node'])) {
        switch ($vars['node']->type) {           
            /*case 'webform': 
                drupal_add_js(drupal_get_path('theme', 'THEMENAME').'/js/myscript.js'); // relative path to your script
                drupal_add_js(drupal_get_path('theme', 'THEMENAME').'/js/myscript-2.js'); // relative path to another script
                break;*/
				
			//	case 'oferta-laboral': 
			//	die();
              //  drupal_add_css(drupal_get_path('theme', 'porto_sub').'/css/mycustom.css'); // relative path to your script
               // drupal_add_js(drupal_get_path('theme', 'THEMENAME').'/js/myscript-2.js'); // relative path to another script
              //  break;
      //  }
   // }
//}





