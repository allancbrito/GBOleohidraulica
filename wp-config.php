<?php
/**
* As configurações básicas do WordPress.
*
* Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
* Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
* visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
* wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
*
* Esse arquivo é usado pelo script ed criação wp-config.php durante a
* instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
* como "wp-config.php" e preencher os valores.
*
* @package WordPress
*/

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gbgrupo');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'gbgrupo');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'GbHidra20');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
* Chaves únicas de autenticação e salts.
*
* Altere cada chave para um frase única!
* Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
*
* @since 2.6.0
*/
define('AUTH_KEY', 'RXsYIXxVnl92qjB9HvmhUz7rHgEfXbc6ITLA4mt9Bs28gX4YQAUo2ss/jEh3U68M');
define('SECURE_AUTH_KEY', '2WCuIqabg2ZexZhCIWE/jjrdgSc5bD2sYsFNksWwii9qQuo5pD0DYj9p5EZCkd1P');
define('LOGGED_IN_KEY', '68KUAS0fptPQvaMHc/enmO5vhrmURMbaeC/RdAZUUsJRA8+1LwMNRTtLT46GpX2W');
define('NONCE_KEY', '4dUSpPLnn3OjCstyV00yI/N14MGu2Nu6cnnMjgW7qJGRcB7mWJjsTZecKpYhjt1S');
define('AUTH_SALT', 'obi5gi7EL3JZ6r3S0YJcBqFsAJVRtZjtj6LuaJd7oEijpgJMvFAQTxtQzaz8cZqC');
define('SECURE_AUTH_SALT', 'eldW20JGuX1BytNF0douuEAstYiNG9XUf7l0nC2SKyxH1tmUuAtd6dz+U8oVBoIu');
define('LOGGED_IN_SALT', 'vS21t/pqsb+Yl7sXq6H4gC2djOjou/NjvRS9Y3UoFlE7A+AWoKN8b2PJgLJzEd+j');
define('NONCE_SALT', 'TFY8Z0wUkJr3aa/sBsGtMdkKMI2WZWVxvsaVvxdZ8K8PZEErm0OPH/RzBrtUhXiP');

/**#@-*/

/**
* Prefixo da tabela do banco de dados do WordPress.
*
* Você pode ter várias instalações em um único banco de dados se você der para cada um um único
* prefixo. Somente números, letras e sublinhados!
*/
$table_prefix = 'wp_';


/**
* Para desenvolvedores: Modo debugging WordPress.
*
* altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
* é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
* em seus ambientes de desenvolvimento.
*/
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
