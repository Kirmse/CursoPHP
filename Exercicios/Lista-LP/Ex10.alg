algoritmo "semnome"
// 10) O custo de um carro novo ao consumidor é a soma do custo de fábrica com a porcentagem do
// distribuidor e dos impostos (aplicados ao custo de fábrica). Supondo que o percentual do distribuidor
// seja de 28% e os impostos de 45%, escrever um algoritmo para ler o custo de fábrica de um carro,
// calcular e escrever o custo final ao consumidor.
var
car, dis, imp : real

inicio

// carro de fábrica = distribuidor + impostos
// distribuidor é de 28%
// impostos é de 45%
// fábrica (exemplo) 10.000
// 10.000 + 28% + 45% = preço do carro

escreva("valor de fábrica do carro: ")
leia(car)
escreval("")

dis := 28 * car
dis := dis / 100


imp := 45 * car
imp := imp / 100

car := car + imp + dis

escreval("Valor do carro na concessionária é de: ",car)


fimalgoritmo
