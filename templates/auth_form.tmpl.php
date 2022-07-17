<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <p>
        <label> Фамилия<br />
            <span class="">
                <input type="text" name="lastname_v1" value="" class="" required=""></span>
        </label>
        <br />

        <label>Имя <span class="">
                <input type="text" name="name_v1" value="" size="40" class="" placeholder="" required=""> </span>
        </label>
        <br />

        <label>Номер сертификата <span class="wpcf7-form-control-wrap ">
                <input type="text" name="cert_v1" value="" size="40" class="" placeholder="" required=""></span>
        </label><br />
        <input type="hidden" name="token_v1" value="start<?php echo $abstractData->getRandomNumber() ?>">
        <input type="submit" value="Получить доступ" class="">
        <span class=""></span>
    </p>
</form>