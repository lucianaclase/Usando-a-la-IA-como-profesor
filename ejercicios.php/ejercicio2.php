// BLOQUE 2
// Ejercicio 2: Refactorrizar el análisis de notas

<?php
funtion analizarNotas(array $notas): 
{
    // variables acumuladoras
    $suma = 0;
    $maxima = $notas[0]
    $aprobados = 0;
    $suspensos = count($notas);

   // Caso especial cuando un array es null
//  if (total === 0) {
//      return [
//          'suma' => 0,
//          'media' => 0,
//          'maxima' => null,
//          'aprobados' => 0,
//          'suspensos' => 0,
//  ];
 }

    foreach ($notas as $notas) {
        $suma += $nota;
        if ($nota > $maxima) {
            $maxima = $nota;
        }

        if ($nota >= 5) {
            $aprobados++;
        } else {
            $suspensos++;
        }

    }
    return [
        'suma' => $suma,
        'media' => $suma / $total,
        'maximma' => $maxima,
        'aprobados' => $aprobados,
        'suspensos' => $suspensos,
    ];

}
