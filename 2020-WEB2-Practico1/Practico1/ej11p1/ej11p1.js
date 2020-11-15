document.addEventListener("DOMContentLoaded", cargarPagina);


function cargarPagina() {

    document.querySelector('#ver5').addEventListener('click', function(e) {
        e.preventDefault();
        let url = '11.php?cantidad=5';

        fetch(url, {
                method: 'post',
                body: url,
            })
            .then(response => response.text())
            .then(html => {
                document.querySelector('#resultadoLista').innerHTML =
                    "<h1>Se envio correctamente</h1>" + html;
            }).catch(error => console.log("Error: " + error));

    })

    document.querySelector('#ver10').addEventListener('click', function(e) {
        e.preventDefault();
        let url = '11.php?cantidad=10';

        fetch(url, {
                method: 'post',
                body: url,
            })
            .then(response => response.text())
            .then(html => {
                document.querySelector('#resultadoLista').innerHTML =
                    "<h1>Se envio correctamente</h1>" + html;
            }).catch(error => console.log("Error: " + error));
    });

    document.querySelector('#verTodos').addEventListener('click', function(e) {
        e.preventDefault();
        let url = '11.php?cantidad=15';

        fetch(url, {
                method: 'post',
                body: url,
            })
            .then(response => response.text())
            .then(html => {
                document.querySelector('#resultadoLista').innerHTML =
                    "<h1>Se envio correctamente</h1>" + html;
            }).catch(error => console.log("Error: " + error));
    })
};