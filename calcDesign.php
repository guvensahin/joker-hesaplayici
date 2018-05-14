

<ul>
	<li>Toplam tutar: <strong><?php echo $totalPrice; ?></strong></li>
	<li>Uygulanan joker indirimi: <strong><?php echo $discountName; ?></strong></li>
	<li>Joker uygulanmış toplam tutar: <strong><?php echo $newTotalPrice; ?></strong></li>
	<li>Joker uygulanmış ve yuvarlanmış toplam tutar: <strong><?php echo $newRoundedTotalPrice; ?></strong></li>
</ul>




<table class="table table-bordered table-hover">
	<thead>
		<tr>
			<th>İsim</th>
			<th>Yeni ücret</th>
			<th>Yeni ücret - yuvarlanmış</th>
			<th>Joker olmadan</th>
			<th>Kazanç</th>
			<th>Yüzde</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($_POST['partnerName'] as $k => $name) {
		
		$showNewPartnerPrice		= $newPartnerPrice[$k];
		$showNewRoundedPartnerPrice = $newRoundedPartnerPrice[$k];
		$showPartnerPrice		    = $_POST['partnerPrice'][$k];
		$showPartnerDiscountPrice   = $showPartnerPrice - $showNewPartnerPrice;
		$showPartnerPricePercent    = $partnerPricePercent[$k];
		?>
		<tr>
			<td><?php echo $name; ?></td>
			<td><?php echo $showNewPartnerPrice; ?></td>
			<td><?php echo $showNewRoundedPartnerPrice; ?></td>
			<td><?php echo $showPartnerPrice; ?></td>
			<td><?php echo $showPartnerDiscountPrice; ?></td>
			<td>% <?php echo $showPartnerPricePercent; ?></td>
		</tr>
		<?php } // end foreach ?>
	</tbody>
</table>
          