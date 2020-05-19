<?php

    //Chamando a interface Poligono com o require_once()
    require_once('./classes/Poligono.php');

    //Criando uma classe herdeira(que estende) a classe abstrata poligono
    class Circulo extends Poligono{
        
        //Criando método que retorna o raio do círculo
        public function getRaio(){
            $medidas = $this->getMedidas();
            return $medidas[0];
        }

        //Criando método que calcula o perídmetro do circulo
        public function calcularPerimetro(){
            $raio = $this->getRaio();
            return round(2 * 3.14 * $raio, 2);
        }

        //Criando método que calcula a área do círculo
        public function calcularArea(){
            $raio = $this->getRaio();
            return round(3.14 * $raio * $raio, 2);
        }


        
    }

?>