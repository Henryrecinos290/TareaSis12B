</!DOCTYPE html>
<html>
    
    <head>
        
    </head> 
    <body>
        
        
        <section>
            
            
            
            <form action="#" method="">
                <br>Ingrese el numero para saber sus factoriales <input type="text" name="numero">
                <br><br><input type="submit" name="b1" value="Ver">
            </form>
        </section>
    </body>
     <?php
     if(isset($_REQUEST["b1"]))
     {
         
         $numero=$_REQUEST["numero"];
         $factorial;
         for ($i = 0; $i <=$numero; $i++) {
             $factorial=$factorial*$i;
             
         }
         echo "el factorial del numero son".$factorial;
         
         
         
     }
     
     ?>   
        
   
    
    
    
    
    
    
    
</html>
