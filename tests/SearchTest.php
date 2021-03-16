<?php

use PHPUnit\Framework\TestCase;
use afranca1\CepLocator\Search;

class SearchTest extends TestCase
{

  /**
   * @dataProvider dataset
   */
  public function testGetAddressFromZipcodeDefaultUsage(string $input, array $output)
  {
    $result = new Search;
    $result = $result->getAddressFromZipcode($input);

    $this->assertEquals($output, $result);
  }

  public function dataset()
  {
    return [
      "Endereço Rua Luis Asson" => [
        "03624010",
        [
          "cep" => "03624-010",
          "logradouro" => "Rua Luís Asson",
          "complemento" => "",
          "bairro" => "Vila Buenos Aires",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ],
      "Endereço Praça da Sé" => [
        "01001000",
        [
          "cep" => "01001-000",
          "logradouro" => "Praça da Sé",
          "complemento" => "lado ímpar",
          "bairro" => "Sé",
          "localidade" => "São Paulo",
          "uf" => "SP",
          "ibge" => "3550308",
          "gia" => "1004",
          "ddd" => "11",
          "siafi" => "7107"
        ]
      ]
    ];
  }
}
