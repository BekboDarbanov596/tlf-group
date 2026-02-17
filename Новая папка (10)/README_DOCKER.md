# AI Agro Care - Dockerized

## Запуск через Docker

1. **Убедитесь, что Docker Desktop запущен.**
2. **Соберите и запустите контейнер**:
   ```bash
   docker-compose up -d --build
   ```
3. **Откройте в браузере**:
   `http://localhost:8080`

## Инициализация БД внутри контейнера (если нужно)
```bash
docker-compose exec app php db_init.php
```

---
*Для работы без Docker используйте `php -S localhost:8000 -t public/`*
