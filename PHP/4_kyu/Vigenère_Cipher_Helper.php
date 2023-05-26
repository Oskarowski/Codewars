<?php
echo "Vigenère Cipher Helper <br>";

class VigenèreCipher
{
    private $letterToNumber;
    private $key = [];
    private $alphabet  = "";

    public function __construct($argument1, $argument2)
    {
        $this->key = str_split($argument1);
        $this->alphabet  = $argument2;
        $this->prepareAssociativeArray();
    }

    private function prepareAssociativeArray()
    {
        for ($i = 0; $i < strlen($this->alphabet); $i++) {
            $this->letterToNumber[$this->alphabet[$i]] = $i;
        }
    }

    public function encode($s)
    {
        $indexOfKey = 0;
        $encryptedArr = [];
        foreach (str_split($s) as $e) {
            if ($indexOfKey >= count($this->key)) $indexOfKey = 0;
            if (isset($this->letterToNumber[$e]) && (!empty($e))) {
                $plaintextValue = $this->letterToNumber[$e];
                $keySymbol = $this->key[$indexOfKey];
                $keyValue = $this->letterToNumber[$keySymbol];
                $calculatedCipherValue = ($plaintextValue + $keyValue) % 26;
                $ciphertext = array_flip($this->letterToNumber)[$calculatedCipherValue];
                $encryptedArr[] = $ciphertext;
            } else {
                $encryptedArr[] = $e;
            }
            $indexOfKey++;
        }
        unset($e);
        return empty($encryptedArr) ? $s : implode("", $encryptedArr);
    }
    public function decode($s)
    {
        $indexOfKey = 0;
        $decodedArr = [];
        foreach (str_split($s) as $e) {
            if ($indexOfKey >= count($this->key)) $indexOfKey = 0;
            if (isset($this->letterToNumber[$e]) && (!empty($e))) {
                $ciphertextValue = $this->letterToNumber[$e];
                $keySymbol = $this->key[$indexOfKey];
                $keyValue = $this->letterToNumber[$keySymbol];
                $calculatedPlaintextValue = ($ciphertextValue - $keyValue) % 26;
                if ($calculatedPlaintextValue < 0) $calculatedPlaintextValue += 26;
                $plaintext = array_flip($this->letterToNumber)[$calculatedPlaintextValue];
                $decodedArr[] = $plaintext;
            } else {
                $decodedArr[] = $e;
            }
            $indexOfKey++;
        }
        unset($e);
        return empty($decodedArr) ? $s : implode("", $decodedArr);
    }
}

$lower = new VigenèreCipher('password', 'abcdefghijklmnopqrstuvwxyz');
echo "<br>" . $lower->encode("it's a shift cipher!") . "<br>";
echo $lower->decode("xt'k o vwixl qzswej!") . "<br>";


echo "<br>" . $lower->encode('codewars') . "<br>"; // 'rovwsoiv'
echo $lower->decode('rovwsoiv') . "<br>"; // 'codewars'

echo "<br>" . $lower->encode('waffles') . "<br>"; // 'laxxhsj',
echo $lower->decode('laxxhsj') . "<br>"; // 'waffles',

echo "<br>" . $lower->encode('CODEWARS') . "<br>"; // 'CODEWARS'
echo $lower->decode('CODEWARS') . "<br>"; // 'CODEWARS'


$upper = new VigenèreCipher("PASSWORD", "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
echo "<br>" . $upper->encode('codewars') . "<br>"; // codewars
echo $upper->decode('rovwsoiv') . "<br>"; // rovwsoiv

echo  "<br>" . $upper->encode('waffles') . "<br>"; // waffles 
echo $upper->decode('laxxhsj'); // laxxhsj
echo "<br>";

echo "<br>" . $upper->encode('CODEWARS') . "<br>"; // ROVWSOIV
echo $upper->decode('CODEWARS') . "<br>"; // NOLMAMAP
