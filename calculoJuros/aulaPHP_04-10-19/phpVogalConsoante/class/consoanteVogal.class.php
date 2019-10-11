<?php 
        class tamburete{
            private $letra;

            public function setLetra($letra){
                $this->letra = $letra;
            }
            public function getLetra(){
               if(is_numeric($this->letra)){
                   if($this->letra %2 ==0){
                       return "Esse número é par";
                   }
                   else{
                       return "Esse númeor é impar";
                   }
               
            }else{
                if($this->letra == "a" ||$this->letra =="e" || $this->letra =="i" ||$this->letra == "o" || $this->letra == "u"){
                    return "A letra: $this->letra é uma vogal";    
                }else{
                    return "A letra: $this->letra é uma consoante";    
                }   
            }
        }
        }
?>