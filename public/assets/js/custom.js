//$(document).ready(function() {
//$('.search-box').focus();
//});

const wrapper = document.querySelector(".wrapper");
const header = document.querySelector(".header");

wrapper.addEventListener("scroll", (e) => {
	e.target.scrollTop > 30
		? header.classList.add("header-shadow")
		: header.classList.remove("header-shadow");
});



// Profile photo preview
$(document).ready(function () {
	$('#profile_photo').on('change', function (e) {
		let reader = new FileReader();
		reader.onload = function (e) {
			$('#profilePhoto').attr('src', e.target.result);
		}
		reader.readAsDataURL(e.target.files[0]);
	})
})
//multi select
$(document).ready(function() {
	$('.js-example-basic-multiple').select2({
		tags: true,
		placeholder: "Select tags",
	});
});

// Text editor
let editor = new FroalaEditor('textarea');

//
$('#sideJobEmp').on('change', function(){
	$(this).submit();
});



let toggleButton = document.querySelector('.dark-light');
let body = document.getElementsByTagName('body')[0];
let dark_theme_class = 'dark-mode';

toggleButton.addEventListener('click', function() {
	if (body.classList.contains(dark_theme_class)) {
		body.classList.remove(dark_theme_class);
		setCookie('theme', 'light');
	}
	else {
		body.classList.add(dark_theme_class);
		setCookie('theme', 'dark');
	}
});

function setCookie(name, value) {
	let d = new Date();
	d.setTime(d.getTime() + (365*24*60*60*1000));
	let expires = "expires=" + d.toUTCString();
	document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// const toggleButton = document.querySelector(".dark-light");
//
// toggleButton.addEventListener("click", () => {
// 	document.body.classList.toggle("dark-mode");
// });