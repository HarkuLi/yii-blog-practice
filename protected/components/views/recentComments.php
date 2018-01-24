<ul>
    <?php foreach ($this->getRecentComments() as $comment) { ?>
        <li>
            <?= $comment->authorLink ?> on
            <?= CHtml::link(CHtml::encode($comment->post->title), $comment->getUrl()) ?>
        </li>
    <?php } ?>
</ul>