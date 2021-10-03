function preview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) { 
      console.log(reader.result)
      var img = new Image;
			img.onload = function() {				 
        $('#img').attr({'src':e.target.result,'width':img.width});
			};
   img.src = reader.result;
                               }
    reader.readAsDataURL(input.files[0]);     }   }

$("#upload").change(function(){
  $("#img").css({top: 0, left: 0});
    preview(this);
    $("#img").draggable({ containment: 'parent',scroll: false});
});

let passwordInput = document.getElementById('txtPassword'),
            toggle = document.getElementById('btnToggle'),
            icon =  document.getElementById('eyeIcon');

        function togglePassword() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            icon.classList.add("fa-eye-slash");
            //toggle.innerHTML = 'hide';
        } else {
            passwordInput.type = 'password';
            icon.classList.remove("fa-eye-slash");
            //toggle.innerHTML = 'show';
        }
        }

        function checkInput() {
        //if (passwordInput.value === '') {
        //toggle.style.display = 'none';
        //toggle.innerHTML = 'show';
        //  passwordInput.type = 'password';
        //} else {
        //  toggle.style.display = 'block';
        //}
        }

        toggle.addEventListener('click', togglePassword, false);
        passwordInput.addEventListener('keyup', checkInput, false);