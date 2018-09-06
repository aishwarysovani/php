<?php

//function for user name validation
function getstring()
{    
    fscanf(STDIN,'%s',$str);
    if (!filter_var($str, FILTER_VALIDATE_INT))
    {
        echo 'enter only alphabets for user name ';
        return getstring();

    }
    else
    {
        return $str;
       
    }
}

//function for validating number
function filternum()
{
    fscanf(STDIN,'%d',$num);
    if (!filter_var($num, FILTER_VALIDATE_INT))
    {
        echo 'enter only numbers';
        return filternum();

    }
    else 
        return $num;  
    
}


//function to check numbers are positive or negative
function positive($num)
{
    if($num<0)
    {
        echo"enter positive number";
        return filternum();
                                     
    }
    else 
    return $num;
    
}


//function for find out percentage of coin tossed
 function tossed($num)
 {
    $a=array($num);
    global $head;global $head_per;global $tail_per;
    $tail=0;
    for($i=0;$i<$num;$i++)
    {
        $a[$i]=rand(0,1);
        if($a[$i]<0.5)
        $head++;
        else
        $tail++;
    }
    
    $head_per=( $head / $num ) * 100;            //head percentage calculation
    $tail_per=( $tail / $num ) * 100;            //tail percentage calculation
    
}

//function to find out leap year or not
function leap($year)
{
    if(strlen((string)$year)!=4)
    {
        echo"enter year in YYYY format";
        $year=filternum();
    }
        if(($year%4==0) && ($year%100!=0 || $year%400==0))
        {
        echo"year is leap year";
        }
        else
        echo"year is not leap year";
}

//function to calculate power of 2
function power($num)
{
    if(0 < $num && $num < 31)
    {
        echo"number  squre";
        echo"\n";
        for($i=1;$i<=$num;$i++) 
        {
        $squre=$i * $i;
        echo $i . "        " . $squre;
        echo"\n";
        }
     
    }
    else
    {
        echo"enter values in 2 to 31";
         return cal();
    }
}

//function to calucalte harmonic number
function harmonic($num)
{
    $har=0;
    
    for($i=1;$i<$num;$i++)
    {
        $har=$har+(1/$i);
    }
    
    return $har;
   
    
}


//function for prime factor
function primefact($num)
{
    echo'factors= ';
    while($num % 2 == 0)
    {
        echo 2," ";
        $num = $num / 2;
    }
 
    for ($i = 3; $i <= sqrt($num); 
                   $i = $i + 2)
    {
         
        while ($num % $i == 0)
        {
            echo $i," ";
            $num = $num / $i;
        }
    }
    if ($num > 2)
        echo $num," ";   
    
}




//function for find out triplets in array
function triplet($num)
{
    $found=false;
    echo"enter " . $num . " number";
    $a=array($num);
    for($i=0;$i<$num;$i++)
   {
    fscanf(STDIN,'%d',$a[$i]);
    }
     for($l=0;$l<$num-2;$l++)
{
    for($m=1;$m<$num-1;$m++)
    {
        for($n=2;$n<$num;$n++)
        {
            if($a[$l]+$a[$m]+$a[$n]==0)
            {
            echo"triplets found at:" . $a[$l] . $a[$m] . $a[$n];
            echo"\n";
            $found=true;
            }
            
        }
        
    }
    
}
if($found==false)
{
    echo'triplets not found';
}
}


//factorial by recursion
function fact($n)
{
    if ($n === 0)
{ 
    return 1;
}
else 
{
    return $n * fact($n-1); 
}
}

//factorial by Itration
function fact1($n)
{
    $result = 1;
        while ($n > 0) {
            $result *= $n;
            $n--;
        }
        return $result;
}


//function to choose random coupon 
function random($num)
{
    $count=0;$dist=0;
    $value=0;
    $a=array($num);
    while($dist<$num)
    {
        $a[$value]=coupon($num);
        $count++;
        if(!$a[$value])
        {
            $dist++;
            $a[$value]=true;
        }
    }
    return $count;
}
function coupon($num)
{
    
    return rand(0,$num);
    
}


//function to read 2d array
function read($m,$n)
{
    $a[][]=array($m,$n);
    for($i=0;$i<$m;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            $a[$i][$j]=filternum(); 
            
        }
    }
    printa($a,$m,$n);

}

//function to print 2D array
function printa($a,$m,$n)
{
        $i=0;
        do{
        for($j=0;$j<$n;$j++)
        {
            echo '    ' . $a[$i][$j];
            
        }
        echo"\n";
        $i++;
        }while($i<$m);
    
}

//function to calculate root of quadratic equation
function root($a,$b,$c)
{
    global $delta,$r1,$r2;
    $delta=($b*$b)-4*$a*$c;
    $r1=(-$b+sqrt($delta))/(2*$a);
    $r2=(-$b-sqrt($delta))/(2*$a);
}


//function to filter float values
function filterfloat()
{
    fscanf(STDIN,'%f',$num);
    if (filter_var($num, FILTER_VALIDATE_FLOAT))
    {
      return $num;
    }
    else
    {
        echo 'enter number in double format ';
        return filterfloat();
    } 
}
function read1($m,$n)
{
    $a[][]=array($m,$n);
    for($i=0;$i<$m;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            $a[$i][$j]=filterfloat(); 
            
        }
    }
    printa($a,$m,$n);

}

function filterboolean()
{
    fscanf(STDIN,'%d',$num);
    if ($num==0 || $num==1)
    {
      return $num;
    }
    else
    {
        echo 'enter boolean number i.e. 0 or 1 ';
        return filterboolean();
    } 
}

function read2($m,$n)
{
    $a[][]=array($m,$n);
    for($i=0;$i<$m;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            $a[$i][$j]=filterboolean(); 
            
        }
    }
    printa($a,$m,$n);

}



?>