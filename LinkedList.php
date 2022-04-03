<?php
    class Node {
        //data and the next to link
        public function __construct($data, $next = null){
            $this->data = $data;
            $this->next = $next;
            
        }
    }

    class LinkedList{
        //inserting element at the beginning
        public function __construct(){
            $this->head = null;
            $this->size = 0;
        }

        function insertFirst($data){
            $this->head = new Node($data, $this->head);
            $this->size = $this->size+1;
        }
        
        function printData(){
            $current = $this->head;
            while($current){
                //echo($current->data).", ";
                $current = $current->next;
            }
        }
        
        //inserting element at the middle
        //inserting element at the end
        //deleting element
        //display element
    }

    $LinkedList = new LinkedList();
    $LinkedList->insertFirst(900);
    $LinkedList->insertFirst(1000);
    $LinkedList->insertFirst(50000);


    $LinkedList->printData();
    echo JSON_encode($LinkedList);


?>