$number_picked = null;

$a = [5,7,8,9,10];
$b = [2,3,4,5,6,7,8,9,10];
$c = '10';

function isSequential( array $sequence, $diff = 1)
{
    $sum = array_sum($sequence);
    return $sequence[count($sequence) - 1] === $sequence[0] + ($diff * (count($sequence) - 1));
}
if(isSequential($a)){
$number_picked = array_values($a)[0];
echo $number_picked .' '.'true';
}
else{
$number_picked = array_values($a)[1];
echo $number_picked.' '.'false';
}
