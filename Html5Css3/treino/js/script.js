$(document).ready(function() {
    $('#checkbox1').change(function() {
        if (this.checked) {
            var element = confirm("Você tem certeza que deseja habilitar o recurso timesheet?");
            $(this).prop('checked', returnVal);
        }
        $('#sport').val(this.checked);
    });
});