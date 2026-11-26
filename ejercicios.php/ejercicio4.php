\\ Bloque 4: Primer contacto con POO
\\ Ejercicio 5.1 — La clase CuentaBancaria
<?php
class CuentaBancaria
{
    // Propiedades privadas: solo accesibles desde dentro de la clase
    private string $titular;
    private float $saldo;

    public function __construct(string $titular, float $saldoInicial = 0)
    {
        $this->titular = $titular;
        $this->saldo   = $saldoInicial;
    }

    public function ingresar(float $cantidad): void
    {
        if ($cantidad <= 0) {
            throw new InvalidArgumentException('La cantidad a ingresar debe ser positiva.');
        }
        $this->saldo += $cantidad;
    }

    public function retirar(float $cantidad): void
    {
        if ($cantidad <= 0) {
            throw new InvalidArgumentException('La cantidad a retirar debe ser positiva.');
        }
        if ($cantidad > $this->saldo) {
            // Lanzar excepción si no hay saldo suficiente
            throw new RuntimeException('Saldo insuficiente.');
        }
        $this->saldo -= $cantidad;
    }

    public function getSaldo(): float
    {
        return $this->saldo;
    }
}

// Prueba
try {
    $cuenta = new CuentaBancaria('Ana', 100);
    $cuenta->ingresar(50);
    echo "Saldo actual: " . $cuenta->getSaldo() . PHP_EOL; // 150
    
    $cuenta->retirar(200); // Debe lanzar excepción
    echo "Esta línea no se ejecutará." . PHP_EOL;
} catch (RuntimeException $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}