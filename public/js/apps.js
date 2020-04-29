$(document).ready(function() {
  $("#mySelect2").select2();
});

function previewFile() {
  const preview = document.querySelector('#target');
  const file = document.querySelector('input[type=file]').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function () {
    preview.src = reader.result;
  }, false);

  if (file) {
    reader.readAsDataURL(file);
  }
}

$(function () {
    $('#showbtn').on('click', () => {
        $('#delete_key').show();
    });
});

$(function(){
    var countMax = 100;
    $('textarea').bind('keydown keyup keypress change',function(){
        var thisValueLength = $(this).val().length;
        var countDown = (countMax)-(thisValueLength);
        $('.count').html(countDown);

        if(countDown < 0){
            $('.count').css({color:'#ff0000',fontWeight:'bold'});
        } else {
            $('.count').css({color:'#fffff',fontWeight:'normal'});
        }
    });
    $(window).load(function(){
        $('.count').html(countMax);
    });
});
