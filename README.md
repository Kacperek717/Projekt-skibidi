# Projekt Sklep - Laravel + TailwindCSS

## 📦 Wymagania
- PHP 8.2+
- Composer
- Node.js + npm
- Baza danych (np. SQLite, MySQL)

---

## 🚀 Instalacja projektu

1. Sklonuj repozytorium:
   ```bash
   git clone <adres_repozytorium>
   cd sklep
   ```

2. Zainstaluj zależności PHP:
   ```bash
   composer install
   ```

3. Skopiuj plik `.env.example` do `.env`:
   ```bash
   cp .env .env
   ```

4. Wygeneruj klucz aplikacji:
   ```bash
   php artisan key:generate
   ```

5. Skonfiguruj połączenie z bazą danych w pliku `.env`.

---

## ⚙️ Uruchamianie projektu

1. Wykonaj migracje bazy danych:
   ```bash
   php artisan migrate
   ```

2. Uruchom serwer aplikacji:
   ```bash
   php artisan serve
   ```

3. Zainstaluj zależności front-endowe:
   ```bash
   npm install
   ```

4. Uruchom Vite (do obsługi CSS/JS):
   ```bash
   npm run dev
   ```

---

## 🛒 Tworzenie przykładowych produktów

Jeśli chcesz od razu stworzyć np. 10 produktów:

```bash
php artisan tinker
\App\Models\Product::factory()->count(10)->create();
```

Produkty pojawią się automatycznie na dashboardzie!

---

## 🎯 Komenda do dodawania punktów użytkownikowi

Dodaj punkty wybranemu użytkownikowi po jego ID:

```bash
php artisan user:add-points {user_id} {punkty}
```

**Przykład:**

```bash
php artisan user:add-points 3 100
```
➔ Użytkownik o ID 3 dostanie +100 punktów.

---

## 🧹 Dodatkowe przydatne komendy

Czyszczenie cache aplikacji:

```bash
php artisan config:clear
php artisan cache:clear
php artisan route:clear
php artisan view:clear
```

---

## 📌 Autorzy
Projekt realizowany w ramach studiów.

---

# 🔥 Miłego kodowania i rozwijania projektu Sklep! 🔥

