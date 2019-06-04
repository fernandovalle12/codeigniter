<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Document</title>
</head>

<body>
	<div class="container">
		<div class="row">

			<table class="table">
				<thead>
					<tr>
						<th scope="col">Nome</th>
						<th scope="col">Descrição</th>
						<th scope="col">Preço</th>
						<th scope="col" class="text-center">Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($produtos as $produto) : ?>
						<tr>
							<td><?= $produto["nome"] ?></td>
							<td><?= $produto["descricao"] ?></td>
							<td><?= numeroemReais($produto["preco"]) ?></td>
							<td class="text-center"><a href="#" class="fa fa-pencil"></a> <a href="#" class="fa fa-trash"></a></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>

			<?php
			echo form_open("usuarios/novo");
			echo form_label("Nome", "nome");
			echo form_input(array(
				"name" => "nome",
				"id" => "nome",
				"class" => "form-control",
				"maxlength" => "255"
			));

			echo form_label("Email", "email");
			echo form_input(array(
				"name" => "email",
				"id" => "email",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_label("Senha", "senha");
			echo form_password(array(
				"name" => "senha",
				"id" => "senha",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_button(array(
				"class" => "btn btn-primary",
				"content" => "Cadastrar",
				"type" => "submit"
			));
			echo form_close();
			?>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>