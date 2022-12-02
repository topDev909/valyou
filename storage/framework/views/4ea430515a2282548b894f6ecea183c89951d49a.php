<li id="comment_<?php echo e($comment->id); ?>">
    <div class="row">
        <div class="col-12 single-comment">
            <img src="<?php echo e(URL::asset(\App\User::find($comment->user_id)->avatar)); ?>"
                 alt="" class="avatar-md rounded-circle sc-img img-fluid">
            <div class="sc-inner">
                <p class="sc-name artist-comment-name"><?php echo e(\App\User::find($comment->user_id)->first_name); ?>  <?php echo e(\App\User::find($comment->user_id)->last_name); ?></p>
                <p class="sc-comment"><?php echo e($comment->comment); ?> </p>

                <p class="ml-auto">
                    <a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-edit"></i> </a>
                    <a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="<?php echo e($comment->id); ?>"> <i class=" fa fa-trash"></i> </a>
                </p>

            </div>
        </div>
    </div>
    <hr class="mb-2">
</li>
<?php /**PATH D:\xampp\htdocs\aug_client\resources\views/common-components/comment.blade.php ENDPATH**/ ?>