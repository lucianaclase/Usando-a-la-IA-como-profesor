# Bloque 3: Limpieza de lista de emails

<?php
$emails = [
    '  Juan@Mail.com ',
    'PEDRO@mail.COM',
    '  ana@mail.com',
    'invalido',
    'luis@mail.com  ',
];

$emailsLimpios = array_map(function ($email): strtolower(trim($email)), $emails);   #strtolower recibe un string y devuelve un string con todas las letras en miníscula, no modifica el string original.

$emailsValidos = array_filter($emailsLimpios, function (string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
});

$emailsFinales = array_values($emailsValidos);

print_r($emailsFinales);