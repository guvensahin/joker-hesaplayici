<?php
$isAllValueValid = true;

foreach ($_POST['partnerPrice'] as $row)
{
	if (empty($row))
	{
		// eğer değerlerden biri boş ise artık diğerlerini kontrol etmez.
		// döngüden çıkar.
		$isAllValueValid = false;
		break;
	}
}

// eğer price lar geçerli ise sıra isimleri kontrol etmeye gelir.
if ($isAllValueValid)
{
	foreach ($_POST['partnerName'] as $row)
	{
		if (empty($row))
		{
			$isAllValueValid = false;
			break;
		}
	}	
}





// kontrollerin sonucunda işleme başlanır yada uyarı verilir.
if ($isAllValueValid)
{
	// kişilerin ödeyeceği toplam ücret öğreniliyor.
	$totalPrice = 0;
	
	foreach ($_POST['partnerPrice'] as $row)
	{
		$totalPrice += $row;
	}
	
	
	// toplam ücrete joker indirimi uygulanır.
	// 120 => 75
	if ($totalPrice >= 120)
	{
		$newTotalPrice = $totalPrice - 45;
        $discountName = '120 yerine 75 tl öde';
	}
	// 70 => 45
	if ($totalPrice >= 70)
	{
		$newTotalPrice = $totalPrice - 25;
        $discountName = '70 yerine 45 tl öde';
	}
	// 40 => 25
	elseif ($totalPrice >= 40)
	{
		$newTotalPrice = $totalPrice - 15;
        $discountName = '40 yerine 25 tl öde';
	}
	// 30 => 20
	elseif ($totalPrice >= 30)
	{
		$newTotalPrice = $totalPrice - 10;
        $discountName = '30 yerine 20 tl öde';
	}
	
	
	// eğer ücrete joker indirimi uygulanmış ise işleme devam edilir.
	if (isset($newTotalPrice))
	{
		// her bir kişi toplam ücretin "yüzde" olarak ne kadarını karşılıyor öğreniyoruz.
		foreach ($_POST['partnerPrice'] as $row)
		{
			$partnerPricePercent[] = round(($row * 100) / $totalPrice);
		}

		
		// ardından mevcut yüzdeleri joker indirimli yeni fiyat üzerinden yeniden hesaplarız.
		// böylece herkesin ödemesi gereken tutar ortaya çıkar.
		$newRoundedTotalPrice = 0;
		
		foreach ($partnerPricePercent as $percentVal)
		{
			$price = ($newTotalPrice * $percentVal) / 100;
            
            // normal ücret
			$newPartnerPrice[] = $price;
            
            // yuvarlanmış ücret
			$newRoundedPartnerPrice[] = round($price);
            
            // yuvarlanmış ücretlerin tamamı toplanır.
			$newRoundedTotalPrice += round($price);
		}
		
		
		require 'calcDesign.php';
	}
	else
	{
		echo 'Toplam sipariş tutarı joker indirimi uygulanmayacak kadar düşük.';
	}
}
else
{
	echo 'Bütün alanlar dolu olmalı.';
}





?>
