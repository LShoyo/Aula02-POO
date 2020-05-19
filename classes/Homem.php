<?php
    //Chamando a classe abstrata Pessoa com o require_once()
    require_once('./classes/Pessoa.php');

    //Criando umam classe herdeira (que estende) a classe abstrata Pessoa
    //utilizando extends para mostrar que é herdeira da classe abstrata
    class Homem extends Pessoa {

        //Função que 'define' o peso 'ideal'
        //Retorna o diagnóstivo de a cordo com o peso ideal
        public function pesoIdeal(){

            //Atrelando o valor do IMC à variável $condicao
            $condicao = $this->calcularIMC();

            //Usando o switch para contemplar os ranges de valores.
            // O Switch vai comparar um valor frente aos casos(case). Então vamos ver se as condições que precisamos usar são true.

            switch (true){
                case ($condicao < 15):
                    $condicao = 'Desnutrição';
                break;
                case ($condicao < 19):
                    $condicao = 'Subnutrição';
                break;
                case ($condicao < 25):
                    $condicao = 'Peso Ideal';
                break;
                case ($condicao < 30):
                    $condicao = 'Sobrepeso';
                break;
                case ($condicao < 35):
                    $condicao = 'Obesidade';
                break;
                case ($condicao < 40):
                    $condicao = 'Obesidade Severa';
                break;
                case ($condicao > 40):
                    $condicao = 'Obesidade Mórbida';
                break;
            }
        }
    }

?>