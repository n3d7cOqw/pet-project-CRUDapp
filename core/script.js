
document.getElementById('sendData').addEventListener('click', function (event) {
    event.preventDefault(); // Предотвращаем переход по ссылке

    var form = document.createElement('form');
    form.method = 'POST';
    form.action = 'actions/delete_user.php';

    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'data';
    input.value = 'your_value_here';

    form.appendChild(input);
    document.body.appendChild(form);
    form.submit();
});

