function filtrarNoticiasPorPeriodista() {
    var idPeriodistaSeleccionado = document.getElementById('periodistaSelect').value;
    
    var noticias = document.getElementsByClassName('noticia');
    
    for (var i = 0; i < noticias.length; i++) {
        var noticia = noticias[i];
        var idPeriodistaNoticia = noticia.getAttribute('data-id-periodista');

        if (idPeriodistaSeleccionado === "" || idPeriodistaSeleccionado === idPeriodistaNoticia) {
            noticia.style.display = '';
        } else {
            noticia.style.display = 'none';
        }
    }
}