<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
	<head>
		<title>Formulário Novo Usuário</title>
                <meta charset="UTF-8">
		
                <form onsubmi="return valida(this);">
    <script>
        function valida(form){  
            if (form.nome.value=="nome,sobrenome"){
                alert("Preeencha o nome e sobrenome Corretamente.");
                form.nome.focus();
                return false;
            }
            var filtro_mail=/^.+@+/
            if (!filtro_mail.test(form.email.value)||form.email.value==""){
                alert("Preencha o e-mail coretamente.");
                form.email.focus();
                return false;
            }
        function  IsNum(v)
        {
            var ValidChars="0123456789";
            var  IsNumber=true;
            var  char;
            
             for (i = 0; i < v.length && IsNumber == true; i++) 
                {
                    char=v.charAt(i);
                    if (validChars.indexOf(char)==-1)
                        {
                             IsNumber=false;
                        }
                }
        return  IsNumber;
    }
    
    if (form.idade.value=="Data Nascimento"||! IsNum(form.idade.value)){
        alert("Preencha a idade corretamente.");
        form.idade.focus();
        return false;
    }
    if (form.enderco.value=="endereço"||form.endereco.value.length<17){
        alert("Preencha o enderço corretamnete.");
        form.endereco.focus();
        return false;
    }
    if(form.celular,value=="celular"){
        alert("Preencha o celular corretamente.");
        form.celular.focus();
        return false;
    }
    
    if (form.senha.value=="senha"||form.value.length<8){
        alert("Preencha a senha coretamente.");
        form.senha.focus();
        return false;
    }
    if (form.confirme_senha.value=="Confirme_senha"||form.confirme_senha.value.length<8){
        alert("Preenche a confirmação de senha corretamente.");
        form.confirme_senha.focus();
        return false;
    }
    if (form.senha.value!=form.confirme_senha.value){
        alert("A senha e a configuração tem que ser iguais!.");
        form.confirme_senha.focus();
        return false;
    }
    if (form.sexo[0].checked==false&&form.sexo[1].checked==false){
       alert("Selecione o seu sexo.");
       return false;
    }
        }
        
    function Celular(f) {
if (f.celular.value.length<9 || f.celular.value.length>10) {
alert("Preencha o telefone corretamente.");
f.celular.focus();
}else{
ddd = f.celular.value.substring(0,2);
if (f.celular.value.length==9) {
part1 = f.celular.value.substring(2,5);
part2 = f.celular.value.substring(5,9);
}
if (f.celular.value.length==10) {
part1 = f.celular.value.substring(2,6);
part2 = f.celular.value.substring(6,10);
}
f.celular.value = "("+ddd+") "+part1+"-"+part2
}

    }
        
 </script>
</form>


                
                
                
 </head>
<body>
    <h1>Cadastre-se</h1>
    <form method="POST" action="login.php">
        <label>  Nome: </label> <input type="text" name="nome" required> <br/>
       <label> Sobrenome:</label> <input type="text" name="nome_sobrenome" > <br/>
        <label> Data de Nascimento: <input type="date" name="data_nascimento" required value="dd/mm/aaaa" maxlength="10" onfocus="if (this.value=='dd/mm/aaaa'){this.value='';}" onblur="if(this.value==''){this.value='dd/mm/aaaa';}">(Formato:dd/mm/aaaa)<br>
        <label> Sexo: </label> <input type="radio" name="sexo">Feminino<input type="radio" name="sexo">Masculino<br/>
        <label>Celular:</label> <input type="text" name="celular" maxlength="10">(formato:DDD+CELULAR:11222223333) <br/>
        <label> Endereço: </label> <input type="text" name="endereço" required> <br/>
        <label> E-mail: </label> <input type="email" name="email" required> <br/>
        <label> Confirme E-mail: </label> <input type="email" name="confirme_email" required> <br/>   
        <label> Senha: <label/> <input type="password" name="senha" required>(Mínimo: 8 caracteres) <br/>
        <label> Confirme senha: <label/> <input type="password" name="confirme_senha" required> <br/> 
            <label> Aceito os termos e condições de uso:</label>
		<input type="checkbox" name="termos" id=<a href="termosdeuso.php" required></a><br />
        <input type="submit"  value="Cadastrar Dados"/>  
              
    </form>
</body>
</html>

