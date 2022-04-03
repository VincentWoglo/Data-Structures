<?php
    class Stack
    {

        function __Construct(){
            $this->Items = [];
            $this->Count = 0;
        }

        //Inserts an element at the top
        function Push($Element){
            $this->Items[$this->count] = $Element;
            $this->count++;
            echo var_dump($this->Items) . "+" . $this->count;
            echo "<br />";
            return $this->count - 1;
        }
        
        //Returns the top element after removing from the stack
        function Pop(){
            
        }

        //Returns true if the stack is empty
        function isEmpty(){
            
        }

        //Returns the top element without removing from the stack
        function Top(){
            
        }
    }

    $Stack = new Stack();
    $Stack->Push(20);
    $Stack->Push(21250);
    $Stack->Push(21250);
?>