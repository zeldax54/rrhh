<?php

/**
* Implementation of hook_views_data().
*/


function formulario_views_data() {//die();
    $data['oferta_candidato']['table']['group'] = t('Ofertas asignadas a usuarios');

    $data['oferta_candidato']['table']['base'] = array(
        'field' => 'id',
        'title' => t('Candidatos por Ofertas'),
        'help' => t('Candidatos por Ofertas.'),
    );

    $data['oferta_candidato']['table']['join'] = array(
        'webform_submissions' => array(
            'left_field' => 'uid',
            'field' => 'uid',
            'type' => 'INNER',
        ),
        'node' => array(
            'left_field' => 'nid',
          'field' => 'nid',
            'type' => 'INNER',
        ),
    );

    $data['oferta_candidato']['uid'] = array(

        'title' => t('User'),
        'help' => t('Nombre del candidato.'),
        'relationship' => array(
            'base' => 'webform_submissions',
            'field' => 'uid',
            'handler' => 'views_handler_relationship',
            'label' => t('Candidato en la Oferta'),
        ),
        'filter' => array(
            'handler' => 'views_handler_filter_user_name',
        ),
        'sort' => array(
            'handler' => 'views_handler_sort',
        ),
        'argument' => array(
            'handler' => 'views_handler_argument_numeric',
        ),
        'field' => array(
            'handler' => 'views_handler_field_user',
        ),
    );


    $data['oferta_candidato']['nid'] = array(
        'title' => t('Oferta'),
        'help' => t('Oferta asignada.'),
        'relationship' => array(
            'base' => 'node',
            'field' => 'nid',
            'handler' => 'views_handler_relationship',
            'label' => t('Oferta para el usuario'),
        )

    );
    return $data;
}