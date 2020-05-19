<?php

    //Chamando a interface Poligono com o require_once()
    require_once('./classes/Poligono.php');

    //Criando umam classe herdeira(que estende) a classe abstrata poligono
    class Losango extends Poligono {

        //Criando método que retorna a diagonal 1 do losango
        public function getDiagonal1() {
            $medidas = $this->getMedidas();
            return $medidas[0];
        }
        //Criando método que retorna a diagonal 2 do losango
        public function getDiagonal2() {
            $medidas = $this->getMedidas();
            return $medidas[1];
        }

        //Criando método que calcula o perímetro do losango
        public function calcularPerimetro() {
            return 2 * $this->getDiagonal1() + 2 * $this->getDiagonal2();
        }

        //Criando método que calcula a área do losango
        public function calcularArea(){
            return $this->getDiagonal1() * $this->getDiagonal2() / 2;
        }
    }

?>