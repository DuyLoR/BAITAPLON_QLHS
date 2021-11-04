<div class="l_c_h">
    <div class="c_h">
        <div class="left_c">
            <div class="left right_c left_icons">
                <a href="#" class="mini" style="font-size:23px;">+</a>
            </div>
            <div class="left center_icons">
                <!--center_icons-->
                Chat for help!
            </div>
            <!--end center_icons-->
        </div>
        <div class="right right_c" style="width:35px;">
            <a href="#" class="logout" title="End chat" name="" style="display:none;"><img src="chat/logout.png"></a>
        </div>
        <div class="clear"></div>
    </div>
    <div class="chat_container" style="display: none;">
        <p class="no_provider">
            Xin chào <?php echo $_SESSION['currentUser'] ?>! tôi có thể giúp gì cho bạn?
        </p>

        <div class="chat_entry">
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px">Chưa gửi được đâu</textarea>
            </div>
            <input name="chat_submit" class="w-25 chat_submit mt-1" id="chat_submit" value="Gửi">
        </div>
    </div>
</div>