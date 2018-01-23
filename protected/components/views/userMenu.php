<ul>
    <li><?= CHtml::link('Create New Post', ['post/create']) ?></li>
    <li><?= CHtml::link('Manage Posts', ['post/admin']) ?></li>
    <li><?= CHtml::link('Approve Comments', ['comment/index'])
        .' ('.Comment::model()->pendingCommentCount.')' ?></li>
    <li><?= CHtml::link('Logout', ['site/logout']) ?></li>
</ul>