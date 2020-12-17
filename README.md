<p align="center"><img src="https://blog.pleets.org/img/articles/paypal-sdk.png" height="150"></p>

<p align="center">
    <a href="https://travis-ci.com/leandroburgoa/ejemplo"><img src="https://travis-ci.com/leandroburgoa/ejemplo.svg?branch=main" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/leandroburgoa/ejemplo"><img src="https://img.shields.io/scrutinizer/g/leandroburgoa/ejemplo.svg" alt="Code Quality"></a>
    <a href="https://scrutinizer-ci.com/g/leandroburgoa/ejemplo/?branch=master"><img src="https://scrutinizer-ci.com/g/leandroburgoa/ejemplo/badges/coverage.png?b=main" alt="Code Coverage"></a>
</p>

# Ejemplo PHP V0.0.1
Librería de ejemplo realizada en PHP.

<a href="https://sonarcloud.io/dashboard?id=leandroburgoa_ejemplo"><img src="https://sonarcloud.io/api/project_badges/measure?project=leandroburgoa_ejemplo&metric=security_rating" alt="Bugs"></a>
<a href="https://sonarcloud.io/dashboard?id=leandroburgoa_ejemplo"><img src="https://sonarcloud.io/api/project_badges/measure?project=leandroburgoa_ejemplo&metric=bugs" alt="Bugs"></a>
<a href="https://sonarcloud.io/dashboard?id=leandroburgoa_ejemplo"><img src="https://sonarcloud.io/api/project_badges/measure?project=leandroburgoa_ejemplo&metric=code_smells" alt="Bugs"></a>

# Instalacion
Utiliza el siguiente comando:

```bash
composer require leandroburgoa/ejemplo
```

# Uso

## Calculadora

Calculadora aritmetica básica.

### Sumar

Suma dos numeros.

```php
use Libreria\Calculadora;

$calculadora = new Calculadora();
echo $calculadora->sumar(10, 5); // 15
```

### Restar

Resta dos numeros.

```php
use Libreria\Calculadora;

$calculadora = new Calculadora();
echo $calculadora->restar(10, 5); // 5
```