<div>
    <div class="mb-3">
        <label class="form-label">Gửi đến</label>
        <input id="emailAddress" type="email" class="form-control" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Chủ đề</label>
        <input id="emailSubject" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Nội dung</label>
        <textarea class="form-control" id="emailContents" rows="3"></textarea>
    </div>
    <button id="send" type="submit" class="btn btn-primary">Gửi</button>
</div>

<script>
    $(document).ready(function() {
        //? truyền địa chỉ email
        $("#emailAddress").val($email);

        $('#send').click(function() {

        });
    });
</script>