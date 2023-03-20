algoritmo "semnome"
// Escreva um algoritmo para ler o salário mensal atual de um funcionário e o percentual de reajuste.
// Calcular e escrever o valor do novo salário.
var
salario, reajuste, total : real

inicio
escreva("Valor do salário mensal: ")
leia(salario)

escreva("Valor, em porcentagem, do reajuste: ")
leia(reajuste)

//2.000 = salário
//7% = reajuste
// 7 * 2000
// 14.000
// 14.000/100 = 140
// total = 2.140

total := reajuste * salario
total := total / 100
total := total + salario

escreval("")
escreva("O salário total é de: ",total)
escreval("")
escreval("")
escreval("")

fimalgoritmo
