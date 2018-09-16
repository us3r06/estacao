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
define('DB_NAME', 'estacaoclimatologica');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'C8`{fWb{J7<x$7j3X&!`D0hW 7iVCP6w-JZuVC/qE;]$<oqNyF^naT)IlLxJ $[=');
define('SECURE_AUTH_KEY',  'f`Ixi35Mu+wf;U@Q*G^5V-U3#92R#zxdf->)]@7p{nAJpx+?uW(a}%G 1=dnC2[5');
define('LOGGED_IN_KEY',    'U[1_8W:|nuaooc_O#/!kAR8^0Sb%wV{)|ph3!9nk^HP&NMD`08MgM&y4ZlQ+nf|J');
define('NONCE_KEY',        'o?.X0/q$?#sLCGi0p2=@jSni!ni(_abEo%lsObX95vpd6IsN:tJ0-%$Cy>lQDk?v');
define('AUTH_SALT',        '=A3BsaGVK7PVLHAU&m/jg76/FD.]RT3~;h&nG-`ve,o50$mF._cb .K%g/Zuo+>(');
define('SECURE_AUTH_SALT', 'AP@Wfm:A>{C^.C@`0|hT=8`aO5whob$//TqTa~Za/s<{(#[pjFzVJ{m(+%F2/C%T');
define('LOGGED_IN_SALT',   '%ALV2YxvXq>G{<KGexv%/,yB0we*`TCIf,2KfsA1:s|~2#7bb{- 7~1%)w|]qPh0');
define('NONCE_SALT',       '4|0{Gn^5]q84*EDf/$VUAXj$@WT~y_kiu{i}m5O[l(v+aGX-e_:+qv<YE>[]=wCy');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

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
