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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sitewampserver' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&h7/Vv*{t_v$-7hNPaBwlq. P`=Fofwqhvb9S_)o.k)f:bFwcS<zR(_BDtU$-FMF' );
define( 'SECURE_AUTH_KEY',  '=bCg-_kj?.eo//CJF`_f;KitX8jQ]tjCwHL-f4-ou(^!RD/^h{am{Z-r>AFCY~>V' );
define( 'LOGGED_IN_KEY',    '>[LEv)p]v&]u6K[[?#@*@x?!Rg g^L3D&u nH&Yxa7#JX+$kUbRND9Z*m3%M@5>N' );
define( 'NONCE_KEY',        '3M7?IRTr;mW>8xBiC*Pv$6Gm(fclk8zXR=/$/050qc4}BC;UJNrB?xFPvnNd^zPz' );
define( 'AUTH_SALT',        'GO-u9BWc7QOnLTe$L4j~sA+9Go9I*,li(.n Q@0JA_QGwC!JjcYBBn;(*ooc`tJf' );
define( 'SECURE_AUTH_SALT', '+7QRR3r_c/&HYtCuekJN1z[v{;/IZjFC,`xE_S|wmkk{2CejM^9dEFuU%gZ=xcYY' );
define( 'LOGGED_IN_SALT',   'Tnf&+h8dw.nBGM[Z-w*[R^|2|z8l#.u%Iwk-:P)|XJx9r8znx3J{=*6$I~]*9I7z' );
define( 'NONCE_SALT',       ' nV}jwn3A+.SSW{bpD6iMvM%;^:I@h#T;Qxw-r:Yh<^2]lFF)</1G6L-Gd{~vrXG' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
