<?php

include 'libraries/imones.php';
$imonesObj = new imones();

$formErrors = null;
$data = array();

$required = array('pavadinimas', 'kontakto_vardas', 'kontakto_pavarde', 'imones_kodas');

$maxLengths = array(
    'imones_kodas' => 9
);

if(!empty($_POST['submit'])) {
    include 'utils/validator.class.php';

    $validations = array (
        'pavadinimas' => 'alfanum',
        'kontakto_vardas' => 'alfanum',
        'kontakto_pavarde' => 'alfanum',
        'imones_kodas' => 'positivenumber'
    );

    $validator = new validator($validations, $required, $maxLengths);

    if ($validator->validate($_POST)) {
        $dataPrepared = $validator->preparePostFieldsForSQL();

        if(isset($dataPrepared['issimokejimas']) && $dataPrepared['issimokejimas'] == 'on') {
            $dataPrepared['issimokejimas'] = 1;
        } else {
            $dataPrepared['issimokejimas'] = 0;
        }

        $imonesObj->updateImone($dataPrepared);

        header("Location: index.php?module={$module}&action=list");
        die();
    }
    else {
        $formErrors = $validator->getErrorHTML();
        $data = $_POST;
    }
}
else {
    $data = $imonesObj->getImone($id);
}

$data['editing'] = 1;
include 'templates/imones_form.php';

?>
