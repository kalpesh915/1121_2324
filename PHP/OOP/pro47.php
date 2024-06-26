<?php
    /*
        PHP - Creating Iterables
        Arrays : All arrays are iterables, so any array can be used as an argument of a function that requires an iterable.
        Iterators : Any object that implements the Iterator interface can be used as an argument of a function that requires an iterable.
        An iterator contains a list of items and provides methods to loop through them. It keeps a pointer to one of the elements in the list. Each item in the list should have a key which can be used to find the item.
        An iterator must have these methods:

        
        current() - Returns the element that the pointer is currently pointing to. It can be any data type
        key() Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string
        next() Moves the pointer to the next element in the list
        rewind() Moves the pointer to the first element in the list
        valid() If the internal pointer is not pointing to any element (for example, if next() was called at the end of the list), this should return false. It returns true in any other case
    */

    
    class myIterator implements Iterator{
        private $data = [];
        private $pointer = 0;

        public function __construct($data){
            $this->data = array_values($data);
            $this->pointer = 0;
        }

        public function current(): mixed{
            return $this->data[$this->pointer];
        }

        public function key(): mixed{
            return $this->pointer;
        }

        public function next(): void{
            $this->pointer++;
        }

        public function rewind(): void{
            $this->pointer = 0;
        }

        public function valid(): bool{
            // count() indicates how many items are in the list
            return $this->pointer < count($this->data);
            //return $this->pointer < 3;
        }
    }


    function printer(iterable $myIterator){
        foreach($myIterator as $tmp){
            echo "<hr> Welcome $tmp";
        }
    }

    $data = ["Brijesh", "Bhalabahi", "Alan", "Krishil", "Meet", "Ansh", "Pooja", "Sanjana"];

    $object = new myIterator($data);
    printer($object);
?>