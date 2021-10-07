var trus = document.querySelectorAll('.xsjvhicnvxnvndfmndgjd'); // правильные ответы
var wo = document.querySelector('.ff'); // кнопка завершить


// верно         xsjvhicnvxnvndfmndgjd
//неверно        xsjvhicnvxnVndfmndgjd
//второе неверно xsjvhiСnvxnvndfmndgjd



var z = function () {
	bo.style.overflow = 'hidden';
	doc.style.display = 'block';
 	closee.style.display = 'block';
		if (j == 1) {
			var col = ' балл';
		} else if (j == 2 || j == 3 || j == 4) {
			col = ' балла';
	} else {
			col = ' баллов';
		};

		if (j < 4) {
			var ot = "Вы плохо ознакомились с информацией, <br> представленной на сайте! <br> Обидно(";
		} else if (j >= 4 && j <= 9) {
			ot = "Весьма огорчительный результат. <br> Вы невнимательно прочитали информацию, <br> представленую на сайте! <br> Обидно(";
		} else if (j > 9 && j <= 15) {
			ot = "Нормальный результат. <br> Благодарю за прохождение и внимательное ознакомление <br> с информацией на сайте! <br> Теперь вы знаток в теме 'ИКТ технологии в космосе'!";
		} else {
			ot = "Отличный результат! <br> Спасибо за великолепное прохождение теста <br> и внимательное ознакомление с информацией на сайте!<br> Теперь вы знаток в теме <br>'ИКТ  технологии в космосе'!";
		};


	document.querySelector('.ee').innerHTML = 'Ваш результат ' + j + col + "<br>" + ot + '<br><br><span class="rere" onclick="location.reload();">Выйти</span>';
};


var j = 0; // счет

//   Блокировка
var buy = document.querySelectorAll('.tes');
function a (s, y, t) { 
	buy[s].disabled=true;
	buy[y].disabled=true;
	buy[t].disabled=true;
};
 
 //   Подсчет
for (var tru of trus) {
	function e () { 
		j++;
		console.log(j);
		var text;
	};
};



/*var tests = document.querySelectorAll('.test1');

function a () {
	for (var test of tests) {
		test.disabled = true;
	}
}

*/