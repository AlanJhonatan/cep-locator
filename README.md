# Cep Locator PHP Library

## About

This is an library to easy search Brazilian zip-codes (cep) in php

## Installation

`composer require afranca1/cep-locator`

## Usage

```php
$busca = new Search;

$resultado = $busca -> getAddressFromZipcode('01001000');

print_r($resultado);
```

**Expected Return**

```php
Array
(
    [cep] => 01001-000
    [logradouro] => Praça da Sé
    [complemento] => lado ímpar
    [bairro] => Sé
    [localidade] => São Paulo
    [uf] => SP
    [ibge] => 3550308
    [gia] => 1004
    [ddd] => 11
    [siafi] => 7107
)
```
