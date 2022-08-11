<h4>Пожалуйста выберите фирму для доступа </h4>
<div class="hidden-xs col-sm-6 col-md-4 ">
    <select id="select-id" class="form-control" required>
        <option value=''> Пожалуйста выберите </option>
        <option value='?company=autoconsalt' <?php if (isset($_GET['company']) && $_GET['company'] == 'autoconsalt') {echo 'selected';} ?>>Авто Консалт</option>
        <option value='?company=f4' <?php if (isset($_GET['company']) && $_GET['company'] == 'f4') {echo 'selected';} ?>>Компания F4</option>
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