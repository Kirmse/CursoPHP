algoritmo "semnome"
// 10) O custo de um carro novo ao consumidor � a soma do custo de f�brica com a porcentagem do
// distribuidor e dos impostos (aplicados ao custo de f�brica). Supondo que o percentual do distribuidor
// seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de f�brica de um carro,
// calcular e escrever o custo final ao consumidor.
var
car, dis, imp : real

inicio

// carro de f�brica = distribuidor + impostos
// distribuidor � de 28%
// impostos � de 45%
// f�brica (exemplo) 10.000
// 10.000 + 28% + 45% = pre�o do carro

escreva("valor de f�brica do carro: ")
leia(car)
escreval("")

dis := 28 * car
dis := dis / 100


imp := 45 * car
imp := imp / 100

car := car + imp + dis

escreval("Valor do carro na concession�ria � de: ",car)


fimalgoritmo
