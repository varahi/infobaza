<div class="container">
    <form action="" method="POST">
        <p>
            <label> Фамилия<br />
                <span class="wpcf7-form-control-wrap ">
                    <input type="text" name="lastname_v1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                           aria-required="true" aria-invalid="false" required="">
                </span>
            </label>
            <br />

            <label>Имя <span class="wpcf7-form-control-wrap ">
                    <input type="text" name="name_v1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required"
                           aria-required="true" aria-invalid="false" placeholder="" required="">
                </span>
            </label>
            <br />

            <label>Номер сертификата <span class="wpcf7-form-control-wrap ">
                    <input type="text" name="cert_v1" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required"
                           aria-required="true" aria-invalid="false" placeholder="" required="">
                </span>
            </label><br />
            <input type="hidden" name="token_v1" value="start<?php echo $abstractData->getRandomNumber() ?>">
            <input type="submit" value="Получить доступ" class="vc_general vc_btn3 vc_btn3-size-lg vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-juicy-pink ">
            <span class="wpcf7-spinner"></span>
        </p>
    </form>
</div>

