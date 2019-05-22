<?php

include 'libraries/iranga.php';
$irangosObj = new iranga();

$formErrors = null;
$fields = array();
//$formSubmitted = false;

$data = array();
if(empty($_POST['submit'])) {

    // rodome ataskaitos parametrų įvedimo formą
    include 'templates/iranga_report_form.php';
} else {
//    $formSubmitted = true;

    // nustatome laukų validatorių tipus
    $validations = array (
        'pinigaiNuo' => 'price',
        'pinigaiIki' => 'price'
    );

    // sukuriame validatoriaus objektą
    include 'utils/validator.class.php';
    $validator = new validator($validations);


    if($validator->validate($_POST)) {
        // suformuojame laukų reikšmių masyvą SQL užklausai
        $data = $validator->preparePostFieldsForSQL();

        // išrenkame ataskaitos duomenis
        $irangosData = $irangosObj->getIsrinktaIranga($data['pinigaiNuo'], $data['pinigaiIki']);
        $servicesStats = $irangosObj->getPiniguKiekiIrangos($data['pinigaiNuo'], $data['pinigaiIki']);

        // rodome ataskaitą
        include 'templates/iranga_report_show.php';
    } else {
        // gauname klaidų pranešimą
        $formErrors = $validator->getErrorHTML();
        // gauname įvestus laukus
        $fields = $_POST;

        // rodome ataskaitos parametrų įvedimo formą su klaidomis ir sustabdome scenarijaus vykdym1
        include 'templates/iranga_report_form.php';
    }
}

