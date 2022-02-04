<?php
include __DIR__ . '/db.php';
header('Content-Type: application/json');


if (!empty($_GET['carburante']) && !empty($_GET['cambio']) && !empty($_GET['n_porte'])) {
    $carburante = $_GET['carburante'];
    $cambio = $_GET['cambio'];
    $n_porte = $_GET['n_porte'];
    if ($carburante === 'all' && $cambio === 'all' && $n_porte === 'all') {
        echo json_encode(
            [
                'length' => count($cars),
                'response' => $cars,
            ]
        );
    } else {
        $filteredCars = [];
        if ($carburante !== 'all') {
            foreach ($cars as $car) {
                if ($car['carburante'] == $carburante) {
                    $filteredCars[] = $car;
                };
            }
        }
        if ($cambio !== 'all') {
            foreach ($cars as $car) {
                if ($car['cambio'] == $cambio) {
                    $filteredCars[] = $car;
                };
            }
        }
        if ($n_porte !== 'all') {
            foreach ($cars as $car) {
                if ($car['n_porte'] == $n_porte) {
                    $filteredCars[] = $car;
                };
            }
        }
        echo json_encode(
            [
                'length' => count($filteredCars),
                'response' => $filteredCars,
            ]
        );
    }
}
