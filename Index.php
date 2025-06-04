<?php
$currencyNames = [
    "USD", "EUR", "GBP", "INR", "AUD", "CAD", "SGD", "CHF", "MYR", "JPY",
    "CNY", "NZD", "THB", "HKD", "KRW", "SEK", "NOK", "DKK", "RUB", "ZAR", "BRL"
];

$currencyRates = [
    "USD" => 1.00, "EUR" => 0.92, "GBP" => 0.79, "INR" => 83.20, "AUD" => 1.50,
    "CAD" => 1.36, "SGD" => 1.35, "CHF" => 0.90, "MYR" => 4.68, "JPY" => 156.70,
    "CNY" => 7.25, "NZD" => 1.63, "THB" => 36.80, "HKD" => 7.82, "KRW" => 1375.00,
    "SEK" => 10.48, "NOK" => 10.69, "DKK" => 6.86, "RUB" => 89.50, "ZAR" => 18.00,
    "BRL" => 5.15
];

echo "Select a number for the currency (e.g., enter 0 for USD):\n";
for ($i = 0; $i < count($currencyNames); $i++) {
    echo "$i. " . $currencyNames[$i] . "\n";
}

echo "Enter current currency (number): ";
$fromc = (int)readline();

echo "Enter target currency (number): ";
$toc = (int)readline();

echo "Enter your amount: ";
$amt = (float)readline();

$fromCurrency = $currencyNames[$fromc];
$toCurrency = $currencyNames[$toc];

$t = $amt / $currencyRates[$fromCurrency];
$n = $t * $currencyRates[$toCurrency];

echo "$amt $fromCurrency is equal to $n $toCurrency\n";
?>
