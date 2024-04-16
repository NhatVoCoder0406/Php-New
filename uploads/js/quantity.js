var radioButtons = document.querySelectorAll('input[type=radio]');

radioButtons.forEach(function(radioButton) {
    radioButton.addEventListener('change', function() {
        if (this.checked) {
            document.querySelector('input[name=quantity]').max=document.querySelector('input[name=size'+this.value+']').value;
        }
    });
});
