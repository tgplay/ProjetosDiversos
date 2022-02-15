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
define( 'DB_NAME', 'teste_w' );

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
define( 'AUTH_KEY',         '<(-#dGUE;5d#^p]e!K^7++C|,1fnwT0PR};0=F/^<5UijuG(Im77w6hL88(>lR! ' );
define( 'SECURE_AUTH_KEY',  'qe9)p8_?5V|G7%GR>//m]WSd,O8N`L:Af$J}VWzG>2`G[6{AZ*[bNMFJ/=>3-AV4' );
define( 'LOGGED_IN_KEY',    'K%,|~3yBD/U]2dyj~f|*Jl7 (`h,zJRScHTf4!e;:o+sjamo#ttL<=?+}~Deqm2<' );
define( 'NONCE_KEY',        'fa,3@qa6Qb-QYz!f,T;%FQ~m05J!{xM6]RXC7*|S%}tH#]r9a&N[R #yKFkqh=o>' );
define( 'AUTH_SALT',        'xLV0.0HeD=DFZ 7K?6. eda@#[danHuXgb5`g9l#QZY`@]3W5PcR)MORHh>{~?64' );
define( 'SECURE_AUTH_SALT', '1*WjXq!?>Pq~@@te6mYfkisk*-6LeHe<Nz1gn yV.R1)ji=%TXbA*hmG-xQB%sls' );
define( 'LOGGED_IN_SALT',   'DX|y9aoCUwYa=NP}(&jM?%[h,k5YhU&=Zu@L&TW]Y,ef?SI4i1NRd0kDs>E,S>wj' );
define( 'NONCE_SALT',       '). ,1`?[9P&IROG#,<_9d>IB)Tl-SwXI~i%~s Gmx_?#I;332kwLPpgxQ4qE3:5)' );

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