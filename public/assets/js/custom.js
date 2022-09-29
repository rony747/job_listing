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

const toggleButton = document.querySelector(".dark-light");

toggleButton.addEventListener("click", () => {
	document.body.classList.toggle("dark-mode");
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
		tags: true
	});
});

// Text editor
var editor = new FroalaEditor('textarea');