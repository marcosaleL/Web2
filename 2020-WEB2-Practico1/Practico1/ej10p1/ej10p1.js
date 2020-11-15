document.addEventListener("DOMContentLoaded", function(e) {
    e.preventDefault();

    let infoForm = document.querySelector("#infoForm");

    let formulario = document.querySelector("#form");
    formulario.addEventListener('submit', function(e) {
        e.preventDefault();

        //URLSearchParams es como el serialize() de jQuery
        const datos = new URLSearchParams(new FormData(this));
        console.log(datos);

        fetch('10.php', {
                'method': 'POST',
                body: datos
            })
            .then(response => response.text())
            //El servidor nos devuelve html
            .then(dataHtml => {
                infoForm.innerHTML = dataHtml;
            }).catch(error => console.log(error));
    })
})