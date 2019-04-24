<?php

include 'libraries/sunkvezimiai.php';
$sunkvezimioObj = new sunkvezimiai();

$formErrors = null;
$data = array();

$required = array('marke', 'modelis', 'numeriai', 'pagaminimo data');

$maxLengths = array(
    'numeriai' => 7
);

if (!empty($post['submit'])) {
    include 'utils/validator.class.php';

    $validatios = array(
        'marke' => 'alfanum',
        'modelis' => 'alfanum',
        'numeriai' => 'alfanum',
        'pagaminimo_data' => 'date',
        'registravimo_data' =>'date',
        'rida' => 'positivenumber'
    );

    $validator = new validator($validatios, $required, $maxLengths);

    if ($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();
        $sunkvezimioObj->insertSunkvezimi($dataPrepared);
        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else{
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}

include 'templates/sunkvezimiai_form.php';