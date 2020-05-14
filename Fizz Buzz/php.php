// mine

for ($i=1; $i<=100; $i++){
	if($i % 3 == 0){ 
    	if($i % 5 == 0) echo "FizzBuzz";
        else echo "Fizz";
    }    
    elseif($i % 5 == 0) 
    	echo "Buzz";
    else
    	echo $i;
echo "\n";        
}

// ideal
foreach(range(1,100)as$i) echo(''==($x=($i%3==0?"Fizz":"").($i%5==0?"Buzz":""))?$i:$x)."\n";
