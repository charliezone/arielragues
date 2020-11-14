<?php get_header() ?>

<div id="ajaxArea">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" style="padding: 50px">
                <h2><?php _e('Error 404. Pagina no encontrada.', 'ariel') ?></h2>
                <small><?php _e('Regresar al', 'ariel') ?> <a href="<?php echo site_url() ?>"><?php _e('Inicio', 'ariel') ?></a></small>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>