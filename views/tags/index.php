<h2>Tags Blog</h2>

<?php foreach ($tags as $item): ?>

    <h3>
        <button class="category-button" onclick="show_options([<?= $item->id ?>])"><span
                    class="button-span<?= $item->id ?>  glyphicon-plus"></span></button> <?= $item->title ?></h3>
    <div class="post" style="display: none;" id="<?= $item->id ?>">
        <ul>
            <?php foreach ($item->post as $value) : ?>
                <li><a href="<?= \yii\helpers\Url::to(['post/view', 'id' => $value->id]) ?>"><?= $value->title ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </div>
<?php endforeach ?>

<script>
    function show_options(options) {

        for (let i = 0; i < options.length; i++) {
            if ($('#' + options[i]).is(':hidden')) {
                $('#' + options[i]).show('slow');
                $('.button-span' + options[i]).removeClass(" glyphicon-plus").addClass(" glyphicon-minus")
            } else if ($('#' + options[i]).is(':visible')) {
                $('#' + options[i]).hide('slow');
                $('.button-span' + options[i]).removeClass(" glyphicon-minus").addClass(" glyphicon-plus")
            }
        }
        return false
    }
</script>
