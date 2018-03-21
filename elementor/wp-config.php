<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'allancorreia');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'allancorreia');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '#link3r#');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_ts@iF;QT|OfKNOWSAm]A1.8#@S0w*^Ex0g)$F3Weg2t 6aBf33C&iJz?m!MRecM');
define('SECURE_AUTH_KEY',  'd$Ee>/LSYk?+frnP@r?U:JEN`hr#_ nqD<]BgrGkt=|Ok,~^mgS*+wA%?DqZxL?&');
define('LOGGED_IN_KEY',    ',X^2y!I<`4%r37LIh%~x`6*EOaqak3mN/4Wo.f[..q3F#/eT,tCe?(BVT_*vn23s');
define('NONCE_KEY',        '4)D!x- eJp1/2!L g?)0j,N]s*[4a@?u860HlRI%EyzEGY~`okd&uk]U<Ac:~&Sh');
define('AUTH_SALT',        'wmIr*E5xV}N[P0PEHUB0l2dzn6da(AE[J(^y^DZ!q/?t1ePi@Lq2h/YU+?m*.#s|');
define('SECURE_AUTH_SALT', ';uJeCjok/%zt:@%kt=#4cZ`6bR^E_nG3rsJe+VVl`T~FJ04u!b;wf~v&#vr2H3hB');
define('LOGGED_IN_SALT',   '%j{_(q@ia+L<]6E5wD|c1ojc/YeT@{lzo~ n7{+v}SPb)x&yM}nGT2a9)q^}1rNQ');
define('NONCE_SALT',       'I;t=l3i/T,ZCoQNe3R6+Q)T-s)^[_%U_w39JMVla7e6}pzAi3wNBu!_Lav{2.G$G');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'ac_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
