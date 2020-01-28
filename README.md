<h1>Это домашнее задание на тему php7 и его новых возможностей</h1>
<ol>
    <li>
        <b>В PHP 7.0 добавлена поддержка объявления возвращаемого типа. </b><br>
        
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
           <b>В PHP 7.0 добавлена строгая типизация </b><br>
           
           
           
           <?php
           declare(strict_types=1);
           
           function sum(int $a, int $b) {
               return $a + $b;
           }
           
           var_dump(sum(1, 2));
           var_dump(sum(1.5, 2.5)); // Fatal error: Uncaught TypeError: Argument 1 passed to sum() must be of the type integer, float given.

   

   </li>
           <b>В PHP 7.1 Поддержка модификаторов видимости для констант класса </b><br>
            
            
            
            	private const PRIVATE_CONST = 0;
                    	protected const PROTECTED_CONST = 0;
                    	public const PUBLIC_CONST_TWO = 0;
             
            // Весь список имеет одну область видимости
                    	private const FOO = 1, BAR = 2;

   <li>
        
   </li>
    
</ol>


<h2>Licinse</h2>
Этот проект лицензирован по лицензии MIT - подробности см. В файле LICENSE