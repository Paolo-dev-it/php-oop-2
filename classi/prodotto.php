<?php 

    include_once __DIR__ . '/category.php';

    class Prodotto{
        public $immagine;
        public $nome;
        public $prezzo;
        public $category;
        

        public function __construct(
            String $immagine,
            String $nome,
            Float $prezzo,
            Categorie $category

            ) {
            $this->nome = $nome;
            $this->autore = $autore;
            $this->prezzo = $prezzo;
            $this->generi = $generi;
            $this->pubblicato = $pubblicato;
            $this->immagine = $immagine;
  }

}


?>