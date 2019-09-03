<html>
   
   <head>
      <title>Hello World</title>
   </head>
   
   <body>
   <h1> Hello Sau</h1>
      <?php echo "Hello, World!";
         $heading="Welcome my dear boy ....";
         $fruits = array('Apple' , 'Banana' , 'Apricot');
         $myfruit=array ( 'fruit1' => 'Apple', 'fruit2' => 'ALUALU' ,
                       'fruit3' => 'NEWFOUNDLAND' , 'fruit4' => 'NABANNA')
      ?>

   <h2>  <?php  echo $heading  ?>  </h2>

   <?php
        echo $fruits[0] ;
         echo $fruits[1];
         echo $fruits[2];
         echo $myfruit['fruit2']. '<br>';


         foreach ($fruits as $fruit) {
             echo $fruit.'<br>';
             echo " " ;
         }
   foreach ($fruits as $fruit) {
       echo $fruit.'<br>';
       echo " " ;
   }
   ?>

   <ul>
       <?php  foreach ($fruits as $fruit) { ?>
       <li> <?php  echo $fruit ?> </li>

       <?php } ?>
   </ul>

   <ul>
       <?php  foreach ($myfruit as   $key => $value) : ?>
           <li> <?php  echo $key ?> :
                <?php  echo $value ?> </li>

       <?php endforeach; ?>
   </ul>

   <?php
   $x = 1;
   if ( $x == 3) {
       echo " x = $x";
   }
   else  {
       sayHello( $x ) ;
       echo " x = $x";
   }

   function sayHello( $a ) {
       echo "Hello My World  is   $a ";
   }
   ?>

   </body>


</html>