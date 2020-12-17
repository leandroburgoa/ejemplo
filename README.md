<p align="center"><img src="https://blog.pleets.org/img/articles/paypal-sdk.png" height="150"></p>

<p align="center">
    <a href="https://travis-ci.com/leandroburgoa/ejemplo"><img src="https://travis-ci.com/leandroburgoa/ejemplo.svg?branch=master" alt="Build Status"></a>
    <a href="https://scrutinizer-ci.com/g/payment-gateways/paypal-sdk"><img src="https://img.shields.io/scrutinizer/g/payment-gateways/paypal-sdk.svg" alt="Code Quality"></a>
    <a href="https://scrutinizer-ci.com/g/payment-gateways/paypal-sdk/?branch=master"><img src="https://scrutinizer-ci.com/g/payment-gateways/paypal-sdk/badges/coverage.png?b=master" alt="Code Coverage"></a>
</p>

# Ejemplo PHP 0.0.1
Librería de ejemplo realizada en PHP.

<a href="https://sonarcloud.io/dashboard?id=payment-gateways_paypal-sdk"><img src="https://sonarcloud.io/api/project_badges/measure?project=payment-gateways_paypal-sdk&metric=security_rating" alt="Bugs"></a>
<a href="https://sonarcloud.io/dashboard?id=payment-gateways_paypal-sdk"><img src="https://sonarcloud.io/api/project_badges/measure?project=payment-gateways_paypal-sdk&metric=bugs" alt="Bugs"></a>
<a href="https://sonarcloud.io/dashboard?id=payment-gateways_paypal-sdk"><img src="https://sonarcloud.io/api/project_badges/measure?project=payment-gateways_paypal-sdk&metric=code_smells" alt="Bugs"></a>

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
echo $calculadora->sumar(10, 5);
```