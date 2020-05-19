<?php

    //Chamando a interface Poligono com o require_once()
    require_once('./classes/Poligono.php');

    //Criando umam classe herdeira(que estende) a classe abstrata poligono
    class Retangulo extends Poligono {

        //Criando método que retorna o lado 1 do retângulo
        public function getLado1() {
            $medidas = $this->getMedidas();
            return $medidas[0];
        }
        //Criando método que retorna o lado 2 do retângulo
        public function getLado2() {
            $medidas = $this->getMedidas();
            return $medidas[1];
        }

        //Criando método que calcula o perímetro do retângulo
        public function calcularPerimetro() {
            return 2 * $this->getLado1() + 2 * $this->getLado2();
        }

        //Criando método que calcula a área do retângulo
        public function calcularArea(){
            return $this->getLado1() * $this->getLado2();
        }
    }

?>