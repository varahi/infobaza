<h4>Пожалуйста выберите фирму для доступа </h4>
<div class="hidden-xs col-sm-6 col-md-4 ">
    <select id="select-id" class="form-control" required>
        <option value=''> Пожалуйста выберите </option>
        <option value='?company=autoclub' <?php if (isset($_GET['company']) && $_GET['company'] == 'autoclub') {echo 'selected';} ?>>Автоклуб</option>
        <option value='?company=automir' <?php if (isset($_GET['company']) && $_GET['company'] == 'automir') {echo 'selected';} ?>>Автомир</option>
        <option value='?company=autohelp' <?php if (isset($_GET['company']) && $_GET['company'] == 'autohelp') {echo 'selected';} ?>>Автопомощник</option>
        <option value='?company=autoconsalt' <?php if (isset($_GET['company']) && $_GET['company'] == 'autoconsalt') {echo 'selected';} ?>>Авто Консалт</option>
        <option value='?company=kat' <?php if (isset($_GET['company']) && $_GET['company'] == 'kat') {echo 'selected';} ?>>КАТ</option>
        <option value='?company=help_on_road' <?php if (isset($_GET['company']) && $_GET['company'] == 'help_on_road') {echo 'selected';} ?>>Помощь на Дороге</option>
        <option value='?company=tech_pomosch_auto' <?php if (isset($_GET['company']) && $_GET['company'] == 'tech_pomosch_auto') {echo 'selected';} ?>>ТехПомщьАвто</option>
        <option value='?company=save_drive' <?php if (isset($_GET['company']) && $_GET['company'] == 'save_drive') {echo 'selected';} ?>>Сэйф Драйв</option>
        <option value='?company=era' <?php if (isset($_GET['company']) && $_GET['company'] == 'era') {echo 'selected';} ?>>ЭРА</option>
        <option value='?company=urist_auto' <?php if (isset($_GET['company']) && $_GET['company'] == 'urist_auto') {echo 'selected';} ?>>Юрист Авто</option>
    </select>
</div>

<script>
    $(function(){
        // bind change event to select
        $('#select-id').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return false;
        });
    });
</script>