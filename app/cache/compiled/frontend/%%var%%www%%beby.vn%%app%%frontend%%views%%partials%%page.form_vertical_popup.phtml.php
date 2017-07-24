<form action="/form-submit" enctype="multipart/form-data" method="post">
    <div class="gform_body">
        <ul class="gform_fields top_label form_sublabel_below description_below" id="gform_fields_3">
            <li class="gfield gfield_contains_required field_sublabel_below field_description_below" id="field_3_3">
                
                <div class="ginput_container ginput_container_text">
                    <input class="medium" id="fullname" name="fullname" placeholder="Họ & Tên" tabindex="12" type="text" value=""/>
                </div>
            </li>
            <li class="gfield gfield_contains_required field_sublabel_below field_description_below" id="field_3_2">
                
                <div class="ginput_container ginput_container_email">
                    <input class="medium" id="email" name="email" placeholder="Địa chỉ E-mail" tabindex="13" type="email" value=""/>
                </div>
            </li>
            <li class="gfield gfield_contains_required field_sublabel_below field_description_below" id="field_3_1">
                
                <div class="ginput_container ginput_container_text">
                    <input class="medium" id="phone" name="phone" placeholder="Số điện thoại" tabindex="14" type="text" value=""/>
                </div>
            </li>
        </ul>
    </div>
    <div class="gform_footer top_label">
        <input name="page" readonly="readonly" type="hidden" value="<?= $data['page']['name']; ?>"/>
        <input name="link" readonly="readonly" type="hidden" value="http://<?= @$_SERVER[HTTP_HOST] . @$_SERVER[REQUEST_URI]; ?>"/>
        <input class="gform_button gform_button_sent button" onclick="$(this).closest('form').submit();" type="button" value="Đăng ký Tư vấn"/>
    </div>
</form>
