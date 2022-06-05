$(document).ready(function () {
    var max_fields = 10;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function (e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('Autor ', x, '<div><input class="form-control" type="text" name="author[]" placeholder="Autor"/><input class="form-control" type="text" name="title_author[]" placeholder="Titulo"><input class="form-control" type="number" name="year[]" placeholder="Año"><input class="form-control" type="text" name="city[]" placeholder="Ciudad"><input class="form-control" type="text" name="editorial[]" placeholder="Editorial"><a href="#" class="delete">Eliminar</a></div>'); //add input box
        } else {
            alert('Excediste el limite de registros de autores')
        }
    });

    $(wrapper).on("click", ".delete", function (e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
