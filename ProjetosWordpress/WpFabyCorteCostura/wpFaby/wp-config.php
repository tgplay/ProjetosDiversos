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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wpFabyCorteCostura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'senha' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/*Fazer atualizações e instalações de temas e plugins sem ftp */
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         '%}sK2px}?)5S!j4IX$0ki}x=XIyIjNK[Jj?G!tQW}AWhE])|uZb+4AHz2u)s|SDb' );
define( 'SECURE_AUTH_KEY',  'nCPsf0V5EbU&U$vLUh%lUGj]<+w*ntjkzB 43t%P/-}^Ym/r%9Y3r^2}#%i9blt;' );
define( 'LOGGED_IN_KEY',    '_<6}@$((oE*4.*cIGfHP,_ePd4Bw0DGW>(;cMg[r.qg5#Qt=lgnEolZ_~#]$GPgC' );
define( 'NONCE_KEY',        '/r9i-@T$2@PF,U,#^a;QE]r9{x2ctNL/C77| q>n+5;J<b-&3-Oj(8G/]@!|01h ' );
define( 'AUTH_SALT',        'U=<,pw]0oMa?{Q,%o}O5IVG+iAp;fjvqa[Sc!J M]DR p/o<h5g2!rzKQ[EP0Y{Y' );
define( 'SECURE_AUTH_SALT', '#rHXIg}BC-Xb&(G&)p9#z}GN[hHrm[vJAtvq`b>}ZG}gK^cX2I]t2%W>M/uqR ;J' );
define( 'LOGGED_IN_SALT',   'V8 $-`f=&sBTg}*).en&$iR%qn*>H+p,-&>1|>NEZn(W~kz W!DgUOW#XZM@=;</' );
define( 'NONCE_SALT',       '#5q?pCJ-5=z)7lCgN<L%] %0vC2UN9^{0D|Y]pF?&,n(8yU?iO-rWGoU#_ljf*{d' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
