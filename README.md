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
          <b>В PHP 7.2 Добавлен алгоритм Argon2 в хешировании пароля </b><br>
        
        
        Argon2 — это современный простой алгоритм, направленный на высокую 
        скорость заполнения памяти и эффективное использование нескольких вычислительных блоков.
        
        echo 'Хеш Argon2i: ' . password_hash('rasmuslerdorf', PASSWORD_ARGON2I);
        
        // Хеш Argon2i:
        // $argon2i$v=19$m=1024,t=2,p=2$YzJBSzV4TUhkMzc3d3laeg$zqU/1IN0/AogfP4cmSJI1vc8lpXRW9/S0sYY2i2jHT0


        
   </li>
   <li>
        <b>В PHP 7.3 Добавление функции is_countable() </b><br>
   
        if (is_countable($someVar)) {  
          echo count($someVar);  
        }  else {
          echo ‘$someVar is not countable’;  
        }

   
   </li>
   <LI>
        <b>В PHP 7.3 Добавление функций array_key_first() и array_key_last()</b><br>
        
        // usage of an associative array
        $array = ['a' => 1, 'b' => 2, 'c' => 3];
        $firstKey = array_key_first($array);
        assert($firstKey === 'a');
        
        // usage of a numeric array
        $array = [1 => 'a', 2 => 'b', 3 => 'c'];
        $firstKey = array_key_first($array);
        assert($firstKey === 1);
        
        
   </LI>
    
</ol>


<h2>Licinse</h2>
Этот проект лицензирован по лицензии MIT - подробности см. В файле LICENSE