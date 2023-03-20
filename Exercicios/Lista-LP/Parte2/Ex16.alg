algoritmo "semnome"

var
qnt, maca : real

inicio
escreval("Quantas maçãs vc quer comprar?")
escreva("quantidade: ")
leia(qnt)
escreval("")

se (qnt >= 12) entao
   maca := 1 * qnt
   escreval("preço total é de:",maca)
senao
   maca := 1.30 * qnt
   escreval("preço total é de:",maca)
fimse




fimalgoritmo
