<?php

error_reporting(-1);
function bank($percent, $servicePayment, $score, $banks){
	$creditSum = 39999; //кредит
	$payout = 5000; //взнос
	$paymentTotal = 0; //сколько выплатил

	for ($month = 1; $month <= 20; $month ++){ //цикл для месяца
		$creditSum = ($creditSum * $percent) + $servicePayment - $payout; //считает сумму кредита в каждом месяце
		$paymentTotal = $paymentTotal + $payout; //считает сколько денег заплатил школьник в каждом месяце
		$credit = $paymentTotal + $creditSum + $score;
		echo "{$month} месяц спустя: долг = ". ceil($creditSum) . "\n руб, выплачено всего {$paymentTotal} руб.<br>";
		if ($creditSum <= 0){ //условие
			break;
		}
	}
	echo "С банком $banks, школьник заплатит: ". ceil($credit) . "\nруб. <br>"; //56424

}


$homoCredit = bank(1.04, 500,0,'$homoCredit');
$softbank = bank(1.03, 1000,0,'$softbank');
$StrawberryBank = bank(1.02, 0,7777,'$StrawberryBank');

?>
