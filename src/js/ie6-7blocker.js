var ie;
if (navigator.userAgent.indexOf("MSIE 7") >= 0) ie = 7;
else if (navigator.userAgent.indexOf("MSIE 6") >= 0) ie = 6;
else ie = 0;

if (ie > 0) {
	jQuery(function ($) {

		$("html").css('overflow', 'hidden');

		$("<div class = 'IE-" + ie + "'>")
			.css({
				'position': 'absolute',
				'top': '0px',
				'left': '0px',
				'background': '#ccc',
				'opacity': '0.75',
				'width': '100%',
				'height': '100%',
				zIndex: 100
			})
			.appendTo("body");

		$("<div><img src='images/no-ie67.png' alt='' style='float:left;margin-top:10px;'><p style='font-size:14px;padding:10px;'><b>К сожалению, данную страницу нельзя просмотреть в браузере Internet Explorer " + ie + ", который Вы на данный момент и используете.</b><br><br>Если Вы хотите увидеть страницу, обновите Internet Explorer (до 8-го или выше) либо установите себе другой браузер, например <a style = 'color:#00f;text-decoration:underline;' href='https://www.mozilla.org/ru/firefox/new/'>Firefox</a></p></div>")
			.css({
				'background': '#fff',
				'top': '50%',
				'left': '50%',
				marginLeft: -210,
				marginTop: -110,
				width: 420,
				padding: 10,
				height: 220,
				'position': 'absolute',
				zIndex: 100
			})
			.appendTo("body");
	});
}
