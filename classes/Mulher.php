<?php
    //Chamando a classe abstrata Pessoa com o require_once()
    require_once('./classes/Pessoa.php');

    //Criando umam classe herdeira (que estende) a classe abstrata Pessoa
    //utilizando extends para mostrar que é herdeira da classe abstrata
    class Mulher extends Pessoa {

        //Função que 'define' o peso 'ideal'
        //Retorna o diagnóstivo de a cordo com o peso ideal
        public function pesoIdeal(){

            //Atrelando o valor do IMC à variável $condicao
            $condicao = $this->calcularIMC();

            //Usando o switch para contemplar os ranges de valores.
            // O Switch vai comparar um valor frente aos casos(case). Então vamos ver se as condições que precisamos usar são true.

            switch (true){
                case ($condicao < 14.5):
                    $condicao = 'Desnutrição';
                break;
                case ($condicao < 18.5):
                    $condicao = 'Subnutrição';
                break;
                case ($condicao < 24):
                    $condicao = 'Peso Ideal';
                break;
                case ($condicao < 29):
                    $condicao = 'Sobrepeso';
                break;
                case ($condicao < 34.9):
                    $condicao = 'Obesidade';
                break;
                case ($condicao < 39):
                    $condicao = 'Obesidade Severa';
                break;
                case ($condicao > 39):
                    $condicao = 'Obesidade Mórbida';
                break;

            }

            

        }
        /*
             *DESAFIO
             Para a mulher, temos os seguintes diagnósticos:
             Peso   -   Condição
             14.5   -   Desnutrição
             18.5   -   Subnutrição
             24     -   Peso Ideal
             29     -   Sobrepeso
             34.9   -   Obesidade
             39     -   Obesidade Severa
             +39    -   Obesidade Mórbida

             * Como podemos criar essa regra de forma que nos retorne o diagnóstico a partir do IMC
            */
    }

?>