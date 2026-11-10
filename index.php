// BLOQUE 1
// Ejercicio 1: Agenda de contactos

>?php
// Añadimos los datos de los contactos de la agenda

$agenda = [
    [
        'nombre' => 'Juan Pérez',
        'telefono' => '555-1234',
        'email' => 'juan.perez@example.com'
    ],
    [
        'nombre' => 'María García',
        'telefono' => '555-5678',
        'email' => 'maria.garcia@example.com'
    ]
    [
        'nombre' => 'Carlos López',
        'telefono' => '555-9012',
        'email' => 'carlos.lopez@example.com'
    ]
];  

// Añadimos un nuevo contacto 
$agenda[] = [
    'nombre' => 'Ana Torres',
    'telefono' => '555-3456',
    'email' => '
];

// Recorremos el array agenda con foreach
foreach ($agenda as $contacto) {
    echo "Nombre: " . $contacto['nombre'] . '-'
    echo "Teléfono: " . $contacto['telefono'] . '-'
    echo "Email: " . $contacto['email'] . '<br>';   // poner PHP-EOl cuando se ve en entorno navegador

}

// BLOQUE 2
// Ejercicio 2: Refsctorrizar el análisis de notas

<?php
funtion analizarNotas(array $notas): 
{
    // variables acumuladoras
    $suma = 0;
    $maxima = $notas[0]
    $aprobados = 0;
    $suspensos = count($notas);

   // Caso especia cuando un array es null
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
            $suspensos--;
        }
    


    }
