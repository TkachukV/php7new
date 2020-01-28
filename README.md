<h1>Это домашнее задание на тему php7 и его новых возможностей</h1>
<ol>
    <li>
        <b>В PHP 7 добавлена поддержка объявления возвращаемого типа. </b><br>
        
             public function __construct(int $id)
            {
                   $this->id = $id;
            }

             public function getId(): int
             {
                   return $this->id;
              }
   </li>
    <li>
           <b>В PHP 7 добавлена строгая типизация </b><br>
           
           
           
           <?php
           declare(strict_types=1);
           
           function sum(int $a, int $b) {
               return $a + $b;
           }
           
           var_dump(sum(1, 2));
           var_dump(sum(1.5, 2.5)); // Fatal error: Uncaught TypeError: Argument 1 passed to sum() must be of the type integer, float given.

   

</li>
    
</ol>


<h2>Licinse</h2>
Этот проект лицензирован по лицензии MIT - подробности см. В файле LICENSE