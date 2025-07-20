# Project Name: Simple To-Do List Application

This project is a basic To-Do List application. Developed using PHP, it adopts the **Model-View-Controller (MVC) design pattern** for clean code structure and separation of concerns.

---

## Project Purpose and Features

This application allows users to easily manage their daily tasks. Its core features include:

* **Add Task:** Create new to-do items.
* **View Tasks:** List all existing tasks.
* **Update Task:** Edit existing tasks (e.g., mark as completed).
* **Delete Task:** Remove completed or unnecessary tasks from the list.

---

## Architecture: Developed with MVC Principles

The project follows the **MVC (Model-View-Controller)** architecture, a widely used pattern in software development:

* **Model:** Contains the database operations and business logic. It's responsible for data manipulation and validation.
* **View:** Represents the user interface (HTML outputs). It prepares the data to be displayed to the user.
* **Controller:** Manages the communication between the Model and the View. It receives user requests, updates the Model, and selects the appropriate View.

This structure ensures that the code is more organized, readable, and easier to maintain.

---

## Database Connection and Security

For database connectivity, PHP's robust and secure database access layer, **PDO (PHP Data Objects)**, is used. This allows for flexible connections to various database systems (such as MySQL, PostgreSQL, etc.).

Sensitive database credentials (username, password, database name, etc.) are not stored directly within the code. Instead, these details are securely managed through **environment variables (using a `.env` file)**.

Thanks to the `vlucas/phpdotenv` library, information from the `.env` file is loaded at the application's startup and is excluded from Git version control. This ensures that the project can easily run with different database settings across various deployment environments (local development, testing, live server) and prevents sensitive information from being exposed.

---

## Setup and Running

Follow these steps to set up and run the project on your local system:

### Prerequisites

