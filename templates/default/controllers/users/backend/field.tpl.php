<?php

    $this->addBreadcrumb(LANG_USERS_CFG_FIELDS, $this->href_to('fields'));

    if ($do=='add'){
        $this->addBreadcrumb(LANG_CP_FIELD_ADD);
    }

    if ($do=='edit'){
        $this->addBreadcrumb($field['title']);
    }

    $this->addToolButton(array(
        'class' => 'save',
        'title' => LANG_SAVE,
        'href'  => "javascript:icms.forms.submit()"
    ));
    $this->addToolButton(array(
        'class' => 'cancel',
        'title' => LANG_CANCEL,
        'href'  => $this->href_to('fields')
    ));

    $this->renderControllerChild('admin', 'form_field', array(
        'fields_options_link' => href_to('admin', 'ctypes', array('fields_options')),
        'ctype_name'          => '{users}',
        'do'                  => $do,
        'errors'              => $errors,
        'form'                => $form,
        'field'               => $field
    ));
