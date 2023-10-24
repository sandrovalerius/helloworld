function editar(id,txt_tarefa,rt) {
	// alert("Estamos aqui!");

	//criar um form de edição
	let form = document.createElement('form')
	form.action = 'index.php?ac=ta&rt='+rt
	form.method = 'post'
	form.className = 'row'

	// criar um input para entrada do texto
	let inputTarefa = document.createElement('input')
	inputTarefa.type = 'text'
	inputTarefa.name = 'tarefa'
	inputTarefa.className = 'col-9 form-control'
	inputTarefa.value = txt_tarefa

	// criar um input hidden para guardar o id da tarefa
	let inputId = document.createElement('input')
	inputId.type = 'hidden'
	inputId.name = 'id'
	inputId.value = id

	// criar um buttom para envio de form
	let button = document.createElement('button') 
	button.type = 'submit'
	button.className = 'col-3 btn btn-info'
	button.innerHTML = 'Atualizar'

	// incluir inputTarefa no form
	form.appendChild(inputTarefa)

	// incluir inputTarefa no form
	form.appendChild(inputId)

	// incluir o buuton no form
	form.appendChild(button) 

	// teste
	//console.log(form)
	//alert(id)

	//selecionar a div da tarefa
	let tarefa = document.getElementById('tarefa_'+id)

	//limpar o texto da tarefa para inclusão do form 
	tarefa.innerHTML = ''

	//incluir form na página 
	tarefa.insertBefore(form, tarefa[0])
}

function remover(id,rt) {
	location.href = 'index.php?ac=tr&rt='+rt+'&id='+id
}

function checkTarefa(id,rt) {
	location.href = 'index.php?ac=ts&rt='+rt+'&id='+id
}