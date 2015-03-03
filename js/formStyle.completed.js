(function($){
    $.fn.formStyle = function(options){
        
        var setOptions = $.extend({
            isEmpty:false,
            borderRadius:'0px'
        }, options);
        
        this
        .addClass("formStyle")
        .css("borderRadius", setOptions.borderRadius);
        
        this.on("focus", function(){
            $(this).addClass("activeInput");
        });
        
        this.on("blur", function(){
            $(this).removeClass("activeInput");
        });
        
        if(setOptions.isEmpty){
            this.on("keyup", function(){
                if($(this).val() != ''){
                    $(this).addClass("filledInput");   
                } else {
                    $(this).removeClass("filledInput");
                }
            });
        }
        
        return this;
        
    };
    
}(jQuery));
