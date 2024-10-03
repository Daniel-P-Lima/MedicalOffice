document.getElementById('data').addEventListener('input', function (e) {
    var input = e.target;
    var value = input.value;
    var length = value.length;

    if (isNaN(value[length - 1])) {
        input.value = value.substring(0, length - 1);
        return;
    }

    if (length === 2 || length === 5) {
        input.value += '/';
    }

});