<?php

include 'libraries/sutartys.php';
$sutartiesObj = new sutartys();

$formErrors = null;
$data = array();

$required = array('numeris', 'kaina', 'fk_imones_kodas', 'fk_vairuotojo_asmens_kodas');

$maxLengths = array(
    'fk_vairuotojo_asmens_kodas' => 11,
    'fk_imones_kodas' => 9
);

if(!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array (
        'numeris' => 'positivenumber',
        'kaina' => 'price',
        'fk_imones_kodas' => 'positivenumber',
        'fk_vairuotojo_asmens_kodas' => 'positivenumber'
    );

    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();
        $sutartiesObj->insertSutarty($dataPrepared);
        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}

include 'templates/sutartys_form.php';
