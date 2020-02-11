<?php
	$validateForm			= true;
	$discountName			= "";
	$totalPrice				= 0;
	$newTotalPrice			= 0;
	$totalNewPartnerPrice	= 0;


	foreach ($_POST['partnerPrice'] as $row)
	{
		if (empty($row))
		{
			// eğer değerlerden biri boş ise artık diğerlerini kontrol etmez.
			// döngüden çıkar.
			$validateForm = false;
			break;
		}

		$totalPrice += $row;
	}

	
	// eğer price'lar geçerli ise sıra isimleri kontrol etmeye gelir.
	if ($validateForm)
	{
		foreach ($_POST['partnerName'] as $row)
		{
			if (empty($row))
			{
				$validateForm = false;
				break;
			}
		}	
	}

	if (!$validateForm)
	{
		echo 'Bütün alanlar dolu olmalı.';
		return;
	}


	// toplam ücrete joker indirimi uygulanır.
	// 120 => 75
	if ($totalPrice >= 120)
	{
		$newTotalPrice = $totalPrice - 45;
		$discountName = '120 yerine 75 tl öde';
	}
	// 70 => 45
	elseif ($totalPrice >= 70)
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
	
	
	// joker indirimi uygulanmış mı kontrol edilir
	if (!isset($newTotalPrice))
	{
		echo 'Toplam sipariş tutarı joker indirimi uygulanmayacak kadar düşük.';
		return;
	}


	// her bir kişi toplam ücretin "yüzde" olarak ne kadarını karşılıyor öğreniyoruz.
	foreach ($_POST['partnerPrice'] as $row)
	{
		$percent = round(($row * 100) / $totalPrice);
		$partnerPricePercent[] = $percent;


		// ardından mevcut yüzdeleri joker indirimi uygulanmış toplam fiyat üzerinden dağıtırız.
		// böylece herkesin ödemesi gereken nihayi tutar ortaya çıkar.
		$price = ($newTotalPrice * $percent) / 100;
            
		// rakam yuvarlanır
		$price = round($price);


		$newPartnerPrice[] = $price;
		$totalNewPartnerPrice += $price;
	}

	// kuruş farkı kontrol edilir
	$diff = $newTotalPrice - $totalNewPartnerPrice;
	
	// eğer fark varsa ilk kullanıcıya eklenir/çıkarılır
	if ($diff != 0)
	{
		$newPartnerPrice[0] += $diff;
	}
		
	require 'calcDesign.php';
?>
