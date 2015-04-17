var indexPass = $('indexPassword').val();
var indexConf = $('indexPasswordConf').val();

function checkPass(){
	if (indexConf != indexPass){
	$('#indexPassField').addClass('has-error');
};
}



    ////////////////////////////
   //USED ON INDEX PAGE ONLY //
  //Makes right div height  //
 //equal to left div height//
////////////////////////////

var leftHeight = $('#mainBodyLeft').height();

$('#indexPicture').css({
    'height': leftHeight + 'px'
});