
<?php
   class Books {
      /* Member variables */
      var $price;
      var $title;
      
      /* Member functions */
      function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
      function setTitle($par){
         $this->title = $par;
      }
      
      function getTitle(){
         echo $this->title ." <br/>";
      }
   }

class Novel extends Books {
   var $publisher;
   var $price;
   
   function setPublisher($par){
      $this->publisher = $par;
   }
   
   function getPublisher(){
      echo $this->publisher. "<br />";
   }
    function setPrice($par){
         $this->price = $par;
      }
      
      function getPrice(){
         echo $this->price ."<br/>";
      }
      
}


$b= new Books;
$b->setPrice('500');
$b->getPrice();

$n= new Novel;
$n->setPrice('501');
$n->getPrice();

?>