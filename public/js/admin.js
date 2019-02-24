$(".add").on("click", function(){
	document.querySelector('.data-content').classList.add("data-content_anim");
	setTimeout(function(){
		document.querySelector('.data-content').style.display = "none";
		document.querySelector('.save-content').style.display = "block";
		document.querySelector('.add').style.display = "none";
		document.querySelector('.back').style.display = "inline";
		setTimeout(function(){
			document.querySelector('.save-content').classList.add('save-content_anim')
		},100)
	},300)
})

$(".back").on("click", function(){
	document.querySelector('.update-content').classList.remove('update-content_anim')
	document.querySelector('.save-content').classList.remove('save-content_anim')
	document.querySelector('.add').style.display = "inline";
	document.querySelector('.back').style.display = "none";
	setTimeout(function(){
		document.querySelector('.data-content').style.display = "block";
		document.querySelector('.update-content').style.display = "none";
		document.querySelector('.save-content').style.display = "none";
		setTimeout(function(){
			document.querySelector('.data-content').classList.remove("data-content_anim");
		},100)
	},300)
})

function readURL(input, className) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();
		reader.onload = function (e) {
			$("."+className+" img").attr("src", e.target.result);
		}
		reader.readAsDataURL(input.files[0]);
		document.querySelector(".update_img_input").value=input.files[0].name;
		console.log(document.querySelector(".update_img_input").value)
	}
}

$(document).on('change','.file', function(){
	readURL(this, 'upload-image');
})

$(document).on('change','.file2', function(){
	readURL(this, 'upload-image2');
})