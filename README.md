# Meu Framework Base PHP (MVC)

Este é um projeto base em PHP puro, seguindo a arquitetura **MVC (Model-View-Controller)** e orientado a objetos. A estrutura foi inspirada no ecossistema Laravel para facilitar a organização, escalabilidade e deploy em nuvem.

Boilerplate para projetos PHP estruturado em MVC, inspirado no Laravel. Pronto para deploy no **Railway** ou **Square Cloud**.

## 🛠️ Tecnologias
- PHP 8.2+
- Composer (Autoload PSR-4)
- vlucas/phpdotenv (Gestão de ambiente)
- PDO (Conexão segura)

## 🏃 Como rodar local
```bash
composer dev

## 📂 Organização do Projeto
- **app/**: Toda a lógica do negócio (Controllers, Models e Core).
- **public/**: Único diretório exposto ao servidor. Contém o `index.php` e assets (CSS/JS).
- **routes/**: Arquivo `web.php` para gerenciamento centralizado de rotas.
- **views/**: Arquivos de interface (HTML/PHP).
- **config/**: Configurações globais.

## 🛠️ Tecnologias Utilizadas
- **PHP 8.2+**
- **Composer** (Autoloading PSR-4)
- **vlucas/phpdotenv** (Gestão de variáveis de ambiente)
- **PDO** (Conexão segura com banco de dados)

## 📦 Passo a Passo para Instalação

Siga os comandos abaixo no seu terminal Linux para rodar o projeto localmente:

composer install
composer dump-autoload
composer dev

# Configurações de Banco de Dados
DB_HOST=localhost
DB_PORT=3306
DB_NAME=seu_banco
DB_USER=root
DB_PASS=suasenha

# Configurações do App
APP_DEBUG=true
APP_URL=http://localhost:5050