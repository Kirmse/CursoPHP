algoritmo "semnome"

var
anos, meses, dias, idadeEmDias : inteiro

inicio
escreval("veja quantos dias de exist�ncia vc possui!")
escreva("Em que ano nasceu?")
leia(anos)
escreva("Em que m�s nasceu?")
leia(meses)
escreva("Em que dia nasceu?")
leia(dias)

idadeEmDias := ((anos - 2023)* -364) + (meses * 30) + dias

escreval("")
escreva("A idade em dias �: ",idadeEmDias)
escreval("")
escreval("(validade do programa: 31/12/2023)")
//usei o chat gpt como base para fazer isso.
fimalgoritmo

