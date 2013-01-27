<?php  // Con el siguiente código añadimos roles a WordPress.

add_role( 'customer_contapress', _x( 'Customer', 'contapress' ), array(
			'read' => true, // True permite esa capacidad
			'edit_posts' => true,
			'delete_posts' => false, // Usar false para negarla expolicitamente
		));


//Con este código, podemos realizar llamadas a los roles

current_user_can('customer_contapress');

?>
