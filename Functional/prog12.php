<?php
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
echo fact(5);
echo"\n";
function fact1($n)
{
    $result = 1;
        while ($n > 0) {
            $result *= $n;
            $n--;
        }
        return $result;
}
echo fact1(5);
echo"\n";
if(fact(5)==fact1(5))
{
    echo"both give equal result";
}
else{
    echo"both give differnt result";
}
?>