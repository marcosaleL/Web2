document.addEventListener("DOMContentLoaded", function(e) {
    e.preventDefault();
    let parrafo = document.querySelector("#resultado");

    let formulario = document.querySelector("#formularioCalculadora");
    formulario.addEventListener('submit', function(e) {
        e.preventDefault();

        //URLSearchParams es como el serialize() de jQuery
        const datos = new URLSearchParams(new FormData(this));
        console.log(datos);

        fetch('8.php', {
                'method': 'POST',
                body: datos
            })
            .then(response => response.text())
            //El servidor nos devuelve html
            .then(dataHtml => {
                parrafo.innerHTML = dataHtml;
            }).catch(error => console.log(error));
    })
})