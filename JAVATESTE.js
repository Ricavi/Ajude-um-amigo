var foco = "";
var msgstatus = "";


/*************************************************
	Funï¿½ï¿½o que permitir digitar numeros 
**************************************************/
function EntradaNumerico(evt) {

    var key_code = evt.keyCode  ? evt.keyCode  :
                   evt.charCode ? evt.charCode :
                   evt.which    ? evt.which    : void 0;

                   
        // Habilita teclas <DEL>, <TAB>, <ENTER>, <ESC> e <BACKSPACE>
        if (key_code == 8  ||  key_code == 9  ||  key_code == 13  ||  key_code == 27  ||  key_code == 46) {
            return true;
        }
        // Habilita teclas <HOME>, <END>, mais as quatros setas de navegaï¿½ï¿½o (cima, baixo, direta, esquerda)
        else if ((key_code >= 35)  &&  (key_code <= 40)) {
            return true
        }
        // Habilita nï¿½meros de 0 a 9
        // 48 a 57 sï¿½o os cï¿½digos para nï¿½meros
        else if ((key_code >= 48)  &&  (key_code <= 57)) {
            return true
        }
        return false;
}


function Alertar(strMsg) {
    window.alert(strMsg)
}

function aviso (campo, msg)
{   
    alert(msg);
    campo.focus();
    campo.select();
    return false;
}


//-------------------------------
function isDigit (c)
{     
   return ((c >= "0") && (c <= "9"))
}  

//-------------------------------
function isEmpty(s)
{
   return ((s == null) || (s.length == 0))
}

//Verifica se CPF ï¿½ vï¿½lido
function TestaCPF(strCPF) {
    var Soma;
    var Resto;
    Soma = 0;   
    //strCPF  = RetiraCaracteresInvalidos(strCPF,11);
    if (strCPF == "00000000000")
	return false;
    for (i=1; i<=9; i++)
	Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i); 
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11)) 
	Resto = 0;
    if (Resto != parseInt(strCPF.substring(9, 10)) )
	return false;
	Soma = 0;
    for (i = 1; i <= 10; i++)
       Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
    Resto = (Soma * 10) % 11;
    if ((Resto == 10) || (Resto == 11)) 
	Resto = 0;
    if (Resto != parseInt(strCPF.substring(10, 11) ) )
        return false;
    return true;
}

// Recupera uma referï¿½ncia ao objeto com o id especificado
// Funciona primariamente com o DOM, mas tambï¿½m aceita document.all
function pegaObj( id ) {
	if ( typeof(document.getElementById) != 'undefined' )
		return document.getElementById( id );
	else if ( document.all ) {
		return document.all( id );
	}
}


// Funï¿½ï¿½o chamada no evento onKeyDown para evitar que caracteres nï¿½o numï¿½ricos
// sejam inseridos no campo indicado.
// Parï¿½metros:
// input: referï¿½ncia para o objeto <input> que recebeu o evento
// e: o objeto event
function ajustar_numero(input, e) {

	var k;

	// e.which: explorer, e.keyCode: mozilla
	if (e && e.which)
		k = e.which;
	else
		k = e.keyCode;
				
	// No IE nï¿½o essa funï¿½ï¿½o nï¿½o consegue cancelar tabs, BS, DEL, etc, mas no mozilla sim,
	// por isso precisamos deixar passar as teclas de ediï¿½ï¿½o.
	// Somente aceita os caracteres 0-9, tab, enter, del e BS
	if ( ((k<48)||(k>57)) && k != 8 && k != 9 && k != 127 && k != 13 && !((k>34)&&(k<41)) && k != 46) {
        if(e.ctrlKey && (k == 118 ||k == 99)) {
            return true;
        }	
        else
        {
            e.returnValue = false;
		    return false;
        }	
	}

	return true;
}


