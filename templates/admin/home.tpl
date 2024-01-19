{include file='header.tpl'}

<div class="container mt-4">
    {foreach from=$noticias item=noticia}
        <div class="row mb-4">
            <div class="col-md-10 mx-auto">
                <div class="card mb-4">
                    <img src="src/images/{$noticia.imagen}" alt="{$noticia.titulo} Imagen" class="card-img-top">
                    <div class="card-body">
                        <h2 class="card-title text-center">{$noticia.titulo}</h2>
                        <hr> <!-- Línea de separación -->
                        <p class="card-text">{$noticia.contenido}</p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <span><strong>Fecha de Publicación:</strong> {$noticia.fecha_publicacion_sin_hora}</span>
                        <span><strong>Periodista:</strong> {$noticia.periodista_nombre}
                            {$noticia.periodista_apellido}</span>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
</div>
<div class="video-container">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/B8VcOl4U_HQ?si=VW5SBZdWCgjml0qb"
        title="YouTube video player" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
        allowfullscreen></iframe>
</div>
{include file='footer.tpl'}