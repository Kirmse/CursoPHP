algoritmo "semnome"
// Escreva um algoritmo para ler o sal�rio mensal atual de um funcion�rio e o percentual de reajuste.
// Calcular e escrever o valor do novo sal�rio.
var
salario, reajuste, total : real

inicio
escreva("Valor do sal�rio mensal: ")
leia(salario)

escreva("Valor, em porcentagem, do reajuste: ")
leia(reajuste)

//2.000 = sal�rio
//7% = reajuste
// 7 * 2000
// 14.000
// 14.000/100 = 140
// total = 2.140

total := reajuste * salario
total := total / 100
total := total + salario

escreval("")
escreva("O sal�rio total � de: ",total)
escreval("")
escreval("")
escreval("")

fimalgoritmo
