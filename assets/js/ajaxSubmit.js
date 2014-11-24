(function($) {

    $.fn.ajaxSubmit = function(params) {

        var enableSubmit = function() {
            $submit.html(options.label)
                .removeAttr('disabled').fadeIn('slow');
        };

        var options = $.extend({
            label: this.html(),
            savingLabel: 'Saving...',
            savedLabel: 'Saved',
            formSelector: undefined
        }, params);


        var $submit = this;
        var $form = (options.formSelector === undefined) ? this.closest('form') : $(options.formSelector);

        $submit.html(options.savedLabel).attr('disabled', 'disabled').hide();
        $submit.on('click', function() {
            var formData = $form.serialize() + '&saveOnly=1';
            $submit.html(options.savingLabel).attr('disabled', 'disabled');
            $.ajax({
                data: formData,
                type: 'POST'
            }).done(function(data, status, xhr) {
                if(data.success === undefined) {
                    enableSubmit();
                    alert('error');
                } else {
                    $submit.html(options.savedLabel).fadeOut('slow');
                }
            }).fail(function(xhr, status, thrown) {
                enableSubmit();
                alert(status);
            });
        });
        $form.on('change', enableSubmit);

    };

})(jQuery);
