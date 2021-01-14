## php_complex
## Задача
Требуется написать класс по работе с комплексными числами, реализовать операции сложения, вычитания, умножения и деления, а также провести тестирование его работы.

### Классы для работы с комплексными числами

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
