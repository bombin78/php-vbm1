<section class="contacts">
	<h2 class="contacts_content-title content-title">Контакты и реквизиты</h2>
	<div class="contacts_basic basic-info">
		<h3 class="basic-info_title">Контакты</h3>
		<div class="basic-info_location location-map">
			<p class="location-map_text">Расположение на карте:</p>
			<div class="location-map_img">
				<!-- Расположение компании на яндекс карте -->
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Azx4XsME5usvRafl7TBnSG1LV7h32iYB6&amp;width=385&amp;height=270&amp;lang=ru_RU&amp;scroll=true"></script>
			</div>
		</div>
		<div class="basic-info_top top-managers">
			<p class="top-managers_block">
				<?php if($contactPerson_1) echo $contactPerson_1; ?>
			</p>
			<p class="top-managers_block">
				<?php  if($contactPerson_2) echo $contactPerson_2; ?>
			</p>
			<p class="top-managers_block">
				<?php if($index) echo $index; ?><br>
				<?php if($location) echo $location; ?><br>
				<?php if($numPhone_1) echo $numPhone_1; ?><br>
				<?php if($numPhone_2) echo $numPhone_2; ?>
			</p>
			<p class="top-managers_block">
				e-mail:
				<a class="top-managers_mail" href="mailto:<?php echo $eMail; ?>">
					<?php echo $eMail; ?>
				</a>
			</p>
		</div>
	</div>
	<div class="contacts_company company-details">
		<h3 class="company-details_title">Реквизиты</h3>
		<p class="company-details_info">
			<?php if($companyDetails) echo $companyDetails; ?>
		</p>
	</div>
</section>
