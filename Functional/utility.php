<?php
//function for user name validation
function getstring()
{
    fscanf(STDIN,'%s',$str);    
    
    if (filter_var($str, FILTER_VALIDATE_INT))
    {
        echo 'enter only alphabets for user name ';
        getstring();

    }
    else
    {
        return $str;
       
    }
}
 
function filternum($num)
{
    if (!filter_var($num, FILTER_VALIDATE_INT))
    {
        echo 'enter only numbers';
        return;

    }  
}


//function for find out percentage of coin tossed
 
 function tossed()
 {
     fscanf(STDIN,'%d',$num);
     if (!filter_var($num, FILTER_VALIDATE_INT))
    {
        echo 'enter only numbers';
        tossed();
    }
    $a=array($num);$head=0;$tail=0;
    if($num<0)
    {
        echo"enter positive number";
        tossed();
                                     
    }
    for($i=0;$i<$num;$i++)
    {
        $a[$i]=rand(0,1);
    }
    for($i=0;$i<$num;$i++)
    {
    if($a[$i]<0.5)
        $head++;
    else
        $tail++;
    }
    $head_per=( $head / $num ) * 100;            //head percentage calculation
    $tail_per=( $tail / $num ) * 100;            //tail percentage calculation
    if($head_per>$tail_per)
    {
     return '1';   
    }
    else
    return '0';
}

//function to find out leap year or not
function leap()
{
    fscanf(STDIN,'%d',$year);
    if (!filter_var($year, FILTER_VALIDATE_INT))
    {
        echo 'enter only in year format YYYY';
        leap();

    }
    if(($year%400==0) || ($year%100!=0 && $year%4==0))
    {
    echo"year is leap year";
    }
    else
    echo"year is not leap year";
}

//function to calculate power of 2
function power()
{
    fscanf(STDIN,'%d',$num);
    filternum($num);
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
        power();
    }
}

//function to calucalte harmonic number
function harmonic($num)
{
    while(1<$num)
    {
        $har=($num)/((1/$num)+(1/$num-1));
        $num--;
    }
    return $har;
}


//function for prime factor
function primefact($num)
{
    echo'Prime factor of 1 is 1';
    $least_prime=array ($num + 1);
    for($i= 2 ;$i*$i<=$num;$i++)
    {
      if($least_prime[$i] == 0)
      {
          $least_prime[$i]=$i;
      }
      for ($j = 2 *$i;$j <=$num;$j+=$i)
      {
                if ($least_prime[$j] == 0)
                   $least_prime[$j] =$i;
      }
    }
    for($i=2;$i<=$num;$i++)
    {
        echo'Prime factor of ' . $i . ' is' . $least_prime[$i];
        echo"\n";    
    }
}


//function for fimd out triplets in array
function triplet($num)
{
    echo"enter " . $num . " number";
    $a=array($num);
    for($i=1;$i<=$num;$i++)
{
    fscanf(STDIN,'%d',$a[$i]);
    //$a[$i]=readline();
}
for($l=0;$l<$num-2;$l++)
{
    for($m=1;$m<$num-1;$m++)
    {
        for($n=2;$n<=$num;$n++)
        {
            $sum=$a[$l]+$a[$m]+$a[$n];
            if($sum==0)
            echo"triplets found at:" . $a[$l] . $a[$m] . $a[$n];
            
        }
    }
}
echo'triplets not found';
}
?>