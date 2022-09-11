# TestTask
Тестовое задание на PHP для ООО "Энди"
В репозитории приложена база SQL, которую можно импортировать в PhpMyAdmin и протестировать работоспособность кода
<br></br>
Проект представляет собой минимальный жизнеспособный продукт, в котором по причине нехватки времени отсутствуют некоторые обязательные для большого проекта детали (такие, как, например, индекация товаров внутри базы SQL с ссылками на объект)
<br></br>
![Alt](https://i.imgur.com/IIGaPov.png)
# Проработанные детали и исключения:
Реакция скрипта на пустую БД
<br></br>
![Alt](https://i.imgur.com/SMbqMLC.png)
<br></br>
Обязательность всех полей для заполнения
<br></br>
![Alt](https://i.imgur.com/Igv8hSA.png)
<br></br>
Переключения на Юр. и Физ. лицо. При переключении на физ.лицо срабатывает скрипт, приравнивающий значение номера договора к NULL, чтобы избежать случайного заполнения
<br></br>
![Alt](https://i.imgur.com/UO1pCZs.png)
<br></br>
При успешном заполнении формы на несколько секунд появляется соответствующая надпись, указывающая на то, что код успешно завершил выполнение
<br></br>
![Alt](https://i.imgur.com/GUekTF8.png)
<br></br>
При прогрузки страницы через PHP делается запрос к БД для получения списка товаров и их атрибутов
<br></br>
![Alt](https://i.imgur.com/sFkhW38.png)
<br></br>
Отображение формы заказа внутри MyPhpAdmin
<br></br>
![Alt](https://i.imgur.com/4FyhkOd.png)
<br></br>

