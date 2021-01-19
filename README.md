## php_complex
### Классы для работы с комплексными числами
#### Задача
Требуется написать класс по работе с комплексными числами.
Реализовать операции сложения, вычитания, умножения и деления.
Добавить тестирование функционала.

Добавить отображение в тригонометрическом виде



Загрузка зависимостей для codeception и запуск тестов из контейнера **complex_app**

```
docker-compose up -d
docker exec -it complex_app bash
composer update
php vendor/bin/codecept run unit ComplexTest
```
Просмотр в браузере по адресу localhost:8080

![Пример вывода в браузере](/app/screens/result.png)
![Пример работы тестов](/app/screens/tests.png)