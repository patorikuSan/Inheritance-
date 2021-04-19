<?php

    class Animal{
        public $name;
        public $health;

        public function set_name($value){
            $this->name = $value;
        }
        public function get_name(){
            return $this->name;
        }

        public function set_health($value){
            $this->health = $value;
        }
        public function get_health(){
            return $this->health;
        }

        public function walk(){
            $this->health -= 1;
            return $this;
        }
        public function run(){
            $this->health -= 5;
            return $this;
        }
        public function display_health(){
            echo 'health:'.' '.$this->get_health().'<br><br>';
        }

    }
    $a1 = new Animal();
    $a1->set_name('Wally the Walrus');
    $a1->set_health(100);
    $a1->walk()->walk()->walk()->run()->run();
    echo $a1->get_name().'<br>';
    $a1->display_health();

    class Dog extends Animal{
        public $health = 150;

        public function pet(){
            $this->health += 5;
            return $this;
        }
    }

    $goofy = new Dog();
    $goofy->set_name('Goofy the Dog').'<br><br>';
    $goofy->walk()->walk()->walk()->run()->run()->pet();
    echo $goofy->get_name().'<br>';
    $goofy->display_health();

    class Dragon extends Animal{
        public $health = 170;

        public function fly(){
            $this->health -= 10;
            return $this;
        }

        public function message(){
            echo 'This is a Dragon!'.'<br>';
        }
    }

    $drake = new Dragon();
    $drake->set_name('Drakey the Dragon').'<br><br>';
    $drake->walk()->walk()->walk()->run()->run()->fly()->fly();
    echo $drake->get_name().'<br>';
    $drake->message();
    $drake->display_health();
?>