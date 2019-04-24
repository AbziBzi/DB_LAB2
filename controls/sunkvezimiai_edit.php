<?php

include 'libraries/sunkvezimiai.php';
$sunkvezimioObj = new sunkvezimiai();

$formErrors = null;
$data = array();

$required = array('markes','modeliai','numeriai','pagaminimo_data');

$maxLength = array(
    'numeriai' => 7
);

if (!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array(
        'markes' => 'alfanum',
        'modleiai' => 'alfanum',
        'numeriai' => 'alfanum',
        'pagaminimo_data' => 'date',
        'registravimo_data' => 'date',
        'rida' => 'positivenumber'
    );

    $validator = new validator($validations, $required, $maxLength);

    if ($validator->validate($_POST)){
        $dataPrepared = $validator->preparePostFieldsForSQL();

        $sunkvezimioObj->updateSunkvezimi($dataPrepared);

        header("LOcation: index.php?module={$module}&action=list");
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
?>