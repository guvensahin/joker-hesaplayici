<ul>
	<li>Toplam tutar: <strong><?php echo $totalPrice; ?></strong></li>
	<li>Uygulanan joker indirimi: <strong><?php echo $discountName; ?></strong></li>
	<li>Joker uygulanmış toplam tutar: <strong><?php echo $newTotalPrice; ?></strong></li>
</ul>

<div class="table-responsive">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th scope="col">İsim</th>
				<th scope="col">Yeni ödenecek ücret</th>
				<th scope="col">Joker olmadan</th>
				<th scope="col">Kazanç</th>
				<th scope="col">Uygulanan indirim (%)</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($_POST['partnerName'] as $k => $name) { ?>
				<tr>
					<td><?php echo $name; ?></td>
					<td><span class="joker-price"><?php echo $newPartnerPrice[$k]; ?></span></td>
					<td><?php echo $_POST['partnerPrice'][$k]; ?></td>
					<td><?php echo ($_POST['partnerPrice'][$k] - $newPartnerPrice[$k]); ?></td>
					<td>% <?php echo $partnerPricePercent[$k]; ?></td>
				</tr>
			<?php } // end foreach ?>
		</tbody>
	</table>
</div>