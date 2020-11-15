$("#formulario").on("submit", function(event) {
    event.preventDefault(); //detiene el envío normal

    // Serialize trae todos los datos del form. Lo que en web 1 era traer por id dato por dato con su valor, aca no hace falta
    //el $(this) hace referencia al formulario.
    let serializedData = $(this).serialize();
    console.log(serializedData);
    // this (al estar dentro del handler) hace referencia al formulario.
    $.post('9.php', serializedData,
        function(response) {
            alert("Response: " + response);
        });
});