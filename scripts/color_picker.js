var color_picker = document.getElementById("farbe");
var color_picker_wrapper = document.getElementById("farbpicker-wrapper");
color_picker.onchange = function() {
	color_picker_wrapper.style.backgroundColor = color_picker.value;    
}
color_picker_wrapper.style.backgroundColor = color_picker.value;