// Funï¿½ï¿½o especï¿½fica do IE, que busca as informaï¿½ï¿½es do evento
// e repassa para as rotina em si "ajustar_numero" e "pular_campo"
function ajustar_numeroie() {

	e = window.event;
	input = pegaObj( e.srcElement.id );

	return ajustar_numero( input, e );
	
}

function pular_campoie() {

	e = window.event;
	input = pegaObj( e.srcElement.id );

	return pular_campo( input, e );
	
}

// Funï¿½ï¿½o que registra os inputs que precisam ser numï¿½ricos e que tï¿½m
// um tamanho fixo que, quando alcanï¿½ado, muda para o prï¿½ximo campo.
// Parï¿½metros:
// id: id do <input> que deve capturar os eventos de tecla
// tamanhoMaximo: o nï¿½mero de dï¿½gitos mï¿½ximo para este campo
// proximoId: id do prï¿½ximo campo no formulï¿½rio para o qual pularemos quando
//            o nï¿½mero mï¿½ximo de dï¿½gitos for alcanï¿½ado.
var inputList = new Array();
function registraInput( id, tamanhoMaximo, proximoId ) {

	inputList[id] = new Array();
	inputList[id]['tamanho'] = tamanhoMaximo;
	inputList[id]['proximo'] = proximoId;

	// No IE nï¿½o funciona setar o atributo via DOM, e o evento nï¿½o vem como parï¿½metro
	// portanto precisamos setar uma funï¿½ï¿½o diferente para ele
	pegaObj(id).onkeyup = pular_campoie;
	pegaObj(id).onkeypress = ajustar_numeroie;
	
	// O mozilla tambï¿½m aceita a linha anterior, mas aqui nï¿½s passamos por cima e
	// chamamos a funï¿½ï¿½o diretamente
	pegaObj(id).setAttribute( 'onKeyUp', 'pular_campo(this, event)');
	pegaObj(id).setAttribute( 'onKeyPress', 'return ajustar_numero(this,event)');

}


function validarCPF(cpf) {
	var form = pegaObj("theForm");
	if (pegaObj("id_cpf").value == "") {
	    alert("Por favor, preencha o cpf a ser consultado");	
		pegaObj("id_cpf").focus();
	    return;
	}
}

function RemoveMask(xElement) {
    var strValue = pegaObj(xElement).value;

	strValue = strValue.replace(".", "");
	strValue = strValue.replace(".", "");
	strValue = strValue.replace("-", "");
	strValue = strValue.replace("/", "");
	strValue = strValue.replace("/", "");

    pegaObj(xElement).value = strValue;
}

function FG_FormatarCPF(xElement) {

	var strValor = pegaObj(xElement).value;
    var strTemp;

    strTemp = strValor.replace(".", "");
    strTemp = strTemp.replace(".", "");
    strTemp = strTemp.replace(".", "");
    strTemp = strTemp.replace("-", "");
    strTemp = strTemp.replace("-", "");

    strValor = strTemp

    if (strValor.length > 9) {
        strValor = strValor.substr(0, 3) + '.' + strValor.substr(3, 3) + '.' + strValor.substr(6, 3) + '-' + strValor.substr(9, 2);
    }
    else if (strValor.length > 6) {
        strValor = strValor.substr(0, 3) + '.' + strValor.substr(3, 3) + '.' + strValor.substr(6, 3);
    }
    else if (strValor.length > 3) {
        strValor = strValor.substr(0, 3) + '.' + strValor.substr(3, 3);
    }

   pegaObj(xElement).value = strValor;
}

function ValidarDados(xTipoSubmit) {
    var cpf = pegaObj("txtCPF").value;
    cpf = cpf.replace(/[^0-9]/g, ''); //normalizar CPF antes de fazer validaï¿½ï¿½o, removendo campos nï¿½o numï¿½ricos

	if (cpf.length  != 11) {
		alert("Por favor, preencha o CPF a ser consultado somente com os 11 nï¿½meros.");
        pegaObj("txtCPF").focus();
        return false;
	}
               
    return true;
}

