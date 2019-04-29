<?php

include 'libraries/vairuotojai.php';
$vairuotojoObj = new vairuotojai();

$formErrors = null;
$data = array();

$required = array('vardas', 'pavarde', 'asmens_kodas', 'gimimo_data', 'sutarties_data');

$maxLengths = array(
    'asmens_kodas' => 11
);

if(!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array (
        'asmens_kodas' => 'positivenumber',
        'vardas' => 'alfanum',
        'pavarde' => 'alfanum',
        'gimimo_data' => 'date',
        'teisiu_pabaigos_data' => 'date',
        'sutarties_data' => 'date',
        'telefonas' => 'phone'
    );

    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {

        $dataPrepared = $validator->preparePostFieldsForSQL();

        $vairuotojoObj->insertVairuotoja($dataPrepared);

        header("Location: index.php?module={$module}&action=list");
        die();
    } else {
        // gauname klaidų pranešimą
        $formErrors = $validator->getErrorHTML();
        // gauname įvestus laukus
        $data = $_POST;
    }
}

include 'templates/vairuotojai_form.php';
?>
