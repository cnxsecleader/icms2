<?php
	$this->setPageTitle(LANG_PASS_RESTORE);
	$this->addBreadcrumb(LANG_PASS_RESTORE);
?>

<h1><?php echo LANG_PASS_RESTORE; ?></h1>

<p class="alert alert-warning my-3 my-md-4"><?php echo LANG_RESTORE_NOTICE; ?></p>

<?php
    $this->renderForm($form, $data, array(
        'action' => '',
        'method' => 'post',
        'submit' => array(
            'title' => LANG_CONTINUE
        )
    ), $errors);
