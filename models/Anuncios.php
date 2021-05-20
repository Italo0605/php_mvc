<?php
    class Anuncios extends Model{

        public function getQuantidade(){
           $sql = "SELECT COUNT(*) as qtdAnuncios FROM anuncios";
           $sql = $this->db->query($sql);
           if($sql->rowCount() > 0){
               $sql = $sql->fetch();
               return $sql['qtdAnuncios'];
            }else{
                return 0;
            }
        }
    }
?>