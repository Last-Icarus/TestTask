function yesnoCheck() {
    if (document.getElementById('yesCheck').checked) {
        document.getElementById('ifYes').style.display = 'block';
        document.getElementById('ifNo').style.display = 'none';
    } else if (document.getElementById('noCheck').checked) {
        document.getElementById('ifYes').style.display = 'none';
        document.getElementById('ifNo').style.display = 'block';
        number.value = null
    }
}

function successalert() {
    var element = document.getElementById("content");
    element.style.opacity = 1;
    setTimeout(function() {
        element.style.opacity = 0;
    }, 3000);
}
$(document).ready(function() {

    $('#target').submit(function(e) {
        var cart = '';
        const allChecked = document.querySelectorAll('input[name=checkbox]:checked');
        var a = Array.from(allChecked).map(checkbox => checkbox.value);
        for (var i = 0; i < a.length; i++) {
            cart = cart.concat(a[i], ', ');
        }
        cart = cart.slice(0, -2);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: 'convert.php',
            data: $(this).serialize() + '&productlist=' + cart,
            success: function(data) {
                console.log(data);
            }
        });
        successalert();
    });
});