<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="section">
    <form action="/news/create" method="post">
        <?= csrf_field() ?>

        <div>
            <label for="">Categoría de la noticia:</label>
            <div class="control">
                <select name="categoria" id="" class="select">
                    <?php foreach($categorias as $c): ?>
                    <option value="<?= esc($c->id); ?>"><?= esc($c->nombre); ?></option>
                    <?php endforeach(); ?>
                </select>
            </div>
        </div>

        <div>
            <label for="">Periodista:</label>
            <div class="control">
                <input type="number" class="input" name="periodista">
            </div>
        </div>

        <div>
            <label for="">Staff:</label>
            <div class="control">
                <input type="number" class="input" name="staff">
            </div>
        </div>



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