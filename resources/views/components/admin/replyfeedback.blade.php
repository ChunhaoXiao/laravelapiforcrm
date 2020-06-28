@props(['feedback'])
<div id="replycontent" class="p-2">
    {{ $feedback->reply->content??'' }}
    <p class="text-secondary">{{ $feedback->reply->updated_at??'' }}</p>
</div>
<form action="#" id="reply" method="post">
    <div class="form-group">
        <label for="">回复</label>
        <textarea name="content" id="" rows="8" class="form-control"></textarea>
        <button class="btn btn-success mt-2">确定</button>
    </div>
</form>

<script>
    $(function() {
        $("#reply").on('submit', function(e) {
            e.preventDefault();
            const datas = $(this).serialize();
            
            $.ajax({
                url:"{{route('admin.feedbackreply.store', $feedback)}}",
                data:datas,
                type:'post',
                success:res => {
                    const textarea = $(this).find("textarea");
                    $("#replycontent").html(textarea.val());
                    $(textarea).val('');
                }
            })
            return false;
        });
    })
</script>
