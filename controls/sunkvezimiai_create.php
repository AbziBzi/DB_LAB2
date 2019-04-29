<?php

include 'libraries/sunkvezimiai.php';
$sunkvezimioObj = new sunkvezimiai();

$formErrors = null;
$data = array();

// nustatome privalomus laukus
$required = array('marke', 'modelis', 'numeriai', 'pagaminimo_data');

// maksimalūs leidžiami laukų ilgiai
$maxLengths = array (
    'numeriai' => 7
);

// paspaustas išsaugojimo mygtukas
if(!empty($_POST['submit'])) {
    // nustatome laukų validatorių tipus
    $validations = array(
        'marke' => 'alfanum',
        'modelis' => 'alfanum',
        'numeriai' => 'alfanum',
        'pagaminimo_data' => 'date',
        'registravimo_data' =>'date',
        'rida' => 'positivenumber'
    );

    // sukuriame validatoriaus objektą
    include 'utils/validator.class.php';
    $validator = new validator($validations, $required, $maxLengths);

    if($validator->validate($_POST)) {
        // suformuojame laukų reikšmių masyvą SQL užklausai
        $dataPrepared = $validator->preparePostFieldsForSQL();

        if(($dataPrepared['pagaminimo_data']) < ($dataPrepared['registravimo_data']) || $dataPrepared['registravimo_data'] == null)
        {

            $sunkvezimioObj->insertSunvezimi($dataPrepared);
            header("Location: index.php?module={$module}&action=list");
            die();
        } else{
            // gauname klaidų pranešimą
            $formErrors = "Pagaminimo data; Registravimo data";
            // gauname įvestus laukus
            $data = $_POST;
        }
    } else {
        // gauname klaidų pranešimą
        $formErrors = $validator->getErrorHTML();
        // gauname įvestus laukus
        $data = $_POST;
    }
}


// įtraukiame šabloną
include 'templates/sunkvezimiai_form.php';

?>