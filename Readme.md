## Интеграция

### На стороне CRM Bitrix 24
1. В первую очередь создаем интеграцию CRM с нашим приложением. Разработчикам -> Другое -> Локальное приложение
Выбрать "Серверное" Указываем путь до обработчика
   ```https://infoavtobaza.site/wp-content/themes/infoavtobaza.site/install/start.php```
   ```https://infoavtobaza.site/wp-content/themes/infoavtobaza.site/install/install.php```

Нажать кнопку "сохранить". После этого в папке https://infoavtobaza.site/wp-content/themes/infoavtobaza.site/install/ будет создан файл
```settings.json```. Этот файл нужно поместить в директорию public_html/wp-content/themes/infoavtobaza.site/Classes/companies/название_компании


Также в данной директории в файле settings.php нужно указать Код приложения (client_id) и Ключ приложения (client_secret)

### На стороне сайта
2. В файле ```public/wp-content/themes/infoavtobaza.site/partials/select_form.tmpl.php``` нужно создать новую или отредактировать существующую компанию.
!!!Важно, в теге ```option``` название компании должно соответсвовать названию директории по пути 
```public/wp-content/themes/infoavtobaza.site/Classes/companies```

```php
<option value='?company=f4' <?php if (isset($_GET['company']) && $_GET['company'] == 'f4') {echo 'selected';} ?>>
```

3. Редактировать интеграцию можно  Разработчикам -> Интеграции


https://infoavtobaza.site/wp-content/themes/infoavtobaza.site/Readme.md
https://infoavtobaza.site/wp-content/themes/infoavtobaza.site/readme.html


Коллеги добрый вечер. Я сделал необходимые действия для интеграции со вторым порталом https://b24-f4ez1x.bitrix24.ru, назвал компанию "Компания F4". 
Однако для того, чтобы проверить как это работает, необходимо создать сделки и заполнить поля "Имя", "Фамилия" и "Номер сертификата". 
Я не осмеливаюсь это сделать. Можете ли сделать несколько тестовых записей или это сделать мне?
Readme по интеграции находится здесь https://infoavtobaza.site/wp-content/themes/infoavtobaza.site/readme.html