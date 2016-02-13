jQuery(document).ready(function($){
    $(document).on('click', '.timeline-item.collapsible > .timeline-header > .expander', function(){
        var $this = $(this);
        var $context = $this.closest('.timeline-item.collapsible');
        var $body = $('.timeline-data', $context);
        if ($body.is(':hidden')) {
            $this.removeClass('fa-plus-square').addClass('fa-minus-square');
            $body.slideDown();
        } else {
            $this.removeClass('fa-minus-square').addClass('fa-plus-square');
            $body.slideUp();
        }
    })
})
