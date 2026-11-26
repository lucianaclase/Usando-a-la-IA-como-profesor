// Ejercicio 1: Agenda de contactos

<?php
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

\\ Recorremos el array agenda con foreach
foreach ($agenda as $contacto) {
    echo $contacto['nombre'] . '-'
    echo $contacto['telefono'] . '-'
    echo $contacto['email'] . PHP_EOL;

}