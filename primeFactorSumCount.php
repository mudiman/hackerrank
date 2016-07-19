<?php
$primeFactors = [];
$primeFactors[2] = 1;
$primeFactors[3] = 1;
$primeFactors[5] = 2;
$primeFactors[7] = 3;


function customCombination($int, $no, &$count, $sum)
{
    global $numbers;
    if ($sum == $int) {
        $count ++;
        return 1;
    }
    for ($i = $no; $i >= 0; $i --) {
        $nextPrimeNo = $numbers[$i];
        $tempSum = $sum + $nextPrimeNo;
        if ($tempSum <= $int)
            $res = customCombination($int, $i, $count, $tempSum);
        if (isset($res) && $res == 2) break;
    }
    return 1;
}

function getPrimeFactorSum($no)
{
    global $primeFactors, $primes;
    if (isset($primeFactors[$no]))
        return $primeFactors[$no];
    else {
        $count = 1;
        $index = array_search($no, $primes);
        customCombination($no, $index - 1, $count, 0);
        $primeFactors[$no] = $count;
        return $primeFactors[$no];
    }
}

function combination($int, $no, &$count, $sum)
{
    global $numbers;
    if ($sum == $int) {
        $count += getPrimeFactorSum($numbers[$no]);
        return 2;
    }
    for ($i = $no; $i >= 0; $i --) {
        $nextPrimeNo = $numbers[$i];
        $tempSum = $sum + $nextPrimeNo;
        if ($tempSum <= $int)
            $res = combination($int, $i, $count, $tempSum);
        if (isset($res) && $res == 2) break;
    }
    return 1;
}

function primaNumber($n)
{
    $prime = [2,3,5];
    $primeNo = 5;
    while ($primeNo < $n) {
        $prime1 = gmp_nextprime($primeNo);
        $primeNo = gmp_strval($prime1);
        $prime[] = $primeNo;
    }
    return $prime;
}

function getSubSetPrimes($prime, $n)
{
    $primelist = [];
    $i = 0;
    while (isset($prime[$i]) && $prime[$i] <= $n) {
        $primelist[] = $prime[$i];
        $i ++;
    }
    return $primelist;
}

$handle = fopen(dirname(__FILE__) . "\input.txt", "r");
$testcs = (int) fgets($handle);
$sumCount = 0;

for ($i = 0; $i < $testcs; $i ++) {
    $testcases[] = (int) fgets($handle);
}
$primes = primaNumber(max($testcases));
foreach ($testcases as $no) {
    $numbers = getSubSetPrimes($primes, $no);
    $count = $sum = 0;
    combination($no, count($numbers)-1, $count, 0);
    echo $count . "\n";
}
?>