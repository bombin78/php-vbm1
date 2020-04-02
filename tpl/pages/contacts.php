<section class="contacts">

	<h2 class="contacts__content-title content-title">Контакты</h2>

	<h3 class="contacts__title">Общество с ограниченной ответственностью «Вибробурмашина»</h3>

	<dl class="contacts__company-name dtl">
		<dt class="dtl__l">Сокращенное название:</dt>
		<dd class="dtl__v"><strong>ООО «ВИБРОБУРМАШ»</strong></dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">Генеральный директор:</dt>
		<dd class="dtl__v">Аверин Михаил Борисович</dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">Главный бухгалтер:</dt>
		<dd class="dtl__v">Игнатьева Ирина Владимировна</dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">Юр.адрес:</dt>
		<dd class="dtl__v">171075, Тверская обл., Бологовский район, г.Бологое, ул.Кирпичная, д.1А., оф.1.</dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">Факт.адрес:</dt>
		<dd class="dtl__v">171075, Тверская обл., Бологовский район, г.Бологое, ул.Кирпичная, д.1А., оф.1.</dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">ИНН:</dt>
		<dd class="dtl__v">6908018170</dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">ОГРН:</dt>
		<dd class="dtl__v">1196952001180</dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">Тел:</dt>
		<dd class="dtl__v"><?= $numPhone?></dd>
	</dl>

	<dl class="contacts__dtl dtl">
		<dt class="dtl__l">E-mail:</dt>
		<dd class="dtl__v">
			<a class="contacts-email" href="mailto:<?= $eMail?>">
				<?= $eMail?>
			</a>
		</dd>
	</dl>

	<h3 class="contacts__title">Расположение на карте</h3>

	<div class="contacts__map">
		<!-- Расположение компании на яндекс карте -->
		<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Azx4XsME5usvRafl7TBnSG1LV7h32iYB6&amp;width=620&amp;height=280&amp;lang=ru_RU&amp;scroll=true"></script>
	</div>

	<div class="contacts-schedule">

		<h3 class="contacts-schedule__title">Время работы</h3>

		<div class="contacts-schedule__info">
			<dl class="contacts-schedule__dtl dtl">
				<dt class="dtl__l">пн-пт:</dt>
				<dd class="dtl__v">c 08:00 до 17:00</dd>
			</dl>

			<dl class="contacts-schedule__dtl dtl">
				<dt class="dtl__l">сб-вс:</dt>
				<dd class="dtl__v">выходной</dd>
			</dl>
		</div>

	</div>

</section>
