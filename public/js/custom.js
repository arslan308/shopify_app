$(function(){
    if($('#header').length > 0){
    $('#header').remove();
}
   $('body').prepend('<div id="header">This is my app</div>');
   $('head').prepend('<style>#header{z-index:9999;background:black;padding:10px;color:white;text-align:center;}.sticky{position:fixed;top:0px;width:100%;}</style>')
// var header = $('#header').offsetTop;
// alert(header);
window.onscroll = function(){
    if(window.pageYOffset >50){
        $('#header').addClass('sticky');
    }
    else{
        $('#header').removeClass('sticky');
    }
};
});