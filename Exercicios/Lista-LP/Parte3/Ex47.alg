algoritmo "semnome"
//Escreva um algoritmo para ler 2 valores e se o segundo valor informado for ZERO, deve ser lido
//um novo valor, ou seja, para o segundo valor não pode ser aceito o valor zero e imprimir o resultado
//da divisão do primeiro valor lido pelo segundo valor lido. (utilizar a estrutura REPITA)

var

v1, v2 : inteiro


inicio

escreva("Digite o valor 1: ")
leia(v1)


enquanto (v2 = 0) faca

   escreva("Digite o valor 2: ")
   leia(v2)

   se (v2 = 0) entao
      escreval("Valor inválido!")
   fimse

fimenquanto

escreval("resultado: ",(v1/v2))


fimalgoritmo
