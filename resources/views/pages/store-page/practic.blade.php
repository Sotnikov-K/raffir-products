@php
    class Shop {
        private $price = 100;

        public function setPrice($nextName){
            $this->name = $nextName;
        }

        public function getPrice(){
            $result = $this->name;
            return dd($result); 
        }

    }

$name = new Shop();
$name->setName('Kir');
$name->getName();

@endphp