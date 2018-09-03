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
 
//function for validating number
function filternum()
{
    fscanf(STDIN,'%d',$num);
    if (!filter_var($num, FILTER_VALIDATE_INT))
    {
        echo 'enter only numbers';
        filternum();

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
        filternum();
                                     
    }
    
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
    }
    for($i=0;$i<$num;$i++)
    {
    if($a[$i]<0.5)
        $head++;
    else
        $tail++;
    }
    $head_per=( $head / 100 ) * $num;            //head percentage calculation
    $tail_per=( $tail / 100 ) * $num;            //tail percentage calculation
    if($head_per>$tail_per)
    {
     return '1';   
    }
    else
    return '0';
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
        $num=filternum();
        power($num);
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


//function for fimd out triplets in array
function triplet($num)
{
    echo"enter " . $num . " number";
    $m=0;
    $a=array($num);
    for($i=0;$i<$num;$i++)
{
    //$a[$i]=readline();
    fscanf(STDIN,'%d',$a[$i]);
}
for($l=0;$l<$num-2;$l++)
{
    for($m=1;$m<$num-1;$m++)
    {
        for($n=2;$n<$num;$n++)
        {
            $sum=$a[$l]+$a[$m]+$a[$n];
            if($sum==0)
            echo"triplets found at:" . $a[$l] . $a[$m] . $a[$n];
            $m=1;
            //echo"\n";
            
        }
        
    }
    
}
if($m == 0)
    echo'triplets not found';

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
    $a=array($m,$n);
    $a[][]=$a;
    for($i=0;$i<$m;$i++)
    {
        for($j=0;$j<$n;$j++)
        {
            $a[$i][$j]=readline();
            echo$a[$i][$j]; 
            //settype($a[$i][$j],'bool');
            //var_dump($a[$i][$j]);
        }
    }
}



?>