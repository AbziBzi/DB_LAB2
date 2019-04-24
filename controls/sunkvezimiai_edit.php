<?php

include 'libraries/sunkvezimiai.php';
$sunkvezimioObj = new sunkvezimiai();

$formErrors = null;
$data = array();

$required = array('marke', 'modelis', 'numeriai', 'pagaminimo_data');

$maxLengths = array(
    'numeriai' => 7
);

if(!empty($_POST['submit'])) {

    $validations = array(
        'marke' => 'alfanum',
        'modelis' => 'alfanum',
        'numeriai' => 'alfanum',
        'pagaminimo_data' => 'date',
        'registravimo_data' =>'date',
        'rida' => 'positivenumber'
    );
    include 'utils/validator.class.php';

    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();

        $sunkvezimioObj->updateSunkvezimi($dataPrepared);

        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}
else {
    $data = $sunkvezimioObj->getSunkvezimiai($id);
}
$data['editing'] = 1;

include 'templates/sunkvezimiai_form.php';
?>