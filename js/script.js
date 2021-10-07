//переключение тем
//var page = document.querySelector(".page");
var themeButton = document.querySelector(".theme-button");
    var topp = document.querySelector(".top");

if (!localStorage.theme) localStorage.theme = "dark-theme";
document.body.className = localStorage.theme;

themeButton.onclick = function () {
  //themeButton.classList.toggle("temday");
  document.body.classList.toggle("dark-theme");
  localStorage.theme = document.body.className || "light-theme";
};

// блок меню
var batton = document.getElementById("button");
batton.onclick = function () {
  var bo = document.getElementById("bo");
  var box = document.getElementById("box");
  var close = document.getElementById("close");
  var btu = document.querySelector(".buttu");

  box.style.opacity = 1;
  box.classList.add("oop");
  box.classList.remove("oopo");
  bo.style.overflow = "hidden";
  close.style.display = "block";
  btu.style.display = "block";
};

var batto = document.getElementById("close");
batto.onclick = function () {
  box.style.opacity = 0;

  box.classList.remove("oop");
  bo.style.overflow = "auto";
  box.classList.add("oopo");
  batto.style.display = "none";
  btu.style.display = "none";
};

//boxn = box -1000;
//box.style.right = boxn + 'px'
//for (var i = 0; i <=1000; i++) {
//box.style.left = i + 'px';
//}
//y = document.getElementById("moto").offsetLeft;
//yn = y - 150;
//document.getElementById("moto").style.left = yn+"px"

/*


var batton = document.getElementById('button');
	batton.onclick  = function () {
		
	var pos = -840;
	var box = document.getElementById('box');
	var t = setInterval(move, 10);
	var bo = document.getElementById('bo');
	var close = document.getElementById('close');
	var ing = document.querySelector('pas')
	close.style.display = 'block';
	function move() {
		if (pos >= 0) {
		    clearInterval(t);
			box.style.display = 'block';
			bo.style.overflow = 'hidden';
		} else {
			pos += 30;
			box.style.left = pos + 'px';
			bo.style.overflow = 'hidden';
			box.style.display = 'block';		
		}
	}
};

var batto = document.getElementById('close');
	batto.onclick  = function () {
		box.style.display = 'none';
		batto.style.display = 'none';
		bo.style.overflow = 'auto';
	};
	*/
// Блок настроек

let longread = document.querySelector(".longread");
let colorSetting = document.querySelector(".color-setting");
let sizeSetting = document.querySelector(".size-setting");
let pixels = document.querySelector(".pixels");

colorSetting.onchange = function () {
  longread.style.color = colorSetting.value;
};

sizeSetting.oninput = function () {
  pixels.textContent = sizeSetting.value;
  longread.style.fontSize = sizeSetting.value + "px";
};

// Блок настроек
var open = document.getElementById("open");
var settings = document.getElementById("settings");
var closeee = document.getElementById("closeee");

open.onclick = function () {
  settings.style.display = "block";
  closeee.style.display = "block";
};
closeee.onclick = function () {
  settings.style.display = "none";
  closeee.style.display = "none";
};

// кнопка прокрутки
var gloos = document.querySelectorAll('.gloo')
var gloose = document.querySelector('.glooe')

var blo = window.pageYOffset;

var upButton = document.querySelector(".up");
window.onscroll = function () {
  var bloo = window.pageYOffset;
  if (blo < bloo) {
    topp.classList.add('toppp')
    for (gloo of gloos) {
      gloo.classList.add('gloeee');
      settings.style.top = 28 + 'px';
    }
      gloose.classList.add('gloeee');
  } else {
    topp.classList.remove('toppp')
    for (gloo of gloos) {
      gloo.style.transition = 1 + 's';
      gloo.classList.remove('gloeee');
      settings.style.top = 90 + 'px'; 
      
    }
      gloose.style.transition = 1 + 's';
      gloose.classList.remove('gloeee');
  }
  blo = bloo

  if (window.pageYOffset > 200) {
    upButton.classList.add("est");
  } else {
    upButton.classList.remove("est");
  }
};

upButton.onclick = function () {
  window.scrollTo(0, 0);
};





// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos < currentScrollPos) {
//     document.querySelector(".top").style.height = 20;
//   } else {
//     document.querySelector(".top").style.height = 90;
//   }
//   prevScrollpos = currentScrollPos;
// }

// попап
let tooltip = document.querySelector(".tooltip");
let closeButton = document.querySelector(".close-button");
let tooltipButtons = document.querySelectorAll(".tooltip-button");
let tooltipText = document.querySelector(".tooltip-text");

closeButton.onclick = function () {
  tooltip.classList.remove("opened");
};

for (let tooltipButton of tooltipButtons) {
  tooltipButton.onclick = function () {
    tooltipText.textContent = tooltipButton.dataset.tooltipText;
    tooltip.classList.add("opened");
  };
}

// Блок авторизации
var doc = document.getElementById("ff");
var loginn = document.getElementById("loginn");
var closee = document.getElementById("closee");

var r = function () {
  bo.style.overflow = "hidden";
  doc.style.display = "block";
  closee.style.display = "block";

  closee.onclick = function () {
    doc.style.display = "none";
    closee.style.display = "none";
    bo.style.overflow = "auto";
  };
};

// logo
var video = document.getElementById("myVideo");
var btn = document.getElementById("button");
var btn = document.getElementById("close");

function myFunction() {
  if (video.paused) {
    video.play();
  }
}

function myFunction1() {
  video.pause();
}


   //нижняя навигация
var butNav = document.querySelector(".butNav");
var navv = document.querySelector(".nav");

butNav.onclick = function () {
  butNav.classList.toggle('reer')

  navv.classList.toggle("navActive");
};



