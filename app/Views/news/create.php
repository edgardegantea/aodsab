<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/news/create" method="post">
        <?= csrf_field() ?>

        <div class="field">
            <label class="label" for="">Título:</label>
            <div class="control">
                <input class="input" type="text" name="title" id="">
            </div>
        </div>
        <div class="field">
            <label class="label" for="">Contenido:</label>
            <div class="control">
                <textarea class="textarea" name="body" placeholder="Contenido de la noticia"></textarea>                
            </div>
        </div>
        <div class="field is-grouped">
            <div class="control">
                <input type="submit" class="button is-link" value="Guardar">
            </div>
            <div class="control">
                <input type="reset" value="Restablecer" class="button is-link is-light">
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>