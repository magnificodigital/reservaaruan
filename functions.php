<?php 

add_action('wp_enqueue_scripts', 'meu_tema_enqueue_scripts');
function meu_tema_enqueue_scripts() {
	wp_enqueue_script('scripts', get_template_directory_uri()."/assets/js/scripts.min.js", array('jquery'));
	wp_localize_script('scripts', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php'), 'outro_valor' => 1234));
}

add_action('wp_ajax_envia_email', 'funcao_envia_email');
add_action('wp_ajax_nopriv_envia_email', 'funcao_envia_email');
function funcao_envia_email() {

	// Modificar o email do remetente para outro email
	add_filter( 'wp_mail_from', 'ewp_wp_mail_from' );
	function ewp_wp_mail_from() {
	    return "contato@ekoconstrutora.com.br";
	}
	 
	// Modificar o nome do remetente
	add_filter( 'wp_mail_from_name', 'ewp_ep_mail_from_name' );
	function ewp_ep_mail_from_name() {
	    return "Contato - Reserva Aruan"; // Poderia também usar get_bloginfo( 'name' );		 
	}

	//Pega os dados 
	parse_str($_REQUEST['dados'], $array_dados);

	if (!isset($array_dados['nome']) OR empty($array_dados['nome']) OR 
		!isset($array_dados['email']) OR empty($array_dados['email']) OR !is_email($array_dados['email']) OR
		!isset($array_dados['tel']) OR empty($array_dados['tel'])) {
		
		echo json_encode(array('class' => 'erro', 'mensagem' => 'Digite todos os campos'));

	} else {

		//Fazer a mensagem com uma variavel $mensagem
		$mensagem = "Nome: ".$array_dados['nome']."\n "."Email: ".$array_dados['email']."\n"."Telefone: ".$array_dados['tel'];

		if (wp_mail('atendimento@ekoconstrutora.com.br', 'Site - Reserva Aruan', $mensagem)) {
			echo json_encode(array('class' => 'sucesso', 'mensagem' => 'Mensagem enviada!'));
		} else {
			echo json_encode(array('class' => 'erro', 'mensagem' => 'Mensagem não enviada :(.'));
		}

	}


	wp_die();

}


function my_login_logo() { ?>
	<style type="text/css">
		body.login div#login h1 a {
		    background-image: url('<?php bloginfo('template_url') ?>/img/logo.png');
		    padding: 30px;
		    width: inherit;
		    height: inherit;
		    line-height: inherit;
		    background-size: 150px;
		    background-position: center;
		    background-color: rgba(35,94,162,1);
		}
   </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );