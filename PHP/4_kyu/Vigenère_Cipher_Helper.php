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


$str = "it's a shift cipher!";
$strArr = str_split($str);

// ob_start();
// var_dump($strArr);
// $output = ob_get_clean();

// $output = str_replace("\n", "<br>", $output); // Replace newlines with <br> tags
// $output = str_replace(" ", "&nbsp;", $output); // Replace spaces with non-breaking spaces
// $output = "<pre>$output</pre>"; // Wrap output in <pre> tags

// echo $output;


$c = new VigenèreCipher('password', 'abcdefghijklmnopqrstuvwxyz');
echo "<br>" . $c->encode("it's a shift cipher!") . "<br>";
echo $c->decode("xt'k o vwixl qzswej!") . "<br>";

echo "<br>";
echo $c->encode('codewars'); // ('rovwsoiv',
echo "<br>";

echo $c->decode('rovwsoiv'); // ('codewars',
echo "<br>";

echo "<br>";
echo $c->encode('waffles') . " "; // ('laxxhsj', 
echo "<br>";
echo $c->decode('laxxhsj'); // ('waffles', 
echo "<br>";

echo "<br>";
echo $c->encode('CODEWARS') . " "; // ('CODEWARS',
echo $c->decode('CODEWARS'); // ('CODEWARS',
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$b = new VigenèreCipher("PASSWORD", "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
echo "'" . $b->encode('codewars') . "' "; // ('rovwsoiv',
echo "'" . $b->decode('rovwsoiv') . "'"; // ('codewars',
echo "<br>";

echo $b->encode('waffles') . " "; // ('laxxhsj', 
echo $b->decode('laxxhsj'); // ('waffles', 
echo "<br>";

echo $b->encode('CODEWARS') . " "; // ('CODEWARS',
echo $b->decode('CODEWARS'); // ('CODEWARS',
echo "<br>";