* PHP (Preferably 7.4 or higher)
* Composer
* MySQL/MariaDB or a similar database server
* A web server (Apache, Nginx, or PHP's built-in server)

### Steps

1.  **Clone the Repository:**
    ```bash
    git clone <your_repository_address>
    cd <your_project_directory_name>
    ```

2.  **Install Composer Dependencies:**
    ```bash
    composer install
    ```

3.  **Configure the `.env` File:**
    Copy the `.env.example` file located in the project's root directory to create a new file named `**.env**`:
    ```bash
    cp .env.example .env
    ```
    Open the `**.env**` file and edit the database connection details according to your environment:
    ```
    DB_HOST=127.0.0.1
    DB_NAME=task_manager_db # Enter your database name
    DB_USER=root           # Enter your database username
    DB_PASS=               # Enter your database password
    DB_CHARSET=utf8mb4
    ```

4.  **Create the Database:**
    Create a MySQL database named `task_manager_db` (or whatever you specified in your `.env` file). For schema and table creation commands, refer to a `database.sql` or similar file within the project, if available. Otherwise, you might need to manually create a `tasks` table (with columns like ID, description, status, created_at, etc.).

5.  **Start the Web Server:**
    Configure your web server to use the `public` directory (or wherever your `index.php` file is located) as the document root.
    Alternatively, you can use PHP's built-in web server (navigate to the directory containing your `index.php` from the project root):
    ```bash
    # For example, if index.php is in a 'public' folder inside your project root
    php -S localhost:8000 -t public/
    ```
    Then, open your browser and go to `http://localhost:8000` to view the application.

---




# Türkçe
## Proje Adı: Basit To-Do List Uygulaması

Bu proje, temel bir To-Do List (Yapılacaklar Listesi) uygulamasıdır. PHP kullanarak geliştirilmiş olup, temiz kod yapısı ve ayrık sorumluluklar için **Model-View-Controller (MVC) tasarım desenini** benimsemiştir.

---

## Proje Amacı ve Özellikleri

Bu uygulama, kullanıcıların günlük görevlerini kolayca yönetmelerine olanak tanır. Temel özellikleri şunlardır:

* **Görev Ekleme:** Yeni yapılacaklar ekleyin.
* **Görev Görüntüleme:** Mevcut tüm görevleri listeleyin.
* **Görev Güncelleme:** Mevcut görevleri düzenleyin (örneğin tamamlandı olarak işaretleme).
* **Görev Silme:** Tamamlanan veya gereksiz görevleri listeden kaldırın.

---

## Mimari: MVC Prensibiyle Geliştirildi

Proje, yazılım geliştirmede yaygın olarak kullanılan **MVC (Model-View-Controller)** mimarisini takip eder:

* **Model:** Veritabanı işlemleri ve iş mantığını içerir. Veri manipülasyonu ve doğrulamadan sorumludur.
* **View:** Kullanıcı arayüzünü (HTML çıktılarını) temsil eder. Kullanıcıya gösterilen veriyi hazırlar.
* **Controller:** Model ve View arasındaki iletişimi yönetir. Kullanıcı isteklerini alır, Model'i günceller ve View'ı seçer.

Bu yapı, kodun daha düzenli, okunabilir ve bakımı kolay olmasını sağlar.

---

## Veritabanı Bağlantısı ve Güvenlik

Veritabanı bağlantısı için PHP'nin güçlü ve güvenli veritabanı erişim katmanı olan **PDO (PHP Data Objects)** kullanılmıştır. Bu sayede farklı veritabanı sistemlerine (MySQL, PostgreSQL vb.) esnek bir şekilde bağlanabiliriz.

Hassas veritabanı kimlik bilgileri (kullanıcı adı, şifre, veritabanı adı vb.) doğrudan kod içinde tutulmamıştır. Bunun yerine, bu bilgiler **ortam değişkenleri (`.env` dosyası)** aracılığıyla güvenli bir şekilde yönetilmektedir.

`vlucas/phpdotenv` kütüphanesi sayesinde, `.env` dosyasındaki bilgiler uygulamanın başlangıcında yüklenir ve Git versiyon kontrolünden hariç tutulur. Bu, projenin farklı dağıtım ortamlarında (yerel geliştirme, test, canlı sunucu) farklı veritabanı ayarlarıyla kolayca çalışmasını sağlar ve hassas bilgilerin açığa çıkmasını engeller.

---

## Kurulum ve Çalıştırma

Projeyi yerel sisteminizde kurmak ve çalıştırmak için aşağıdaki adımları izleyin:

### Ön Gereksinimler

* PHP (Tercihen 7.4 veya üzeri)
* Composer
* MySQL/MariaDB veya benzeri bir veritabanı sunucusu
* Bir web sunucusu (Apache, Nginx veya PHP'nin yerleşik sunucusu)

### Adımlar

1.  **Projeyi Klonlayın:**
    ```bash
    git clone <depo_adresiniz>
    cd <proje_dizini_adı>
    ```

2.  **Composer Bağımlılıklarını Yükleyin:**
    ```bash
    composer install
    ```

3.  **`.env` Dosyasını Yapılandırın:**
    Projenin kök dizininde bulunan `.env.example` dosyasını kopyalayarak `**.env**` adında yeni bir dosya oluşturun:
    ```bash
    cp .env.example .env
    ```
    `**.env**` dosyasını açın ve veritabanı bağlantı bilgilerini kendi ortamınıza göre düzenleyin:
    ```
    DB_HOST=127.0.0.1
    DB_NAME=task_manager_db # Kendi veritabanı adınızı girin
    DB_USER=root           # Kendi veritabanı kullanıcınızı girin
    DB_PASS=               # Kendi veritabanı şifrenizi girin
    DB_CHARSET=utf8mb4
    ```

4.  **Veritabanını Oluşturun:**
    `task_manager_db` (veya `.env` dosyasında belirlediğiniz isimle) adında bir MySQL veritabanı oluşturun. Şema ve tablo oluşturma komutları için proje içindeki varsa `database.sql` veya benzeri bir dosyaya bakın, yoksa manuel olarak bir `tasks` tablosu oluşturmanız gerekebilir (ID, açıklama, durum, oluşturulma tarihi vb. sütunlarla).

5.  **Web Sunucusunu Başlatın:**
    Projenizin `public` veya `index.php` dosyasının bulunduğu dizini web sunucunuzda kök dizin olarak ayarlayın.
    Alternatif olarak, PHP'nin yerleşik sunucusunu kullanabilirsiniz (projenin kök dizininden `index.php`'nin bulunduğu dizine girerek):
    ```bash
    # Örneğin, eğer index.php projenizin kök dizininin bir altındaki 'public' klasöründeyse
    php -S localhost:8000 -t public/
    ```
    Ardından tarayıcınızdan `http://localhost:8000` adresine giderek uygulamayı görüntüleyebilirsiniz.

---