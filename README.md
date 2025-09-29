<p align="center">
<a href="https://upperfy.com.br"><img src="https://upperfy.com.br/wp-content/uploads/2024/09/Logotipos-DVG-7-1024x1024.png" height="150px;"></a>
</p>
<p align="center">
<a href="https://packagist.org/packages/krayin/laravel-crm"><img src="https://poser.pugx.org/krayin/laravel-crm/license.svg" alt="License"></a>
</p>


<p align="center">
<img src="./image.png" height="500px;" style="border-radius:10px;">
</p>


## Topics

1. [Introduction](#introduction)
2. [Requirements](#requirements)
3. [Installation & Configuration](#installation-and-configuration)
4. [License](#license)
5. [Security Vulnerabilities](#security-vulnerabilities)

### Introduction

Plataforma de CRM de Código Aberto para o Seu Negócio
O  Upper crm é a sua solução completa e gerenciada de CRM. Baseado no sólido framework Laravel (Krayin CRM), oferecemos uma plataforma robusta de Código Aberto (Open Source) com a flexibilidade do modelo Multi-Tenant.

Nós cuidamos da complexidade técnica (hospedagem, segurança, backups) para que você e sua equipe possam focar apenas em construir relacionamentos com seus clientes.

**Free & Opensource Laravel CRM solution for SMEs and Enterprises for complete customer lifecycle management.**

### Requirements

-   **SERVER**: Apache 2 or NGINX.
-   **RAM**: 3 GB or higher.
-   **PHP**: 8.1 or higher
-   **For MySQL users**: 5.7.23 or higher.
-   **For MariaDB users**: 10.2.7 or Higher.
-   **Node**: 8.11.3 LTS or higher.
-   **Composer**: 2.5 or higher

### Installation and Configuration

1. Clone Repository
2. Copy .env.example and configure 
    - Change the **APP_URL** param to your **domain**. 
    - Configure the **Database** parameters inside **.env** file.
3. Create databases
     ```
        CREATE DATABASE IF NOT EXISTS application CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
        CREATE DATABASE IF NOT EXISTS application_testing CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
    ```
4. Acess container and execute the next step
5. Dependencies & configs 
    ```
        composer install
        php artisan key:generate
        php artisan optimize:clear
        php artisan migrate:fresh --seed 
        php artisan storage:link 
        php artisan vendor:publish --provider='Webkul\\Core\\Providers\\CoreServiceProvider' --force 
        php artisan optimize:clear
    ```

**How to log in as admin:**

> _http(s)://example.com/admin/login_

```
email:admin@example.com
password:admin123
```

### License

Upperfy CRM is a fully open-source CRM framework which will always be free under the [MIT License](https://github.com/krayin/laravel-crm/blob/2.1/LICENSE).

### Security Vulnerabilities

Please don't disclose security vulnerabilities publicly. If you find any security vulnerability in Upperfy CRM then please email us: contato@upperfy.com.br.
