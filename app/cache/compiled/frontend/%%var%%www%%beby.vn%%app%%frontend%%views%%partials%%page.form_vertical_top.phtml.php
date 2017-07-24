<form action="/form-submit" enctype="multipart/form-data" id="gform_1" method="post">
    <div class="gform_body">
        <ul class="gform_fields top_label form_sublabel_below description_below" id="gform_fields_1">
            <li class="gfield gfield_contains_required field_sublabel_below field_description_below" id="field_1_3">
                <label class="gfield_label" for="fullname">
                    Họ & Tên
                    <span class="gfield_required">
                        *
                    </span>
                </label>
                <div class="ginput_container ginput_container_text">
                    <input class="medium" id="fullname" name="fullname" placeholder="Họ & Tên" tabindex="1" type="text" value=""/>
                </div>
            </li>
            <li class="gfield gfield_contains_required field_sublabel_below field_description_below" id="field_1_2">
                <label class="gfield_label" for="email">
                    Email
                    <span class="gfield_required">
                        *
                    </span>
                </label>
                <div class="ginput_container ginput_container_email">
                    <input class="medium" id="email" name="email" placeholder="Địa chỉ E-mail" tabindex="2" type="email" value=""/>
                </div>
            </li>
            <li class="gfield gfield_contains_required field_sublabel_below field_description_below" id="field_1_1">
                <label class="gfield_label" for="phone">
                    Số điện thoại
                    <span class="gfield_required">
                        *
                    </span>
                </label>
                <div class="ginput_container ginput_container_text">
                    <input class="medium" id="phone" name="phone" placeholder="Số điện thoại" tabindex="3" type="text" value=""/>
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