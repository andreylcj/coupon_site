
var text_opened = false;
$('.item-desc-wrapper.toggle-text.show-toggle').on('click',function(){

    if(text_opened){
        $(this).removeClass("opened_text");
        text_opened = false;
    }else{
        $(this).addClass("opened_text");
        text_opened = true;
    }
    
});