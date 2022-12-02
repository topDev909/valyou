<li id="comment_{{$comment->id}}">
    <div class="row">
        <div class="col-12 single-comment">
            <img src="{{ URL::asset(\App\User::find($comment->user_id)->avatar) }}"
                 alt="" class="avatar-md rounded-circle sc-img img-fluid">
            <div class="sc-inner">
                <p class="sc-name artist-comment-name">{{\App\User::find($comment->user_id)->first_name}}  {{\App\User::find($comment->user_id)->last_name}}</p>
                <p class="sc-comment">{{$comment->comment}} </p>

                <p class="ml-auto">
                    <a href="javascript:;" class="sc-name ml-2 edit_comment" data-id="{{$comment->id}}"> <i class=" fa fa-edit"></i> </a>
                    <a href="javascript:;" class="sc-name ml-2 delete_comment" data-id="{{$comment->id}}"> <i class=" fa fa-trash"></i> </a>
                </p>

            </div>
        </div>
    </div>
    <hr class="mb-2">
</li>
